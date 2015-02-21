<?php

class ProviderItems extends \Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'provider_items';

    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];

	protected $fillable = [];

	public function purchaseOrder(){

		return $this->belongsTo('PurchaseOrders', 'id_purchase_order');
		
	}

	public function stock(){

		return $this->belongsTo('Stock', 'id_stock');
		
	}

	public function project(){

		return $this->belongsTo('Projects', 'id_project');
		
	}

	public static function _get( $type, $status ){

		$items = self::where('type', '=', $type);

		if( $status != '' ):

			$items = $items->where('status', '=', $status);

		endif;

		return $items->get();

	}

	public static function getRequest( $status = '' ){

		return self::_get('request', $status);
		
	}

	public static function getPurchase( $status = '' ){

		return self::_get('purchase', $status);

	}

}