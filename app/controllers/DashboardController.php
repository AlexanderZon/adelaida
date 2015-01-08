<?php

class DashboardController extends \BaseController {

	protected $route = '/';

	/**
	 * Display a listing of the resource.
	 * GET /
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		return View::make('hello');
	}

}