<?php

namespace HireMe\Entities;

class Candidate extends \Eloquent {
	protected $fillable = [];

	public function user()
	{
		//Esta relacionado con un suaurio, y la relacion se creo usando los campos de 'id','id
		return $this->hasOne('HireMe\Entities\User','id','id');
	}

}