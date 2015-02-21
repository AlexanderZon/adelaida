<?php

class Stock extends \Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'stock';

    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];

	protected $fillable = [];

	public function measurementUnit(){

		return $this->belongsTo('MeasurementUnits', 'id_measurement_unit');

	}

	public function category(){

		return $this->belongsTo('Categories', 'id_category');

	}

	public function materials(){

		return $this->hasMany('Materials', 'id_stock', 'id');

	}

	public function providerItems(){

		return $this->hasMany('ProviderItems', 'id_stock', 'id');
		
	}

	public function keeped(){

		$keeped = 0;

		foreach( $this->materials as $material ):

			if( $material->status == 'keeped' ):
				$keeped += $material->units;
			endif;

		endforeach;

		return $keeped;

	}

	public function available(){

		$available = $this->units;

		foreach( $this->materials as $material ):

			if( $material->status == 'keeped' ):
				$available -= $material->units;
			endif;

		endforeach;

		return $available;

	}

	public function requested(){

		$requested = 0;

		foreach( $this->providerItems as $providerItem ):

			if( $providerItem->type == 'request' ):
				$requested += $providerItem->units;
			endif;

		endforeach;

		return $requested;

	}

	public static function filterByMaterials( $materials ){

		$stock = self::all();

		$available = array();

		foreach( $stock as $item ):
			$bool = true;
			foreach( $materials as $material ):
				if( $material->id_stock == $item->id):
					$bool = false;
				endif;
			endforeach;
			if($bool) $available[] = $item;
		endforeach;

		return $available;

	}

}