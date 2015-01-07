<?php

class Options extends \Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'options';

	public static function get( $key ){

		$option = self::where('key', '=', $key )->take(1)->get();
		if( $option ):
			return $option[0]->value;
		else:
			return false;
		endif;

	}

}