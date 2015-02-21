<?php

class MaterialController extends \BaseController {

	protected $sections = array(
		'index' => 'Todos',
		'create' => 'Nuevo',
		'edit' => 'Editar',
		'delete' => 'Eliminar'
		);

	public function __construct(){

		$this->beforeFilter('auth');

		$this->beforeFilter('materials');

		$this->module = array(
			'route' => self::getRoute(Request::path()),
			'parent' => 'projects',
			'name' => 'materials',
			'title' => 'Materiales',
			'description' => 'Gestión de Materiales del Sistema',
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
	 * GET /materials
	 *
	 * @return Response
	 */
	public function getIndex( $idProject )
	{

		$project = Projects::find( Crypt::decrypt($idProject) );

		$args = array(
			'project' => $project,
			'materials' => $project->materials,
			'module' => $this->module,
			);
		Audits::add(Auth::user(), array(
			'name' => 'material_get_index',
			'title' => 'Materiales',
			'description' => 'Vizualización de Materiales'
			), 'READ');
		return View::make('materials.index')->with($args);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /materials/create
	 *
	 * @return Response
	 */
	public function getCreate( $idProject )
	{

		$project = Projects::find( Crypt::decrypt($idProject) );

		$args = array(
			'project' => $project,
			'materials' => $project->materials,
			'stock' => Stock::filterByMaterials($project->materials),
			'categories' => Categories::all(),
			'measurement_units' => MeasurementUnits::all(),
			'users' => Users::getActive(),
			'module' => $this->module,
			);
		Audits::add(Auth::user(), array(
			'name' => 'material_get_create',
			'title' => 'Añadir materiales',
			'description' => 'Adición de materiales'
			), 'READ');
		return View::make('materials.create')->with($args);
	}

	/**
	 * Show the form for creating a new resource.
	 * POST /materials/create
	 *
	 * @return Response
	 */
	public function postCreate( $idProject )
	{

		if( $project = Projects::find( Crypt::decrypt( $idProject ) )):

			if(Input::get('new_stock') == null):

				$material = new Materials();
				$material->units = Input::get('unit_top');
				$material->id_project = $project->id;
				$material->id_stock = Input::get('id_stock');
				$material->status = 'keeped';

				if($material->save()):

					$args = array(
						'msg_success' => array(
							'name' => 'material_create',
							'title' => 'Material asignado',
							'description' => 'El material ' . $material->stock->name . ' fue apartado al proyecto exitósamente'
							)
						);

					Audits::add(Auth::user(), $args['msg_success'], 'CREATE');
					return Redirect::to( $this->module['route'] )->with( $args );

				else:

					$args = array(
						'msg_danger' => array(
							'name' => 'material_assign_err',
							'title' => 'Error al asignar el material',
							'description' => 'Hubo un error al asignar el material al proyecto'
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
							'title' => 'Error al agregar Item',
							'description' => 'Debe seleccionar una categoría'
							)
						);

					Audits::add(Auth::user(), $args['msg_warning'], 'CREATE');

					return Redirect::to( $this->module['route'].'/create' )->with( $args );

				elseif( Input::get('id_measurement_unit') == 0 || Input::get('id_measurement_unit') == null ):

					$args = array(
						'msg_warning' => array(
							'name' => 'material_stock_measurement_unit_err',
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
					$item->units = 0;
					
					if( $item->save() ):

						$material = new Materials();
						$material->units = Input::get('unit_bottom');
						$material->id_project = $project->id;
						$material->id_stock = $item->id;
						$material->status = 'keeped';

						if($material->save()):

							$args = array(
								'msg_success' => array(
									'name' => 'material_stock_create',
									'title' => 'Material asignado',
									'description' => 'El material ' . $material->stock->name . ' fue apartado al proyecto exitósamente'
									)
								);

							Audits::add(Auth::user(), $args['msg_success'], 'CREATE');
							return Redirect::to( $this->module['route'] )->with( $args );

						else:

							$args = array(
								'msg_danger' => array(
									'name' => 'material_stock_assign_err',
									'title' => 'Error al asignar el material',
									'description' => 'Hubo un error al asignar el material al proyecto'
									)
								);

							Audits::add(Auth::user(), $args['msg_danger'], 'CREATE');
							return Redirect::to( $this->module['route'] )->with( $args );

						endif;

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

			endif;

		else:

			$args = array(
				'msg_danger' => array(
					'name' => 'material_create_err',
					'title' => 'Error al agregar el material',
					'description' => 'Hubo un error al agregar el material ' . $material->stock->name . ', no se encuetra el proyecto.'
					)
				);

			Audits::add(Auth::user(), $args['msg_danger'], 'CREATE');
			return Redirect::to( $this->module['route'].'/create' )->with( $args );

		endif;

	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /materials/edit/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getEdit( $idProject, $id)
	{

		$project = Projects::find( Crypt::decrypt( $idProject ) );

		$args = array(
			'project' => $project,
			'material' => Materials::find( Crypt::decrypt($id) ),
			'materials' => $project->materials,
			'users' => Users::getActive(),
			'module' => $this->module,
			);

		Audits::add(Auth::user(), array(
			'name' => 'material_get_edit',
			'title' => 'Editar materiales',
			'description' => 'Edición de materiales'
			), 'READ');

		return View::make('materials.edit')->with($args);

	}

	/**
	 * Show the form for editing the specified resource.
	 * POST /materials/edit/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function postEdit( $idProject, $id)
	{
		
		if( $material = Materials::find( Crypt::decrypt( $id ) ) ):

			$material->units = Input::get('units');
			
			if( $material->save() ):

				$args = array(
					'msg_success' => array(
						'name' => 'material_edit',
						'title' => 'Material editado',
						'description' => 'El material ' . $material->stock->name . ' fue editado exitosamente'
						)
					);

				Audits::add(Auth::user(), $args['msg_success'], 'UPDATE');

				return Redirect::to( $this->module['route'] )->with( $args );

			else:

				$args = array(
					'msg_danger' => array(
						'name' => 'material_edit_err',
						'title' => 'Error al editar el material',
						'description' => 'Hubo un error al editar el material ' . $material->stock->name
						)
					);

				Audits::add(Auth::user(), $args['msg_danger'], 'UPDATE');
				return Redirect::to( $this->module['route'].'/edit/'.Crypt::encrypt($material->id) )->with( $args );

			endif;

		else:

			$args = array(
				'msg_danger' => array(
					'name' => 'material_edit_err',
					'title' => 'Error al editar el material',
					'description' => 'Hubo un error al editar el material ' . $material->stock->name . ', no se encuetra el material.'
					)
				);

			Audits::add(Auth::user(), $args['msg_danger'], 'UPDATE');
			return Redirect::to( $this->module['route'].'/edit/'.Crypt::encrypt($material->id) )->with( $args );

		endif;

	}

	/**
	 * Show the form for deleting the specified resource.
	 * GET /materials/delete/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getDelete( $idProject, $id)
	{

		$args = array(
			'material' => Materials::find( Crypt::decrypt($id) ),
			'module' => $this->module,
			);

		Audits::add(Auth::user(), array(
			'name' => 'material_get_delete',
			'title' => 'Eliminar materiales',
			'description' => 'Vizualización de materiales a eliminar'
			), 'READ');

		return View::make('materials.delete')->with($args);

	}

	/**
	 * Show the form for deleting the specified resource.
	 * POST /materials/delete/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function postDelete( $idProject, $id )
	{
		$material =  Materials::find( Crypt::decrypt($id) );

		if($material->status == 'assigned'):

			$material->stock->units += $material->units;
			
			if(!$material->stock->save()):

				$args = array(
					'msg_danger' => array(
						'name' => 'material_delete_err',
						'title' => 'Error al eliminar el material',
						'description' => 'No se pudo reasignar el material ' . $material->stock->name . ' al Stock '
						)
					);

				Audits::add(Auth::user(), $args['msg_danger'], 'DELETE');
				return Redirect::to( $this->module['route'].'/delete/'.Crypt::encrypt($material->id) )->with( $args );

			endif;

		endif;

		if($material->delete()):

			$args = array(
				'msg_success' => array(
					'name' => 'material_delete',
					'title' => 'Material eliminado',
					'description' => 'El material ' . $material->stock->name . ' fue eliminado exitosamente'
					)
				);

			Audits::add(Auth::user(), $args['msg_success'], 'DELETE');
			return Redirect::to( $this->module['route'] )->with( $args );

		else:

			$args = array(
				'msg_danger' => array(
					'name' => 'material_delete_err',
					'title' => 'Error al eliminar el material',
					'description' => 'Hubo un error al eliminar el material ' . $material->stock->name
					)
				);

			Audits::add(Auth::user(), $args['msg_danger'], 'DELETE');
			return Redirect::to( $this->module['route'].'/delete/'.Crypt::encrypt($material->id) )->with( $args );

		endif;

	}

	/**
	 * Show the form for deleting the specified resource.
	 * GET /materials/assign/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getAssign($idProject, $id)
	{

		$material = Materials::find( Crypt::decrypt($id) );

		$material->stock->units -= $material->units;

		$material->stock->save();

		$material->status = 'assigned';

		if($material->save()):

			$args = array(
				'msg_success' => array(
					'name' => 'materials_assign',
					'title' => 'Material asignado satisfactoriamente',
					'description' => 'El material ' . $material->stock->name . ' ha sido asignado exitosamente'
					)
				);

			Audits::add(Auth::user(), $args['msg_success'], 'UPDATE');

			return Redirect::to( $this->module['route'] )->with( $args );

		else:

			$args = array(
				'msg_danger' => array(
					'name' => 'materials_activate_err',
					'title' => 'Error al asignar material',
					'description' => 'Hubo un error al asignar el material ' . $material->stock->name
					)
				);

			Audits::add(Auth::user(), $args['msg_danger'], 'UPDATE');

			return Redirect::to( $this->module['route'] )->with( $args );

		endif;

	}

	/**
	 * Show the form for deleting the specified resource.
	 * GET /materials/unassign/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getUnassign($idProject, $id)
	{

		$material = Materials::find( Crypt::decrypt($id) );

		$material->stock->units += $material->units;

		$material->stock->save();

		$material->status = 'keeped';

		if($material->save()):

			$args = array(
				'msg_success' => array(
					'name' => 'materials_activate',
					'title' => 'Material rehusar satisfactoriamente',
					'description' => 'El material ' . $material->stock->name . ' ha sido rehusado exitosamente'
					)
				);

			Audits::add(Auth::user(), $args['msg_success'], 'UPDATE');

			return Redirect::to( $this->module['route'] )->with( $args );

		else:

			$args = array(
				'msg_danger' => array(
					'name' => 'materials_activate_err',
					'title' => 'Error al rehusar material',
					'description' => 'Hubo un error al rehusar el material ' . $material->stock->name
					)
				);

			Audits::add(Auth::user(), $args['msg_danger'], 'UPDATE');

			return Redirect::to( $this->module['route'] )->with( $args );

		endif;

	}

	/**
	 * Show the form for deleting the specified resource.
	 * GET /materials/request/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getRequest($idProject, $id)
	{

		$project = Projects::find( Crypt::decrypt( $idProject ) );

		$args = array(
			'project' => $project,
			'material' => Materials::find( Crypt::decrypt($id) ),
			'materials' => $project->materials,
			'users' => Users::getActive(),
			'module' => $this->module,
			);

		Audits::add(Auth::user(), array(
			'name' => 'material_get_edit',
			'title' => 'Editar materiales',
			'description' => 'Edición de materiales'
			), 'READ');

		return View::make('materials.request')->with($args);

	}

	/**
	 * Show the form for deleting the specified resource.
	 * GET /materials/request/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function postRequest($idProject, $id)
	{

		if( $project = Projects::find( Crypte::decrypt( $idProject ) ) ):
		
			if( $material = Materials::find( Crypt::decrypt( $id ) ) ):

				$provider_item = new ProviderItems();
				$provider_item->units = Input::get('units');
				$provider_item->id_stock = $material->stock->id;
				$provider_item->id_project = $material->stock->id;
				$provider_item->type = 'request';
				$provider_item->status = 'inactive';
				
				if( $provider_item->save() ):

					$args = array(
						'msg_success' => array(
							'name' => 'material_request',
							'title' => 'Material solicitado',
							'description' => 'El material ' . $material->stock->name . ' fue solicitado exitosamente'
							)
						);

					Audits::add(Auth::user(), $args['msg_success'], 'CREATE');

					return Redirect::to( $this->module['route'] )->with( $args );

				else:

					$args = array(
						'msg_danger' => array(
							'name' => 'material_request_err',
							'title' => 'Error al solicitar el material',
							'description' => 'Hubo un error al solicitar el material ' . $material->stock->name
							)
						);

					Audits::add(Auth::user(), $args['msg_danger'], 'CREATE');
					return Redirect::to( $this->module['route'].'/request/'.Crypt::encrypt($material->id) )->with( $args );

				endif;

			else:

				$args = array(
					'msg_danger' => array(
						'name' => 'material_request_err',
						'title' => 'Error al solicitar el material',
						'description' => 'Hubo un error al solicitar el material ' . $material->stock->name . ', no se encuetra el material.'
						)
					);

				Audits::add(Auth::user(), $args['msg_danger'], 'CREATE');
				return Redirect::to( $this->module['route'].'/request/'.Crypt::encrypt($material->id) )->with( $args );

			endif;

		else:

			$args = array(
				'msg_danger' => array(
					'name' => 'material_request_err',
					'title' => 'Error al solicitar el material',
					'description' => 'Hubo un error al solicitar el material ' . $material->stock->name . ', no se encuetra el proyecto.'
					)
				);

			Audits::add(Auth::user(), $args['msg_danger'], 'CREATE');
			return Redirect::to( $this->module['route'].'/create' )->with( $args );

		endif;


	}

	private function getBreadcumbs(){

		$project_breadcumb = array(
			'name' => 'Proyectos',
			'route' => '/projects'
			);

		$self_breadcumb = array(
			'name' => 'Materiales',
			'route' => self::getRoute( Request::path() )
			);

		array_push( $this->breadcrumbs, $project_breadcumb, $self_breadcumb);

		return $this->breadcrumbs;

	}

	private static function getRoute( $path ){

		$route = strstr(str_replace('/', '', strstr($path, '/') ), 'materials', true);

		return '/projects/'.$route.'/materials';

	}

}
