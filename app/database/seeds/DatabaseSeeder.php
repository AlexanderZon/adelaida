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
		
		$this->call('CapabilitiesTableSeeder');

		$this->call('RolesTableSeeder');

		$this->call('UsersTableSeeder');

		$this->call('OptionsTableSeeder');
	}

}
