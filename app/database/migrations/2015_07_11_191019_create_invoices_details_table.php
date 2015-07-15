<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvoicesDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('invoices_details', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer("product_id")->unsigned();
			$table->integer("qty");
			$table->float("price",2);

			$table->foreign("product_id")->references("products")->on("id");

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
		Schema::drop('invoices_details');
	}

}
