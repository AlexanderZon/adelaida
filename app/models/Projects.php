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

	public static function existsCode( $code, $id = '' ){

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

	public static function getActive(){

		$projects = self::where('status', '=', 'active')->get();

		return $projects;

	}

	public static function getInactive(){

		$projects = self::where('status', '=', 'inactive')->get();

		return $projects;

	}

	public static function getDone(){

		$projects = self::where('status', '=', 'done')->get();

		return $projects;

	}

	public function getDoneTasks(){

		$done = array();

		foreach( $this->tasks as $task ):

			if( $task->status == 'done' ):

				$done[] = $task;

			endif;

		endforeach;

		return $done;

	}

	public function getActiveTasks(){

		$active = array();

		foreach( $this->tasks as $task ):

			if( $task->status == 'active' ):

				$active[] = $task;

			endif;

		endforeach;

		return $active;

	}

	public function getInactiveTasks(){

		$inactive = array();

		foreach( $this->tasks as $task ):

			if( $task->status == 'inactive' ):

				$inactive[] = $task;

			endif;

		endforeach;

		return $inactive;

	}

	public function getDoneTasksPercentage(){

		if(count($this->getDoneTasks())+count($this->getActiveTasks())+count($this->getInactiveTasks()) != 0):

			return number_format(count($this->getDoneTasks())/(count($this->getDoneTasks())+count($this->getActiveTasks())+count($this->getInactiveTasks()))*100,2);

		else:

			return 0;

		endif;

	}

}