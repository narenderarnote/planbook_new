<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB; // used for queries like DB::table('table_name')->get();
class UserLessonSectionLayout extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'user_lesson_section_layouts';
	
	//public $timestamps = false;


	

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function setLessonSectionsAttribute($value)
    {
        $this->attributes['lesson_sections'] = json_encode($value);
    }

    public function getLessonSectionsAttribute($value)
    {
        return json_decode($value);
    }

    

   
}
