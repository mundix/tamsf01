<?php

use Inventory\Repositories\ProductCategoryRepo;
use Inventory\Repositories\ProductRepo;
use Inventory\Managers\ProductManager;

class OperationsController extends AssetsController
{
	protected $productRepo;
	protected $productCategoryRepo;

	public function __construct(ProductRepo $productRepo,ProductCategoryRepo $productCategoryRepo)
	{
		$this->productRepo          = $productRepo;
		$this->productCategoryRepo  = $productCategoryRepo;
	}

	public function sales()
	{
		$products 		= $this->productRepo->all('id','DESC');
		$javascripts 	= $this->getJsDataTables();
		$styles 		= $this->cashierStyle();
		$data 			= $this->getProductsData();

		return View::make('themes/melon/forms/operations/sales',compact('products','javascripts','data','styles'));
	}
}
