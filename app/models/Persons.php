<?php

class Persons extends \Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'persons';

    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];

	protected $fillable = [];

	public static function exists( $identification_numer ){

   		$person = Persons::where('identification_number','=',Input::get('identification_number'))->get();
   		
   		if(count($person) > 0):
   			return $person[0];
   		else:
   			return 0;
   		endif;

	}

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