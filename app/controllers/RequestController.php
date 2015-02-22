<?php

class RequestController extends \BaseController {

	protected $sections = array(
		'index' => 'Todos',
		'create' => 'Nueva Solicitud',
		'edit' => 'Editar Solicitud',
		'delete' => 'Eliminar'
		);

	public function __construct(){

		$this->beforeFilter('auth');

		$this->beforeFilter('capabilities');

		$this->module = array(
			'route' => '/requests',
			'name' => 'requests',
			'title' => 'Materiales Solicitados',
			'description' => 'Gestión de Solicitudes de Materiales',
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
	 * GET /requests
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		
		$args = array(
			'requests' => ProviderItems::getRequest(),
			'module' => $this->module,
			);

		Audits::add(Auth::user(), array(
			'name' => 'requests_get_index',
			'title' => 'Materiales Solicitados',
			'description' => 'Vizualización del listado de materiales solicitados'
			), 'READ');

		return View::make('requests.index')->with($args);

	}

	/**
	 * Show the form for creating a new resource.
	 * GET /requests/create
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
			'name' => 'requests_get_create',
			'title' => 'Añadir materiales solicitados',
			'description' => 'Vizualización del formulario para añadir materiales solicitados'
			), 'READ');
		return View::make('requests.create')->with($args);
	}

	/**
	 * Show the form for creating a new resource.
	 * POST /requests/create
	 *
	 * @return Response
	 */
	public function postCreate()
	{

		if(Input::get('new_stock') == null):

			$provider_item = new ProviderItems();
			$provider_item->units = Input::get('unit_top');
			$provider_item->id_stock = Input::get('id_stock');
			$provider_item->type = 'request';
			$provider_item->status = 'inactive';

			if($provider_item->save()):

				$args = array(
					'msg_success' => array(
						'name' => 'request_create',
						'title' => 'Material solicitado',
						'description' => 'El material ' . $provider_item->stock->name . ' fue solicitado exitósamente'
						)
					);

				Audits::add(Auth::user(), $args['msg_success'], 'CREATE');
				return Redirect::to( $this->module['route'] )->with( $args );

			else:

				$args = array(
					'msg_danger' => array(
						'name' => 'material_assign_err',
						'title' => 'Error al solicitar el material',
						'description' => 'Hubo un error al solicitar el material'
						)
					);

				Audits::add(Auth::user(), $args['msg_danger'], 'CREATE');
				return Redirect::to( $this->module['route'] )->with( $args );

			endif;

		else:

			if( Input::get('id_category') == 0 || Input::get('id_category') == null ):

				$args = array(
					'msg_warning' => array(
						'name' => 'material_stock_category_err',
						'title' => 'Error al solicitar Material',
						'description' => 'Debe seleccionar una categoría'
						)
					);

				Audits::add(Auth::user(), $args['msg_warning'], 'CREATE');

				return Redirect::to( $this->module['route'].'/create' )->with( $args );

			elseif( Input::get('id_measurement_unit') == 0 || Input::get('id_measurement_unit') == null ):

				$args = array(
					'msg_warning' => array(
						'name' => 'material_stock_measurement_unit_err',
						'title' => 'Error al solicitar Material',
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
				$item->units = 0;
				
				if( $item->save() ):

					$provider_item = new ProviderItems();
					$provider_item->units = Input::get('unit_top');
					$provider_item->id_stock = Input::get('id_stock');
					$provider_item->type = 'request';
					$provider_item->status = 'inactive';                                                      

					if($provider_item->save()):

						$args = array(
							'msg_success' => array(
								'name' => 'material_stock_create',
								'title' => 'Material solicitado',
								'description' => 'El material ' . $provider_item->stock->name . ' fue solicitado exitósamente'
								)
							);

						Audits::add(Auth::user(), $args['msg_success'], 'CREATE');
						return Redirect::to( $this->module['route'] )->with( $args );

					else:

						$args = array(
							'msg_danger' => array(
								'name' => 'material_stock_assign_err',
								'title' => 'Error al solicitar el material',
								'description' => 'Hubo un error al solicitar el material'
								)
							);

						Audits::add(Auth::user(), $args['msg_danger'], 'CREATE');
						return Redirect::to( $this->module['route'] )->with( $args );

					endif;

				else:

					$args = array(
						'msg_danger' => array(
							'name' => 'stock_create_err',
							'title' => 'Error al solicitar el Material',
							'description' => 'Hubo un error al solicitar el Material ' . $item->name
							)
						);

					Audits::add(Auth::user(), $args['msg_danger'], 'CREATE');
					return Redirect::to( $this->module['route'].'/create' )->with( $args );

				endif;

			endif;

		endif;

	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /requests/edit/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getEdit($id)
	{
		$args = array(
			'request' => ProviderItems::find( Crypt::decrypt($id) ),
			'categories' => Categories::all(),
			'measurement_units' => MeasurementUnits::all(),
			'module' => $this->module,
			);

		Audits::add(Auth::user(), array(
			'name' => 'requests_get_edit',
			'title' => 'Edición de materiales solicitados',
			'description' => 'Vizualización de formulario para edición de materiales solicitados'
			), 'READ');
		
		return View::make('requests.edit')->with($args);
	}

	/**
	 * Show the form for editing the specified resource.
	 * POST /requests/edit/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function postEdit($id)
	{

		if( !$request = ProviderItems::find( Crypt::decrypt($id) ) ):

			$args = array(
				'msg_warning' => array(
					'name' => 'requests_category_err',
					'title' => 'Error al editar Solicitud de Material',
					'description' => 'Solicitud no encontrada'
					)
				);

			Audits::add(Auth::user(), $args['msg_warning'], 'UPDATE');

			return Redirect::to( $this->module['route'].'/edit/'.Crypt::encrypt($request->id) )->with( $args );

		else:

			$request->units = Input::get('units');
				
			if( $request->save() ):

				$args = array(
					'msg_success' => array(
						'name' => 'requests_edit',
						'title' => 'Solicitud de Material Editada',
						'description' => 'La Solicitud del material ' . $request->stock->name . ' fue editado exitosamente'
						)
					);
				Audits::add(Auth::user(), $args['msg_success'], 'UPDATE');
				return Redirect::to( $this->module['route'] )->with( $args );

			else:

				$args = array(
					'msg_danger' => array(
						'name' => 'requests_edit_err',
						'title' => 'Error al editar la solicitud del material',
						'description' => 'Hubo un error al editar la solicitud del material '.$request->stock->name.''
						)
					);

				Audits::add(Auth::user(), $args['msg_danger'], 'UPDATE');
				return Redirect::to( $this->module['route'].'/edit/'.Crypt::encrypt($request->id) )->with( $args );

			endif;

		endif;

	}

	/**
	 * Show the form for deleting the specified resource.
	 * GET /requests/delete/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getDelete($id)
	{
		$args = array(
			'request' => ProviderItems::find( Crypt::decrypt($id) ),
			'module' => $this->module,
			);

		Audits::add(Auth::user(), array(
			'name' => 'requests_get_delete',
			'title' => 'Eliminar de materiales solicitados en requests',
			'description' => 'Vizualización del listado de materiales solicitados para eliminar del requests'
			), 'READ');

		return View::make('requests.delete')->with($args);
	}

	/**
	 * Show the form for deleting the specified resource.
	 * POST /requests/delete/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function postDelete($id)
	{
		$request =  ProviderItems::find( Crypt::decrypt($id) );

		if($request->delete()):

			$args = array(
				'msg_success' => array(
					'name' => 'requests_delete',
					'title' => 'Solicitud de material eliminado',
					'description' => 'La solicitud del Material ' . $request->stock->name . ' fue eliminado exitosamente'
					)
				);
			Audits::add(Auth::user(), $args['msg_success'], 'DELETE');
			return Redirect::to( $this->module['route'] )->with( $args );

		else:

			$args = array(
				'msg_danger' => array(
					'name' => 'requests_delete_err',
					'title' => 'Error al eliminar el item',
					'description' => 'Hubo un error al eliminar el item ' . $request->stock->name
					)
				);

			Audits::add(Auth::user(), $args['msg_danger'], 'DELETE');
			return Redirect::to( $this->module['route'].'/delete/'.Crypt::encrypt($request->id) )->with( $args );

		endif;
	}

	private function getBreadcumbs(){

		$self_breadcrumb = array(
			'name' => 'Solicitudes',
			'route' => '/requests'
			);

		array_push( $this->breadcrumbs, $self_breadcrumb);

		return $this->breadcrumbs;

	}

}