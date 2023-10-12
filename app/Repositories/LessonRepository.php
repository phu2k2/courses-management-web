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
    public function getLessonByTopic(int $courseId, int $lessonId): Collection
    {
        return $this->model->join('topics', 'lessons.topic_id', '=', 'topics.id')
            ->join('courses', 'topics.course_id', '=', 'courses.id')
            ->where('courses.id', $courseId)
            ->where('lessons.id', $lessonId)
            ->select('lessons.*', 'courses.*')
            ->get();
    }

    /**
     * @return Collection
     */
    public function getAllLessonByCourseId(int $courseId): Collection
    {
        return $this->model->join('topics', 'lessons.topic_id', '=', 'topics.id')
            ->join('courses', 'topics.course_id', '=', 'courses.id')
            ->where('courses.id', $courseId)
            ->select('lessons.*', 'topics.*')
            ->get();
    }
}
