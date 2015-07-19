<?php

namespace HireMe\Repositories;
use Commons\Repositories\BaseRepo;
use HireMe\Entities\Category;

class CategoryRepo extends BaseRepo
{
    /**
     * Este metodo debe estar definido en todos los repos que lo utilizen
     */
    public function getModel()
    {
        return new Category;
    }
}