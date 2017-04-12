<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\SignUp;
use App\User;
//use App\UserProfile;
use Auth;
use Hash;
use Illuminate\Http\Request;
use Mail;
use Exception;
use Redirect;
use Response;

use Validator;
use Session;

//use Illuminate\Support\Facades\Auth;

class GuestController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the agency dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('welcome');
    }

    public function register(Request $request)
    {

       // echo"xsxs";die;


        $response = array();

        $validation = array();

        $user = new User();

        switch ($request['user_role']) {

            case 2:

                //Registed as a teacher

                $user->email = $request['email'];

                $user->save();


                $user->roles()->attach($request['user_role']);

                //Auth::login($user);

                $response['success'] = 'TRUE';
                $response['success_redirect_url'] = '/';


                break;
            case 3:

                //Registed as a Student


                $user->email = $request['email'];

                $user->save();


                $user->roles()->attach($request['user_role']);

                
                //Auth::login($user);

                $response['success'] = 'TRUE';
                $response['success_redirect_url'] = '/';


                break;
           

            default:
        }


        return Response::json($response);

    }

   
   
    public function login(Request $request)
    {

        $response = array();

        if ($request->isMethod('post')) {

            $validation['email'] = 'required|email';
            $validation['password'] = 'required';


            $validator = Validator::make($request->all(), $validation);

            if ($validator->fails()) {
                $response['error'] = $validator->errors()->all();
                if(!$request->ajax())
                    return redirect()->back()->withErrors($response['error']);
            } else {
                //authenticate user

                if (Auth::attempt(['email' => $request['email'], 'password' => $request['password'], 'is_verified' => 1], $request->has('remember'))) {

                    $user = Auth::user();

                    //$user = User::findOrFail($user->id);
                    $roles = $user->roles;

                    $logged_in_user_role = "";

                    foreach ($roles as $role) {

                        $logged_in_user_role = $role->id;
                    }

                    //print_r($logged_in_user_role);die;


                    switch ($logged_in_user_role) {

                        case 1:

                            $response['success_redirect_url'] = '/dashboard';
                            $response['success'] = 'TRUE';

                            break;
                        case 2:

                            $response['success_redirect_url'] = '/dashboard';
                            $response['success'] = 'TRUE';


                            break;
                        case 3:

                            if ($user->gender == "F") {

                                $response['success_redirect_url'] = '/dashboard';
                                $response['success'] = true;


                            } elseif ($user->gender == "M") {

                                $response['success_redirect_url'] = '/dashboard';
                                $response['success'] = true;

                            }


                            break;
                        case 4:

                            $response['success_redirect_url'] = '/';
                            $response['success'] = true;
                            break;
                    }

                } else {

                    $response['error'] = ['These credentials do not match our records.!'];

                }


            }

            if($request->ajax()){
                return Response::json($response);
            }else{
                return redirect()->intended("/");
            }


        }

    }

    /**
     * to log user out from system
     * @return [response]
     *
     */
    public function logout()
    {

        Auth::logout();

        return Redirect('/');

        //return Redirect::to('/');

    }

    public function emailVerify($token){

        $where = array();

        //$where['email'] = $email;
        $where['email_verify_token'] = $token;

        $user = User::where($where)->first();

        if(empty($user)){
            Session::flash('alert_error_message',"Token not matched. Your email not verified!!");
        }else{
            $user->is_verified = 1;
            $user->email_verify_token = null;
            $user->save();
            Session::flash('alert_success_message',"Your email verified successfully!!");
        }
        return redirect()->to('/');
    }
}