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
			'incomes' => self::incomes(),
			'projects' => self::projects(),
			);
		return View::make('dashboard.index')->with($args);
	}

	private function getBreadcumbs(){

		return array();

	}

	private static function incomes(){

		$sale_orders = SaleOrders::all();
		$receipts = Receipts::all();

		$incomes = array(
			'received' => 0,
			'concreted' => 0,
			'percentage' => 0
			);

		foreach($sale_orders as $sale_order):
			$incomes['concreted'] += $sale_order->budget;
		endforeach;

		foreach($receipts as $receipt):
			$incomes['received'] += $receipt->amount;
		endforeach;

		$incomes['percentage'] = number_format($incomes['received']/$incomes['concreted']*100, 2);

		$incomes = array(
			'received' => self::format($incomes['received']),
			'concreted' => self::format($incomes['concreted']),
			'percentage' => self::format($incomes['percentage'])
			);

		return $incomes;

	}

	private static function projects(){

		$projects = Projects::getActive();

		return $projects;

	}

}