<?php

namespace App\Services;

use App\Repositories\Interfaces\CourseRepositoryInterface;

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
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function findCourse($courseId)
    {
        return $this->courseRepo->findOrFail($courseId);
    }
}
