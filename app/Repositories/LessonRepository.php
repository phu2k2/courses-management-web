<?php

namespace App\Repositories;

use App\Models\Lesson;
use App\Repositories\BaseRepository;
use App\Repositories\Interfaces\LessonRepositoryInterface;

class LessonRepository extends BaseRepository implements LessonRepositoryInterface
{
    public function getModel()
    {
        return Lesson::class;
    }

    /**
     * @param int $lessonId
     *
     * @return \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Collection|static[]|static|null
     */
    public function getLessonById($lessonId)
    {
        return $this->find($lessonId);
    }
}
