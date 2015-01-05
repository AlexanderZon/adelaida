<?php

class ClientAuthorized extends \Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'client_authorized';

	protected $fillable = [];

	public function client(){

		return $this->belongsTo('Clients', 'id_client');

	}

	public function person(){

		return $this->belongsTo('Persons', 'id_person');
		
	}

}