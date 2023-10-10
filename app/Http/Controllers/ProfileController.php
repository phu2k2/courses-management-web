<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class ProfileController extends Controller
{
    public function edit(): View
    {
        return view('user.account.profile');
    }

    public function update(): RedirectResponse
    {
        return redirect()->back();
    }
}
