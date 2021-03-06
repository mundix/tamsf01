<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvoicesPaymentsTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('invoices_payments', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer("invoice_id")->unsigned();
			$table->foreign("invoice_id")->references("id")->on("invoices");
			$table->float("amount",2);
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
		Schema::drop('invoices_payments');
	}

}
