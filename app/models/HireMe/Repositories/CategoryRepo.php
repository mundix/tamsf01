<?php

namespace HireMe\Repositories;
use HireMe\Entities\Category;

class CategoryRepo
{
    //Voy a definir mi metodo find($id)
    //por que es el repoquien se tiene que encargar de hacer las consultas.
    public function find($id)
    {
        return Category::find($id);
    }
}