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

	public function getFormatedBudget(){

		return BaseController::format( $this->budget );

	}

	public function getDaysLeft(){

		$date = new DateTime($this->date);

		// dd('P'.$this->period_days.'D');

		$date->add(new DateInterval('P'.$this->period_days.'D'));

		$today = new DateTime(date('Y-m-d'));

		$interval = $today->diff($date);

		return $interval->format('%a');

		echo $date->format('Y-m-d') . "\n";

	}

}