<?php

namespace Inventory\Entities;

class ProductLog extends \Eloquent {
	protected $fillable = [];

	public function products()
	{
		$this->hasMany('Inventory\Entities\Product');
	}
}