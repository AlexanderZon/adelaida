<?php

class Providers extends \Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'providers';

    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];

	protected $fillable = [];

	public static function exists( $identification_numer, $provider = '' ){

		if($provider != ''):

   			$provider = self::where('identification_number','=',Input::get('identification_number'))->where('id','!=',$provider->id)->get();

		else:

   			$provider = self::where('identification_number','=',Input::get('identification_number'))->get();
   		
   		endif;

   		if(count($provider) > 0):
   			return $provider[0];
   		else:
   			return 0;
   		endif;

	}

	public function purchaseOrder(){

		return $this->hasMany('PurchaseOrders', 'id_provider', 'id');
		
	}

	public function location(){

		return $this->belongsTo('Locations', 'id_location');

	}

	public function representant(){

		return $this->belongsTo('Persons', 'id_person');
		
	}

}