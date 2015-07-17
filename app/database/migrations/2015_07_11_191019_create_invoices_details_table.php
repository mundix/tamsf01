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
			$table->integer("invoice_id")->unsigned();
			$table->integer("product_id")->unsigned();
			$table->integer("qty");
			$table->float("price",2);

			$table->foreign("invoice_id")->references("id")->on("invoices");
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
		Schema::drop('invoices_details');
	}

}
