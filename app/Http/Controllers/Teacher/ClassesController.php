<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\UserClasses;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Paginator;
use Session;
use Input;
use Validator;
use Hash;
use DB;
use Redirect;
use View;
use Mail;
use Exception;

class ClassesController extends Controller
{
    /**
     * $data array pass data to view 
     */
    protected $data = [];

	public function __construct(){

		
		
	}

   /**
	 * Classes List
	 */
	public function index()
	{

		//echo"Hi  there!";die;


		return view('teacher.classes.index', $this->data);

		//return redirect()->to('/');
	}

	/**
	 * Get add Class view
	 */
	public function getAddClass()
	{

		//echo"Hi  there!";die;


		return view('teacher.classes.add', $this->data);

		//return redirect()->to('/');
	}

	/**
	 * Post add Class view
	 */

	public function postAddClass(Request $request)
	{

		$response = array();

        $class = new Classes();


        if($request->isMethod('post')) {

            //echo"<pre>";print_r($request->all());die;


            $validation['class_name'] = 'required';

            $validator = Validator::make($request->all(), $validation);

            if($validator->fails()) {

                $response['error'] = $validator->errors()->all();

            }else{


                $class->class_name = $request['class_name'];
                

                if($class->save()){

                    $response['success'] = 'TRUE';

                }


                

            }


        }


        return response()->json($response);


	}








}
