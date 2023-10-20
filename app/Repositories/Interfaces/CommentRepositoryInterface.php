<?php

namespace App\Repositories\Interfaces;

use App\Repositories\RepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

interface CommentRepositoryInterface extends RepositoryInterface
{
    /**
     * @param int $lessonId
     *
     * @return Collection
     */
    public function getByLesson($lessonId): Collection;
}
