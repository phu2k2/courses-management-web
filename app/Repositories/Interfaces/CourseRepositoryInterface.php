<?php

namespace App\Repositories\Interfaces;

use App\Http\Requests\GetCoursesRequest;
use App\Repositories\RepositoryInterface;
use App\Models\Course;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

interface CourseRepositoryInterface extends RepositoryInterface
{
    /**
     * @param GetCoursesRequest $request
     * @return LengthAwarePaginator<Course>
     */
    public function getCourses($request): LengthAwarePaginator;

    /**
     * Sum totalStudent in course by instructor
     *
     * @param int $instructorId
     * @param int $courseId
     * @param string $startDate
     * @param string $endDate
     * @param string $type
     * @return Collection
     */
    public function totalStudentsByTime($instructorId, $courseId, $startDate, $endDate, $type): Collection;

    /**
     * @param array $courseIds
     * @return int
     */
    public function addStudentInCourse($courseIds);
}
