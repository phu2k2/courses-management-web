<?php

namespace App\Repositories\Interfaces;

use App\Repositories\RepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

interface LessonRepositoryInterface extends RepositoryInterface
{
    /**
     * @param int $lessonId
     *
     * @return mixed
     */
    public function getLessonById($lessonId);
}
