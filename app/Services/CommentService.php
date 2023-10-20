<?php

namespace App\Services;

use App\Repositories\Interfaces\CommentRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

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
     * @return int|bool True if the deletion was successful, false otherwise
     */
    public function delete($id)
    {
        $result = false;
        $comment = $this->commentRepo->findOrFail($id);
        if ($comment) {
            $result = $this->commentRepo->destroy($id);
        }
        return $result;
    }

    /**
     * @param int $id
     * @param array $request
     *
     * @return int|bool
     */
    public function update($id, $request)
    {
        $data = [];
        $data['content'] = $request;
        return $this->commentRepo->update($id, $data);
    }
}
