<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Services\UserService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class RegisterController extends Controller
{
    /**
     * @var UserService
     */
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function show(): View
    {
        return view('auth.register');
    }

    public function store(RegisterRequest $request): RedirectResponse
    {
        $this->userService->create($request->validated());
        session()->flash('message', __('messages.flash.register.success'));
        return redirect()->route('login.show');
    }
}
