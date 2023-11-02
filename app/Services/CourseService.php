<?php

namespace App\Services;

use App\Http\Requests\GetCoursesRequest;
use App\Repositories\Interfaces\CourseRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Models\Course;
use App\Models\Enrollment;
use App\Repositories\Interfaces\EnrollmentRepositoryInterface;
use Illuminate\Support\Facades\Redis;

class CourseService
{
    protected const CACHE_EXPIRATION = 600;

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
        $cacheKey = 'courses_' . md5(serialize($request->validated()));

        if (Redis::exists($cacheKey)) {
            $serializedData = Redis::get($cacheKey);
            if ($serializedData) {
                return unserialize($serializedData);
            }
        }

        $courses = $this->courseRepo->getCourses($request);
        Redis::setex($cacheKey, self::CACHE_EXPIRATION, serialize($courses));

        return $courses;
    }

    /**
     * @param int $id
     * @return LengthAwarePaginator<Model>
     */
    public function getInstructorCourses($id): LengthAwarePaginator
    {
        return $this->courseRepo->getInstructorCourses($id);
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
     * @param array $data
     *
     * @return Model
     */
    public function create($data)
    {
        return $this->courseRepo->create($data);
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
     * @param int $courseId
     * @param array $data
     *
     * @return bool
     */
    public function update($courseId, $data)
    {
        return $this->courseRepo->update($courseId, $data);
    }
}
