<?php

namespace App\Repositories;

use App\Models\Survey;
use App\Repositories\BaseRepository;
use App\Repositories\Interfaces\SurveyRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class SurveyRepository extends BaseRepository implements SurveyRepositoryInterface
{
    /**
     * Get the model instance for the repository.
     *
     * @return string
     */
    public function getModel(): string
    {
        return Survey::class;
    }

    /**
     * @param int $userId
     * @return Collection
     */
    public function getCategories($userId)
    {
        /** @phpstan-ignore-next-line */
        return $this->model->owner($userId)->select('category_id')->get();
    }

    /**
     * @param int $userId
     * @return Model
     */
    public function getLanguage($userId)
    {
        /** @phpstan-ignore-next-line */
        return $this->model->owner($userId)->value('languages');
    }

    /**
     * @param int $userId
     * @return Model
     */
    public function getLevel($userId)
    {
        /** @phpstan-ignore-next-line */
        return $this->model->owner($userId)->value('level');
    }
}
