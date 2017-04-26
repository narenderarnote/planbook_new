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
    protected $table = 'user_classes';
	
	//public $timestamps = false;


	

    public function user(){


        return $this->belongsTo('App\User');
    }

    public function classSchedule(){


        return $this->hasMany('App\ClassSchedule','class_id');
        //return $this->hasMany(Paper::class,'student_id');
    }

    

   
}
