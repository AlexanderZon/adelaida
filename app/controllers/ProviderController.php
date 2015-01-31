<?php

class ProviderController extends \BaseController {

	protected $sections = array(
		'index' => 'Todos',
		'create' => 'Nuevo',
		'edit' => 'Editar',
		'delete' => 'Eliminar'
		);

	public function __construct(){

		$this->beforeFilter('auth');

		$this->beforeFilter('providers');

		$this->module = array(
			'route' => '/providers',
			'name' => 'providers',
			'title' => 'Proveedores',
			'description' => 'Gestión de Proveedores del Sistema',
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
	 * GET /providers
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$args = array(
			'providers' => Providers::all(),
			'module' => $this->module,
			);
		return View::make('providers.index')->with($args);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /providers/create
	 *
	 * @return Response
	 */
	public function getCreate()
	{
		$args = array(
			'providers' => Providers::all(),
			'locations' => Locations::all(),
			'module' => $this->module,
			);
		return View::make('providers.create')->with($args);
	}

	/**
	 * Show the form for creating a new resource.
	 * POST /providers/create
	 *
	 * @return Response
	 */
	public function postCreate()
	{

		if( Input::get('id_person') == '' ):

			$args = array(
				'msg_warning' => array(
					'name' => 'provider_person_err',
					'title' => 'Error al Crear el Proveedor',
					'description' => 'Seleccione un Representante para el Proveedor'
					)
				);

			return Redirect::to( $this->module['route'].'/create' )->with( $args );

		elseif( Input::get('id_location') == 0 || Input::get('id_location') == '' ):

			$args = array(
				'msg_warning' => array(
					'name' => 'provider_location_err',
					'title' => 'Error al Crear el Proveedor',
					'description' => 'Seleccione una Localidad para el Proveedor'
					)
				);

			return Redirect::to( $this->module['route'].'/create' )->with( $args );

		elseif( Providers::exists(Input::get('identification_number')) != 0 ):

			$args = array(
				'msg_warning' => array(
					'name' => 'provider_identification_err',
					'title' => 'Error al Crear el Proveedor',
					'description' => 'Ya existe un proveedor con el RIF ' . Input::get('identification_number') . ' introduzca uno diferente'
					)
				);

			return Redirect::to( $this->module['route'].'/create' )->with( $args );

		else:

			$provider = new Providers();
			$provider->identification_number = Input::get('identification_number');
			$provider->email = Input::get('email');
			$provider->name = Input::get('name');
			$provider->phone = Input::get('phone');
			$provider->id_person = Input::get('id_person');
			$provider->id_location = Input::get('id_location');
			
			if( $provider->save() ):

				$args = array(
					'msg_success' => array(
						'name' => 'provider_create',
						'title' => 'Proveedor Agregado',
						'description' => 'El proveedor ' . $provider->name . ' fue agregado exitosamente'
						)
					);

				return Redirect::to( $this->module['route'] )->with( $args );

			else:

				$args = array(
					'msg_danger' => array(
						'name' => 'provider_create_err',
						'title' => 'Error al agregar el proveedor',
						'description' => 'Hubo un error al agregar el proveedor ' . $provider->name
						)
					);

				return Redirect::to( $this->module['route'].'/create' )->with( $args );

			endif;

		endif;

	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /providers/edit/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getEdit($id)
	{

		$args = array(
			'provider' => Providers::find( Crypt::decrypt($id) ),
			'locations' => Locations::all(),
			'module' => $this->module,
			);
		return View::make('providers.edit')->with($args);
		
	}

	/**
	 * Show the form for editing the specified resource.
	 * POST /providers/edit/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function postEdit($id)
	{
		
		$provider = Providers::find( Crypt::decrypt($id) );

		if( Input::get('id_person') == '' ):

			$args = array(
				'msg_warning' => array(
					'name' => 'provider_person_err',
					'title' => 'Error al Editar el Proveedor',
					'description' => 'Seleccione un Representante para el Proveedor'
					)
				);

			return Redirect::to( $this->module['route'].'/edit/'.Crypt::encrypt($provider->id) )->with( $args );

		elseif( Input::get('id_location') == 0 || Input::get('id_location') == '' ):

			$args = array(
				'msg_warning' => array(
					'name' => 'provider_location_err',
					'title' => 'Error al Editar el Proveedor',
					'description' => 'Seleccione unla Localidad para el Proveedor'
					)
				);

			return Redirect::to( $this->module['route'].'/edit/'.Crypt::encrypt($provider->id) )->with( $args );

		elseif( Providers::exists(Input::get('identification_number'), $provider ) != 0 ):

			$args = array(
				'msg_warning' => array(
					'name' => 'provider_identification_err',
					'title' => 'Error al Crear el Proveedor',
					'description' => 'Ya existe un proveedor con el RIF ' . Input::get('identification_number') . ' introduzca uno diferente'
					)
				);

			return Redirect::to( $this->module['route'].'/edit/'.Crypt::encrypt($provider->id) )->with( $args );

		else:

			$provider->identification_number = Input::get('identification_number');
			$provider->email = Input::get('email');
			$provider->name = Input::get('name');
			$provider->phone = Input::get('phone');
			$provider->id_person = Input::get('id_person');
			$provider->id_location = Input::get('id_location');
			
			if( $provider->save() ):

				$args = array(
					'msg_success' => array(
						'name' => 'provider_edit',
						'title' => 'Proveedor Editado',
						'description' => 'El proveedor ' . $provider->title . ' fue editado exitosamente'
						)
					);

				return Redirect::to( $this->module['route'] )->with( $args );

			else:

				$args = array(
					'msg_danger' => array(
						'name' => 'provider_edit_err',
						'title' => 'Error al editar el proveedor',
						'description' => 'Hubo un error al editar el proveedor ' . $provider->title
						)
					);

				return Redirect::to( $this->module['route'].'/edit/'.Crypt::encrypt($provider->id) )->with( $args );

			endif;

		endif;

	}

	/**
	 * Show the form for deleting the specified resource.
	 * GET /providers/delete/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getDelete($id)
	{

		$args = array(
			'provider' => Providers::find( Crypt::decrypt($id) ),
			'module' => $this->module,
			);

		return View::make('providers.delete')->with($args);
	}

	/**
	 * Show the form for deleting the specified resource.
	 * POST /providers/delete/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function postDelete($id)
	{
		$provider =  Providers::find( Crypt::decrypt($id) );

		if($provider->delete()):

			$args = array(
				'msg_success' => array(
					'name' => 'provider_delete',
					'title' => 'Proveedor Eliminada',
					'description' => 'El proveedor ' . $provider->title . ' fue eliminado exitosamente'
					)
				);

			return Redirect::to( $this->module['route'] )->with( $args );

		else:

			$args = array(
				'msg_danger' => array(
					'name' => 'provider_delete_err',
					'title' => 'Error al eliminar el proveedor',
					'description' => 'Hubo un error al eliminar el proveedor ' . $provider->title
					)
				);

			return Redirect::to( $this->module['route'].'/delete/'.Crypt::encrypt($provider->id) )->with( $args );

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
   	
   		return View::make('providers.representant')->with( array( 'route' => $this->module['route'] ) );
   	
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
	   		$person->type = 'provider_representant';
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
   	
   		return View::make('providers.authorized')->with( array( 'route' => $this->route ) );
   	
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
			'name' => 'Proveedores',
			'route' => '/providers'
			);

		array_push( $this->breadcumbs, $self_breadcumb);

		return $this->breadcumbs;

	}

}