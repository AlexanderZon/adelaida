<?php

class Audits extends \Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'audits';

	public function user(){

		return $this->belongsTo('Users', 'id_user');
		
	}

}