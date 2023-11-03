<?php

namespace App\Repositories\Interfaces;

use App\Repositories\RepositoryInterface;

interface SurveyRepositoryInterface extends RepositoryInterface
{
    /**
     * @param int $userId
     * @return array
     */
    public function getRecommendCourse(int $userId);
}
