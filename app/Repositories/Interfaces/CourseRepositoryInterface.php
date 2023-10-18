<?php

namespace App\Repositories\Interfaces;

use App\Repositories\RepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

interface CourseRepositoryInterface extends RepositoryInterface
{
    /**
     * @param array $filters
     * @return LengthAwarePaginator<Model>
     */
    public function getCourses(array $filters): LengthAwarePaginator;

    /**
     * @param int $id
     * @return Model
     */
    public function findOrFail(int $id): Model;
}
