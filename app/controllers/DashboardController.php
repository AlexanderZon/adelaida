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
			'breadcrumbs' => $this->getBreadcumbs(),
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
			'tasks' => self::tasks(),
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

		$actives = Projects::getActive();
		$inactives = Projects::getInactive();

		$args = array(
			'all' => count($actives) + count($inactives),
			'active_percentage' => number_format(count($actives)/(count($actives) + count($inactives))*100, 2),
			'actives' => $actives,
			'inactive' => $inactives,
			);

		return $args;

	}

	private static function tasks(){

		$projects = Projects::getActive();

		$done = array();
		$inactive = array();
		$active = array();

		foreach( $projects as $project ):

			foreach( $project->tasks as $task ):

				if( $task->status == 'done' ):

					$done[] = $task;

				elseif( $task->status == 'active' ):

					$active[] = $task;

				else:

					$inactive[] = $task;

				endif;

			endforeach;

		endforeach;

		$args = array(
			'all' => count($active)+count($inactive)+count($done),
			'done' => $done,
			'active' => $active,
			'inactive' => $inactive,
			'done_percentage' => number_format(count($done)/(count($done)+count($active)+count($inactive))*100, 2),
			);

		return $args;

	}

}