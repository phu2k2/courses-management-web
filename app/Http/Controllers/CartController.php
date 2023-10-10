<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class CartController extends Controller
{
    public function index(): View
    {
        return view('user.cart.index');
    }

    public function store(): RedirectResponse
    {
        return redirect()->back();
    }

    public function destroy(): RedirectResponse
    {
        return redirect()->back();
    }
}
