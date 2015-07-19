<?php

class ProductsController extends BaseController {

	public function category($slug,$id)
	{
		dd($slug);
	}

	public function melon()
	{
		return View::make('themes/melon/tpls/layout');
	}
}
