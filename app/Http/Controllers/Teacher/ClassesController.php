<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Facades\App\Helpers\Common;

use App\UserClass;
use App\SchoolYear;


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
		$user_selected_school_year = SchoolYear::where('id',Auth::user()->current_selected_year)->where('user_id',Auth::user()->id)->first();
		$this->data['user_selected_school_year'] = $user_selected_school_year;
		$this->data['user_classes'] = UserClass::whereUserId(Auth::id())->get();

		return view('teacher.classes.index', $this->data);

		//return redirect()->to('/');
	}

	/**
	 * Get add Class view
	 */
	public function getAddClass()
	{
	
		// get user classes schedule setting

		$user_selected_school_year = SchoolYear::where('id',Auth::user()->current_selected_year)->where('user_id',Auth::user()->id)->first();

		$this->data['user_selected_school_year'] = $user_selected_school_year;

		$this->data['DefaultClassesSchedules'] = Common::ClassesScheduled("one_week");

		//echo"<pre>";print_r($this->data['DefaultClassesSchedules']);die;


		return view('teacher.classes.add', $this->data);

	}

	/**
	 * Post add Class view
	 */

	public function postAddClass(Request $request)
	{

		$response = array();

        $UserClass = new UserClass();


        if($request->isMethod('post')) {

            //echo"<pre>";print_r($request->all());die;


            $validation['class_name'] = 'required';

            $validator = Validator::make($request->all(), $validation);

            if($validator->fails()) {

                $response['error'] = $validator->errors()->all();

            }else{

            	$format = 'd/m/Y';

                $UserClass->user_id = Auth::id();
                $UserClass->year_id = Auth::user()->current_selected_year;
                $UserClass->class_name = $request['class_name'];
                $UserClass->start_date = \Carbon\Carbon::createFromFormat($format, $request['start_date']);
                $UserClass->end_date = \Carbon\Carbon::createFromFormat($format,$request['end_date']);
                $UserClass->class_color = $request['class_color'];
                $UserClass->collaborate = $request['collaborate'];

                $class_schedule = $request['class_schedule'];
                $UserClass->class_schedule = $class_schedule;

                if($UserClass->save()){

                    $response['success'] = 'TRUE';

                }

            }

        }

        return response()->json($response);

	}


	/**
	 * Get edit Class view
	 */
	public function getEditClass($class_id)
	{
	
		// get user class

		$this->data['userClass'] = UserClass::where('id', $class_id)->first();
		

		//echo"<pre>";print_r($this->data['userClass']);die;

		return view('teacher.classes.edit', $this->data);

	}

	/**
	 * Post Edit Class
	 */

	public function postEditClass(Request $request, $class_id)
	{

		$response = array();

        $UserClass = UserClass::where('id', $class_id)->first();


        if($request->isMethod('post')) {

            //echo"<pre>";print_r($request->all());die;


            $validation['class_name'] = 'required';


            $rules = array(
                'class_name'   => 'required',
                'start_date'   => 'required',
                'end_date'   => 'required',
                
            );

            $validator = Validator::make($request->all(), $rules);

            if($validator->fails()) {

                $response['error'] = $validator->errors()->all();

            }else{

            	$format = 'd/m/Y';
               
                $UserClass->class_name = $request['class_name'];
                $UserClass->start_date = \Carbon\Carbon::createFromFormat($format, $request['start_date']);
                $UserClass->end_date = \Carbon\Carbon::createFromFormat($format,$request['end_date']);
                $UserClass->class_color = $request['class_color'];
                $UserClass->collaborate = $request['collaborate'];

                $class_schedule = $request['class_schedule'];
                $UserClass->class_schedule = $class_schedule;

                if($UserClass->save()){

                    $response['success'] = 'TRUE';

                }

            }

        }

        return response()->json($response);

	}








}
