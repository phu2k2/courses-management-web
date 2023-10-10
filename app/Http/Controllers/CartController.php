<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function showCart(): View
    {
        return view('user.cart.index');
    }

    public function addToCart(int $id): RedirectResponse
    {
        return redirect()->back();
    }
}
