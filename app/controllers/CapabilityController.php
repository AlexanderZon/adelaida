<?php

class CapabilityController extends \BaseController {

	protected $sections = array(
		'index' => 'Todos',
		'create' => 'Nuevo',
		'edit' => 'Editar',
		'delete' => 'Eliminar'
		);

	public function __construct(){

		$this->beforeFilter('auth');

		$this->beforeFilter('capabilities');

		$this->module = array(
			'route' => '/capabilities',
			'name' => 'capabilities',
			'title' => 'Capacidades',
			'description' => 'Gestión de Capacidades del Sistema',
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
	 * GET /capabilities
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$args = array(
			'capabilities' => Capabilities::all(),
			'module' => $this->module,
			);
		return View::make('capabilities.index')->with($args);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /capabilities/create
	 *
	 * @return Response
	 */
	public function getCreate()
	{
		$args = array(
			'capabilities' => Capabilities::all(),
			'module' => $this->module,
			);
		return View::make('capabilities.create')->with($args);
	}

	/**
	 * Show the form for creating a new resource.
	 * POST /capabilities/create
	 *
	 * @return Response
	 */
	public function postCreate()
	{

		if((!Capabilities::hasName(Input::get('name'))) AND (!Capabilities::hasController(Input::get('controller'))) ):

			$capability = new Capabilities();
			$capability->title = Input::get('title');
			$capability->description = Input::get('description');
			$capability->name = Input::get('name');
			$capability->controller = Input::get('controller');
			
			if( $capability->save() ):

				$args = array(
					'msg_success' => array(
						'name' => 'capability_create',
						'title' => 'Capacidad Agregada',
						'description' => 'La capacidad ' . $capability->title . ' fue agregada exitosamente'
						)
					);

				return Redirect::to( $this->module['route'] )->with( $args );

			else:

				$args = array(
					'msg_danger' => array(
						'name' => 'capability_create_err',
						'title' => 'Error al agregar la capacidad',
						'description' => 'Hubo un error al agregar la capacidad ' . $capability->title
						)
					);

				return Redirect::to( $this->module['route'].'/create' )->with( $args );

			endif;

		else:

			if(Capabilities::hasName(Input::get('name'))):

				$args = array(
					'msg_warning' => array(
						'name' => 'capability_name_err',
						'title' => 'Error al agregar la capacidad',
						'description' => 'Error: el nombre ' . Input::get('name') . ' ya existe, intente con uno diferente.'
						)
					);

				return Redirect::to( $this->module['route'].'/create' )->with( $args );

			else:

				$args = array(
					'msg_warning' => array(
						'name' => 'capability_controller_err',
						'title' => 'Error al agregar la capacidad',
						'description' => 'Error: el controlador ' . Input::get('controller') . ' ya existe, intente con uno diferente.'
						)
					);

				return Redirect::to( $this->module['route'].'/create' )->with( $args );

			endif;

		endif;

	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /capabilities/edit/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getEdit($id)
	{
		$args = array(
			'capability' => Capabilities::find( Crypt::decrypt($id) ),
			'module' => $this->module,
			);
		return View::make('capabilities.edit')->with($args);
	}

	/**
	 * Show the form for editing the specified resource.
	 * POST /capabilities/edit/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function postEdit($id)
	{
		
		$capability = Capabilities::find( Crypt::decrypt($id) );

		if((!Capabilities::hasName(Input::get('name'), $capability->id)) AND (!Capabilities::hasController(Input::get('controller'), $capability->id)) ):

			$capability->title = Input::get('title');
			$capability->description = Input::get('description');
			$capability->name = Input::get('name');
			$capability->controller = Input::get('controller');
			
			if( $capability->save() ):

				$args = array(
					'msg_success' => array(
						'name' => 'capability_edit',
						'title' => 'Capacidad Editada',
						'description' => 'La capacidad ' . $capability->title . ' fue editada exitosamente'
						)
					);

				return Redirect::to( $this->module['route'] )->with( $args );

			else:

				$args = array(
					'msg_danger' => array(
						'name' => 'capability_edit_err',
						'title' => 'Error al editar la capacidad',
						'description' => 'Hubo un error al editar la capacidad ' . $capability->title
						)
					);

				return Redirect::to( $this->module['route'].'/edit' )->with( $args );

			endif;

		else:

			if(Capabilities::hasName(Input::get('name'), $capability->id)):

				$args = array(
					'msg_warning' => array(
						'name' => 'capability_name_err',
						'title' => 'Error al editar la capacidad',
						'description' => 'Error: el nombre ' . Input::get('name') . ' ya existe, intente con uno diferente.'
						)
					);

				return Redirect::to( $this->module['route'].'/edit/'.$id )->with( $args );

			else:

				$args = array(
					'msg_warning' => array(
						'name' => 'capability_controller_err',
						'title' => 'Error al editar la capacidad',
						'description' => 'Error: el controlador ' . Input::get('controller') . ' ya existe, intente con uno diferente.'
						)
					);

				return Redirect::to( $this->module['route'].'/edit/'.$id )->with( $args );

			endif;

		endif;

	}

	/**
	 * Show the form for deleting the specified resource.
	 * GET /capabilities/delete/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getDelete($id)
	{
		$args = array(
			'capability' => Capabilities::find( Crypt::decrypt($id) ),
			'module' => $this->module,
			);
		return View::make('capabilities.delete')->with($args);
	}

	/**
	 * Show the form for deleting the specified resource.
	 * POST /capabilities/delete/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function postDelete($id)
	{
		$capability =  Capabilities::find( Crypt::decrypt($id) );

		if($capability->delete()):

			$args = array(
				'msg_success' => array(
					'name' => 'capability_delete',
					'title' => 'Capacidad Eliminada',
					'description' => 'La capacidad ' . $capability->title . ' fue eliminada exitosamente'
					)
				);

			return Redirect::to( $this->module['route'] )->with( $args );

		else:

			$args = array(
				'msg_danger' => array(
					'name' => 'capability_delete_err',
					'title' => 'Error al eliminar la capacidad',
					'description' => 'Hubo un error al eliminar la capacidad ' . $capability->title
					)
				);

			return Redirect::to( $this->module['route'].'/create' )->with( $args );

		endif;
	}

	private function getBreadcumbs(){

		$self_breadcumb = array(
			'name' => 'Capacidades',
			'route' => '/capabilities'
			);

		array_push( $this->breadcumbs, $self_breadcumb);

		return $this->breadcumbs;

	}

	public function getSeedscapabilities(){
		$capabilities = Capabilities::all();
		$html = '<pre>';
		foreach($capabilities as $capability):
			$html .= "
		Capabilities::create( array(
			'id' => $capability->id,
			'name' => '$capability->name',
			'title' => '$capability->title',
			'description' => '$capability->description',
			'controller' => '$capability->controller',
			));
				";
		endforeach;
		return $html;
	}

	public function getSeedsrolecapabilities(){
		$capabilities = RolesCapabilities::all();
		$html = '<pre>';
		foreach($capabilities as $capability):
			$html .= "
		RolesCapabilities::create( array(
			'id' => $capability->id,
			'id_capability' => '$capability->id_capability',
			'id_role' => '$capability->id_role',
			));
				";
		endforeach;
		return $html;
	}

}