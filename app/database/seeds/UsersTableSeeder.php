<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		
		User::create( array(
			'first_name' => 'Alexis',
			'last_name' => 'Montenegro',
			'username' => 'AlexanderZon',
			'displayname' => 'Alexis Montenegro',
			'email' => 'amontenegro@gmaicmedia.com.ve',
			'password' => Hash::make('alexis23498535'),
			'id_role' => 1,
			'status' => 'active'
			));

	}

}