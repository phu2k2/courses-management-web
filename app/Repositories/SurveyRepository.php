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

    /**
     * @param int $userId
     * @return array
     */
    public function getRecommendCourse($userId)
    {
        /** @phpstan-ignore-next-line */
        $categories = $this->model->owner($userId)->select('category_id')->get();
        /** @phpstan-ignore-next-line */
        $language = $this->model->owner($userId)->value('languages');
        /** @phpstan-ignore-next-line */
        $level = $this->model->owner($userId)->value('level');

        return [
            'categories' => $categories,
            'language' => $language,
            'level' => $level,
        ];
    }
}
