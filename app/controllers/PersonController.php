<?php

class PersonController extends \BaseController {

	protected $sections = array(
		'index' => 'Todos',
		'create' => 'Nuevo',
		'edit' => 'Editar',
		'delete' => 'Eliminar'
		);

	public function __construct(){

		$this->beforeFilter('auth');

		$this->beforeFilter('persons');

		$this->module = array(
			'route' => '/persons',
			'name' => 'persons',
			'title' => 'Personas',
			'description' => 'Gestión de Personas del Sistema',
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
	 * GET /persons
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$args = array(
			'persons' => Persons::all(),
			'module' => $this->module,
			);
		Audits::add(Auth::user(), array(
			'name' => 'person_get_index',
			'title' => 'Listado de Personas',
			'description' => 'Vizualización del listado de personas naturales, juridicas y representantes de empresas proveedoras'
			), 'READ');
		return View::make('persons.index')->with($args);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /persons/create
	 *
	 * @return Response
	 */
	public function getCreate()
	{
		$args = array(
			'persons' => Persons::all(),
			'module' => $this->module,
			);
		Audits::add(Auth::user(), array(
			'name' => 'person_get_create',
			'title' => 'Añadir Personas',
			'description' => 'Adición de personas naturales y personas juridicas'
			), 'READ');
		return View::make('persons.create')->with($args);
	}

	/**
	 * Show the form for creating a new resource.
	 * POST /persons/create
	 *
	 * @return Response
	 */
	public function postCreate()
	{
		if($person = Persons::exists(Input::get('identification_number'))):

			$args = array(
				'msg_danger' => array(
					'name' => 'person_identification_err',
					'title' => 'Error al agregar la persona',
					'description' => 'La Cédula ' . Input::get('identification_number') . ' ya existe.'
					)
				);
			Audits::add(Auth::user(), $args['msg_danger'], 'CREATE');
			return Redirect::to( $this->module['route'].'/create' )->with( $args );

   		else:

			$person = new Persons();
			$person->first_name = Input::get('first_name');
			$person->last_name = Input::get('last_name');
			$person->identification_number = Input::get('identification_number');
			$person->email = Input::get('email');
			$person->phone = Input::get('phone');
			$person->type = 'person';
			$person->status = 'active';
			
			if( $person->save() ):

				$args = array(
					'msg_success' => array(
						'name' => 'person_create',
						'title' => 'Persona Agregada',
						'description' => 'La persona ' . $person->first_name . ' ' . $person->last_name . ' fue agregada exitosamente'
						)
					);

				Audits::add(Auth::user(), $args['msg_success'], 'CREATE');
				return Redirect::to( $this->module['route'] )->with( $args );

			else:

				$args = array(
					'msg_danger' => array(
						'name' => 'person_create_err',
						'title' => 'Error al agregar la persona',
						'description' => 'Hubo un error al agregar la persona ' . $person->first_name . ' ' . $person->last_name
						)
					);

				Audits::add(Auth::user(), $args['msg_danger'], 'CREATE');
				return Redirect::to( $this->module['route'].'/create' )->with( $args );

			endif;

	   	endif;

	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /persons/edit/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getEdit($id)
	{
		$args = array(
			'person' => Persons::find( Crypt::decrypt($id) ),
			'module' => $this->module,
			);
		Audits::add(Auth::user(), array(
			'name' => 'person_get_edit',
			'title' => 'Editar Personas',
			'description' => 'Edicion de personas naturales y juridicas'
			), 'READ');
		return View::make('persons.edit')->with($args);

	}

	/**
	 * Show the form for editing the specified resource.
	 * POST /persons/edit/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function postEdit($id)
	{

		$person = Persons::find( Crypt::decrypt($id) );

		if(Persons::exists(Input::get('identification_number'), $person)):

			$args = array(
				'msg_danger' => array(
					'name' => 'person_identification_err',
					'title' => 'Error al editar la persona',
					'description' => 'Ya existe una persona con la Cédula ' . Input::get('identification_number')
					)
				);

			Audits::add(Auth::user(), $args['msg_danger'], 'UPDATE');
			return Redirect::to( $this->module['route'].'/edit/'.Crypt::encrypt($person->id) )->with( $args );

		else:

			$person->first_name = Input::get('first_name');
			$person->last_name = Input::get('last_name');
			$person->identification_number = Input::get('identification_number');
			$person->email = Input::get('email');
			$person->phone = Input::get('phone');
			$person->type = 'person';
			$person->status = 'active';
			
			if( $person->save() ):

				$args = array(
					'msg_success' => array(
						'name' => 'person_edit',
						'title' => 'Persona Editada',
						'description' => 'La persona ' . $person->first_name . ' ' . $person->last_name . ' fue editada exitosamente'
						)
					);

				Audits::add(Auth::user(), $args['msg_success'], 'UPDATE');
				return Redirect::to( $this->module['route'] )->with( $args );

			else:

				$args = array(
					'msg_danger' => array(
						'name' => 'person_edit_err',
						'title' => 'Error al editar la persona',
						'description' => 'Hubo un error al editar la persona ' . $person->first_name . ' ' . $person->last_name 
						)
					);

				Audits::add(Auth::user(), $args['msg_danger'], 'UPDATE');
				return Redirect::to( $this->module['route'].'/edit/'.Crypt::encrypt($person->id) )->with( $args );

			endif;

		endif;

	}

	/**
	 * Show the form for deleting the specified resource.
	 * GET /persons/delete/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getDelete($id)
	{

		$args = array(
			'person' => Persons::find( Crypt::decrypt($id) ),
			'module' => $this->module,
			);
		Audits::add(Auth::user(), array(
			'name' => 'person_get_delete',
			'title' => 'Eliminar Personas',
			'description' => 'Eliminar registro de personas naturales y juridicas'
			), 'READ');
		return View::make('persons.delete')->with($args);

	}

	/**
	 * Show the form for deleting the specified resource.
	 * POST /persons/delete/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function postDelete($id)
	{
		$person =  Persons::find( Crypt::decrypt($id) );

		if($person->delete()):

			$args = array(
				'msg_success' => array(
					'name' => 'person_delete',
					'title' => 'Persona Eliminada',
					'description' => 'La persona ' . $person->first_name . ' ' . $person->last_name . ' fue eliminada exitosamente'
					)
				);

			Audits::add(Auth::user(), $args['msg_success'], 'DELETE');
			return Redirect::to( $this->module['route'] )->with( $args );

		else:

			$args = array(
				'msg_danger' => array(
					'name' => 'person_delete_err',
					'title' => 'Error al eliminar la persona',
					'description' => 'Hubo un error al eliminar la persona ' . $person->first_name . ' ' . $person->last_name 
					)
				);

			Audits::add(Auth::user(), $args['msg_danger'], 'DELETE');
			return Redirect::to( $this->module['route'].'/delete/'.Crypt::encrypt($person->id) )->with( $args );

		endif;
	}

	private function getBreadcumbs(){

		$self_breadcumb = array(
			'name' => 'Personas',
			'route' => '/persons'
			);

		array_push( $this->breadcumbs, $self_breadcumb);

		return $this->breadcumbs;

	}

}
