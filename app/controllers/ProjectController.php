<?php

class ProjectController extends \BaseController {

	protected $sections = array(
		'index' => 'Todos',
		'create' => 'Nuevo',
		'edit' => 'Editar',
		'delete' => 'Eliminar'
		);

	public function __construct(){

		$this->beforeFilter('auth');

		$this->beforeFilter('projects');

		$this->module = array(
			'route' => '/projects',
			'name' => 'projects',
			'title' => 'Proyectos',
			'description' => 'Gestión de Proyectos del Sistema',
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
	 * GET /projects
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$args = array(
			'projects' => Projects::all(),
			'module' => $this->module,
			);
		return View::make('projects.index')->with($args);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /projects/create
	 *
	 * @return Response
	 */
	public function getCreate()
	{
		$args = array(
			'projects' => Projects::all(),
			'module' => $this->module,
			'clients' => Clients::all(),
			'sellers' => Users::getSellers(),
			'invoice_accounts' => InvoiceAccounts::getActive(),
			'payment_methods' => PaymentMethods::getActive(),
			);
		return View::make('projects.create')->with($args);
	}

	/**
	 * Show the form for creating a new resource.
	 * POST /projects/create
	 *
	 * @return Response
	 */
	public function postCreate()
	{

		if($project = SaleOrders::existsCorrelative(Input::get('correlative'))):

			$args = array(
				'msg_danger' => array(
					'name' => 'project_correlative_err',
					'title' => 'Error al agregar el proyecto',
					'description' => 'El Correlativo de Orden de Compra ' . Input::get('correlative') . ' ya existe.'
					)
				);

			return Redirect::to( $this->module['route'].'/create' )->with( $args );

		elseif($project = Projects::existsCode(Input::get('code'))):

			$args = array(
				'msg_danger' => array(
					'name' => 'project_code_err',
					'title' => 'Error al agregar el proyecto',
					'description' => 'El Código del Proyecto ' . Input::get('code') . ' ya existe.'
					)
				);

			return Redirect::to( $this->module['route'].'/create' )->with( $args );

   		elseif(Input::get('budget') < Input::get('advancement')):

			$args = array(
				'msg_danger' => array(
					'name' => 'project_advancement_err',
					'title' => 'Error al agregar el proyecto',
					'description' => 'El Adelanto con valor '.Input::get('advancement').' no debe ser mayor que el presupuesto con valor ' . Input::get('budget')
					)
				);

			return Redirect::to( $this->module['route'].'/create' )->with( $args );

   		else:

			$project = new Projects();
			$project->name = Input::get('name');
			$project->code = Input::get('code');
			$project->description = Input::get('description');
			$project->status = 'active';
			
			if( $project->save() ):

	   			$sale_order = new SaleOrders();
	   			$sale_order->correlative = Input::get('correlative');
	   			$sale_order->budget = Input::get('budget');
	   			$sale_order->id_client = Input::get('id_client');
	   			$sale_order->id_seller = Input::get('id_seller');
	   			$sale_order->id_project = $project->id;
	   			$sale_order->date = date('Y-m-d', strtotime(Input::get('date')));
	   			$sale_order->period_days = Input::get('period_days');
	   			$sale_order->status = 'active';

	   			if($sale_order->save()):

	   				if(Input::get('advancement') > 0):

	   					$receipt = new Receipts();
	   					$receipt->name = 'Adelanto de Proyecto';
	   					$receipt->description = 'Adelanto para Proyecto: '.$project->name;
	   					$receipt->id_payment_method = Input::get('id_payment_method');
	   					/*$receipt->id_invoice_account = Input::get('id_invoice_account');*/
	   					$receipt->id_sale_order = $sale_order->id;
	   					$receipt->amount = Input::get('advancement');
	   					$receipt->type = 'advancement';
	   					$receipt->status = 'active';

	   					if($receipt->save()):

							$args = array(
								'msg_success' => array(
									'name' => 'project_create',
									'title' => 'Proyecto Agregado',
									'description' => 'El proyetco ' . $project->first_name . ' ' . $project->last_name . ' fue agregado exitosamente, Orden de Compra '.$sale_order->correlative.' generada, Recibo de avance por '.$receipt->amount.' Bsf. generado.'
									)
								);

							return Redirect::to( $this->module['route'] )->with( $args );

	   					else:

	   						$sale_order->delete();
	   						$project->delete();

							$args = array(
								'msg_danger' => array(
									'name' => 'project_create_err',
									'title' => 'Error al agregar el proyecto',
									'description' => 'Hubo un error al agregar el proyecto ' . $project->name . ' al momento de generar el recibo de adelanto'
									)
								);

							return Redirect::to( $this->module['route'].'/create' )->with( $args );

	   					endif;

	   				else:

						$args = array(
							'msg_success' => array(
								'name' => 'project_create',
								'title' => 'Proyecto Agregado',
								'description' => 'El proyetco ' . $project->first_name . ' ' . $project->last_name . ' fue agregado exitosamente'
								)
							);

						return Redirect::to( $this->module['route'] )->with( $args );

	   				endif;

	   			else:

	   				$project->delete();

					$args = array(
						'msg_danger' => array(
							'name' => 'project_create_err',
							'title' => 'Error al agregar el proyecto',
							'description' => 'Hubo un error al agregar el proyecto ' . $project->name . ' al momento de generar la orden de compra'
							)
						);

					return Redirect::to( $this->module['route'].'/create' )->with( $args );

	   			endif;

			else:

				$args = array(
					'msg_danger' => array(
						'name' => 'project_create_err',
						'title' => 'Error al agregar el proyecto',
						'description' => 'Hubo un error al agregar el proyecto ' . $project->name
						)
					);

				return Redirect::to( $this->module['route'].'/create' )->with( $args );

			endif;

	   	endif;

	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /projects/edit/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getEdit($id)
	{
		$args = array(
			'project' => Projects::find( Crypt::decrypt($id) ),
			'module' => $this->module,
			);

		return View::make('projects.edit')->with($args);

	}

	/**
	 * Show the form for editing the specified resource.
	 * POST /projects/edit/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function postEdit($id)
	{

		$project = Projects::find( Crypt::decrypt($id) );

		if(Projects::exists(Input::get('identification_number'), $project)):

			$args = array(
				'msg_danger' => array(
					'name' => 'project_identification_err',
					'title' => 'Error al editar el proyecto',
					'description' => 'Ya existe una proyecto con la Cédula ' . Input::get('identification_number')
					)
				);

			return Redirect::to( $this->module['route'].'/edit/'.Crypt::encrypt($project->id) )->with( $args );

		else:

			$project->first_name = Input::get('first_name');
			$project->last_name = Input::get('last_name');
			$project->identification_number = Input::get('identification_number');
			$project->email = Input::get('email');
			$project->phone = Input::get('phone');
			$project->type = 'project';
			$project->status = 'active';
			
			if( $project->save() ):

				$args = array(
					'msg_success' => array(
						'name' => 'project_edit',
						'title' => 'Proyecto Editada',
						'description' => 'El proyetco ' . $project->first_name . ' ' . $project->last_name . ' fue editada exitosamente'
						)
					);

				return Redirect::to( $this->module['route'] )->with( $args );

			else:

				$args = array(
					'msg_danger' => array(
						'name' => 'project_edit_err',
						'title' => 'Error al editar el proyecto',
						'description' => 'Hubo un error al editar el proyecto ' . $project->first_name . ' ' . $project->last_name 
						)
					);

				return Redirect::to( $this->module['route'].'/edit/'.Crypt::encrypt($project->id) )->with( $args );

			endif;

		endif;

	}

	/**
	 * Show the form for deleting the specified resource.
	 * GET /projects/delete/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getDelete($id)
	{

		$args = array(
			'project' => Projects::find( Crypt::decrypt($id) ),
			'module' => $this->module,
			);

		return View::make('projects.delete')->with($args);

	}

	/**
	 * Show the form for deleting the specified resource.
	 * POST /projects/delete/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function postDelete($id)
	{
		$project =  Projects::find( Crypt::decrypt($id) );

		if($project->delete()):

			$args = array(
				'msg_success' => array(
					'name' => 'project_delete',
					'title' => 'Proyecto Eliminada',
					'description' => 'El proyetco ' . $project->first_name . ' ' . $project->last_name . ' fue eliminada exitosamente'
					)
				);

			return Redirect::to( $this->module['route'] )->with( $args );

		else:

			$args = array(
				'msg_danger' => array(
					'name' => 'project_delete_err',
					'title' => 'Error al eliminar el proyecto',
					'description' => 'Hubo un error al eliminar el proyecto ' . $project->first_name . ' ' . $project->last_name 
					)
				);

			return Redirect::to( $this->module['route'].'/delete/'.Crypt::encrypt($project->id) )->with( $args );

		endif;
	}

	private function getBreadcumbs(){

		$self_breadcumb = array(
			'name' => 'Proyectos',
			'route' => '/projects'
			);

		array_push( $this->breadcumbs, $self_breadcumb);

		return $this->breadcumbs;

	}

}
