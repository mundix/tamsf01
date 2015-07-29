<?php

use Inventory\Repositories\ProductCategoryRepo;
use Inventory\Repositories\ProductRepo;

class ProductsController extends BaseController
{

	protected $productRepo;
	protected $productCategoryRepo;

	public function __construct(ProductRepo $productRepo,ProductCategoryRepo $productCategoryRepo)
	{
		$this->productRepo          = $productRepo;
		$this->productCategoryRepo  = $productCategoryRepo;
	}

	public function category($slug,$id)
	{
		dd($slug);
	}
	public function index()
	{
		return View::make('themes/melon/tpls/layout');
	}

	/**
	 * Formulario de Agregar Producto
	*/
	public function add()
	{
		$categories = $this->productCategoryRepo->getList();

		return View::make("themes/{$this->theme}/forms/inventory/products/add",compact('categories'));
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
