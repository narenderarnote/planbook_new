<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB; // used for queries like DB::table('table_name')->get();
class UserSchoolYear extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'user_school_years';
	
	//public $timestamps = false;


	

    public function user(){


        return $this->belongsTo('App\User');
    }

    

   
}
