<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CapabilitiesTableSeeder extends Seeder {

	public function run()
	{
				Capabilities::create( array(
			'id' => 1,
			'name' => 'dashboard_view',
			'title' => 'Visualizar Escritorio',
			'description' => '',
			'controller' => 'DashboardController@getIndex',
			));
				
		Capabilities::create( array(
			'id' => 2,
			'name' => 'user_view_get',
			'title' => 'Visualizar Usuarios',
			'description' => '',
			'controller' => 'UserController@getIndex',
			));
				
		Capabilities::create( array(
			'id' => 3,
			'name' => 'user_create_get',
			'title' => 'Crear Usuarios',
			'description' => '',
			'controller' => 'UserController@getCreate',
			));
				
		Capabilities::create( array(
			'id' => 4,
			'name' => 'user_edit_get',
			'title' => 'Editar Usuarios',
			'description' => '',
			'controller' => 'UserController@getEdit',
			));
				
		Capabilities::create( array(
			'id' => 5,
			'name' => 'user_delete_get',
			'title' => 'Eliminar Usuarios',
			'description' => '',
			'controller' => 'UserController@getDelete',
			));
				
		Capabilities::create( array(
			'id' => 6,
			'name' => 'capabilities_view_get',
			'title' => 'Visualizar Capacidades',
			'description' => '',
			'controller' => 'CapabilityController@getIndex',
			));
				
		Capabilities::create( array(
			'id' => 7,
			'name' => 'capabilities_create_get',
			'title' => 'Crear Capacidades',
			'description' => '',
			'controller' => 'CapabilityController@getCreate',
			));
				
		Capabilities::create( array(
			'id' => 8,
			'name' => 'capabilities_edit_get',
			'title' => 'Editar Capacidades',
			'description' => '',
			'controller' => 'CapabilityController@getEdit',
			));
				
		Capabilities::create( array(
			'id' => 9,
			'name' => 'capabilities_delete_get',
			'title' => 'Eliminar Capacidades',
			'description' => '',
			'controller' => 'CapabilityController@getDelete',
			));
				
		Capabilities::create( array(
			'id' => 10,
			'name' => 'roles_view_get',
			'title' => 'Visualizar Roles',
			'description' => '',
			'controller' => 'RoleController@getIndex',
			));
				
		Capabilities::create( array(
			'id' => 11,
			'name' => 'roles_create_get',
			'title' => 'Crear Roles',
			'description' => '',
			'controller' => 'RoleController@getCreate',
			));
				
		Capabilities::create( array(
			'id' => 12,
			'name' => 'roles_edit_get',
			'title' => 'Editar Roles',
			'description' => '',
			'controller' => 'RoleController@getEdit',
			));
				
		Capabilities::create( array(
			'id' => 13,
			'name' => 'roles_delete_get',
			'title' => 'Eliminar Roles',
			'description' => '',
			'controller' => 'RoleController@getDelete',
			));
				
		Capabilities::create( array(
			'id' => 14,
			'name' => 'roles_assign_get',
			'title' => 'Asignar Capacidades ',
			'description' => '',
			'controller' => 'RoleController@getAssign',
			));
				
	}

}