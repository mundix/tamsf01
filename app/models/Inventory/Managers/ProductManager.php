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
            'min_stock'     => 'required|numeric',
            'category_id'   => 'required|exists:products_categories,id',
            'price'         => 'required|numeric',
            'min_price'     => 'required|numeric',
            'min_price'     => 'required|numeric',
            'available'     => 'in:1,0',

//            'min_price',
//            'discount',
//            'discount_apply',
//            'user_id',
//            'date_in',
//            'date_out',
//            'available'
        ];
        return $rules;
    }

    public function prepareData($data)
    {
//        if(!isset($data['available']))
//        {
//            $data['available'] = 1;
//        }
//        $this->entity->slug = \Str::slug($this->entity->name);
//        $data['user_id'] = \Auth::user()->id;
//        $data['name'] = strip_tags($data['name']);
//        $data['description'] = strip_tags($data['description']);
//        $data['slug'] = \Str::slug($data('name'));
//        $data['price'] = str_replace(",","",$data['price']);
//        $data['min_price'] = str_replace(",","",$data['min_price']);
        $this->entity->price = str_replace(",","",$data['price']);
        $this->entity->min_price = str_replace(",","",$data['min_price']);

        $this->entity->slug = \Str::slug(strip_tags($data['name']));
        $this->entity->user_id = \Auth::user()->id;
        $this->entity->description = strip_tags($data['description']);;
        $this->entity->name = strip_tags($data['name']);
        $this->entity->available = 1;

        return $data;
    }

}