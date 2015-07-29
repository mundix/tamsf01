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

    public function getCandidatesbyCategoryId($id = null)
    {
        if(!is_null($id))
        {
            return Category::with([
                'candidates' => function($q){
                    $q->orderBy('created_at','DESC');
                }
                ,'candidates.user'])->where('id',$id)->get();
        }
    }

    public function getList()
    {
        return Category::lists('name','id');
    }

}