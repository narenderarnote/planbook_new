<?php

namespace App\Http\Controllers\teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SignupStepController extends Controller
{

    public function step(Request $request)
    {
    	if($request->isMethod('POST'))
    	{
    		return  redirect()->route("teacher.step2");
    	}
    	else
    	{
    		return view('teacher.signup.step');	
    	}
    	
    }

    public function step2(Request $request)
    {
    	if($request->isMethod('POST'))
    	{
    		return  redirect()->route("teacher.step3");
    	}
    	else
    	{
    		return view('teacher.signup.step2');	
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
    		return view('teacher.signup.step3');	
    	}
    }

    public function step4(Request $request, $lesson_layout)
    {
    	if($request->isMethod('POST'))
    	{
    		return  redirect()->route("teacher.step5");
    	}
    	else
    	{
    		return view('teacher.signup.step4');	
    	}
    }

    public function step5(Request $request)
    {
    	if($request->isMethod('POST'))
    	{
    		return  redirect()->route("teacher.dashboard");
    	}
    	else
    	{
    		return view('teacher.signup.step5');	
    	}
    }


}
