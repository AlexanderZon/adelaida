<?php

class MeasurementUnits extends \Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'measurement_units';

    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];

	protected $fillable = [];

	public function stock(){

		return $this->hasMany('Stock', 'id_measurement_unit', 'id');
		
	}

}