<?php

namespace HireMe\Entities;



class Category extends \Eloquent {
	protected $fillable = [];

	/**
	 * Relacionando le Candidato con la Categoria
	 * diciendole a la categoria que posee muchos
	 * candidatos
	*/
	public function candidates()
	{
		return $this->hasMany('HireMe\Entities\Candidate'); //Esta es la entidad HireMe\Entities\Candidate
		//Esta entidad no existe, y ahy que pasarle el Namespace completo
	}

}