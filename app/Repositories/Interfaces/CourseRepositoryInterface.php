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
     * Find a record by its primary key.
     *
     * @param Date $start_date.
     * @param Date $end_date
     * @param string $dateFormat
     * @param int $instructor_id
     * @param int $course_id
     * 
     * @return Collection
     */
    public function getCourseRevenueStatistics($start_date, $end_date, $dateFormat, $instructor_id, $course_id): Collection;
}
