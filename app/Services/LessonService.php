<?php

namespace App\Services;

use App\Repositories\Interfaces\LessonRepositoryInterface;

class LessonService
{
    /**
     * @var lessonRepositoryInterface
     */
    protected $lessonRepo;

    public function __construct(LessonRepositoryInterface $lessonRepo)
    {
        $this->lessonRepo = $lessonRepo;
    }

    /**
     * @param int $lessonId
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function findLesson($lessonId)
    {
        return $this->lessonRepo->findOrFail($lessonId);
    }
}
