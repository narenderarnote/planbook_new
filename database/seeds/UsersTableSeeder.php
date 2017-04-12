<?php

use Illuminate\Database\Seeder;

use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
		$user = new User;

		$user->name      = "Admin";
		$user->email 	 = "admin@gmail.com";
		$user->password  = bcrypt('1');
		$user->save();

		//eloquent's original technique To attach Role with user
		$user->roles()->attach(1); // id only


		$user = new User;

		$user->name      = "Teacher";
		$user->email 	 = "teacher@gmail.com";
		$user->password  = bcrypt('1');
		$user->save();

		//eloquent's original technique To attach Role with user
		$user->roles()->attach(2); // id only

		$user = new User;

		$user->name      = "Student";
		$user->email 	 = "student@gmail.com";
		$user->password  = bcrypt('1');
		$user->save();

		//eloquent's original technique To attach Role with user
		$user->roles()->attach(3); // id only


    }
}
