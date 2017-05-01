<?php

namespace App\Helpers;

class Common
{

	public function LessonLayout($layout)
	{
		$layouts = [
				/*  layout 1 */
				1 => [ 
				  "layout_name" => "basic", 
				  "layout_display_name" => "Basic",
				  "lesson_sections" => [
				  		/*  section  */
				  		[
				  			"section_name" => "Lesson",
				  			"section_type" => "Text 1",
				  			"section_enable" => 1,
				  			"format" => [

				  				"title_format" => [
				  					"font" 		  => "Arial",
				  					"font_size"   => "11pt",
				  					"font_bold"   => 1,
				  					"font_italic" => 1,
				  					"font_underline" => 1,
				  					"text_color"	=> "#000000",
				  					"text_fill"		=> "#FFFFFF"
				  				],

				  				"body_format" => [
				  					"font" 		  => "Arial",
				  					"font_size"   => "11pt",
				  					"font_bold"   => 1,
				  					"font_italic" => 1,
				  					"font_underline" => 1,
				  					"text_color"	=> "#000000",
				  					"text_fill"		=> "#FFFFFF"
				  				]

				  			]
				  		],
				  		/*  section 2 */
				  		[
				  			"section_name" => "Homework",
				  			"section_type" => "Text 2",
				  			"section_enable" => 1,
				  			"format" => [

				  				"title_format" => [
				  					"font" 		  => "Arial",
				  					"font_size"   => "11pt",
				  					"font_bold"   => 1,
				  					"font_italic" => 1,
				  					"font_underline" => 1,
				  					"text_color"	=> "#000000",
				  					"text_fill"		=> "#FFFFFF"
				  				],

				  				"body_format" => [
				  					"font" 		  => "Arial",
				  					"font_size"   => "11pt",
				  					"font_bold"   => 1,
				  					"font_italic" => 1,
				  					"font_underline" => 1,
				  					"text_color"	=> "#000000",
				  					"text_fill"		=> "#FFFFFF"
				  				]

				  			]
				  		]

				  ]
				],

				/*  layout 2 */
				2 => [ 
				  "layout_name" => "instructional", 
				  "layout_display_name" => "Instructional",
				  "lesson_sections" => [
				  		/*  section  */
				  		[
				  			"section_name" => "Lesson",
				  			"section_type" => "Text 1",
				  			"section_enable" => 1,
				  			"format" => [

				  				"title_format" => [
				  					"font" 		  => "Arial",
				  					"font_size"   => "11pt",
				  					"font_bold"   => 1,
				  					"font_italic" => 1,
				  					"font_underline" => 1,
				  					"text_color"	=> "#000000",
				  					"text_fill"		=> "#FFFFFF"
				  				],

				  				"body_format" => [
				  					"font" 		  => "Arial",
				  					"font_size"   => "11pt",
				  					"font_bold"   => 1,
				  					"font_italic" => 1,
				  					"font_underline" => 1,
				  					"text_color"	=> "#000000",
				  					"text_fill"		=> "#FFFFFF"
				  				]

				  			]
				  		],
				  		/*  section 2 */
				  		[
				  			"section_name" => "Homework",
				  			"section_type" => "Text 2",
				  			"section_enable" => 1,
				  			"format" => [

				  				"title_format" => [
				  					"font" 		  => "Arial",
				  					"font_size"   => "11pt",
				  					"font_bold"   => 1,
				  					"font_italic" => 1,
				  					"font_underline" => 1,
				  					"text_color"	=> "#000000",
				  					"text_fill"		=> "#FFFFFF"
				  				],

				  				"body_format" => [
				  					"font" 		  => "Arial",
				  					"font_size"   => "11pt",
				  					"font_bold"   => 1,
				  					"font_italic" => 1,
				  					"font_underline" => 1,
				  					"text_color"	=> "#000000",
				  					"text_fill"		=> "#FFFFFF"
				  				]

				  			]
				  		]

				  ]
				],

				/*  layout 3 */
				3 => [ 
				  "layout_name" => "detailed", 
				  "layout_display_name" => "Detailed",
				  "lesson_sections" => [
				  		/*  section  */
				  		[
				  			"section_name" => "Lesson",
				  			"section_type" => "Text 1",
				  			"section_enable" => 1,
				  			"format" => [

				  				"title_format" => [
				  					"font" 		  => "Arial",
				  					"font_size"   => "11pt",
				  					"font_bold"   => 1,
				  					"font_italic" => 1,
				  					"font_underline" => 1,
				  					"text_color"	=> "#000000",
				  					"text_fill"		=> "#FFFFFF"
				  				],

				  				"body_format" => [
				  					"font" 		  => "Arial",
				  					"font_size"   => "11pt",
				  					"font_bold"   => 1,
				  					"font_italic" => 1,
				  					"font_underline" => 1,
				  					"text_color"	=> "#000000",
				  					"text_fill"		=> "#FFFFFF"
				  				]

				  			]
				  		],
				  		/*  section 2 */
				  		[
				  			"section_name" => "Homework",
				  			"section_type" => "Text 2",
				  			"section_enable" => 1,
				  			"format" => [

				  				"title_format" => [
				  					"font" 		  => "Arial",
				  					"font_size"   => "11pt",
				  					"font_bold"   => 1,
				  					"font_italic" => 1,
				  					"font_underline" => 1,
				  					"text_color"	=> "#000000",
				  					"text_fill"		=> "#FFFFFF"
				  				],

				  				"body_format" => [
				  					"font" 		  => "Arial",
				  					"font_size"   => "11pt",
				  					"font_bold"   => 1,
				  					"font_italic" => 1,
				  					"font_underline" => 1,
				  					"text_color"	=> "#000000",
				  					"text_fill"		=> "#FFFFFF"
				  				]

				  			]
				  		]

				  ]
				]


		];

		return $layouts[$layout];
	}

