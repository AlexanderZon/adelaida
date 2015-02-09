<?php

class My extends \BaseController {

	public static function tasks(){

		return Auth::user()->tasks;

	}

	public static function pendingTasks(){

		$pending = array();

		foreach(Auth::user()->tasks as $task ):

			if( $task->status == 'inactive' ) $pending[] = $task;

		endforeach;

		return $pending;

	}

}