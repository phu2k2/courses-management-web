<?php

namespace App\Repositories\Interfaces;

use App\Repositories\RepositoryInterface;
use Illuminate\Pagination\LengthAwarePaginator;

interface CourseRepositoryInterface extends RepositoryInterface
{
    public function getListCourses(): LengthAwarePaginator;
}
