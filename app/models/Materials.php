<?php

class Materials extends \Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'materials';

    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];

	protected $fillable = [];

	public function project(){

		return $this->belongsTo('Projects', 'id_project');

	}

	public function stock(){

		return $this->belongsTo('Stock', 'id_stock');
		
	}

}