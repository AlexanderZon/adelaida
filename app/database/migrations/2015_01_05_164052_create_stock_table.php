<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStockTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('stock', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->longText('description');
			$table->integer('id_measurement_unit');
			$table->integer('id_category');
			$table->float('units');
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
		Schema::drop('stock');
	}

}
