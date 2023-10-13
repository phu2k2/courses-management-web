<?php

namespace App\Repositories;

use App\Models\Course;
use App\Repositories\BaseRepository;
use App\Repositories\Interfaces\CourseRepositoryInterface;

class CourseRepository extends BaseRepository implements CourseRepositoryInterface
{
    public function getModel()
    {
        return Course::class;
    }
}
