<?php

class Projects extends \Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'projects';

    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];

	protected $fillable = [];

	public function purchaseOrders(){

		return $this->hasMany('PurchaseOrders', 'id_project', 'id');

	}

	public function saleOrder(){

		return $this->hasOne('SaleOrders', 'id_project', 'id');

	}

	public function materials(){

		return $this->hasMany('Materials', 'id_project', 'id');

	}

	public function tasks(){

		return $this->hasMany('Tasks', 'id_project', 'id');

	}

	public static function existsCode( $code, $id ){

		if( $id != '' ):

			$user = self::where('code', '=', $code )->where('id', '!=', $id )->take(1)->get();

		else:

			$project = self::where('code', '=', $code)->take(1)->get();

		endif;

		if(isset($project[0])):
			return true;
		else:
			return false;
		endif;

	}

}