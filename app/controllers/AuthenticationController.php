<?php

class AuthenticationController extends \BaseController {

	protected $route = '/auth';

	/**
	 * Display a listing of the resource.
	 * GET /auth
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		if($this->verifySession()) return Redirect::to('/');

		return Redirect::to( $this->route . '/login' );
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /auth/login
	 *
	 * @return Response
	 */
	public function getLogin()
	{

		if($this->verifySession()):
			return Redirect::to('/');
			// dd("sesion");

		else:

			$args = array(
				'route' => $this->route,
				'msg_error' => Session::get('msg_error'),
				'redirect_to' => Session::get('redirect_to'),
				);
			return View::make('auth.login')->with($args);
			
		endif;
	}

	/**
	 * Show the form for creating a new resource.
	 * POST /auth/login
	 *
	 * @return Response
	 */
	public function postLogin()
	{
		$credentials = array(
			'username' => Input::get('username'),
			'password' => Input::get('password'),
			'status' => 'active'
			);
		if(Auth::attempt($credentials)):

			Audits::add(Auth::user(), array(
				'name' => 'auth_login',
				'title' => 'Inicio de Sesión',
				'description' => 'El usuario ' . Auth::user()->username . ' ha Iniciado Sesión'
				), 'CREATE');

			if(Input::get('redirect_to') != ''):

				return Redirect::to( Input::get('redirect_to') );

			else:

				return Redirect::to('/');

			endif;

		else:
			$args = array(
				'msg_error'=>'Usuario o Contraseña Inválidos',
				'redirect_to' => Input::get('redirect_to')
				);
				return Redirect::to( $this->route . '/login' )->with( $args );
		endif;
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /auth/logout
	 *
	 * @return Response
	 */
	public function getLogout()
	{

		Audits::add(Auth::user(), array(
			'name' => 'auth_logout',
			'title' => 'Cierre de Sesión',
			'description' => 'El usuario ' . Auth::user()->username . ' ha Cerrado Sesión'
			), 'DELETE');

		Auth::logout();

		return Redirect::to( $this->route . '/login' );
	}

	private function verifySession(){
		if( Auth::check() ):
			return true;
		else:
			return false;
		endif;
	}

	public function getNotpermissions(){
		return View::make('auth.notpermissions');
	}

}