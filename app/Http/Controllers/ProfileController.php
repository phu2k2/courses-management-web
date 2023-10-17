<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * @var UserService
     */
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    /**
     * Get information about logged in user with id
     */
    public function show(): View
    {
        $user = $this->userService->getInfor(Auth::id());

        return view('user.profile', compact('user'));
    }

    public function update(): RedirectResponse
    {
        return redirect()->back();
    }
}
