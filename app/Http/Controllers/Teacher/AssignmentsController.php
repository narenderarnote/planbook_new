<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Facades\App\Helpers\Common;

use App\UserClass;
use App\SchoolYear;
use App\Unit;
use App\Assignment;


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

class AssignmentsController extends Controller
{
    /**
    * $data array pass data to view 
    */
    protected $data = [];

	public function __construct(){

		
		
	}

   /**
	 * Assignment List
	 */
	public function index()
	{
		$assignments = Assignment::where('user_id',Auth::user()->id)->get();
	
		$this->data['assignments'] = $assignments;

        //echo"<pre>";print_r($assignments);die;

		return view('teacher.assignments.index', $this->data);

		//return redirect()->to('/');
	}

	/**
	 * Get add Assignment view
	 */
	public function getAddAssignment()
	{
	
		// get user class
        
        $this->data['userClasses'] = UserClass::where('year_id',Auth::user()->current_selected_year)->where('user_id',Auth::user()->id)->with('schoolYear')->get();
        $this->data['units'] = Unit::where('user_id',Auth::user()->id)->get();

		//echo"<pre>";print_r( $this->data['userClass']);die;


		return view('teacher.assignments.add', $this->data);

	}

	/**
	 * Post add Assignment view
	 */

	public function postAddAssignment(Request $request)
	{

		$response = array();

        $Assignment = new Assignment();


        if($request->isMethod('post')) {

            //echo"<pre>";print_r($request->all());die;


            $validation['class'] = 'required';
            $validation['unit'] = 'required';
            $validation['title'] = 'required';
            $validation['total_points'] = 'numeric|max:100';
            

            $validator = Validator::make($request->all(), $validation);

            if($validator->fails()) {

                $response['error'] = $validator->errors()->all();

            }else{

                //echo"<pre>";print_r($request->all());die;

            	$format = 'd/m/Y';

                $Assignment->user_id = Auth::id();
                $Assignment->class_id = $request['class'];
                $Assignment->starts_on = \Carbon\Carbon::createFromFormat($format, $request['starts_on']);
                $Assignment->ends_on = \Carbon\Carbon::createFromFormat($format,$request['ends_on']);
                $Assignment->unit_id = $request['unit'];
                $Assignment->title = $request['title'];
                $Assignment->description = $request['description'];
                $Assignment->total_points = $request['total_points'];


                if($Assignment->save()){

                    $response['success'] = 'TRUE';

                }

            }

        }

        return response()->json($response);

	}


	/**
	 * Get Assignment edit view
	 */
	public function getEditAssignment($assignment_id)
	{

       
        // get user units
        $this->data['units'] = Unit::where('user_id',Auth::user()->id)->get();
        
        // get user class

        $this->data['userClasses'] = UserClass::where('year_id',Auth::user()->current_selected_year)->where('user_id',Auth::user()->id)->with('schoolYear')->get();

		// get Assignment

		$this->data['assignment'] = Assignment::where('id', $assignment_id)->with('userClass')->with('unit')->first();

		//echo"<pre>";print_r($this->data['assignment']);die;

		return view('teacher.assignments.edit', $this->data);

	}

	/**
	 * Post Edit assignment
	 */

	public function postEditAssignment(Request $request, $assignment_id)
	{

		$response = array();

        $Assignment = Assignment::where('id', $assignment_id)->first();


        if($request->isMethod('post')) {

            //echo"<pre>";print_r($request->all());die;



            $rules = array(
                'class'  => 'required',
                'unit'   => 'required',
                'title'  => 'required',
                'total_points'  => 'numeric|max:100',
                
            );

            $validator = Validator::make($request->all(), $rules);

            if($validator->fails()) {

                $response['error'] = $validator->errors()->all();

            }else{

            	$format = 'd/m/Y';
               
                $Assignment->user_id = Auth::id();
                $Assignment->class_id = $request['class'];
                $Assignment->starts_on = \Carbon\Carbon::createFromFormat($format, $request['starts_on']);
                $Assignment->ends_on = \Carbon\Carbon::createFromFormat($format,$request['ends_on']);
                $Assignment->unit_id = $request['unit'];
                $Assignment->title = $request['title'];
                $Assignment->description = $request['description'];
                $Assignment->total_points = $request['total_points'];


                if($Assignment->save()){

                    $response['success'] = 'TRUE';

                }

            }

        }

        return response()->json($response);

	}








}
