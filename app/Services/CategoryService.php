<?php

namespace App\Services;

use App\Repositories\Interfaces\CategoryRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class CategoryService
{
    /**
     * @var CategoryRepositoryInterface
     */
    protected $categoryRepo;

    public function __construct(CategoryRepositoryInterface $categoryRepo)
    {
        $this->categoryRepo = $categoryRepo;
    }

    /**
     * @param array $columns
     * @return Collection
     */
    public function getAll($columns = ['*'])
    {
        return $this->categoryRepo->getAll($columns);
    }
}
