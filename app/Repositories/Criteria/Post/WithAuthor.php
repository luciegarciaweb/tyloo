<?php

namespace App\Repositories\Criteria\Post;

use App\Repositories\Contracts\RepositoryInterface;
use App\Repositories\Criteria\Criteria;

class WithAuthor extends Criteria
{
    /**
     * @param                     $model
     * @param RepositoryInterface $repository
     *
     * @return mixed
     */
    public function apply($model, RepositoryInterface $repository)
    {
        return $model->with('author');
    }
}
