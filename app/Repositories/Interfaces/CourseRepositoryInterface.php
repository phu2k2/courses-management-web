<?php

namespace App\Repositories\Interfaces;

use App\Http\Requests\GetCoursesRequest;
use App\Repositories\RepositoryInterface;
use App\Models\Course;
use Illuminate\Pagination\LengthAwarePaginator;

interface CourseRepositoryInterface extends RepositoryInterface
{
    /**
     * @param GetCoursesRequest $request
     * @return array
     */
    public function getCourses($request): array;
}
