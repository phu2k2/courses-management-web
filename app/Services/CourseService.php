<?php

namespace App\Services;

use App\Http\Requests\GetCoursesRequest;
use App\Http\Requests\RevenueReportRequest;
use App\Repositories\Interfaces\CourseRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Models\Course;
use App\Models\Enrollment;
use App\Repositories\Interfaces\EnrollmentRepositoryInterface;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;

class CourseService
{
    /**
     * @var CourseRepositoryInterface
     */
    protected $courseRepo;

    /**
     * @var EnrollmentRepositoryInterface
     */
    protected $enrollmentRepo;

    public function __construct(CourseRepositoryInterface $courseRepo, EnrollmentRepositoryInterface $enrollmentRepo)
    {
        $this->courseRepo = $courseRepo;
        $this->enrollmentRepo = $enrollmentRepo;
    }

    /**
     * @param int $courseId
     * @return Model|null
     */
    public function findCourse($courseId)
    {
        return $this->courseRepo->findOrFail($courseId);
    }

    /**
     * @param GetCoursesRequest $request
     * @return LengthAwarePaginator<Course>
     */
    public function getCourses(GetCoursesRequest $request): LengthAwarePaginator
    {
        return $this->courseRepo->getCourses($request);
    }

    /**
     * @param int $id
     * @return Model
     */
    public function getCourse(int $id): Model
    {
        return $this->courseRepo->findOrFail($id);
    }

    /**
     * @param int $userId
     * @return LengthAwarePaginator<Enrollment>
     */
    public function getMyCourses($userId)
    {
        return $this->enrollmentRepo->getMyCoures($userId);
    }

    /**
     * @param int $userId
     * @param int $courseId
     *
     * @return bool
     */
    public function isEnrolled($userId, $courseId)
    {
        return (bool) $this->enrollmentRepo->isEnrolled($userId, $courseId);
    }

    /**
     * @param RevenueReportRequest $request
     *
     * @return Collection
     */
    public function getCourseRevenueStatistics(RevenueReportRequest $request): Collection
    {
        $startDate = Carbon::createFromFormat('Y/m/d', $request->input('startDate'));
        $endDate = Carbon::createFromFormat('Y/m/d', $request->input('endDate'));
        $statisBy = $request->input('statisBy');

        $dateFormat = "%Y-%m-%d";

        if ($statisBy == 'year') {
            $dateFormat = "%Y";
        } elseif ($statisBy == 'month') {
            $dateFormat = "%Y-%m";
        } elseif ($statisBy == 'week') {
            $dateFormat = "%Y-%u";
        }

        return $this->courseRepo->getCourseRevenueStatistics(
            $startDate,
            $endDate,
            $dateFormat,
            $request->input('instructorId'),
            $request->input('courseId')
        );
    }
}
