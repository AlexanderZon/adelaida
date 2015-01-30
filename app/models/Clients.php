<?php

class Clients extends \Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'clients';

    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];

	protected $fillable = [];

	public static function exists( $identification_numer, $client = '' ){

		if($client != ''):

   			$client = self::where('identification_number','=',Input::get('identification_number'))->where('id','!=',$client->id)->get();

		else:

   			$client = self::where('identification_number','=',Input::get('identification_number'))->get();
   		
   		endif;

   		if(count($client) > 0):
   			return $client[0];
   		else:
   			return 0;
   		endif;

	}

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