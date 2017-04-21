<?php

namespace App\Http\Controllers\teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use App\User;
use App\UserSchoolYear;
use App\UserLessonSectionLayout;
use App\UserClass;
use Facades\App\Helpers\Common;

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

class SignupStepController extends Controller
{

     /**
     * Declare $data array to pass data to view 
     */
    protected $data = [];

    public function step(Request $request)
    {

        $user = Auth::user();

    	if($request->isMethod('POST'))
    	{

            //echo"<pre>";print_r($request->all());die;

            $rules = array(
                'first_name'   => 'required',
                'last_name'   => 'required',
                
            );

            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {

                return redirect()->back()->withInput()->withErrors($validator->errors());
                
            } else {

                $signup_step_completed = 1;

                $user->first_name = $request->get('first_name');
                $user->last_name = $request->get('last_name');
                $user->display_name = $request->get('display_name');
                $user->school_district = $request->get('school_district');
                $user->school_name = $request->get('school_name');
                $user->promotional_code = $request->get('promotional_code');
                $user->signup_step_completed = $signup_step_completed;
               

                if($user->save()){

                  
                    return redirect()->route("teacher.step2");

                }else{

                    
                    return redirect()->back();

                }

            } 



    		
    	}
    	else
    	{
    		return view('teacher.signUpStep.step');	
    	}
    	
    }

    public function step2(Request $request)
    {   

        
        $userSchoolYear = auth()->user()->userSchoolYear()->first();

        if(!$userSchoolYear){

            $userSchoolYear = new UserSchoolYear;

        }

        $this->data['userSchoolYear'] = $userSchoolYear;


    	if($request->isMethod('POST'))
    	{


            //echo"<pre>";print_r($request->all());die;

            $rules = array(
                'year_name'   => 'required',
                'class_schedule'   => 'required',
                
            );

            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {

                return redirect()->back()->withInput()->withErrors($validator->errors());
                
            } else {

                $signup_step_completed = 2;

                $user = Auth::user();
                $user->signup_step_completed = $signup_step_completed;
                $user->save();

                
                $userSchoolYear->user_id = Auth::user()->id;
                $userSchoolYear->year_name = $request->get('year_name');
                $userSchoolYear->first_day = $request->get('first_day');
                $userSchoolYear->last_day = $request->get('last_day');
                $userSchoolYear->class_schedule = $request->get('class_schedule');
                $userSchoolYear->cycle_days = $request->get('cycle_days');
               

                if($userSchoolYear->save()){

                  
                   return  redirect()->route("teacher.step3");

                }else{

                    
                    return redirect()->back();

                }

            } 

    		
    	}
    	else
    	{
            return view('teacher.signUpStep.step2', $this->data);
    	}
    }

    public function step3(Request $request)
    {


    	if($request->isMethod('POST'))
    	{
    		return  redirect()->route("teacher.step2");
    	}
    	else
    	{
    		return view('teacher.signUpStep.step3');	
    	}
    }


    public function step4(Request $request, $LessonSectionLayout)
    {
        //print_r($LessonSectionLayout);die;
        
        /* Add User lesson section layout*/
        $userLessonSectionLayout = auth()->user()->userLessonSectionLayout()->first();
        if(!$userLessonSectionLayout){
            $userLessonSectionLayout = new UserLessonSectionLayout;
        }

        $lessonLayout =  Common::LessonLayout($LessonSectionLayout);

        $userLessonSectionLayout->user_id = Auth::user()->id;
        $userLessonSectionLayout->layout_name = $lessonLayout['layout_name'];
        $userLessonSectionLayout->lesson_sections = $lessonLayout['lesson_sections'] ;
        $userLessonSectionLayout->save();

        $signup_step_completed = 3;

        $user = Auth::user();
        $user->signup_step_completed = $signup_step_completed;
        $user->save();

      
         /* Add User Class Information*/

         $userClasses = auth()->user()->userClass()->get();

        if(!$userClasses){

            $userClasses = new UserClass;
        }
        $this->data['userClasses'] = $userClasses;
       
        if($request->isMethod('POST'))
        {

            $deletedUserClasses = UserClass::where('user_id', Auth::id())->delete();

            $classes = $request->get('classes');

            if(!empty($classes)){
                foreach ($classes as $class) {
                    $userClass = new UserClass;
                    $userClass->user_id = Auth::id();
                    $userClass->class_name = $class['class_name'];
                    $userClass->color = $class['class_color'];
                    $userClass->save();
                }
            }

            $signup_step_completed = 4;

            $user = Auth::user();
            $user->signup_step_completed = $signup_step_completed;
            $user->save();

               

            return  redirect()->route("teacher.step5");
          

        }
        else
        {
           return view('teacher.signUpStep.step4',$this->data);   
        }

    	
    }

    public function step5(Request $request)
    {

        $signup_step_completed = 5;

        $user = Auth::user();
        $user->signup_step_completed = $signup_step_completed;
        $user->save();

    	/*if($request->isMethod('POST'))
    	{*/
    		return  redirect()->route("teacher.dashboard");
    	/*}
    	else
    	{
    		return view('teacher.signUpStep.step5');	
    	}*/
    }


}
