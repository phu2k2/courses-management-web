<?php

namespace App\Services;

use App\Http\Requests\GetCoursesRequest;
use App\Http\Requests\StatisticsStudentRequest;
use App\Repositories\Interfaces\CourseRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Models\Course;
use App\Models\Enrollment;
use App\Repositories\Interfaces\EnrollmentRepositoryInterface;
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
     * @param string $type
     *
     * @return string
     */
    private function getSelectExpression($type)
    {
        switch ($type) {
            case 'year':
                return 'YEAR(e.created_at)';
            case 'month':
                return 'DATE_FORMAT(e.created_at, "%Y-%m")';
            case 'week':
                return 'DATE_FORMAT(e.created_at, "%Y-%u")';
            default:
                return '';
        }
    }

    /**
     * Sum totalStudent in course by instructor
     *
     * @param StatisticsStudentRequest $request
     * @return Collection
     */
    public function totalStudentsByTime(StatisticsStudentRequest $request): Collection
    {
        $instructorId = (int)auth()->id();
        $courseId = $request->input('course_id');
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');
        $type = $request->input('type');

        return $this->courseRepo->totalStudentsByTime($instructorId, $courseId, $startDate, $endDate, $this->getSelectExpression($type));
    }
}
