<?php

namespace Inventory\Managers;
use Commons\Managers\BaseManager;

//Hay qye definir el metodo getrules
class ProductManager extends  BaseManager
{
    public function getRules()
    {
        $rules = [
            'name'          => 'required',
            'description'   => 'required|max:1000',
            'sku'           => 'required',
            'stock'         => 'required|numeric',
            'category_id'   => 'required|exists:products_categories,id',
            'price'         => 'required|numeric',
            'sales_price'   => 'required|numeric',
            'min_price'     => 'required|numeric',
            'available'     => 'in:1,0'
        ];
        return $rules;
    }

    public function prepareData($data)
    {
        if(!isset($data['available']))
        {
            $data['available'] = 0;
        }
        $this->entity->slug = \Str::slug($this->entity->name);

        return $data;
    }

}