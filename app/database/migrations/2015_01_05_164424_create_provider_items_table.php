<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProviderItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('provider_items', function(Blueprint $table)
		{
			$table->increments('id');
			$table->float('units')->default(0);
			$table->double('cost_per_unit', 15, 2)->default(0);
			$table->integer('id_stock');
			$table->integer('id_purchase_order');
			$table->integer('id_project');
			$table->string('type');
			$table->string('status');
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
		Schema::drop('provider_items');
	}

}
