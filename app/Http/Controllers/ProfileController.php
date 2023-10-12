<?php

namespace App\Http\Controllers;

use App\Services\ProfileService;
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

    /**
     * @var ProfileService
     */
    protected $profileService;

    public function __construct(UserService $userService, ProfileService $profileService)
    {
        $this->userService = $userService;
        $this->profileService = $profileService;
    }

    public function show(): View
    {
        $user = $this->userService->getInfor(Auth::user());
        return view('user.profile', compact('user'));
    }

    public function update(Request $request): RedirectResponse
    {
        $userId = $request->input('id');

        $user = $request->only('username', 'email');
        $profile = $request->only('first_name', 'last_name', 'description');

        $this->userService->updateUser($userId, $user);
        $this->profileService->updateProfile($userId, $profile);

        return redirect()->back()->with('success', 'Profile updated successfully.');
    }
}
