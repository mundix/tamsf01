<?php

namespace Inventory\Entities;

class Product extends \Eloquent
{
	protected $fillable = ['name','description',''];
	protected $perPage = 20;

	public function user()
	{
		return $this->belongsTo('HireMe\Entities\User');
	}

	/**
	 * Relacion de Producto con categoria.
	*/
	public function category()
	{
		return $this->belongsTo('Inventory\Entities\ProductCategory');
	}



}