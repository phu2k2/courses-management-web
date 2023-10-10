<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function editProfile(): View
    {
        return view('user.account.profile');
    }

    public function updateProfile(): RedirectResponse
    {
        return redirect()->back();
    }
}
