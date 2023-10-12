<?php

namespace App\Repositories\Interfaces;

use App\Repositories\RepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

interface LessonRepositoryInterface extends RepositoryInterface
{
    /**
     * @return Collection
     */
    public function getLessonByTopic(int $courseId, int $lessonId): Collection;

    /**
     * @return Collection
     */
    public function getAllLessonByCourseId(int $courseId): Collection;
}
