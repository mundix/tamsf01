<?php
use Inventory\Repositories\ProductRepo;

class DashboardController extends AssetsController
{
	protected  $productRepo;

	public function __construct(ProductRepo $productRepo)
	{
		$this->productRepo = $productRepo;
	}

	/**
	 * Presenta Formulario de login
	*/
	public function index()
	{
		$data = $this->getProductsData();
//		dd($data);
		return View::make('themes/melon/pages/dashboard',compact('data'));
	}
}
