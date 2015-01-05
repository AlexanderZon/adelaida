<?php

class Persons extends \Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'persons';

	protected $fillable = [];

	public function isRepresentantOf(){

		return $this->hasMany('Clients', 'id_person', 'id');

	}

	public function isAuthorizedBy(){

		return $this->belongsToMany('Clients', 'client_authorized', 'id_person', 'id_client');

	}

	public function seller(){

		return $this->hasOne('Sellers', 'id_person', 'id');

	}

	public function isProviderOf(){

		return $this->hasMany('Providers', 'id_person', 'id');
		
	}

}