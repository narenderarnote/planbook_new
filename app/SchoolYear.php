<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB; // used for queries like DB::table('table_name')->get();
class SchoolYear extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'school_years';
	
	//public $timestamps = false;


	

    public function user(){


        return $this->belongsTo('App\User');
    }

    

   
}
