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
    public function getByLesson($lessonId): Collection
    {
        return $this->commentRepo->getByLesson($lessonId);
    }

    /**
     * @param int $id
     *
     * @return Model
     */
    public function getComment($id)
    {
        return $this->commentRepo->findOrFail($id);
    }

    /**
     * @param int $id
     *
     * @return int|bool True if the deletion was successful, false otherwise
     */
    public function delete($id)
    {
        return $this->commentRepo->delete($id);
    }
}
