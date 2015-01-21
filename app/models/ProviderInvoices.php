<?php

class ProviderInvoices extends \Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'provider_invoices';

    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];

	protected $fillable = [];

	public function purchaseOrder(){

		return $this->belongsTo('PurchaseOrders', 'id_purchase_order');
		
	}

}