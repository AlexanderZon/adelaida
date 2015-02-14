<?php

class MeasurementUnitController extends \BaseController {

	protected $sections = array(
		'index' => 'Todas',
		'create' => 'Nuevo',
		'edit' => 'Editar',
		'delete' => 'Eliminar'
		);

	public function __construct(){

		$this->beforeFilter('auth');

		$this->beforeFilter('capabilities');

		$this->module = array(
			'route' => '/measurement_units',
			'name' => 'measurement_units',
			'title' => 'Unidades de Medida',
			'description' => 'Gestión de Unidades de Medidas del Sistema',
			'breadcrumbs' => $this->getBreadcumbs(),
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
		Audits::add(Auth::user(), array(
			'name' => 'measurement_get_index',
			'title' => 'Unidades de medida',
			'description' => 'Vizualización del listado de unidades de medida'
			), 'READ');
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
		Audits::add(Auth::user(), array(
			'name' => 'measurement_get_create',
			'title' => 'Añadir unidades de medida',
			'description' => 'Adición de unidades de medida'
			), 'READ');
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

		$measurement_unit = new MeasurementUnits();
		$measurement_unit->symbol = Input::get('symbol');
		$measurement_unit->name = Input::get('name');
		
		if( $measurement_unit->save() ):

			$args = array(
				'msg_success' => array(
					'name' => 'measurement_units_create',
					'title' => 'Unidad de medida agregada',
					'description' => 'La unidad de medida ' . $measurement_unit->title . ' fue agregada exitosamente'
					)
				);
			Audits::add(Auth::user(), $args['msg_success'], 'CREATE');
			return Redirect::to( $this->module['route'] )->with( $args );

		else:

			$args = array(
				'msg_danger' => array(
					'name' => 'measurement_units_create_err',
					'title' => 'Error al agregar la unidad de medida',
					'description' => 'Hubo un error al agregar la unidad de medida ' . $measurement_unit->title
					)
				);

			Audits::add(Auth::user(), $args['msg_danger'], 'CREATE');
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
			'measurement_unit' => MeasurementUnits::find( Crypt::decrypt($id) ),
			'module' => $this->module,
			);
		Audits::add(Auth::user(), array(
			'name' => 'measurement_get_edit',
			'title' => 'Editar unidades de medida',
			'description' => 'Edición de unidades de medida'
			), 'READ');
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
			
		$measurement_unit = MeasurementUnits::find( Crypt::decrypt($id) );

		if(!MeasurementUnits::hasName(Input::get('name'), $measurement_unit->id) ):
		
			$measurement_unit->description = Input::get('description');
			$measurement_unit->name = Input::get('name');
			
			if( $measurement_unit->save() ):

				$args = array(
					'msg_success' => array(
						'name' => 'measurement_units_edit',
						'title' => 'Unidad de Medida Editada',
						'description' => 'La unidad de medida' . $measurement_unit->title . ' fue editada exitosamente'
						)
					);
				Audits::add(Auth::user(), $args['msg_success'], 'UPDATE');
				return Redirect::to( $this->module['route'] )->with( $args );

			else:

				$args = array(
					'msg_danger' => array(
						'name' => 'measurement_units_edit_err',
						'title' => 'Error al editar la unidad de medida',
						'description' => 'Hubo un error al editar la unidad de medida ' . $measurement_unit->title
						)
					);

				Audits::add(Auth::user(), $args['msg_danger'], 'UPDATE');
				return Redirect::to( $this->module['route'].'/edit/'.Crypt::encrypt($measurement_unit->id) )->with( $args );

			endif;
		else:

			$args = array(
				'msg_warning' => array(
					'name' => 'measurement_units_name_err',
					'title' => 'Error al editar la unidad de medida',
					'description' => 'Error: el nombre ' . Input::get('name') . ' ya existe, intente con uno diferente.'
					)
				);

			Audits::add(Auth::user(), $args['msg_warning'], 'UPDATE');
			return Redirect::to( $this->module['route'].'/edit/'.Crypt::encrypt($measurement_unit->id) )->with( $args );

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
			'measurement_unit' => MeasurementUnits::find( Crypt::decrypt($id) ),
			'measurement_units' => MeasurementUnits::all(),
			'module' => $this->module,
			);
		Audits::add(Auth::user(), array(
			'name' => 'measurement_get_delete',
			'title' => 'Eliminar unidades de medida',
			'description' => 'Listado de unidades de medida para eliminar'
			), 'READ');
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
		$measurement_unit =  MeasurementUnits::find( Crypt::decrypt($id) );

		if($measurement_unit->delete()):

			$args = array(
				'msg_success' => array(
					'name' => 'measurement_units_delete',
					'title' => 'Unidad de medida Eliminada',
					'description' => 'La unidad de medida ' . $measurement_unit->title . ' fue eliminada exitosamente'
					)
				);

			Audits::add(Auth::user(), $args['msg_success'], 'DELETE');
			return Redirect::to( $this->module['route'] )->with( $args );

		else:

			$args = array(
				'msg_danger' => array(
					'name' => 'measurement_units_delete_err',
					'title' => 'Error al eliminar la unidad de medida',
					'description' => 'Hubo un error al eliminar la unidad de medida ' . $measurement_unit->title
					)
				);

			Audits::add(Auth::user(), $args['msg_danger'], 'DELETE');
			return Redirect::to( $this->module['route'].'/delete/'.Crypt::encrypt($measurement_unit->id) )->with( $args );

		endif;
	}

	private function getBreadcumbs(){

		$self_breadcrumb = array(
			'name' => 'Unidades de Medida',
			'route' => '/measurement_units'
			);

		array_push( $this->breadcrumbs, $self_breadcrumb);

		return $this->breadcrumbs;

	}

}