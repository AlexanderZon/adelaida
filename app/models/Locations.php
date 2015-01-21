<?php

class Locations extends \Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'locations';

    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];

	protected $fillable = [];

	public function clients(){

		return $this->hasMany('Clients', 'id_location');

	}

	public function providers(){

		return $this->hasMany('Providers', 'id_location');
		
	}
	
}