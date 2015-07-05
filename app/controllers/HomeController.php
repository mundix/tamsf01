<?php

class HomeController extends BaseController {

	public function index()
	{
		return View::make('home'); //Llamando a la vista home
	}
}
