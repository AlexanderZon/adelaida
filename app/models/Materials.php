<?php

class Materials extends \Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'materials';

	protected $fillable = [];

	public function project(){

		return $this->belongsTo('Projects', 'id_project');

	}

	public function stock(){

		return $this->belongsTo('Stock', 'id_stock');
		
	}

}