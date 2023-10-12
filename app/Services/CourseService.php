<?php

namespace App\Services;

use App\Models\Course;
use App\Repositories\Interfaces\CourseRepositoryInterface;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Model;

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
     * @return LengthAwarePaginator<\Illuminate\Database\Eloquent\Model>
     */
    public function getListCourses(): LengthAwarePaginator
    {
        $listCourses = $this->courseRepo->getListCourses();

        return $listCourses;
    }

    /**
     * @param int
     * @return Model|null
     */
    public function getCourseDetail(int $id): Model|null
    {
        return $this->courseRepo->find($id);
    }
}
