<?php

namespace App\Repositories;

use App\Models\Survey;
use App\Repositories\BaseRepository;
use App\Repositories\Interfaces\SurveyRepositoryInterface;

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
}
