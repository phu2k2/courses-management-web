<?php

namespace App\Repositories\Interfaces;

use App\Repositories\RepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

interface CourseRepositoryInterface extends RepositoryInterface
{
    /**
     * @return LengthAwarePaginator<Model>
     */
    public function getCourses(): LengthAwarePaginator;

    /**
     * @param int $id
     * @return Model
     */
    public function findOrFailCourse(int $id): Model;
}
