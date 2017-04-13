<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{


	/**
     * $data array pass data to view 
     */
    protected $data = [];

	public function __construct(){

		
		
	}
   


   /**
	 * Dashboard index
	 */
	public function index()
	{

		//echo"Hi  there!";die;


		return view('teacher.dashboard.index', $this->data);

		//return redirect()->to('/');
	}

}
