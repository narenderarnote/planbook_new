<?php

use Illuminate\Database\Seeder;

use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$admin = new Role();
		$admin->name         = 'admin';
		$admin->display_name = 'User Administrator'; // optional
		$admin->description  = 'admin is allowed to manage all data'; // optional
		$admin->save();

		$teacher = new Role();
		$teacher->name         = 'teacher';
		$teacher->display_name = 'teacher'; // optional
		$teacher->description  = 'teacher can access teacher permission'; // optional
		$teacher->save();

		$student = new Role();
		$student->name         = 'student';
		$student->display_name = 'student'; // optional
		$student->description  = 'student can access student permission'; // optional
		$student->save();
    }
}
