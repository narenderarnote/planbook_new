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

}