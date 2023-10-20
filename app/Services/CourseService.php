<?php

namespace App\Services;

use App\Repositories\Interfaces\CourseRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
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
     * @param Request $request
     * @return array
     */
    public function getCourses(Request $request): array
    {
        $filters = $request->all();

        $validSortOptions = ['num_reviews', 'total_students', 'average_rating', 'created_at'];

        if (isset($filters['sort']) && !in_array($filters['sort'], $validSortOptions)) {
            $filters['sort'] = 'created_at';
        }

        $courses = $this->courseRepo->getCourses($filters);

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
