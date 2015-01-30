<?php

class ClientController extends \BaseController {

	protected $sections = array(
		'index' => 'Todos',
		'create' => 'Nuevo',
		'edit' => 'Editar',
		'delete' => 'Eliminar'
		);

	public function __construct(){

		$this->beforeFilter('auth');

		$this->beforeFilter('clients');

		$this->module = array(
			'route' => '/clients',
			'name' => 'clients',
			'title' => 'Clientes',
			'description' => 'Gestión de Clientes del Sistema',
			'breadcumbs' => $this->getBreadcumbs(),
			'sections' => $this->sections,
			'msg_danger' => Session::get('msg_danger'),
			'msg_warning' => Session::get('msg_warning'),
			'msg_success' => Session::get('msg_success'),
			'msg_active' => Session::get('msg_active'),
			);

	}

	/**
	 * Display a listing of the resource.
	 * GET /clients
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$args = array(
			'clients' => Clients::all(),
			'module' => $this->module,
			);
		return View::make('clients.index')->with($args);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /clients/create
	 *
	 * @return Response
	 */
	public function getCreate()
	{
		$args = array(
			'clients' => Clients::all(),
			'locations' => Locations::all(),
			'module' => $this->module,
			);
		return View::make('clients.create')->with($args);
	}

	/**
	 * Show the form for creating a new resource.
	 * POST /clients/create
	 *
	 * @return Response
	 */
	public function postCreate()
	{

		if( Input::get('id_person') == '' ):

			$args = array(
				'msg_warning' => array(
					'name' => 'client_person_err',
					'title' => 'Error al Crear el Cliente',
					'description' => 'Seleccione un Representante para el Cliente'
					)
				);

			return Redirect::to( $this->module['route'].'/create' )->with( $args );

		elseif( Input::get('id_location') == 0 || Input::get('id_location') == '' ):

			$args = array(
				'msg_warning' => array(
					'name' => 'client_location_err',
					'title' => 'Error al Crear el Cliente',
					'description' => 'Seleccione una Localidad para el Cliente'
					)
				);

			return Redirect::to( $this->module['route'].'/create' )->with( $args );

		elseif( Clients::exists(Input::get('identification_number')) != 0 ):

			$args = array(
				'msg_warning' => array(
					'name' => 'client_identification_err',
					'title' => 'Error al Crear el Cliente',
					'description' => 'Ya existe un cliente con el RIF ' . Input::get('identification_number') . ' introduzca uno diferente'
					)
				);

			return Redirect::to( $this->module['route'].'/create' )->with( $args );

		else:

			$client = new Clients();
			$client->identification_number = Input::get('identification_number');
			$client->email = Input::get('email');
			$client->name = Input::get('name');
			$client->phone = Input::get('phone');
			$client->id_person = Input::get('id_person');
			$client->id_location = Input::get('id_location');
			
			if( $client->save() ):

				$args = array(
					'msg_success' => array(
						'name' => 'client_create',
						'title' => 'Cliente Agregado',
						'description' => 'El cliente ' . $client->name . ' fue agregado exitosamente'
						)
					);

				return Redirect::to( $this->module['route'] )->with( $args );

			else:

				$args = array(
					'msg_danger' => array(
						'name' => 'client_create_err',
						'title' => 'Error al agregar el cliente',
						'description' => 'Hubo un error al agregar el cliente ' . $client->name
						)
					);

				return Redirect::to( $this->module['route'].'/create' )->with( $args );

			endif;

		endif;

	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /clients/edit/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getEdit($id)
	{

		$args = array(
			'client' => Clients::find( Crypt::decrypt($id) ),
			'locations' => Locations::all(),
			'module' => $this->module,
			);
		return View::make('clients.edit')->with($args);
		
	}

	/**
	 * Show the form for editing the specified resource.
	 * POST /clients/edit/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function postEdit($id)
	{
		
		$client = Clients::find( Crypt::decrypt($id) );

		if( Input::get('id_person') == '' ):

			$args = array(
				'msg_warning' => array(
					'name' => 'client_person_err',
					'title' => 'Error al Editar el Cliente',
					'description' => 'Seleccione un Representante para el Cliente'
					)
				);

			return Redirect::to( $this->module['route'].'/edit/'.Crypt::encrypt($client->id) )->with( $args );

		elseif( Input::get('id_location') == 0 || Input::get('id_location') == '' ):

			$args = array(
				'msg_warning' => array(
					'name' => 'client_location_err',
					'title' => 'Error al Editar el Cliente',
					'description' => 'Seleccione unla Localidad para el Cliente'
					)
				);

			return Redirect::to( $this->module['route'].'/edit/'.Crypt::encrypt($client->id) )->with( $args );

		elseif( Clients::exists(Input::get('identification_number'), $client ) != 0 ):

			$args = array(
				'msg_warning' => array(
					'name' => 'client_identification_err',
					'title' => 'Error al Crear el Cliente',
					'description' => 'Ya existe un cliente con el RIF ' . Input::get('identification_number') . ' introduzca uno diferente'
					)
				);

			return Redirect::to( $this->module['route'].'/edit/'.Crypt::encrypt($client->id) )->with( $args );

		else:

			$client->identification_number = Input::get('identification_number');
			$client->email = Input::get('email');
			$client->name = Input::get('name');
			$client->phone = Input::get('phone');
			$client->id_person = Input::get('id_person');
			$client->id_location = Input::get('id_location');
			
			if( $client->save() ):

				$args = array(
					'msg_success' => array(
						'name' => 'client_edit',
						'title' => 'Cliente Editado',
						'description' => 'El cliente ' . $client->title . ' fue editado exitosamente'
						)
					);

				return Redirect::to( $this->module['route'] )->with( $args );

			else:

				$args = array(
					'msg_danger' => array(
						'name' => 'client_edit_err',
						'title' => 'Error al editar el cliente',
						'description' => 'Hubo un error al editar el cliente ' . $client->title
						)
					);

				return Redirect::to( $this->module['route'].'/edit/'.Crypt::encrypt($client->id) )->with( $args );

			endif;

		endif;

	}

	/**
	 * Show the form for deleting the specified resource.
	 * GET /clients/delete/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getDelete($id)
	{

		$args = array(
			'client' => Clients::find( Crypt::decrypt($id) ),
			'module' => $this->module,
			);

		return View::make('clients.delete')->with($args);
	}

	/**
	 * Show the form for deleting the specified resource.
	 * POST /clients/delete/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function postDelete($id)
	{
		$client =  Clients::find( Crypt::decrypt($id) );

		if($client->delete()):

			$args = array(
				'msg_success' => array(
					'name' => 'client_delete',
					'title' => 'Cliente Eliminada',
					'description' => 'El cliente ' . $client->title . ' fue eliminado exitosamente'
					)
				);

			return Redirect::to( $this->module['route'] )->with( $args );

		else:

			$args = array(
				'msg_danger' => array(
					'name' => 'client_delete_err',
					'title' => 'Error al eliminar el cliente',
					'description' => 'Hubo un error al eliminar el cliente ' . $client->title
					)
				);

			return Redirect::to( $this->module['route'].'/delete/'.Crypt::encrypt($client->id) )->with( $args );

		endif;
	}

   	public function postFindrepresentant(){
   	
   		$person = Persons::where('identification_number','=',Input::get('identification_number'))->get();
   	
   		if(count($person) > 0):
   	
   			return $person[0];
   	
   		else:
   	
   			return 0;
   	
   		endif;
   	
   	}

   	public function getRepresentant(){
   	
   		return View::make('clients.representant')->with( array( 'route' => $this->module['route'] ) );
   	
   	}
   	
   	public function postRepresentant(){

   		if($person = Persons::exists(Input::get('identification_number'))):

   			$array = array(
   				'id' => $person->id,
   				'first_name' => $person->first_name,
   				'last_name' => $person->last_name,
   				'identification_number' => $person->identification_number,
   				'phone' => $person->phone,
   				'email' => $person->email,
   				);
   	
   			return Response::json($array);

   		else:
   	
	   		$person = new Persons();
	   		$person->first_name = Input::get('first_name');
	   		$person->last_name = Input::get('last_name');
	   		$person->identification_number = Input::get('identification_number');
	   		$person->phone = Input::get('phone');
	   		$person->email = Input::get('email');
	   		$person->type = 'client_representant';
	   		$person->status = 'active';
	   	
	   		if($person->save()):
	   	
	   			$array = array(
	   				'id' => $person->id,
	   				'first_name' => $person->first_name,
	   				'last_name' => $person->last_name,
	   				'identification_number' => $person->identification_number,
	   				'phone' => $person->phone,
	   				'email' => $person->email,
	   				);
	   	
	   			return Response::json($array);
	   	
	   		else:
	   	
	   			return 0;
	   	
	   		endif;

	   	endif;
   	
   	}
   
   	public function postFindauthorized(){
   	
   		$person = Persons::where('identification_number','=',Input::get('identification_number'))->get();
   	
   		if(count($person) > 0):
   	
   			return $person[0];
   	
   		else:
   	
   			return 0;
   	
   		endif;
   	
   	}
   
   	public function postFindauthorizedbyid(){
   	
   		$person = Persons::find(Input::get('id'));
   	
   		return $person;
   	   	
   	}
   
   	public function getAuthorized(){
   	
   		return View::make('clients.authorized')->with( array( 'route' => $this->route ) );
   	
   	}
   	
   	public function postAuthorized(){
   	
   		$person = new Persons();
   		$person->first_name = Input::get('first_name');
   		$person->last_name = Input::get('last_name');
   		$person->identification_number = Input::get('identification_number');
   		$person->rif = Input::get('rif');
   	
   		if($person->save()):
   	
   			$array = array(
   				'id' => $person->id,
   				'first_name' => $person->first_name,
   				'last_name' => $person->last_name,
   				'identification_number' => $person->identification_number,
   				);
   	
   			return Response::json($array);
   	
   		else:
   	
   			return 0;
   	
   		endif;
   	
   	}

	private function getBreadcumbs(){

		$self_breadcumb = array(
			'name' => 'Clientes',
			'route' => '/clients'
			);

		array_push( $this->breadcumbs, $self_breadcumb);

		return $this->breadcumbs;

	}

}