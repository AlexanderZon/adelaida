<?php

class Invoices extends \Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'invoices';
	
	protected $fillable = [];

	public function account(){

		return $this->belongsTo('InvoiceAccounts', 'id_invoice_account');

	}

	public function client(){

		return $this->belongsTo('Clients', 'id_client');

	}

	public function saleOrder(){

		return $this->belongsTo('SaleOrders', 'id_sale_order');

	}

}