<?php

namespace App\Services;

use App\Repositories\LessonRepository;
use Illuminate\Support\Collection;

class LessonService
{
    /**
     * @var LessonRepository
     */
    protected $lessonRepository;

    public function __construct(LessonRepository $lessonRepository)
    {
        $this->lessonRepository = $lessonRepository;
    }

    /**
     * @return Collection
     */
    public function getLessonByTopic(int $courseId, int $topicId): Collection
    {
        return $this->lessonRepository->getLessonByTopic($courseId, $topicId);
    }

    /**
     * @return Collection
     */
    public function getLessonByCourseId(int $courseId): Collection
    {
        return $this->lessonRepository->getAllLessonByCourseId($courseId);
    }
}
