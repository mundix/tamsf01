<?php

namespace Inventory\Entities;

class Product extends \Eloquent {
	protected $fillable = [];

	/**
	 * El producto tiene una relacion uno a uno de usuario y producto
	*/
	public function user()
	{
//		$this->hasOne();
	}
}