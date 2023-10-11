<?php

namespace App\Services;

use App\Repositories\Interfaces\RegisterRepositoryInterface;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;

class RegisterService
{
    /**
     * @var RegisterRepositoryInterface
     */
    protected $registerRepository;

    public function __construct(RegisterRepositoryInterface $registerRepository)
    {
        $this->registerRepository = $registerRepository;
    }

    /**
     * @return void
     */
    public function create(array $request)
    {
        $attribute = Arr::except($request, ['password', 'username']);
        $attribute['username'] = strtolower($request['username']);
        $attribute['password'] = Hash::make($request['password']);
        $this->registerRepository->create($attribute);
    }
}
