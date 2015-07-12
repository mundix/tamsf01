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
			$table->integer("user_id")->unsigned();
			$table->integer("product_id")->unsigned();
			$table->date("date_in");
			$table->date("date_out");
			$table->text("description",200);
			$table->foreign("user_id")->references("id")->on("users");
			$table->foreign("product_id")->references("id")->on("products");
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
