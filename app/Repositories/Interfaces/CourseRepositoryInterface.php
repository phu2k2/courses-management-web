<?php

namespace App\Repositories\Interfaces;

use App\Http\Requests\GetCoursesRequest;
use App\Repositories\RepositoryInterface;
use App\Models\Course;
use Carbon\Carbon;
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
     * @param Carbon|false $startDate.
     * @param Carbon|false $endDate
     * @param string $dateFormat
     * @param int $instructorId
     * @param int $courseId
     * 
     * @return Collection
     */
    public function getCourseRevenueStatistics($startDate, $endDate, $dateFormat, $instructorId, $courseId): Collection;
}
