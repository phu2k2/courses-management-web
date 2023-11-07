<?php

namespace Tests\Unit\Services;

// use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Models\User;
use App\Services\UserService;
use Illuminate\Support\Facades\Hash;
use Mockery;
use Tests\TestCase;

class UserServiceTest extends TestCase
{
    protected $userRepo;

    protected function setUp(): void
    {
        parent::setUp();
        $this->userRepo = Mockery::mock('App\Repositories\Interfaces\UserRepositoryInterface')->makePartial();

        // Hash::shouldReceive('make')->andReturnUsing(function ($value) {
        //     return bcrypt($value);
        // });
    }

    public function tearDown(): void
    {
        parent::tearDown();
        Mockery::close();
    }

    public function test_create_user(): void
    {
        $userData = [
            'username' => 'thanhvu112',
            'email' => 'thanhvu112@example.com',
            'password' => 'thanhvu123',
        ];

        $expectedUser = new User([
            'username' => $userData['username'],
            'email' => $userData['email'],
            'password' => Hash::make('thanhvu123'),
        ]);

        $this->userRepo->shouldReceive('create')->with($userData)->andReturn($expectedUser);
        $userService = new UserService($this->userRepo);

        $userModel = $userService->create($userData);

        $this->assertEquals($userModel, $expectedUser);
    }
}
