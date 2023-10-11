<?php

namespace App\Repositories\Interfaces;

use App\Repositories\RepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

interface LessonRepositoryInterface extends RepositoryInterface
{
    /**
     * @return Collection
     */
    public function getAllLesson(): Collection;
}
