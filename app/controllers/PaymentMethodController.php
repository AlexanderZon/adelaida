<?php

class PaymentMethodController extends \BaseController {

	protected $sections = array(
		'index' => 'Todos',
		'create' => 'Nuevo',
		'edit' => 'Editar',
		'delete' => 'Eliminar'
		);

	public function __construct(){

		$this->beforeFilter('auth');

		$this->beforeFilter('payment_methods');

		$this->module = array(
			'route' => '/payment_methods',
			'name' => 'payment_methods',
			'title' => 'Métodos de Pago',
			'description' => 'Gestión de Métodos de Pago del Sistema',
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
	 * GET /payment_methods
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$args = array(
			'payment_methods' => PaymentMethods::all(),
			'module' => $this->module,
			);
		Audits::add(Auth::user(), array(
			'name' => 'payment_method_get_index',
			'title' => 'Listado de Métodos de Pago',
			'description' => 'Vizualización del listado de métodos de pago'
			), 'READ');
		return View::make('payment_methods.index')->with($args);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /payment_methods/create
	 *
	 * @return Response
	 */
	public function getCreate()
	{
		$args = array(
			'payment_methods' => PaymentMethods::all(),
			'module' => $this->module,
			);
		Audits::add(Auth::user(), array(
			'name' => 'payment_method_get_create',
			'title' => 'Añadir Métodos de Pago',
			'description' => 'Adición de métodos de pago'
			), 'READ');
		return View::make('payment_methods.create')->with($args);
	}

	/**
	 * Show the form for creating a new resource.
	 * POST /payment_methods/create
	 *
	 * @return Response
	 */
	public function postCreate()
	{

		$payment_method = new PaymentMethods();
		$payment_method->name = Input::get('name');
		$payment_method->description = Input::get('description');
		$payment_method->type = 'payment_method';
		$payment_method->status = 'active';
		
		if( $payment_method->save() ):

			$args = array(
				'msg_success' => array(
					'name' => 'payment_method_create',
					'title' => 'Método de Pago Agregado',
					'description' => 'El método de pago ' . $payment_method->name . ' fue agregado exitosamente'
					)
				);

			Audits::add(Auth::user(), $args['msg_success'], 'CREATE');
			return Redirect::to( $this->module['route'] )->with( $args );

		else:

			$args = array(
				'msg_danger' => array(
					'name' => 'payment_method_create_err',
					'title' => 'Error al agregar el método de pago',
					'description' => 'Hubo un error al agregar el método de pago ' . $payment_method->name
					)
				);

			Audits::add(Auth::user(), $args['msg_danger'], 'CREATE');
			return Redirect::to( $this->module['route'].'/create' )->with( $args );

		endif;

	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /payment_methods/edit/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getEdit($id)
	{
		$args = array(
			'payment_method' => PaymentMethods::find( Crypt::decrypt($id) ),
			'module' => $this->module,
			);
		Audits::add(Auth::user(), array(
			'name' => 'payment_method_get_edit',
			'title' => 'Editar Métodos de Pago',
			'description' => 'Edicion de métodos de pago'
			), 'READ');
		return View::make('payment_methods.edit')->with($args);

	}

	/**
	 * Show the form for editing the specified resource.
	 * POST /payment_methods/edit/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function postEdit($id)
	{

		$payment_method = PaymentMethods::find(Crypt::decrypt($id));

		$payment_method->name = Input::get('name');
		$payment_method->description = Input::get('description');
		$payment_method->type = 'payment_method';
		$payment_method->status = 'active';
		
		if( $payment_method->save() ):

			$args = array(
				'msg_success' => array(
					'name' => 'payment_method_edit',
					'title' => 'Método de Pago editado',
					'description' => 'El método de pago ' . $payment_method->name . ' fue editado exitosamente'
					)
				);

			Audits::add(Auth::user(), $args['msg_success'], 'UPDATE');
			return Redirect::to( $this->module['route'] )->with( $args );

		else:

			$args = array(
				'msg_danger' => array(
					'name' => 'payment_method_edit_err',
					'title' => 'Error al editar el método de pago',
					'description' => 'Hubo un error al editar el método de pago ' . $payment_method->name 
					)
				);

			Audits::add(Auth::user(), $args['msg_danger'], 'UPDATE');
			return Redirect::to( $this->module['route'].'/edit/'.Crypt::encrypt($payment_method->id) )->with( $args );

		endif;

	}

	/**
	 * Show the form for deleting the specified resource.
	 * GET /payment_methods/delete/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getDelete($id)
	{

		$args = array(
			'payment_method' => PaymentMethods::find( Crypt::decrypt($id) ),
			'module' => $this->module,
			);
		Audits::add(Auth::user(), array(
			'name' => 'payment_method_get_delete',
			'title' => 'Eliminar Métodos de Pago',
			'description' => 'Eliminar registro de métodos de pago'
			), 'READ');
		return View::make('payment_methods.delete')->with($args);

	}

	/**
	 * Show the form for deleting the specified resource.
	 * POST /payment_methods/delete/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function postDelete($id)
	{
		$payment_method =  PaymentMethods::find( Crypt::decrypt($id) );

		if($payment_method->delete()):

			$args = array(
				'msg_success' => array(
					'name' => 'payment_method_delete',
					'title' => 'Método de Pago eliminada',
					'description' => 'El método de pago ' . $payment_method->name . ' fue eliminado exitosamente'
					)
				);

			Audits::add(Auth::user(), $args['msg_success'], 'DELETE');
			return Redirect::to( $this->module['route'] )->with( $args );

		else:

			$args = array(
				'msg_danger' => array(
					'name' => 'payment_method_delete_err',
					'title' => 'Error al eliminar el método de pago',
					'description' => 'Hubo un error al eliminar el método de pago ' . $payment_method->name 
					)
				);

			Audits::add(Auth::user(), $args['msg_danger'], 'DELETE');
			return Redirect::to( $this->module['route'].'/delete/'.Crypt::encrypt($payment_method->id) )->with( $args );

		endif;

	}

	/**
	 * Show the form for deleting the specified resource.
	 * GET /payment_method/delete/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getActivate($id)
	{

		$invoice_account = Users::find( Crypt::decrypt($id) );

		$invoice_account->status = 'active';

		if($invoice_account->save()):

			$args = array(
				'msg_success' => array(
					'name' => 'payment_method_activate',
					'title' => 'Método de Pago activado satisfactoriamente',
					'description' => 'El Método de Pago ' . $invoice_account->name . ' ha sido activado exitosamente'
					)
				);

			Audits::add(Auth::user(), $args['msg_success'], 'UPDATE');

			return Redirect::to( $this->module['route'] )->with( $args );

		else:

			$args = array(
				'msg_danger' => array(
					'name' => 'payment_method_activate_err',
					'title' => 'Error al activar método de pago',
					'description' => 'hubo un error al activar el método de pago ' . $invoice_account->name
					)
				);

			Audits::add(Auth::user(), $args['msg_danger'], 'UPDATE');

			return Redirect::to( $this->module['route'] )->with( $args );

		endif;

	}

	/**
	 * Show the form for deleting the specified resource.
	 * GET /payment_method/delete/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getDeactivate($id)
	{

		$invoice_account = Users::find( Crypt::decrypt($id) );

		$invoice_account->status = 'inactive';

		if($invoice_account->save()):

			$args = array(
				'msg_success' => array(
					'name' => 'payment_method_deactivate',
					'title' => 'Método de Pago desactivado satisfactoriamente',
					'description' => 'El Método de Pago ' . $invoice_account->name . ' ha sido desactivado exitosamente'
					)
				);

			Audits::add(Auth::invoice_account(), $args['msg_success'], 'UPDATE');

			return Redirect::to( $this->module['route'] )->with( $args );

		else:

			$args = array(
				'msg_danger' => array(
					'name' => 'payment_method_deactivate_err',
					'title' => 'Error al desactivar método de pago',
					'description' => 'hubo un error al desactivar el método de pago ' . $invoice_account->name
					)
				);

			Audits::add(Auth::invoice_account(), $args['msg_danger'], 'UPDATE');

			return Redirect::to( $this->module['route'] )->with( $args );

		endif;

	}

	private function getBreadcumbs(){

		$self_breadcrumb = array(
			'name' => 'Métodos de Pago',
			'route' => '/payment_methods'
			);

		array_push( $this->breadcrumbs, $self_breadcrumb);

		return $this->breadcrumbs;

	}

}
