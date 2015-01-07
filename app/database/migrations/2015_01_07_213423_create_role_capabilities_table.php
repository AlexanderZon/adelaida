<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRoleCapabilitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('role_capabilities', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id_capability')->unsigned()->index();
			$table->foreign('id_capability')->references('id')->on('capabilities')->onDelete('cascade');
			$table->integer('id_role')->unsigned()->index();
			$table->foreign('id_role')->references('id')->on('roles')->onDelete('cascade');
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
		Schema::drop('role_capabilities');
	}

}
