<?php

namespace App\Services;

use App\Repositories\Interfaces\CourseRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

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
     * @return LengthAwarePaginator<Model>
     */
    public function getCourses(Request $request): LengthAwarePaginator
    {
        $filters = $request->all();

        $validSortOptions = ['num_reviewed', 'total_students', 'average_rating', 'created_at'];

        if (isset($filters['sort']) && !in_array($filters['sort'], $validSortOptions)) {
            $filters['sort'] = 'created_at';
        }

        return $this->courseRepo->getCourses($filters);
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
