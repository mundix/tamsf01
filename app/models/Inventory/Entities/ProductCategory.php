<?php

namespace Inventory\Entities;

class ProductCategory extends \Eloquent {
	protected $fillable = [];

	/**
	 * Las Categorias de Productos tienen muchos productos.
	*/
	public function products()
	{
		$this->hasMany('Inventory\Entities\Product');
	}

}