<?php

class Sellers extends \Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'sellers';

	protected $fillable = [];

	public function person(){

		return $this->belognsTo('Persons', 'id_person');

	}

	public function saleOrders(){

		return $this->hasMany('SaleOreders', 'id_seller', 'id');

	}

	public function invoices(){

		return $this->hasMany('Invoices', 'id_seller', 'id');
		
	}

}