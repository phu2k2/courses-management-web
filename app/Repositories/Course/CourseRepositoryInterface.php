<?php

namespace App\Repositories\Course;

use App\Repositories\RepositoryInterface;
use Illuminate\Pagination\LengthAwarePaginator;

interface CourseRepositoryInterface extends RepositoryInterface
{
    public function getListCourses(): LengthAwarePaginator;
}
