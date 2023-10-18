<?php

namespace App\Repositories\Interfaces;

use App\Repositories\RepositoryInterface;
use App\Models\Course;
use Illuminate\Pagination\LengthAwarePaginator;

interface CourseRepositoryInterface extends RepositoryInterface
{
    /**
     * @param array $filters
     * @return LengthAwarePaginator<Course>
     */
    public function getCourses(array $filters): LengthAwarePaginator;
}
