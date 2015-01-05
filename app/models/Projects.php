<?php

class Projects extends \Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'projects';

	protected $fillable = [];

	public function purchaseOrders(){

		return $this->hasMany('PurchaseOrders', 'id_project', 'id');

	}

	public function saleOrder(){

		return $this->hasOne('SaleOrders', 'id_project', 'id'):

	}

	public function materials(){

		return $this->hasMany('Materials', 'id_project', 'id');

	}

}