<?php

class DashboardController extends \BaseController {

	protected $sections = array(
		'index' => 'Inicio',
		);

	public function __construct(){

		$this->beforeFilter('auth');

		$this->beforeFilter('capabilities');

		$this->module = array(
			'route' => '/',
			'name' => 'dashboard',
			'title' => 'Escritorio',
			'description' => 'Estadísticas y Reportes',
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
	 * GET /
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$args = array(
			'module' => $this->module,
			'audits' => Audits::orderBy('created_at','DESC')->take(100)->get(),
			);
		return View::make('hello')->with($args);
	}

	private function getBreadcumbs(){

		return array();

	}

}