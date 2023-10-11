<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{
    public function show(): View
    {
        return view('user.auth.login');
    }

    public function auth(): RedirectResponse
    {
        return redirect()->route('home');
    }
}
