<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
	}

	class UserTableSeeder extends Seeder {

	    public function run()
	    {
	        DB::table('users')->delete();

	        User::create(array(
	        					'user_name' => 'Admin',
	        					'full_name' => 'Administrator',
	        					'user_email' => 'admin@modesty.com',
	        					'password' => hash('12345789'),
	        					'user_image' => 'images.jpeg',
	        					'user_status' => '1'
	        					
	        					));
	    }

	}

}
