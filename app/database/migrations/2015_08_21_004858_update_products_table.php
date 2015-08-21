<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('products', function(Blueprint $table)
		{

			$table->integer("itbis_type_id")->unsigned();
			$table->foreign("itbis_type_id")->references("id")->on("itbis_types");

//			$table->integer("itbis_type_id")->unsigned();
//			$table->foreign("itbis_type_id")->on("id")->reference("itbis_types");
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('products', function(Blueprint $table)
		{
			
		});
	}

}
