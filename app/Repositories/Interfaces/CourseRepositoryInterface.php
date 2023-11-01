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
     * @return LengthAwarePaginator<Course>
     */
    public function getCourses($request): LengthAwarePaginator;

    /**
     * @param array $courseIds
     * @return int
     */
    public function addStudentInCourse($courseIds);

    /**
     * @param array $courseIds
     * @return float
     */
    public function getTotalPriceOfCourses($courseIds);
}
