<?php

namespace App\Services;

use App\Models\Course;
use App\Repositories\Course\CourseRepositoryInterface;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

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
     * @return LengthAwarePaginator<Course>
     */
    public function getListCourses(): LengthAwarePaginator
    {
        $listCourses = $this->courseRepo->getListCourses();

        return $listCourses;
    }
}
