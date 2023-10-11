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
    public function getAllLesson(): Collection
    {
        $lesson = $this->lessonRepository->getAllLesson();

        return $lesson;
    }
}
