<?php

class Stock extends \Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'stock';

	protected $fillable = [];

	public function measurementUnit(){

		return $this->belongsTo('MeasurementUnits', 'id_measurement_unit');

	}

	public function category(){

		return $this->belongsTo('Categories', 'id_category');

	}

	public function materials(){

		return $this->hasMany('Materials', 'id_stock', 'id');

	}

	public function providerItems(){

		return $this->hasMany('ProviderItems', 'id_stock', 'id');
		
	}

}