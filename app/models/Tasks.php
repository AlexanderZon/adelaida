<?php

class Tasks extends \Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'tasks';

	public function users(){

		return $this->belongsToMany('Users', 'user_tasks', 'id_task', 'id_user');

	}

	public function project(){

		return $this->belongsTo('Projects', 'id_project');
		
	}

}