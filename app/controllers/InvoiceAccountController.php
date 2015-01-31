<?php

class InvoiceAccountController extends \BaseController {

	protected $sections = array(
		'index' => 'Todos',
		'create' => 'Nuevo',
		'edit' => 'Editar',
		'delete' => 'Eliminar'
		);

	public function __construct(){

		$this->beforeFilter('auth');

		$this->beforeFilter('invoice_accounts');

		$this->module = array(
			'route' => '/invoice_accounts',
			'name' => 'invoice_accounts',
			'title' => 'Cuentas',
			'description' => 'Gestión de Cuentas del Sistema',
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
	 * GET /invoice_accounts
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$args = array(
			'invoice_accounts' => InvoiceAccounts::all(),
			'module' => $this->module,
			);
		Audits::add(Auth::user(), array(
			'name' => 'invoice_account_get_index',
			'title' => 'Listado de Cuentas',
			'description' => 'Vizualización del listado de cuentas'
			), 'READ');
		return View::make('invoice_accounts.index')->with($args);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /invoice_accounts/create
	 *
	 * @return Response
	 */
	public function getCreate()
	{
		$args = array(
			'invoice_accounts' => InvoiceAccounts::all(),
			'module' => $this->module,
			);
		Audits::add(Auth::user(), array(
			'name' => 'invoice_account_get_create',
			'title' => 'Añadir Cuentas',
			'description' => 'Adición de cuentas'
			), 'READ');
		return View::make('invoice_accounts.create')->with($args);
	}

	/**
	 * Show the form for creating a new resource.
	 * POST /invoice_accounts/create
	 *
	 * @return Response
	 */
	public function postCreate()
	{

		$invoice_account = new InvoiceAccounts();
		$invoice_account->name = Input::get('name');
		$invoice_account->description = Input::get('description');
		$invoice_account->type = 'invoice_account';
		$invoice_account->status = 'active';
		
		if( $invoice_account->save() ):

			$args = array(
				'msg_success' => array(
					'name' => 'invoice_account_create',
					'title' => 'Cuenta Agregada',
					'description' => 'La cuenta ' . $invoice_account->name . ' fue agregado exitosamente'
					)
				);

			Audits::add(Auth::user(), $args['msg_success'], 'CREATE');
			return Redirect::to( $this->module['route'] )->with( $args );

		else:

			$args = array(
				'msg_danger' => array(
					'name' => 'invoice_account_create_err',
					'title' => 'Error al agregar el cuenta',
					'description' => 'Hubo un error al agregar el cuenta ' . $invoice_account->name
					)
				);

			Audits::add(Auth::user(), $args['msg_danger'], 'CREATE');
			return Redirect::to( $this->module['route'].'/create' )->with( $args );

		endif;

	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /invoice_accounts/edit/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getEdit($id)
	{
		$args = array(
			'invoice_account' => InvoiceAccounts::find( Crypt::decrypt($id) ),
			'module' => $this->module,
			);
		Audits::add(Auth::user(), array(
			'name' => 'invoice_account_get_edit',
			'title' => 'Editar Cuentas',
			'description' => 'Edicion de cuentas'
			), 'READ');
		return View::make('invoice_accounts.edit')->with($args);

	}

	/**
	 * Show the form for editing the specified resource.
	 * POST /invoice_accounts/edit/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function postEdit($id)
	{

		$invoice_account = InvoiceAccounts::find(Crypt::decrypt($id));

		$invoice_account->name = Input::get('name');
		$invoice_account->description = Input::get('description');
		$invoice_account->type = 'invoice_account';
		$invoice_account->status = 'active';
		
		if( $invoice_account->save() ):

			$args = array(
				'msg_success' => array(
					'name' => 'invoice_account_edit',
					'title' => 'Cuenta editado',
					'description' => 'El cuenta ' . $invoice_account->name . ' fue editado exitosamente'
					)
				);

			Audits::add(Auth::user(), $args['msg_success'], 'UPDATE');
			return Redirect::to( $this->module['route'] )->with( $args );

		else:

			$args = array(
				'msg_danger' => array(
					'name' => 'invoice_account_edit_err',
					'title' => 'Error al editar el cuenta',
					'description' => 'Hubo un error al editar el cuenta ' . $invoice_account->name 
					)
				);

			Audits::add(Auth::user(), $args['msg_danger'], 'UPDATE');
			return Redirect::to( $this->module['route'].'/edit/'.Crypt::encrypt($invoice_account->id) )->with( $args );

		endif;

	}

	/**
	 * Show the form for deleting the specified resource.
	 * GET /invoice_accounts/delete/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getDelete($id)
	{

		$args = array(
			'invoice_account' => InvoiceAccounts::find( Crypt::decrypt($id) ),
			'module' => $this->module,
			);
		Audits::add(Auth::user(), array(
			'name' => 'invoice_account_get_delete',
			'title' => 'Eliminar Cuentas',
			'description' => 'Eliminar registro de cuentas'
			), 'READ');
		return View::make('invoice_accounts.delete')->with($args);

	}

	/**
	 * Show the form for deleting the specified resource.
	 * POST /invoice_accounts/delete/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function postDelete($id)
	{
		$invoice_account =  InvoiceAccounts::find( Crypt::decrypt($id) );

		if($invoice_account->delete()):

			$args = array(
				'msg_success' => array(
					'name' => 'invoice_account_delete',
					'title' => 'Cuenta eliminada',
					'description' => 'El cuenta ' . $invoice_account->name . ' fue eliminado exitosamente'
					)
				);

			Audits::add(Auth::user(), $args['msg_success'], 'DELETE');
			return Redirect::to( $this->module['route'] )->with( $args );

		else:

			$args = array(
				'msg_danger' => array(
					'name' => 'invoice_account_delete_err',
					'title' => 'Error al eliminar el cuenta',
					'description' => 'Hubo un error al eliminar el cuenta ' . $invoice_account->name 
					)
				);

			Audits::add(Auth::user(), $args['msg_danger'], 'DELETE');
			return Redirect::to( $this->module['route'].'/delete/'.Crypt::encrypt($invoice_account->id) )->with( $args );

		endif;
	}

	private function getBreadcumbs(){

		$self_breadcumb = array(
			'name' => 'Cuentas',
			'route' => '/invoice_accounts'
			);

		array_push( $this->breadcumbs, $self_breadcumb);

		return $this->breadcumbs;

	}

}
