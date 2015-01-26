<?php

class MeasurementUnitController extends \BaseController {

	protected $sections = array(
		'index' => 'Todas',
		'create' => 'Nuevo',
		'edit' => 'Editar',
		'delete' => 'Delete'
		);

	public function __construct(){

		$this->beforeFilter('auth');

		$this->beforeFilter('capabilities');

		$this->module = array(
			'route' => '/measurement_units',
			'name' => 'measurement_units',
			'title' => 'Unidades de Medida',
			'description' => 'Gestión de Unidades de Medidas del Sistema',
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
	 * GET /measurement_units
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$args = array(
			'measurement_units' => MeasurementUnits::all(),
			'module' => $this->module,
			);
		return View::make('measurement_units.index')->with($args);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /measurement_units/create
	 *
	 * @return Response
	 */
	public function getCreate()
	{
		$args = array(
			'measurement_units' => MeasurementUnits::all(),
			'module' => $this->module,
			);
		return View::make('measurement_units.create')->with($args);
	}

	/**
	 * Show the form for creating a new resource.
	 * POST /measurement_units/create
	 *
	 * @return Response
	 */
	public function postCreate()
	{

		if(!MeasurementUnits::hasName(Input::get('name'))):

			$item = new MeasurementUnits();
			$item->description = Input::get('description');
			$item->name = Input::get('name');
			
			if( $item->save() ):

				$args = array(
					'msg_success' => array(
						'name' => 'measurement_units_create',
						'title' => 'Rol Agregado',
						'description' => 'El rol ' . $item->title . ' fue agregado exitosamente'
						)
					);

				return Redirect::to( $this->module['route'] )->with( $args );

			else:

				$args = array(
					'msg_danger' => array(
						'name' => 'measurement_units_create_err',
						'title' => 'Error al agregar el rol',
						'description' => 'Hubo un error al agregar el rol ' . $item->title
						)
					);

				return Redirect::to( $this->module['route'].'/create' )->with( $args );

			endif;

		else:

			$args = array(
				'msg_warning' => array(
					'name' => 'measurement_units_name_err',
					'title' => 'Error al agregar el rol',
					'description' => 'Error: el nombre ' . Input::get('name') . ' ya existe, intente con uno diferente.'
					)
				);

			return Redirect::to( $this->module['route'].'/create' )->with( $args );

		endif;

	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /measurement_units/edit/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getEdit($id)
	{
		$args = array(
			'item' => MeasurementUnits::find( Crypt::decrypt($id) ),
			'measurement_units' => MeasurementUnits::all(),
			'module' => $this->module,
			);
		return View::make('measurement_units.edit')->with($args);
	}

	/**
	 * Show the form for editing the specified resource.
	 * POST /measurement_units/edit/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function postEdit($id)
	{
			
		$item = MeasurementUnits::find( Crypt::decrypt($id) );

		if(!MeasurementUnits::hasName(Input::get('name'), $item->id) ):
		
			$item->description = Input::get('description');
			$item->name = Input::get('name');
			
			if( $item->save() ):

				$args = array(
					'msg_success' => array(
						'name' => 'measurement_units_edit',
						'title' => 'Rol Editado',
						'description' => 'El rol ' . $item->title . ' fue editado exitosamente'
						)
					);

				return Redirect::to( $this->module['route'] )->with( $args );

			else:

				$args = array(
					'msg_danger' => array(
						'name' => 'measurement_units_edit_err',
						'title' => 'Error al editar el rol',
						'description' => 'Hubo un error al editar el rol ' . $item->title
						)
					);

				return Redirect::to( $this->module['route'].'/edit' )->with( $args );

			endif;
		else:

			$args = array(
				'msg_warning' => array(
					'name' => 'measurement_units_name_err',
					'title' => 'Error al editar el rol',
					'description' => 'Error: el nombre ' . Input::get('name') . ' ya existe, intente con uno diferente.'
					)
				);

			return Redirect::to( $this->module['route'].'/edit/'.$id )->with( $args );

		endif;
	}

	/**
	 * Show the form for deleting the specified resource.
	 * GET /measurement_units/assign/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */

	public function getAssign($id)
	{
		
		$args = array(
			'item' => MeasurementUnits::find( Crypt::decrypt($id) ),
			'capabilities' => Capabilities::orderBy('title','ASC')->get(),
			'module' => $this->module,
			);

		return View::make('measurement_units.assign')->with( $args );

	}

	/**
	 * Show the form for deleting the specified resource.
	 * POST /measurement_units/assign/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */

	public function postAssign($id)
	{
		
		$item = MeasurementUnits::find( Crypt::decrypt($id) );

		$capabilities = Input::get('capabilities');
		
		if($item->capabilities()->sync($capabilities)):
			$args = array(
				'msg_success' => array(
					'name' => 'measurement_units_assign',
					'title' => 'Capacidades Asignadas',
					'description' => 'Las capacidades fueron exitosamente asignadas'
					)
				);

			return Redirect::to( $this->module['route'] )->with( $args );
		else:
			$args = array(
				'msg_danger' => array(
					'name' => 'measurement_units_assign_err',
					'title' => 'Error al Asignar las Capacidades',
					'description' => 'Hubo un error al asignar las capacidades '
					)
				);

			return Redirect::to( $this->module['route'].'/edit' )->with( $args );
		endif;

	}

	/**
	 * Show the form for deleting the specified resource.
	 * GET /measurement_units/delete/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getDelete($id)
	{
		$args = array(
			'item' => MeasurementUnits::find( Crypt::decrypt($id) ),
			'measurement_units' => MeasurementUnits::all(),
			'module' => $this->module,
			);
		return View::make('measurement_units.delete')->with($args);
	}

	/**
	 * Show the form for deleting the specified resource.
	 * POST /measurement_units/delete/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function postDelete($id)
	{
		$item =  MeasurementUnits::find( Crypt::decrypt($id) );

		if($item->delete()):

			$args = array(
				'msg_success' => array(
					'name' => 'measurement_units_delete',
					'title' => 'Rol Eliminada',
					'description' => 'La capacidad ' . $item->title . ' fue eliminada exitosamente'
					)
				);

			return Redirect::to( $this->module['route'] )->with( $args );

		else:

			$args = array(
				'msg_danger' => array(
					'name' => 'measurement_units_delete_err',
					'title' => 'Error al eliminar la capacidad',
					'description' => 'Hubo un error al eliminar la capacidad ' . $item->title
					)
				);

			return Redirect::to( $this->module['route'].'/create' )->with( $args );

		endif;
	}

	private function getBreadcumbs(){

		$self_breadcumb = array(
			'name' => 'Unidades de Medida',
			'route' => '/measurement_units'
			);

		array_push( $this->breadcumbs, $self_breadcumb);

		return $this->breadcumbs;

	}

}