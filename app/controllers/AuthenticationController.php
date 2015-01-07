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
			'redirectTo' => Session::get('redirectTo'),
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
			'email' => Input::get('login'),
			'password' => Input::get('password')
			);
		if(Auth::attempt($credentials)):
			return Redirect::to('/');
		else:
			return Redirect::to( $this->route . '/login' )->with(array('msg_error'=>'Usuario o Contraseña Inválidos'));
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

}