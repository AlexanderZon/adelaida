<?php

class Tasks extends \Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'tasks';

    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];

	public function users(){

		return $this->belongsToMany('Users', 'user_tasks', 'id_task', 'id_user');

	}

	public function project(){

		return $this->belongsTo('Projects', 'id_project');
		
	}

	public function parent(){

		return $this->belongsTo('Tasks', 'id_parent');

	}

	public function hasResponsable( $user ){

		foreach( $this->users as $usr ):

			if( $usr->id == $user->id ) return true;

		endforeach;

		return false;

	}

}