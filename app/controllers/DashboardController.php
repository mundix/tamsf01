<?php
use Inventory\Repositories\ProductRepo;

class DashboardController extends BaseController
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
		return View::make('themes/melon/pages/dashboard');
	}
}
