<?php

class Receipts extends \Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'receipts';

	protected $fillable = [];

	public function saleOrder(){

		return $this->belongsTo('SaleOrders', 'id_sale_order');

	}

	public function paymentMethod(){

		return $this->belognsTo('PaymentMethods', 'id_payment_method');
		
	}

}