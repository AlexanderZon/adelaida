<?php

class Messages extends \Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'messages';

    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];

	public function from(){

		return $this->belongsTo('Users', 'id_user_from');

	}

	public function to(){

		return $this->belongsToMany('Users', 'user_messages', 'id_message', 'id_user');
		
	}

}