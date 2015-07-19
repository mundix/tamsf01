<?php

namespace HireMe\Repositories;

use Commons\Repositories\BaseRepo;
use HireMe\Entities\Candidate;
use HireMe\Entities\Category;

class CandidateRepo extends BaseRepo
{

    /**
     * Este metodo debe estar definido en todos los repos que lo utilizen
     */
    public function getModel()
    {
        return new Candidate;
    }

    public function findLastest()
    {
        return Category::with(['candidates','candidates.user'])->get();
    }
}