<?php

class BaseController extends Controller {

	protected $breadcrumbs = array(
		array(
			'name' => 'Escritorio',
			'route' => '/'
			),
		);

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

}
