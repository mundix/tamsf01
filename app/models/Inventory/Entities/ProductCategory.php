<?php

namespace Inventory\Entities;

class ProductCategory extends \Eloquent {
	protected $fillable = ['name','description','available'];
	protected $table = "products_categories";

	/**
	 * Las Categorias de Productos tienen muchos productos.
	*/
	public function products()
	{
		$this->hasMany('Inventory\Entities\Product');
	}

	public function setSlug()
	{

	}
}