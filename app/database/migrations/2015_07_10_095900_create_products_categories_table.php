<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products_categories', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string("name");
			$table->text("description",200);
			$table->string("slug");
			$table->integer('parent_d')->unsigned();//Relacion de Categoria con candidatos
			$table->boolean("available");
//			$table->foreign("parent_d")->references("id")->on("products_categories");
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
		Schema::drop('products_categories');
	}

}
