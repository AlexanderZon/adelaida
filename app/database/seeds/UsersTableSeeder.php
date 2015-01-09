<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		
		Users::create( array(
			'first_name' => '',
			'last_name' => '',
			'username' => 'AlexanderZon',
			'email' => 'amontenegro@gmaicmedia.com.ve',
			'password' => Hash::make('alexis23498535'),
			'id_role' => 1,
			'status' => 'active'
			));
		
		Users::create( array(
			'first_name' => '',
			'last_name' => '',
			'username' => 'robertdacorte',
			'email' => 'aborges@gmaicmedia.com.ve',
			'password' => Hash::make('robert18554560'),
			'id_role' => 1,
			'status' => 'active'
			));

	}

}