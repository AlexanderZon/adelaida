<?php

class Roles extends \Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'roles';

    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];

	public function capabilities(){

		return $this->belongsToMany('Capabilities', 'role_capabilities', 'id_role', 'id_capability');

	}

	public function users(){

		return $this->hasMany('Users', 'id_role', 'id');
		
	}

	/*public function hasPermission( $permission ){

		$caps = $this->belongsToMany('Capabilities', 'role_capabilities', 'id_role', 'id_capability');

		$bool = false; 

		foreach( $caps as $cap ):
			if( $cap->name == $permission ) $bool = true;
		endforeach;

		return $bool;

	}*/

	public static function hasName( $name, $id = '' ){

		$role = self::where('name','=',$name)->where('id','!=',$id)->take(1)->get();

		if(isset($role[0])):

			return true;

		else:

			return false;

		endif;

	}

	public static function hasCapability( $role, $cap ){

		$capabilities = $role->capabilities;
		$bool = false;

		foreach($capabilities as $capability):

			if($capability->id == $cap->id) $bool = true;

		endforeach;

		return $bool;

	}

	public static function getActive(){

		return self::where('status','=','active')->get();
		
	}

	public static function getSeller(){

		$role = self::where('name','=','seller')->take(1)->get();

		if(isset($role[0])):

			return $role[0];

		else:

			return 0;

		endif;

	}


}