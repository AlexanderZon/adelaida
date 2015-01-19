<?php

class UserController extends \BaseController {

	protected $sections = array(
		'index' => 'Todos',
		'create' => 'Nuevo',
		'edit' => 'Editar',
		'delete' => 'Delete'
		);

	public function __construct(){

		$this->beforeFilter('auth');

		$this->beforeFilter('capabilities');

		$this->module = array(
			'route' => '/users',
			'name' => 'users',
			'title' => 'Usuarios',
			'description' => 'Gestión de Usuarios del Sistema',
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
	 * GET /users
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$args = array(
			'users' => Users::all(),
			'roles' => Roles::all(),
			'module' => $this->module,
			);
		return View::make('users.index')->with($args);
	}

	/**
	 * Display a listing of the resource.
	 * POST /users
	 *
	 * @return Response
	 */
	public function postIndex()
	{
		$users = Users::all();

		$args = array(
			'data' => array()
			);

		foreach($users as $user):
			$args['data'][] = array(
				'bulk' => '<input type="checkbox" name="bulk[]" value="'.Crypt::encrypt($user->id).'"/>',
				'first_name' => Input::get('bulk'),
				'last_name' => '',
				'username' => $user->username,
				'email' => $user->email,
				'role' => '',
				'status' => $user->status,
				'actions' => ''
				);
		endforeach;
		/*$args = array(
			'data' => array(
				array( "Tiger Nixon", "System Architect", "Edinburgh", "5421", "2011/04/25", "$320,800" ),
				array( "Tiger Nixon", "System Architect", "Edinburgh", "5421", "2011/04/25", "$320,800" ),
				array( "Tiger Nixon", "System Architect", "Edinburgh", "5421", "2011/04/25", "$320,800" ),
				array( "Tiger Nixon", "System Architect", "Edinburgh", "5421", "2011/04/25", "$320,800" ),
				array( "Tiger Nixon", "System Architect", "Edinburgh", "5421", "2011/04/25", "$320,800" ),
				array( "Tiger Nixon", "System Architect", "Edinburgh", "5421", "2011/04/25", "$320,800" ),
				array( "Tiger Nixon", "System Architect", "Edinburgh", "5421", "2011/04/25", "$320,800" ),
				)
			);*/
		return Response::json($args);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /users/create
	 *
	 * @return Response
	 */
	public function getCreate()
	{
		$args = array(
			'users' => Users::all(),
			'roles' => Roles::all(),
			'module' => $this->module,
			);
		return View::make('users.create')->with($args);
	}

	/**
	 * Show the form for creating a new resource.
	 * POST /users/create
	 *
	 * @return Response
	 */
	public function postCreate()
	{

		if( Users::hasUsername(Input::get('username')) ):

			$args = array(
				'msg_warning' => array(
					'name' => 'users_username_err',
					'title' => 'Error al agregar usuario',
					'description' => 'El usuario ' . Input::get('username') . ' ya existe, por favor ingrese uno diferente'
					)
				);

			Audits::add(Auth::user(), $args['msg_warning'], 'CREATE');

			return Redirect::to( $this->module['route'].'/create' )->with( $args );

		elseif( Users::hasEmail(Input::get('email')) ):

			$args = array(
				'msg_warning' => array(
					'name' => 'users_email_err',
					'title' => 'Error al agregar usuario',
					'description' => 'El correo ' . Input::get('email') . ' ya existe, por favor ingrese uno diferente'
					)
				);

			Audits::add(Auth::user(), $args['msg_warning'], 'CREATE');

			return Redirect::to( $this->module['route'].'/create' )->with( $args );

		elseif( strlen(Input::get('password_1')) < 6 ):

			$args = array(
				'msg_warning' => array(
					'name' => 'users_password_err',
					'title' => 'Error al agregar usuario',
					'description' => 'La contraseña debe contener más de 5 caracteres'
					)
				);
		
			Audits::add(Auth::user(), $args['msg_warning'], 'CREATE');

			return Redirect::to( $this->module['route'].'/create' )->with( $args );

		elseif( Input::get('password_1') != Input::get('password_2')):

			$args = array(
				'msg_warning' => array(
					'name' => 'users_password_err',
					'title' => 'Error al agregar usuario',
					'description' => 'Las contraseñas deben ser iguales'
					)
				);

			Audits::add(Auth::user(), $args['msg_warning'], 'CREATE');

			return Redirect::to( $this->module['route'].'/create' )->with( $args );


		elseif( Input::get('id_role') == 0 ):

			$args = array(
				'msg_warning' => array(
					'name' => 'users_role_err',
					'title' => 'Error al agregar usuario',
					'description' => 'Debe indicar el rol del usuario'
					)
				);

			Audits::add(Auth::user(), $args['msg_warning'], 'CREATE');

			return Redirect::to( $this->module['route'].'/create' )->with( $args );

		else:

			$user = new Users();
			$user->first_name = Input::get('first_name');
			$user->last_name = Input::get('last_name');
			$user->username = Input::get('username');
			$user->displayname = Input::get('displayname') != '' ? Input::get('displayname') : Input::get('first_name').' '.Input::get('last_name');
			$user->email = Input::get('email');
			$user->password = Hash::make(Input::get('password'));
			$user->id_role = Input::get('id_role');
			$user->status = 'inactive';
			
			if( $user->save() ):

				$args = array(
					'msg_success' => array(
						'name' => 'users_create',
						'title' => 'Usuario Agregado',
						'description' => 'El usuario ' . $user->displayname . ' fue agregado exitosamente'
						)
					);

				Audits::add(Auth::user(), $args['msg_success'], 'CREATE');

				return Redirect::to( $this->module['route'] )->with( $args );

			else:

				$args = array(
					'msg_danger' => array(
						'name' => 'users_create_err',
						'title' => 'Error al agregar usuario',
						'description' => 'Hubo un error al agregar el usuario ' . $user->displayname
						)
					);

				Audits::add(Auth::user(), $args['msg_danger'], 'CREATE');

				return Redirect::to( $this->module['route'].'/create' )->with( $args );

			endif;

		endif;
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /users/edit/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getEdit($id)
	{
		$args = array(
			'user' => Users::find( Crypt::decrypt($id) ),
			'roles' => Roles::all(),
			'module' => $this->module,
			);
		return View::make('users.edit')->with($args);
	}

	/**
	 * Show the form for editing the specified resource.
	 * POST /users/edit/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function postEdit($id)
	{

		$user = Users::find(Crypt::decrypt($id));

		if( Users::hasUsername(Input::get('username'), $user->id ) ):

			$args = array(
				'msg_warning' => array(
					'name' => 'users_username_err',
					'title' => 'Error al editar usuario',
					'description' => 'El usuario ' . Input::get('username') . ' ya existe, por favor ingrese uno diferente'
					)
				);

			return Redirect::to( $this->module['route'].'/edit/'.Crypt::encrypt($user->id) )->with( $args );

		elseif( Users::hasEmail(Input::get('email'), $user->id) ):

			$args = array(
				'msg_warning' => array(
					'name' => 'users_email_err',
					'title' => 'Error al editar usuario',
					'description' => 'El correo ' . Input::get('email') . ' ya existe, por favor ingrese uno diferente'
					)
				);

			return Redirect::to( $this->module['route'].'/edit/'.Crypt::encrypt($user->id) )->with( $args );

		elseif( strlen(Input::get('password_1')) < 6 AND strlen(Input::get('password_1')) > 0):

			$args = array(
				'msg_warning' => array(
					'name' => 'users_password_err',
					'title' => 'Error al editar usuario',
					'description' => 'La contraseña debe contener más de 5 caracteres'
					)
				);

			return Redirect::to( $this->module['route'].'/edit/'.Crypt::encrypt($user->id) )->with( $args );

		elseif( Input::get('password_1') != Input::get('password_2')):

			$args = array(
				'msg_warning' => array(
					'name' => 'users_password_err',
					'title' => 'Error al editar usuario',
					'description' => 'Las contraseñas deben ser iguales'
					)
				);

			return Redirect::to( $this->module['route'].'/edit/'.Crypt::encrypt($user->id) )->with( $args );

		elseif( Input::get('id_role') == 0 ):

			$args = array(
				'msg_warning' => array(
					'name' => 'users_role_err',
					'title' => 'Error al editar usuario',
					'description' => 'Debe indicar el rol del usuario'
					)
				);

			return Redirect::to( $this->module['route'].'/edit/'.Crypt::encrypt($user->id) )->with( $args );

		else:

			$user->first_name = Input::get('first_name');
			$user->last_name = Input::get('last_name');
			$user->username = Input::get('username');
			$user->displayname = Input::get('displayname') != '' ? Input::get('displayname') : Input::get('first_name').' '.Input::get('last_name');
			$user->email = Input::get('email');
			$user->password = Input::get('password') != '' ? Hash::make(Input::get('password')) : $user->password;
			$user->id_role = Input::get('id_role');
			$user->status = 'inactive';

			if( $user->save() ):

				$args = array(
					'msg_success' => array(
						'name' => 'users_edit',
						'title' => 'Usuario Editado',
						'description' => 'El usuario ' . $user->displayname . ' fue editado exitosamente'
						)
					);

				return Redirect::to( $this->module['route'] )->with( $args );

			else:

				$args = array(
					'msg_danger' => array(
						'name' => 'users_edit_err',
						'title' => 'Error al editar usuario',
						'description' => 'Hubo un error al editar el usuario ' . $user->displayname
						)
					);

				return Redirect::to( $this->module['route'].'/edit/'.Crypt::encrypt($user->id) )->with( $args );

			endif;

		endif;
	}

	/**
	 * Show the form for deleting the specified resource.
	 * GET /users/delete/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getDelete($id)
	{
		$args = array(
			'user' => Users::find( Crypt::decrypt($id) ),
			'roles' => Roles::all(),
			'module' => $this->module,
			);
		return View::make('users.delete')->with($args);
	}

	/**
	 * Show the form for deleting the specified resource.
	 * POST /users/delete/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function postDelete($id)
	{
		$user = Users::find(Crypt::decrypt($id));

		if($user->delete()):

			$args = array(
				'msg_success' => array(
					'name' => 'users_delete',
					'title' => 'Usuario Eliminado',
					'description' => 'El usuario ' . $user->displayname . ' fue eliminado exitosamente'
					)
				);

			return Redirect::to( $this->module['route'] )->with( $args );

		else:

			$args = array(
				'msg_danger' => array(
					'name' => 'users_delete_err',
					'title' => 'Error al eliminar usuario',
					'description' => 'Hubo un error al eliminar el usuario ' . $user->displayname
					)
				);

			return Redirect::to( $this->module['route'].'/delete/'.Crypt::encrypt($user->id) )->with( $args );

		endif;

	}

	private function getBreadcumbs(){

		$self_breadcumb = array(
			'name' => 'Usuarios',
			'route' => '/users'
			);

		array_push( $this->breadcumbs, $self_breadcumb);

		return $this->breadcumbs;

	}

}