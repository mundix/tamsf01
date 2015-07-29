<?php

/**
 *
 * Repositorio de Productos
 *
*/

namespace Inventory\Repositories;
use Commons\Repositories\BaseRepo;
use Inventory\Entities\Product;

class ProductRepo extends BaseRepo
{
    public function getModel()
    {
        return new Product;
    }

}