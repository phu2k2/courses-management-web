<?php

namespace App\Services;

use App\Repositories\Interfaces\CategoryRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Redis;

class CategoryService
{
    protected const CACHE_KEY = 'categories_all';

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
        if (Redis::exists(self::CACHE_KEY)) {
            $serializedData = Redis::get(self::CACHE_KEY);
            if ($serializedData !== false) {
                return unserialize($serializedData);
            }
        }

        $categories = $this->categoryRepo->getAll($columns);

        Redis::set(self::CACHE_KEY, serialize($categories));

        return $categories;
    }
}
