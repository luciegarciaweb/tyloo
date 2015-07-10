<?php

namespace App\Repositories;

use Bosnadev\Repositories\Eloquent\Repository;

class WorkRepository extends Repository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return 'App\Work';
    }
}
