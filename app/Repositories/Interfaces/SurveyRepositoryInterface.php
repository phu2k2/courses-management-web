<?php

namespace App\Repositories\Interfaces;

use App\Repositories\RepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface SurveyRepositoryInterface extends RepositoryInterface
{
    /**
     * @param int $userId
     * @return Collection
     */
    public function getCategories(int $userId);

    /**
     * @param int $userId
     * @return Model
     */
    public function getLanguage($userId);

    /**
     * @param int $userId
     * @return Model
     */
    public function getLevel($userId);
}
