<?php

use HireMe\Repositories\CategoryRepo;

class CandidatesController extends BaseController
{
	protected $categoryRepo;

	public function __construct(CategoryRepo $categoryRepo)
	{
		$this->categoryRepo = $categoryRepo;
	}

	public function category($slug,$id)
	{
		//Se va remover Category si no que se debe usar el Repo de Category
		$category = $this->categoryRepo->find($id);
		//Ahora pertenece a namespace
		return View::make('candidates/category',compact('category'));
	}
}
