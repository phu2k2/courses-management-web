<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

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

    public function show(Request $request): View
    {
        $profile = $this->userService->getInfor($request->id);
        return view('user.account.profile', compact('profile'));
    }

    public function update(): RedirectResponse
    {
        return redirect()->back();
    }
}
