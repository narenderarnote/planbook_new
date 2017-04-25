<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB; // used for queries like DB::table('table_name')->get();
class ClassSchedule extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'class_schedule';
	
	//public $timestamps = false;


	/*public function orderProduct(){


		return $this->hasMany('App\OrderProduct');
	}*/

    public function user(){


        return $this->belongsTo('App\User');
    }

   
}
