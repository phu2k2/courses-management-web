<?php

namespace App\Services;

use App\Repositories\Interfaces\CategoryRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class CategoryService
{
    /**
     * @var CategoryRepositoryInterface
     */
    protected $courseRepo;

    public function __construct(CategoryRepositoryInterface $categoryRepo)
    {
        $this->courseRepo = $categoryRepo;
    }

    /**
     * @return Collection
     */
    public function getCategories(): Collection
    {
        return $this->courseRepo->getCategories();
    }
}
