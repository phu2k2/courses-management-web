<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
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
            $request->session()->regenerate();

            return redirect()->route('home', ['id' => Auth::id()]);
        }

        return redirect()->back()->with('error', __('messages.user.error.login'));
    }
}
