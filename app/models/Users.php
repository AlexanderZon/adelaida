<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Users extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The database rules used by the model.
	 *
	 * @var string
	 */
    private $rules = array(
        'username' => 'required|alpha|min:6|unique:users',
        'password'  => 'required',
        'email' => 'unique:users'
        // .. more rules here ..
    );

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public function role(){

		return $this->belongsTo('Roles', 'id_role');

	}

	public function tasks(){

		return $this->belongsToMany('Tasks', 'user_tasks', 'id_user', 'id_task');
		
	}

	public function inbox(){

		return $this->belongsToMany('Messages', 'user_messages', 'id_user', 'id_messages');
		
	}

	public function outbox(){

		return $this->hasMany('Messages', 'id_user_from', 'id');

	}

	public function audits(){

		return $this->hasMany('Audits', 'id_user');
		
	}

	public static function hasUsername( $username ){

		$user = self::where('username', '=', $username )->take(1)->get();

		if(empty($user[0])):
			return false;
		else:
			return true;
		endif;

	}

	public static function hasEmail( $email ){

		$user = self::where('email', '=', $email )->take(1)->get();

		if(empty($user[0])):
			return false;
		else:
			return true;
		endif;

	}

}
