<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
}
