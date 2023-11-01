<?php

namespace App\Http\Controllers;

use App\Enums\ActiveUserEnum;
use App\Http\Requests\LoginRequest;
use App\Services\EmailService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * @var EmailService
     */
    protected $emailService;

    public function __construct(EmailService $emailService)
    {
        $this->emailService = $emailService;
    }

    public function show(): View
    {
        return view('auth.login');
    }

    /**
     * Login and redirect.
     *
     * @return RedirectResponse
     */
    public function auth(LoginRequest $request): RedirectResponse
    {
        $credentials = $request->validated();

        if (Auth::attempt($credentials)) {
            if (auth()->user()?->is_active == ActiveUserEnum::active) {
                $request->session()->regenerate();

                return redirect()->route('home');
            }
            $this->emailService->verifyMail((int) auth()->id(), (string) auth()->user()?->email, (string) auth()->user()?->username);
            auth()->logout();

            return redirect()->back()->with('error', __('messages.user.error.active'))->withInput();
        }

        return redirect()->back()->with('error', __('messages.user.error.login'))->withInput();
    }

    /**
     * Logout and redirect.
     *
     * @return RedirectResponse
     */
    public function logout(): RedirectResponse
    {
        auth()->logout();
        session()->flush();

        return redirect()->route('home');
    }
}
