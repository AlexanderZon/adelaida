<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class RolesTableSeeder extends Seeder {

	public function run()
	{
		
		Roles::create( array(
			'name' => 'superadmin',
			'description' => 'Super Administrador',
			'status' => 'active'
			));
		
		Roles::create( array(
			'name' => 'administrator',
			'description' => 'Administrador',
			'status' => 'active'
			));
		
		Roles::create( array(
			'name' => 'seller',
			'description' => 'Vendedor',
			'status' => 'active'
			));
		
	}

}