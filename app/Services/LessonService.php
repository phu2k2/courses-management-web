<?php

namespace App\Services;

use App\Repositories\Interfaces\LessonRepositoryInterface;

class LessonService
{
    /**
     * @var lessonRepositoryInterface
     */
    protected $lessonRepository;

    public function __construct(LessonRepositoryInterface $lessonRepository)
    {
        $this->lessonRepository = $lessonRepository;
    }

    /**
     * @param int $lessonId
     *
     * @return \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Collection|static[]|static|null
     */
    public function getLessonById($lessonId)
    {
        return $this->lessonRepository->getLessonById($lessonId);
    }
}
