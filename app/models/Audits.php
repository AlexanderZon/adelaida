<?php

class Audits extends \Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'audits';

	public function user(){

		return $this->belongsTo('Users', 'id_user');
		
	}

	public static function add( $user, $data, $type = '' ){

		$audit = new Audits();

		$audit->name = $data['name'];
		$audit->title = $data['title'];
		$audit->description = $data['description'];
		$audit->id_user = $user->id;
		$sudit->type = $type;

		$audit->save();

	}

}