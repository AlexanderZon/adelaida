<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class RoleCapabilitiesTableSeeder extends Seeder {

	public function run()
	{
		RolesCapabilities::create( array(
			'id' => 1,
			'id_capability' => '1',
			'id_role' => '1',
			));
				
		RolesCapabilities::create( array(
			'id' => 2,
			'id_capability' => '2',
			'id_role' => '1',
			));
				
		RolesCapabilities::create( array(
			'id' => 6,
			'id_capability' => '6',
			'id_role' => '1',
			));
				
		RolesCapabilities::create( array(
			'id' => 7,
			'id_capability' => '7',
			'id_role' => '1',
			));
				
		RolesCapabilities::create( array(
			'id' => 8,
			'id_capability' => '8',
			'id_role' => '1',
			));
				
		RolesCapabilities::create( array(
			'id' => 9,
			'id_capability' => '9',
			'id_role' => '1',
			));
				
		RolesCapabilities::create( array(
			'id' => 10,
			'id_capability' => '10',
			'id_role' => '1',
			));
				
		RolesCapabilities::create( array(
			'id' => 11,
			'id_capability' => '11',
			'id_role' => '1',
			));
				
		RolesCapabilities::create( array(
			'id' => 12,
			'id_capability' => '12',
			'id_role' => '1',
			));
				
		RolesCapabilities::create( array(
			'id' => 13,
			'id_capability' => '13',
			'id_role' => '1',
			));
				
		RolesCapabilities::create( array(
			'id' => 14,
			'id_capability' => '14',
			'id_role' => '1',
			));
				
		RolesCapabilities::create( array(
			'id' => 16,
			'id_capability' => '4',
			'id_role' => '1',
			));
				
		RolesCapabilities::create( array(
			'id' => 17,
			'id_capability' => '5',
			'id_role' => '1',
			));
				
		RolesCapabilities::create( array(
			'id' => 18,
			'id_capability' => '3',
			'id_role' => '1',
			));
				
	}

}