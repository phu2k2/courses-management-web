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

    public function getCourseRevenueStatistics(RevenueReportRequest $request)
    {
        $start_date = Carbon::createFromFormat('Y/m/d', $request->input('start_date'));
        $end_date = Carbon::createFromFormat('Y/m/d', $request->input('end_date'));
        $statis_by = $request->input('statis_by');

        $dateFormat = "%Y-%m-%d";

        if ($statis_by == 'year') {
            $dateFormat = "%Y";
        } elseif ($statis_by == 'month') {
            $dateFormat = "%Y-%m";
        } elseif ($statis_by == 'week') {
            $dateFormat = "%Y-%u";
        }

        return $this->courseRepo->getCourseRevenueStatistics(
            $start_date,
            $end_date,
            $dateFormat,
            $request->input('instructor_id'),
            $request->input('course_id')
        );
    }
}
