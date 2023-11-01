<?php

namespace App\Repositories;

use App\Models\Survey;
use App\Repositories\BaseRepository;
use App\Repositories\Interfaces\SurveyRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

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
        return $this->model->where('user_id', $userId)->select('category_id')->get();
    }
}
