<?php

namespace App\Services;

use App\Repositories\Interfaces\ReviewRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class ReviewService
{
    /**
     * @var CartRepositoryInterface
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
}
