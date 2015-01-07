<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserTasksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_tasks', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id_user')->unsigned()->index();
			$table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
			$table->integer('id_task')->unsigned()->index();
			$table->foreign('id_task')->references('id')->on('tasks')->onDelete('cascade');
			$table->timestamps();
			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_tasks');
	}

}
