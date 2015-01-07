<?php

class ProviderItems extends \Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'provider_items';

	protected $fillable = [];

	public function purchaseOrder(){

		return $this->belongsTo('PurchaseOrders', 'id_purchase_order');
		
	}

	public function stock(){

		return $this->belongsTo('Stock', 'id_stock');
		
	}

}