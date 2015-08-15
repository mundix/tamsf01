<?php

/**
 * Repositorio de Categorias de Productos
*/

namespace Inventory\Repositories;

use Commons\Repositories\BaseRepo;
use Inventory\Entities\ProductCategory;

class ProductCategoryRepo extends BaseRepo
{

    public function getModel()
    {
        return new ProductCategory();
    }

    public function getList()
    {
        return ProductCategory::lists('name','id');
    }

    public function newCategory()
    {
        $entity = new ProductCategory();
        return $entity;
    }
}