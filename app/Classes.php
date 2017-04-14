<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB; // used for queries like DB::table('table_name')->get();
class Classes extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'classes';
	
	//public $timestamps = false;


	/*public function orderProduct(){


		return $this->hasMany('App\OrderProduct');
	}*/

    public function user(){


        return $this->belongsTo('App\User');
    }

   
}
