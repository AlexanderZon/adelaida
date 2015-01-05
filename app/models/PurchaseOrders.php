<?php

class PurchaseOrders extends \Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'purchase_orders';

	protected $fillable = [];

	public function project(){

		return $this->belongsTo('Projects', 'id_project');

	}

	public function provider(){

		return $this->belongsTo('Providers', 'id_provider');

	}

	public function invoices(){

		return $this->hasMany('ProviderInvoices', 'id_purchase_order', 'id');

	}

	public function items(){

		return $this->hasMany('ProviderItems', 'id_purchase_order', 'id');

	}

}