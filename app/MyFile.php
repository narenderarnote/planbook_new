<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB; // used for queries like DB::table('table_name')->get();
class MyFile extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'myfiles';
	
	//public $timestamps = false;


	

    public function user(){


        return $this->belongsTo('App\User');
    }

   

   
}
