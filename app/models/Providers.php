<?php

class Providers extends \Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'providers';

	protected $fillable = [];

	public function purchaseOrder(){

		return $this->hasMany('PurchaseOrders', 'id_provider', 'id');
		
	}

	public function location(){

		return $this->belongsTo('Locations', 'id_location');

	}

	public function representant(){

		return $this->belongsTo('Persons', 'id_person');
		
	}

}