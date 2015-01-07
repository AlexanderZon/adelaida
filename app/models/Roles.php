<?php

class Roles extends \Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'roles';

	public function capabilities(){

		return $this->belongsToMany('Capabilities', 'role_capabilities', 'id_role', 'id_capability');

	}

	public function hasPermission( $permission ){

		$caps = $this->belongsToMany('Capabilities', 'role_capabilities', 'id_role', 'id_capability');

		$bool = false; 

		foreach( $caps as $cap ):
			if( $cap->name == $permission ) $bool = true;
		endforeach;

		return $bool;

	}

	public function users(){

		return $this->hasMany('Users', 'id_role', 'id');
		
	}

}