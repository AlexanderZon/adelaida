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
		$this->verifySession();

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
		$this->verifySession();

		$args = array(
			'route' => $this->route,
			'msg_error' => Session::get('msg_error'),
			'redirect_to' => Session::get('redirect_to'),
			);
		return View::make('auth.login')->with($args);
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
			'password' => Input::get('password')
			);

		if(Auth::attempt($credentials)):
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
		Auth::logout();

		return Redirect::to( $this->route . '/login' );
	}

	private function verifySession(){
		if( Auth::check() ):
			return Redirect::to('/');
		endif;
	}

	public function getNotpermissions(){
		return View::make('auth.notpermissions');
	}

}