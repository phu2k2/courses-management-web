<?php

namespace App\Http\Controllers;

use App\Services\CartService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * @var CartService
     */
    private $cartService;

    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }

    public function index(): View
    {
        $cartByUser = $this->cartService->getCartByUser((int)Auth::id());

        return view('cart.index', compact('cartByUser'));
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
