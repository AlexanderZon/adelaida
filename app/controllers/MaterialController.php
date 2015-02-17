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

			$material = new Materials();
			$material->name = Input::get('name');
			$material->description = Input::get('description');
			$material->hours = Input::get('hours');
			$material->id_project = $project->id;
			$material->id_parent = Input::get('id_parent');
			$material->status = 'inactive';
			
			if( $material->save() ):

				$users = Input::get('users') != null ? Input::get('users') : array();
		
				if($material->users()->sync($users)):

					$args = array(
						'msg_success' => array(
							'name' => 'material_create',
							'title' => 'Material agregada',
							'description' => 'La material ' . $material->title . ' fue agregada exitosamente'
							)
						);

					Audits::add(Auth::user(), $args['msg_success'], 'CREATE');
					return Redirect::to( $this->module['route'] )->with( $args );

				else:

					$material->delete();

					$args = array(
						'msg_danger' => array(
							'name' => 'material_assign_err',
							'title' => 'Error al agregar la material',
							'description' => 'Hubo un error al asignar los responsables'
							)
						);

					Audits::add(Auth::user(), $args['msg_danger'], 'UPDATE');
					return Redirect::to( $this->module['route'].'/assign/'.Crypt::encrypt($material->id) )->with( $args );

				endif;

			else:

				$args = array(
					'msg_danger' => array(
						'name' => 'material_create_err',
						'title' => 'Error al agregar la material',
						'description' => 'Hubo un error al agregar la material ' . $material->title
						)
					);

				Audits::add(Auth::user(), $args['msg_danger'], 'CREATE');
				return Redirect::to( $this->module['route'].'/create' )->with( $args );

			endif;

		else:

			$args = array(
				'msg_danger' => array(
					'name' => 'material_create_err',
					'title' => 'Error al agregar la material',
					'description' => 'Hubo un error al agregar la material ' . $material->title . ', no se encuetra el proyecto.'
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

		$project = ProjectS::find( Crypt::decrypt( $idProject ) );

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

			$material->name = Input::get('name');
			$material->description = Input::get('description');
			$material->hours = Input::get('hours');
			$material->id_parent = Input::get('id_parent');
			$material->status = 'inactive';
			
			if( $material->save() ):

				$users = Input::get('users') != null ? Input::get('users') : array();
		
				if($material->users()->sync($users)):

					$args = array(
						'msg_success' => array(
							'name' => 'material_edit',
							'title' => 'Material editada',
							'description' => 'La material ' . $material->title . ' fue editada exitosamente'
							)
						);

					Audits::add(Auth::user(), $args['msg_success'], 'UPDATE');

					return Redirect::to( $this->module['route'] )->with( $args );

				else:

					$material->delete();

					$args = array(
						'msg_danger' => array(
							'name' => 'material_assign_err',
							'title' => 'Error al editar la material',
							'description' => 'Hubo un error al asignar los responsables'
							)
						);

					Audits::add(Auth::user(), $args['msg_danger'], 'UPDATE');
					return Redirect::to( $this->module['route'].'/edit/'.Crypt::encrypt($material->id) )->with( $args );

				endif;

			else:

				$args = array(
					'msg_danger' => array(
						'name' => 'material_edit_err',
						'title' => 'Error al editar la material',
						'description' => 'Hubo un error al editar la material ' . $material->title
						)
					);

				Audits::add(Auth::user(), $args['msg_danger'], 'UPDATE');
				return Redirect::to( $this->module['route'].'/edit/'.Crypt::encrypt($material->id) )->with( $args );

			endif;

		else:

			$args = array(
				'msg_danger' => array(
					'name' => 'material_edit_err',
					'title' => 'Error al editar la material',
					'description' => 'Hubo un error al editar la material ' . $material->title . ', no se encuetra la material.'
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

		if($material->delete()):

			$args = array(
				'msg_success' => array(
					'name' => 'material_delete',
					'title' => 'Material eliminada',
					'description' => 'La material ' . $material->title . ' fue eliminada exitosamente'
					)
				);

			Audits::add(Auth::user(), $args['msg_success'], 'DELETE');
			return Redirect::to( $this->module['route'] )->with( $args );

		else:

			$args = array(
				'msg_danger' => array(
					'name' => 'material_delete_err',
					'title' => 'Error al eliminar la material',
					'description' => 'Hubo un error al eliminar la material ' . $material->title
					)
				);

			Audits::add(Auth::user(), $args['msg_danger'], 'DELETE');
			return Redirect::to( $this->module['route'].'/delete/'.Crypt::encrypt($material->id) )->with( $args );

		endif;
	}

	/**
	 * Show the form for deleting the specified resource.
	 * GET /materials/delete/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getActivate($idProject, $id)
	{

		$material = Materials::find( Crypt::decrypt($id) );

		$material->status = 'active';

		if($material->save()):

			$args = array(
				'msg_success' => array(
					'name' => 'materials_activate',
					'title' => 'Material iniciada satisfactoriamente',
					'description' => 'La material ' . $material->name . ' ha sido iniciada exitosamente'
					)
				);

			Audits::add(Auth::user(), $args['msg_success'], 'UPDATE');

			return Redirect::to( $this->module['route'] )->with( $args );

		else:

			$args = array(
				'msg_danger' => array(
					'name' => 'materials_activate_err',
					'title' => 'Error al activar material',
					'description' => 'hubo un error al activar la material ' . $material->name
					)
				);

			Audits::add(Auth::user(), $args['msg_danger'], 'UPDATE');

			return Redirect::to( $this->module['route'] )->with( $args );

		endif;

	}

	/**
	 * Show the form for deleting the specified resource.
	 * GET /materials/done/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getDone($idProject, $id)
	{

		$material = Materials::find( Crypt::decrypt($id) );

		$material->status = 'done';

		if($material->save()):

			$args = array(
				'msg_success' => array(
					'name' => 'materials_done',
					'title' => 'Material finalizada satisfactoriamente',
					'description' => 'El material ' . $material->name . ' ha sido finalizada exitosamente'
					)
				);

			Audits::add(Auth::user(), $args['msg_success'], 'UPDATE');

			return Redirect::to( $this->module['route'] )->with( $args );

		else:

			$args = array(
				'msg_danger' => array(
					'name' => 'materials_done_err',
					'title' => 'Error al finalizar material',
					'description' => 'hubo un error al finalizar la material ' . $material->name
					)
				);

			Audits::add(Auth::user(), $args['msg_danger'], 'UPDATE');

			return Redirect::to( $this->module['route'] )->with( $args );

		endif;

	}

	/**
	 * Show the form for deleting the specified resource.
	 * GET /materials/undone/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getUndone($idProject, $id)
	{

		$material = Materials::find( Crypt::decrypt($id) );

		$material->status = 'active';

		if($material->save()):

			$args = array(
				'msg_success' => array(
					'name' => 'materials_undone',
					'title' => 'Material regresada satisfactoriamente',
					'description' => 'La material ' . $material->name . ' ha sido regresada exitosamente'
					)
				);

			Audits::add(Auth::user(), $args['msg_success'], 'UPDATE');

			return Redirect::to( $this->module['route'] )->with( $args );

		else:

			$args = array(
				'msg_danger' => array(
					'name' => 'materials_undone_err',
					'title' => 'Error al regresar material',
					'description' => 'hubo un error al regresar la material ' . $material->name
					)
				);

			Audits::add(Auth::user(), $args['msg_danger'], 'UPDATE');

			return Redirect::to( $this->module['route'] )->with( $args );

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
