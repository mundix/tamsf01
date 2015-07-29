<?php

use HireMe\Repositories\CandidateRepo;

class HomeController extends BaseController
{

	//Injection de Dependencias
	protected $candidateRepo;

	public function __construct(CandidateRepo $candidateRepo)
	{
		$this->candidateRepo = $candidateRepo;
	}

	public function index()
	{
		$latest_candidates = $this->candidateRepo->findLastest();

		return View::make('home',compact('latest_candidates'));
//		return View::make('themes/melon/tpls/login');
	}
}
