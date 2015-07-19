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
		$lastest_candidates = $this->candidateRepo;

		return View::make('home',compact('lastest_candidates'));
	}
}
