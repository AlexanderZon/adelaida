<?php

class UserController extends \BaseController {

	protected $sections = array(
		'index' => 'Todos',
		'create' => 'Nuevo',
		'edit' => 'Editar',
		'delete' => 'Delete'
		);

	public function __construct(){

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
					'name' => 'user_username_err',
					'title' => 'Error al agregar usuario',
					'description' => 'El usuario ' . Input::get('username') . ' ya existe, por favor ingrese uno diferente'
					)
				);

			return Redirect::to( $this->module['route'].'/create' )->with( $args );

		elseif( Users::hasEmail(Input::get('username')) ):

			$args = array(
				'msg_warning' => array(
					'name' => 'user_username_err',
					'title' => 'Error al agregar usuario',
					'description' => 'El usuario ' . Input::get('username') . ' ya existe, por favor ingrese uno diferente'
					)
				);

			return Redirect::to( $this->module['route'].'/create' )->with( $args );

		elseif( Input::get('password_1') != Input::get('password_2')):

			$args = array(
				'msg_warning' => array(
					'name' => 'user_password_err',
					'title' => 'Error al agregar usuario',
					'description' => 'Las contraseñas deben ser iguales'
					)
				);

			return Redirect::to( $this->module['route'].'/create' )->with( $args );


		elseif( Input::get('id_role') == 0 ):

			$args = array(
				'msg_warning' => array(
					'name' => 'user_role_err',
					'title' => 'Error al agregar usuario',
					'description' => 'Debe indicar el rol del usuario'
					)
				);

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
						'name' => 'user_create',
						'title' => 'Usuario Agregado',
						'description' => 'El usuario ' . $user->displayname . ' fue agregado exitosamente'
						)
					);

				return Redirect::to( $this->module['route'] )->with( $args );

			else:

				$args = array(
					'msg_danger' => array(
						'name' => 'user_create_err',
						'title' => 'Error al agregar usuario',
						'description' => 'Hubo un error al agregar el usuario ' . $user->displayname . ' fue agregado exitosamente'
						)
					);

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
		//
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
		//
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