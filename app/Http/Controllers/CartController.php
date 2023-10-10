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

    public function store(int $courseId): RedirectResponse
    {
        return redirect()->back();
    }

    public function destroy(int $cartId): RedirectResponse
    {
        return redirect()->back();
    }
}
