<?php

class ProductsController extends BaseController {

	public function category($slug,$id)
	{
		dd($slug);
	}
	public function index()
	{
		return View::make('themes/melon/tpls/layout');
	}
	public function add()
	{
		return View::make("themes/{$this->theme}/forms/inventory/products/add");
//		return "Aqui esta el formulario de agregar Productos";
	}
	public function save()
	{
		echo "<pre>";
		dd(Input::all());
	}
	public function edit()
	{
		return "vamos a editar";
	}
	public function show($sluge,$id)
	{
		return "presentando el producto $id";
	}
}
