<?php

namespace App\Services;

use App\Repositories\Interfaces\ReviewRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class ReviewService
{
    /**
     * @var ReviewRepositoryInterface
     */
    protected $reviewRepo;

    public function __construct(ReviewRepositoryInterface $reviewRepo)
    {
        $this->reviewRepo = $reviewRepo;
    }

    /**
     * @param int $id of course
     * @return Collection
     */
    public function getReviewsByCourse(int $id): Collection
    {
        return $this->reviewRepo->getReviewsByCourse($id);
    }

    /**
     * Add review
     * @param array $data
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function addReview($data): Model
    {
        return $this->reviewRepo->create($data);
    }
}
