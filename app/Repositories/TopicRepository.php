<?php

namespace App\Repositories;

use App\Models\Topic;
use App\Repositories\BaseRepository;
use App\Repositories\Interfaces\TopicRepositoryInterface;

class TopicRepository extends BaseRepository implements TopicRepositoryInterface
{
    public function getModel()
    {
        return Topic::class;
    }

    /**
     * @param int $courseId
     *
     * @return \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Collection|static[]|static|null
     */
    public function getTopicsWithLessons($courseId)
    {
        return $this->model->with('lessons')->where('course_id', $courseId)->get();
    }
}
