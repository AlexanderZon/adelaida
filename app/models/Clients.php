<?php

class Clients extends \Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'clients';

	protected $fillable = [];

	public function representant(){

		return $this->belongsTo('Persons', 'id_person');

	}

	public function authorized(){

		return $this->belongsToMany('Persons', 'client_authorized', 'id_client', 'id_person');

	}

	public function invoices(){

		return $this->hasMany('Invoices', 'id_client', 'id');

	}

	public function saleOrders(){

		return $this->hasMany('SaleOrders', 'id_client', 'id');

	}

	public function location(){

		return $this->belongsTo('Locations', 'id_location');

	}
	
}