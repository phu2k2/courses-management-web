<?php

namespace App\Repositories\Interfaces;

use App\Repositories\RepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

interface CourseRepositoryInterface extends RepositoryInterface
{
    /**
     * @param mixed $courseId
     *
     * @return mixed
     */
    public function getCourseById($courseId);
}
