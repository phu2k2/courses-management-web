<?php

namespace App\Repositories;

use App\Models\Lesson;
use App\Repositories\BaseRepository;
use App\Repositories\Interfaces\LessonRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class LessonRepository extends BaseRepository implements LessonRepositoryInterface
{
    public function getModel()
    {
        return Lesson::class;
    }

    /**
     * @return Collection
     */
    public function getLessonByTopic(int $topic): Collection
    {
        $test = $this->model->where('topic_id', $topic)->get();

        return $test;
    }
}
