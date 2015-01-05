<?php

class PaymentMethods extends \Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'payment_methods';

	protected $fillable = [];

	public function receipts(){

		return $this->hasMany('Receipts', 'id_payment_method', 'id');
		
	}

}