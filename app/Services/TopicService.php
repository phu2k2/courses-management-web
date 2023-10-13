<?php

namespace App\Services;

use App\Repositories\Interfaces\TopicRepositoryInterface;

class TopicService
{
    /**
     * @var TopicRepositoryInterface
     */
    protected $topicRepo;

    public function __construct(TopicRepositoryInterface $topicRepo)
    {
        $this->topicRepo = $topicRepo;
    }

    /**
     * @param int $courseId
     * @return \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Collection|static[]|static|null
     */
    public function getTopicsWithLessons($courseId)
    {
        return $this->topicRepo->getTopicsWithLessons($courseId);
    }
}
