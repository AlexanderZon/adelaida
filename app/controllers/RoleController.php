<?php

class RoleController extends \BaseController {

	protected $sections = array(
		'index' => 'Todos',
		'create' => 'Nuevo',
		'edit' => 'Editar',
		'assign' => 'Asignar',
		'delete' => 'Eliminar'
		);

	public function __construct(){

		$this->beforeFilter('auth');

		$this->beforeFilter('capabilities');

		$this->module = array(
			'route' => '/roles',
			'name' => 'roles',
			'title' => 'Roles',
			'description' => 'Gestión de Roles del Sistema',
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
	 * GET /roles
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$args = array(
			'roles' => Roles::all(),
			'module' => $this->module,
			);
		return View::make('roles.index')->with($args);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /roles/create
	 *
	 * @return Response
	 */
	public function getCreate()
	{
		$args = array(
			'roles' => Roles::all(),
			'module' => $this->module,
			);
		return View::make('roles.create')->with($args);
	}

	/**
	 * Show the form for creating a new resource.
	 * POST /roles/create
	 *
	 * @return Response
	 */
	public function postCreate()
	{

		if(!Roles::hasName(Input::get('name'))):

			$role = new Roles();
			$role->description = Input::get('description');
			$role->name = Input::get('name');
			
			if( $role->save() ):

				$args = array(
					'msg_success' => array(
						'name' => 'role_create',
						'title' => 'Rol Agregado',
						'description' => 'El rol ' . $role->title . ' fue agregado exitosamente'
						)
					);

				return Redirect::to( $this->module['route'] )->with( $args );

			else:

				$args = array(
					'msg_danger' => array(
						'name' => 'role_create_err',
						'title' => 'Error al agregar el rol',
						'description' => 'Hubo un error al agregar el rol ' . $role->title
						)
					);

				return Redirect::to( $this->module['route'].'/create' )->with( $args );

			endif;

		else:

			$args = array(
				'msg_warning' => array(
					'name' => 'role_name_err',
					'title' => 'Error al agregar el rol',
					'description' => 'Error: el nombre ' . Input::get('name') . ' ya existe, intente con uno diferente.'
					)
				);

			return Redirect::to( $this->module['route'].'/create' )->with( $args );

		endif;

	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /roles/edit/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getEdit($id)
	{
		$args = array(
			'role' => Roles::find( Crypt::decrypt($id) ),
			'roles' => Roles::all(),
			'module' => $this->module,
			);
		return View::make('roles.edit')->with($args);
	}

	/**
	 * Show the form for editing the specified resource.
	 * POST /roles/edit/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function postEdit($id)
	{
			
		$role = Roles::find( Crypt::decrypt($id) );

		if(!Roles::hasName(Input::get('name'), $role->id) ):
		
			$role->description = Input::get('description');
			$role->name = Input::get('name');
			
			if( $role->save() ):

				$args = array(
					'msg_success' => array(
						'name' => 'role_edit',
						'title' => 'Rol Editado',
						'description' => 'El rol ' . $role->title . ' fue editado exitosamente'
						)
					);

				return Redirect::to( $this->module['route'] )->with( $args );

			else:

				$args = array(
					'msg_danger' => array(
						'name' => 'role_edit_err',
						'title' => 'Error al editar el rol',
						'description' => 'Hubo un error al editar el rol ' . $role->title
						)
					);

				return Redirect::to( $this->module['route'].'/edit/'.Crypt::encrypt($role->id) )->with( $args );

			endif;
		else:

			$args = array(
				'msg_warning' => array(
					'name' => 'role_name_err',
					'title' => 'Error al editar el rol',
					'description' => 'Error: el nombre ' . Input::get('name') . ' ya existe, intente con uno diferente.'
					)
				);

			return Redirect::to( $this->module['route'].'/edit/'.Crypt::encrypt($role->id) )->with( $args );

		endif;
	}

	/**
	 * Show the form for deleting the specified resource.
	 * GET /roles/assign/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */

	public function getAssign($id)
	{
		
		$args = array(
			'role' => Roles::find( Crypt::decrypt($id) ),
			'capabilities' => Capabilities::orderBy('title','ASC')->get(),
			'module' => $this->module,
			);

		return View::make('roles.assign')->with( $args );

	}

	/**
	 * Show the form for deleting the specified resource.
	 * POST /roles/assign/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */

	public function postAssign($id)
	{
		
		$role = Roles::find( Crypt::decrypt($id) );

		$capabilities = Input::get('capabilities');
		
		if($role->capabilities()->sync($capabilities)):
			$args = array(
				'msg_success' => array(
					'name' => 'role_assign',
					'title' => 'Capacidades Asignadas',
					'description' => 'Las capacidades fueron exitosamente asignadas'
					)
				);

			return Redirect::to( $this->module['route'] )->with( $args );
		else:
			$args = array(
				'msg_danger' => array(
					'name' => 'role_assign_err',
					'title' => 'Error al Asignar las Capacidades',
					'description' => 'Hubo un error al asignar las capacidades '
					)
				);

			return Redirect::to( $this->module['route'].'/assign/'.Crypt::encrypt($role->id) )->with( $args );
		endif;

	}

	/**
	 * Show the form for deleting the specified resource.
	 * GET /roles/delete/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getDelete($id)
	{
		$args = array(
			'role' => Roles::find( Crypt::decrypt($id) ),
			'roles' => Roles::all(),
			'module' => $this->module,
			);
		return View::make('roles.delete')->with($args);
	}

	/**
	 * Show the form for deleting the specified resource.
	 * POST /roles/delete/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function postDelete($id)
	{
		$role =  Roles::find( Crypt::decrypt($id) );

		if($role->delete()):

			$args = array(
				'msg_success' => array(
					'name' => 'role_delete',
					'title' => 'Rol Eliminado',
					'description' => 'El rol ' . $role->title . ' fue eliminado exitosamente'
					)
				);

			return Redirect::to( $this->module['route'] )->with( $args );

		else:

			$args = array(
				'msg_danger' => array(
					'name' => 'role_delete_err',
					'title' => 'Error al eliminar el rol',
					'description' => 'Hubo un error al eliminar el rol ' . $role->title
					)
				);

			return Redirect::to( $this->module['route'].'/delete/'.Crypt::encrypt($role->id) )->with( $args );

		endif;
	}

	private function getBreadcumbs(){

		$self_breadcumb = array(
			'name' => 'Roles',
			'route' => '/roles'
			);

		array_push( $this->breadcumbs, $self_breadcumb);

		return $this->breadcumbs;

	}

}