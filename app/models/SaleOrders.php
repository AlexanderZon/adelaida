<?php

class SaleOrders extends \Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'sale_orders';

    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];

	protected $fillable = [];

	public function client(){

		return $this->belongsTo('Clients', 'id_client');

	}

	public function seller(){

		return $this->belongsTo('Sellers', 'id_seller');

	}

	public function invoices(){

		return $this->hasMany('Invoices', 'id_sale_order', 'id');

	}

	public function receipts(){

		return $this->hasMany('Receipts', 'id_sale_order', 'id');

	}

	public function project(){

		return $this->belongsTo('Projects', 'id_project');
		
	}

	public static function existsCorrelative( $correlative, $id ){

		if( $id != '' ):

			$user = self::where('correlative', '=', $correlative )->where('id', '!=', $id )->take(1)->get();

		else:

			$sale = self::where('correlative', '=', $correlative)->take(1)->get();

		endif;

		if(isset($sale[0])):
			return true;
		else:
			return false;
		endif;

	}

}