<?php

class SaleOrders extends \Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'sale_orders';

	protected $fillable = [];

	public function client(){

		return $this->belongsTo('Clients', 'id_client');

	}

	public function seller(){

		return $this->belongsTo('Sellers', 'id_seller');

	}

	public function invoices(){

		return $this->hasMany('Invoices', 'id_sale_order', 'id');

	}

	public function receipts(){

		return $this->hasMany('Receipts', 'id_sale_order', 'id');

	}

	public function project(){

		return $this->belongsTo('Projects', 'id_project');
		
	}

}