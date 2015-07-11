<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsLogsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products_logs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer("user_id");
			$table->integer("product_id");
			$table->date("date_in");
			$table->date("date_out");
			$table->text("description",200);
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('products_logs');
	}

}
