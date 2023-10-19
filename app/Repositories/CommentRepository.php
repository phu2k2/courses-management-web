<?php

namespace App\Repositories;

use App\Models\Comment;
use App\Repositories\Interfaces\CommentRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class CommentRepository extends BaseRepository implements CommentRepositoryInterface
{
    /**
     * @return string
     */
    public function getModel()
    {
        return Comment::class;
    }

    /**
     * @param int $lessonId
     *
     * @return Collection
     */
    public function getByLesson($lessonId): Collection
    {
        return $this->model->with('user.profile')->where('lesson_id', $lessonId)->get();
    }

    /**
     * @param int $id
     *
     * @return int|bool
     */
    public function destroy($id)
    {
        return $this->model->where('id', $id)->orWhere('parent_id', $id)->delete();
    }
}
