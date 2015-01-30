<?php

class LocationController extends \BaseController {

	protected $sections = array(
		'index' => 'Todos',
		'create' => 'Nuevo',
		'edit' => 'Editar',
		'delete' => 'Eliminar'
		);

	public function __construct(){

		$this->beforeFilter('auth');

		$this->beforeFilter('capability');

		$this->module = array(
			'route' => '/locations',
			'name' => 'locations',
			'title' => 'Localidades',
			'description' => 'Gestión de Localidades del Sistema',
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
	 * GET /locations
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$args = array(
			'locations' => Locations::all(),
			'module' => $this->module,
			);
		return View::make('locations.index')->with($args);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /locations/create
	 *
	 * @return Response
	 */
	public function getCreate()
	{
		$args = array(
			'locations' => Locations::all(),
			'module' => $this->module,
			);
		return View::make('locations.create')->with($args);
	}

	/**
	 * Show the form for creating a new resource.
	 * POST /locations/create
	 *
	 * @return Response
	 */
	public function postCreate()
	{

		$location = new Locations();
		$location->name = Input::get('name');
		$location->description = Input::get('description');
		$location->type = 'location';
		$location->status = 'active';
		
		if( $location->save() ):

			$args = array(
				'msg_success' => array(
					'name' => 'location_create',
					'title' => 'Persona Agregada',
					'description' => 'La localidad ' . $location->name . ' ' . $location->description . ' fue agregada exitosamente'
					)
				);

			return Redirect::to( $this->module['route'] )->with( $args );

		else:

			$args = array(
				'msg_danger' => array(
					'name' => 'location_create_err',
					'title' => 'Error al agregar la localidad',
					'description' => 'Hubo un error al agregar la localidad ' . $location->name . ' ' . $location->description
					)
				);

			return Redirect::to( $this->module['route'].'/create' )->with( $args );

		endif;

	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /locations/edit/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getEdit($id)
	{
		$args = array(
			'location' => Locations::find( Crypt::decrypt($id) ),
			'module' => $this->module,
			);

		return View::make('locations.edit')->with($args);

	}

	/**
	 * Show the form for editing the specified resource.
	 * POST /locations/edit/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function postEdit($id)
	{

		$location = Locations::find( Crypt::decrypt($id) );

		$location->name = Input::get('name');
		$location->description = Input::get('description');
		$location->type = 'location';
		$location->status = 'active';
		
		if( $location->save() ):

			$args = array(
				'msg_success' => array(
					'name' => 'location_edit',
					'title' => 'Persona Editada',
					'description' => 'La localidad ' . $location->name . ' ' . $location->description . ' fue editada exitosamente'
					)
				);

			return Redirect::to( $this->module['route'] )->with( $args );

		else:

			$args = array(
				'msg_danger' => array(
					'name' => 'location_edit_err',
					'title' => 'Error al editar la localidad',
					'description' => 'Hubo un error al editar la localidad ' . $location->name . ' ' . $location->description 
					)
				);

			return Redirect::to( $this->module['route'].'/edit/'.Crypt::encrypt($location->id) )->with( $args );

		endif;

	}

	/**
	 * Show the form for deleting the specified resource.
	 * GET /locations/delete/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getDelete($id)
	{

		$args = array(
			'location' => Locations::find( Crypt::decrypt($id) ),
			'module' => $this->module,
			);

		return View::make('locations.delete')->with($args);

	}

	/**
	 * Show the form for deleting the specified resource.
	 * POST /locations/delete/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function postDelete($id)
	{
		$location =  Locations::find( Crypt::decrypt($id) );

		if($location->delete()):

			$args = array(
				'msg_success' => array(
					'name' => 'location_delete',
					'title' => 'Persona Eliminada',
					'description' => 'La localidad ' . $location->name . ' ' . $location->description . ' fue eliminada exitosamente'
					)
				);

			return Redirect::to( $this->module['route'] )->with( $args );

		else:

			$args = array(
				'msg_danger' => array(
					'name' => 'location_delete_err',
					'title' => 'Error al eliminar la localidad',
					'description' => 'Hubo un error al eliminar la localidad ' . $location->name . ' ' . $location->description 
					)
				);

			return Redirect::to( $this->module['route'].'/delete/'.Crypt::encrypt($location->id) )->with( $args );

		endif;
	}

	private function getBreadcumbs(){

		$self_breadcumb = array(
			'name' => 'Localidades',
			'route' => '/locations'
			);

		array_push( $this->breadcumbs, $self_breadcumb);

		return $this->breadcumbs;

	}

}
