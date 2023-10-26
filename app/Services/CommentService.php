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
     * @param int $userId
     *
     * @return bool True if the deletion was successful, false otherwise
     */
    public function delete($id, $userId)
    {
        $result = false;
        $this->commentRepo->findComment($id, $userId);
        $result = $this->commentRepo->destroy($id);
        return $result;
    }

    /**
     * @param int $id
     * @param int $userId
     * @param array $request
     *
     * @return int|bool
     */
    public function update($id, $userId, $request)
    {
        $result = false;
        if ($this->commentRepo->findComment($id, $userId)) {
            $data = [];
            $data['content'] = $request;
            $result =  $this->commentRepo->update($id, $data);
        }

        return $result;
    }
}
