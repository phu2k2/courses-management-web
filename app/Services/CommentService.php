<?php

namespace App\Services;

use App\Repositories\Interfaces\CommentRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class CommentService
{
    /**
     * @var CommentRepositoryInterface
     */
    protected $commentRepo;

    public function __construct(CommentRepositoryInterface $commentRepo)
    {
        $this->commentRepo = $commentRepo;
    }

    /**
     * @param int $lessonId
     *
     * @return Collection
     */
    public function getCommentsByLessonId($lessonId): Collection
    {
        return $this->commentRepo->getCommentsByLessonId($lessonId);
    }
}
