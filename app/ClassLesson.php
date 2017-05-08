<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB; // used for queries like DB::table('table_name')->get();
class UserClass extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'class_lessons';
	
	//public $timestamps = false;


	

    public function class(){


        return $this->belongsTo('App\UserClass');
    }

    

   
}
