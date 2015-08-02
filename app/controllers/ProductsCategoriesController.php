<?php

use Inventory\Repositories\ProductRepo;
use Inventory\Repositories\ProductCategoryRepo;
use Inventory\Managers\ProductCategoryManager;

class ProductsCategoriesController extends BaseController
{

	protected $productCategoryRepo;
	protected $productRepo;

	public function __construct(ProductRepo $productRepo,ProductCategoryRepo $productCategoryRepo)
	{
		$this->productRepo = $productRepo;
		$this->productCategoryRepo =  $productCategoryRepo;
	}
	/**
	 * Listado de Categorias
	*/
	public function index()
	{
		$categories = $this->productCategoryRepo->getList();
		return View::make("themes/{$this->theme}/pages/inventory/products/productscategories/show",compact('categories'));
	}
	/**
	 * Formulario de insertar nueva categoria
	*/
	public function add()
	{
		$categories = $this->productCategoryRepo->getList();
		return View::make("themes/{$this->theme}/forms/inventory/productscategories/add",compact('categories'));
	}

	public function save()
	{
//		dd(Input::all());

		$entity = $this->productCategoryRepo->newCategory();
		$entity->slug = \Str::slug(Input::get('name'));
		$entity->available = 1;
		$manager = new ProductCategoryManager($entity,Input::all());

		$manager->save();
		return Redirect::route('home');

	}
	public function edit()
	{
//		return View::make("themes/{$this->theme}/pages/inventory/products/show");
	}
	public function show($sluge,$id)
	{
//		return View::make("themes/{$this->theme}/pages/inventory/products/show");
//		return "presentando el producto $id";
	}
}
