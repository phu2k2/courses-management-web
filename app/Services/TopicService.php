<?php

namespace App\Services;

use App\Repositories\Interfaces\TopicRepositoryInterface;

class TopicService
{
    /**
     * @var TopicRepositoryInterface
     */
    protected $topicRepository;

    public function __construct(TopicRepositoryInterface $topicRepository)
    {
        $this->topicRepository = $topicRepository;
    }

    /**
     * @param int $CourseId
     *
     * @return array
     */
    public function getTopicsWithLessons($CourseId)
    {
        return $this->topicRepository->getTopicsWithLessons($CourseId);
    }
}
