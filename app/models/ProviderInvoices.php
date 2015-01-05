<?php

class ProviderInvoices extends \Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'provider_invoices';

	protected $fillable = [];

	public function purchaseOrder(){

		return $this->belongsTo('PurchaseOrders', 'id_purchase_order');
		
	}

}