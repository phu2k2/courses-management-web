<?php

namespace App\Services;

use App\Http\Requests\GetCoursesRequest;
use App\Repositories\Interfaces\CourseRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Models\Course;

class CourseService
{
    /**
     * @var CourseRepositoryInterface
     */
    protected $courseRepo;

    public function __construct(CourseRepositoryInterface $courseRepo)
    {
        $this->courseRepo = $courseRepo;
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
     * @return array
     */
    public function getCourses(GetCoursesRequest $request): array
    {
        $courses = $this->courseRepo->getCourses($request);

        $categoryInfo = [];
        foreach ($courses->groupBy('category.name') as $category => $group) {
            $categoryInfo[] = (object) [
                'name' => $category,
                'count' => $group->count(),
                'id' => $group->first()->category->id,
            ];
        }

        return ['courses' => $courses, 'categoryInfo' => $categoryInfo];
    }

    /**
     * @param int $id
     * @return Model
     */
    public function getCourse(int $id): Model
    {
        return $this->courseRepo->findOrFail($id);
    }
}