	public function ClassesScheduled($ClassesScheduled)
	{

		$ClassesSchedules = [

			'one_week' =>[
				["text"=>"Sunday","name"=>"sundayCheck","day_no"=>"1","is_class"=>"0","start_time"=>"","end_time"=>""],
				["text"=>"Monday","name"=>"mondayCheck","day_no"=>"2","is_class"=>"1","start_time"=>"","end_time"=>""],
				["text"=>"Tuesday","name"=>"tuesdayCheck","day_no"=>"3","is_class"=>"1","start_time"=>"","end_time"=>""],
				["text"=>"Wednesday","name"=>"wednesdayCheck","day_no"=>"4","is_class"=>"1","start_time"=>"","end_time"=>""],
				["text"=>"Thursday","name"=>"thursdayCheck","day_no"=>"5","is_class"=>"1","start_time"=>"","end_time"=>""],
				["text"=>"Friday","name"=>"fridayCheck","day_no"=>"6","is_class"=>"1","start_time"=>"","end_time"=>""],
				["text"=>"Saturday","name"=>"saturdayCheck","day_no"=>"7","is_class"=>"0","start_time"=>"","end_time"=>""],
				
			],
			'two_week' =>[

				["text"=>"Sunday","name"=>"sundayCheck","day_no"=>"1","is_class"=>"0","start_time"=>"","end_time"=>""],
				["text"=>"Monday","name"=>"mondayCheck","day_no"=>"2","is_class"=>"1","start_time"=>"","end_time"=>""],
				["text"=>"Tuesday","name"=>"tuesdayCheck","day_no"=>"3","is_class"=>"1","start_time"=>"","end_time"=>""],
				["text"=>"Wednesday","name"=>"wednesdayCheck","day_no"=>"4","is_class"=>"1","start_time"=>"","end_time"=>""],
				["text"=>"Thursday","name"=>"thursdayCheck","day_no"=>"5","is_class"=>"1","start_time"=>"","end_time"=>""],
				["text"=>"Friday","name"=>"fridayCheck","day_no"=>"6","is_class"=>"1","start_time"=>"","end_time"=>""],
				["text"=>"Saturday","name"=>"saturdayCheck","day_no"=>"7","is_class"=>"0","start_time"=>"","end_time"=>""],

				["text"=>"Sunday","name"=>"sundayCheck2","day_no"=>"1","is_class"=>"0","start_time"=>"","end_time"=>""],
				["text"=>"Monday","name"=>"mondayCheck2","day_no"=>"2","is_class"=>"1","start_time"=>"","end_time"=>""],
				["text"=>"Tuesday","name"=>"tuesdayCheck2","day_no"=>"3","is_class"=>"1","start_time"=>"","end_time"=>""],
				["text"=>"Wednesday","name"=>"wednesdayCheck2","day_no"=>"4","is_class"=>"1","start_time"=>"","end_time"=>""],
				["text"=>"Thursday","name"=>"thursdayCheck2","day_no"=>"5","is_class"=>"1","start_time"=>"","end_time"=>""],
				["text"=>"Friday","name"=>"fridayCheck2","day_no"=>"6","is_class"=>"1","start_time"=>"","end_time"=>""],
				["text"=>"Saturday","name"=>"saturdayCheck2","day_no"=>"7","is_class"=>"0","start_time"=>"","end_time"=>""],


			],
			'cycle' =>[


				["text"=>"Day 1","name"=>"dayCheck1","day_no"=>"1","is_class"=>"1","start_time"=>"","end_time"=>""],
				["text"=>"Day 2","name"=>"dayCheck2","day_no"=>"2","is_class"=>"1","start_time"=>"","end_time"=>""],
				["text"=>"Day 3","name"=>"dayCheck3","day_no"=>"3","is_class"=>"1","start_time"=>"","end_time"=>""],
				["text"=>"Day 4","name"=>"dayCheck4","day_no"=>"4","is_class"=>"1","start_time"=>"","end_time"=>""],
				["text"=>"Day 5","name"=>"dayCheck5","day_no"=>"5","is_class"=>"1","start_time"=>"","end_time"=>""],
				["text"=>"Day 6","name"=>"dayCheck6","day_no"=>"6","is_class"=>"1","start_time"=>"","end_time"=>""],
				["text"=>"Day 7","name"=>"dayCheck7","day_no"=>"7","is_class"=>"1","start_time"=>"","end_time"=>""],
				["text"=>"Day 8","name"=>"dayCheck8","day_no"=>"8","is_class"=>"1","start_time"=>"","end_time"=>""],
				["text"=>"Day 9","name"=>"dayCheck9","day_no"=>"9","is_class"=>"1","start_time"=>"","end_time"=>""],
				["text"=>"Day 10","name"=>"dayCheck10","day_no"=>"10","is_class"=>"1","start_time"=>"","end_time"=>""],
				["text"=>"Day 11","name"=>"dayCheck11","day_no"=>"11","is_class"=>"1","start_time"=>"","end_time"=>""],
				["text"=>"Day 12","name"=>"dayCheck12","day_no"=>"12","is_class"=>"1","start_time"=>"","end_time"=>""],
				["text"=>"Day 13","name"=>"dayCheck13","day_no"=>"13","is_class"=>"1","start_time"=>"","end_time"=>""],
				["text"=>"Day 14","name"=>"dayCheck14","day_no"=>"14","is_class"=>"1","start_time"=>"","end_time"=>""],
				["text"=>"Day 15","name"=>"dayCheck15","day_no"=>"15","is_class"=>"1","start_time"=>"","end_time"=>""],
				["text"=>"Day 16","name"=>"dayCheck16","day_no"=>"16","is_class"=>"1","start_time"=>"","end_time"=>""],
				["text"=>"Day 17","name"=>"dayCheck17","day_no"=>"17","is_class"=>"1","start_time"=>"","end_time"=>""],
				["text"=>"Day 18","name"=>"dayCheck18","day_no"=>"18","is_class"=>"1","start_time"=>"","end_time"=>""],
				["text"=>"Day 19","name"=>"dayCheck19","day_no"=>"19","is_class"=>"1","start_time"=>"","end_time"=>""],
				["text"=>"Day 20","name"=>"dayCheck20","day_no"=>"20","is_class"=>"1","start_time"=>"","end_time"=>""],


			],

			

		];

		return $ClassesSchedules[$ClassesScheduled];

	}

}