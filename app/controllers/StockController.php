<?php

class StockController extends \BaseController {

	protected $sections = array(
		'index' => 'Todos',
		'create' => 'Nuevo Item',
		'edit' => 'Editar Item',
		'delete' => 'Eliminar'
		);

	public function __construct(){

		$this->beforeFilter('auth');

		$this->beforeFilter('capabilities');

		$this->module = array(
			'route' => '/stock',
			'name' => 'stock',
			'title' => 'Stock',
			'description' => 'Gestión de Stock del Sistema',
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
	 * GET /stock
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$args = array(
			'stock' => Stock::all(),
			'module' => $this->module,
			);

		Audits::add(Auth::user(), array(
			'name' => 'users_get_create',
			'title' => 'stock',
			'description' => 'Vizualización del listado de items disponibles en stock'
			), 'READ');

		return View::make('stock.index')->with($args);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /stock/create
	 *
	 * @return Response
	 */
	public function getCreate()
	{
		$args = array(
			'stock' => Stock::all(),
			'categories' => Categories::all(),
			'measurement_units' => MeasurementUnits::all(),
			'module' => $this->module,
			);

		Audits::add(Auth::user(), array(
			'name' => 'stock_get_create',
			'title' => 'Añadir items al stock',
			'description' => 'Vizualización del formulario para añadir items al stock'
			), 'READ');
		return View::make('stock.create')->with($args);
	}

	/**
	 * Show the form for creating a new resource.
	 * POST /stock/create
	 *
	 * @return Response
	 */
	public function postCreate()
	{

		if( Input::get('id_category') == 0 || Input::get('id_category') == null ):

			$args = array(
				'msg_warning' => array(
					'name' => 'stock_category_err',
					'title' => 'Error al agregar Item',
					'description' => 'Debe seleccionar una categoría'
					)
				);

			Audits::add(Auth::user(), $args['msg_warning'], 'CREATE');

			return Redirect::to( $this->module['route'].'/create' )->with( $args );

		elseif( Input::get('id_measurement_unit') == 0 || Input::get('id_measurement_unit') == null ):

			$args = array(
				'msg_warning' => array(
					'name' => 'stock_measurement_unit_err',
					'title' => 'Error al agregar Item',
					'description' => 'Debe seleccionar una unidad de medida'
					)
				);

			Audits::add(Auth::user(), $args['msg_warning'], 'CREATE');

			return Redirect::to( $this->module['route'].'/create' )->with( $args );

		else:

			$item = new Stock();
			$item->description = Input::get('description');
			$item->name = Input::get('name');
			$item->id_category = Input::get('id_category');
			$item->id_measurement_unit = Input::get('id_measurement_unit');
			$item->units = Input::get('units');
			
			if( $item->save() ):

				$args = array(
					'msg_success' => array(
						'name' => 'stock_create',
						'title' => 'Item agregado',
						'description' => 'El item ' . $item->title . ' fue agregado exitosamente'
						)
					);
				Audits::add(Auth::user(), $args['msg_success'], 'CREATE');
				return Redirect::to( $this->module['route'] )->with( $args );

			else:

				$args = array(
					'msg_danger' => array(
						'name' => 'stock_create_err',
						'title' => 'Error al agregar el item',
						'description' => 'Hubo un error al agregar el item ' . $item->title
						)
					);

				Audits::add(Auth::user(), $args['msg_danger'], 'CREATE');
				return Redirect::to( $this->module['route'].'/create' )->with( $args );

			endif;

		endif;

	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /stock/edit/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getEdit($id)
	{
		$args = array(
			'item' => Stock::find( Crypt::decrypt($id) ),
			'stock' => Stock::all(),
			'categories' => Categories::all(),
			'measurement_units' => MeasurementUnits::all(),
			'module' => $this->module,
			);

		Audits::add(Auth::user(), array(
			'name' => 'stock_get_edit',
			'title' => 'Edición de items en stock',
			'description' => 'Vizualización de formulario para edición de items stock'
			), 'READ');
		
		return View::make('stock.edit')->with($args);
	}

	/**
	 * Show the form for editing the specified resource.
	 * POST /stock/edit/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function postEdit($id)
	{
			
		$item = Stock::find( Crypt::decrypt($id) );

		if( Input::get('category') == 0 || Input::get('category') == null ):

			$args = array(
				'msg_warning' => array(
					'name' => 'stock_category_err',
					'title' => 'Error al agregar Item',
					'description' => 'Debe seleccionar una categoría'
					)
				);

			Audits::add(Auth::user(), $args['msg_warning'], 'UPDATE');

			return Redirect::to( $this->module['route'].'/edit/'.Crypt::encrypt($item->id) )->with( $args );

		elseif( Input::get('measurement_unit') == 0 || Input::get('measurement_unit') == null ):

			$args = array(
				'msg_warning' => array(
					'name' => 'stock_measurement_unit_err',
					'title' => 'Error al agregar Item',
					'description' => 'Debe seleccionar una unidad de medida'
					)
				);

			Audits::add(Auth::user(), $args['msg_warning'], 'UPDATE');

			return Redirect::to( $this->module['route'].'/edit/'.Crypt::encrypt($item->id) )->with( $args );

		else:

			$item->description = Input::get('description');
			$item->name = Input::get('name');
			$item->id_category = Input::get('id_category');
			$item->id_measurement_unit = Input::get('id_measurement_unit');
			$item->units = Input::get('units');
				
			if( $item->save() ):

				$args = array(
					'msg_success' => array(
						'name' => 'stock_edit',
						'title' => 'Item editado del stock',
						'description' => 'El item' . $item->title . ' fue editado del stock exitosamente'
						)
					);
				Audits::add(Auth::user(), $args['msg_success'], 'UPDATE');
				return Redirect::to( $this->module['route'] )->with( $args );

			else:

				$args = array(
					'msg_danger' => array(
						'name' => 'stock_edit_err',
						'title' => 'Error al editar el item del stock',
						'description' => 'Hubo un error al editar el'.$item->title.' del stock '
						)
					);

				Audits::add(Auth::user(), $args['msg_danger'], 'UPDATE');
				return Redirect::to( $this->module['route'].'/edit/'.Crypt::encrypt($item->id) )->with( $args );

			endif;

		endif;

	}

	/**
	 * Show the form for deleting the specified resource.
	 * GET /stock/delete/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getDelete($id)
	{
		$args = array(
			'item' => Stock::find( Crypt::decrypt($id) ),
			'stock' => Stock::all(),
			'module' => $this->module,
			);

		Audits::add(Auth::user(), array(
			'name' => 'stock_get_delete',
			'title' => 'Eliminar de items en stock',
			'description' => 'Vizualización del listado de items para eliminar del stock'
			), 'READ');

		return View::make('stock.delete')->with($args);
	}

	/**
	 * Show the form for deleting the specified resource.
	 * POST /stock/delete/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function postDelete($id)
	{
		$item =  Stock::find( Crypt::decrypt($id) );

		if($item->delete()):

			$args = array(
				'msg_success' => array(
					'name' => 'stock_delete',
					'title' => 'Item de eliminado del stock',
					'description' => 'El item ' . $item->title . ' fue eliminado exitosamente'
					)
				);
			Audits::add(Auth::user(), $args['msg_success'], 'DELETE');
			return Redirect::to( $this->module['route'] )->with( $args );

		else:

			$args = array(
				'msg_danger' => array(
					'name' => 'stock_delete_err',
					'title' => 'Error al eliminar el item',
					'description' => 'Hubo un error al eliminar el item ' . $item->title
					)
				);

			Audits::add(Auth::user(), $args['msg_danger'], 'DELETE');
			return Redirect::to( $this->module['route'].'/delete/'.Crypt::encrypt($item->id) )->with( $args );

		endif;
	}

	private function getBreadcumbs(){

		$self_breadcumb = array(
			'name' => 'Stock',
			'route' => '/stock'
			);

		array_push( $this->breadcumbs, $self_breadcumb);

		return $this->breadcumbs;

	}

}