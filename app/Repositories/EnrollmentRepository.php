<?php

namespace App\Repositories;

use App\Models\Enrollment;
use App\Repositories\BaseRepository;
use App\Repositories\Interfaces\EnrollmentRepositoryInterface;

class EnrollmentRepository extends BaseRepository implements EnrollmentRepositoryInterface
{
    /**
     * Get the model instance for the repository.
     *
     * @return string
     */
    public function getModel(): string
    {
        return Enrollment::class;
    }
}
