<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCartRequest;
use App\Services\CartService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class CartController extends Controller
{
    /**
     * @var CartService
     */
    protected $cartService;

    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }

    public function index(): View
    {
        return view('cart.index');
    }

    /**
     * Store a newly created resource in storage.
     * @return RedirectResponse
     */
    public function store(StoreCartRequest $request): RedirectResponse
    {
        $data = $request->validated();
        if (!$this->cartService->addToCart($data)) {
            session()->flash('error', 'Failed to add to cart!');
        } else {
            session()->flash('message', 'Added to cart successfully!');
        }

        return redirect()->back();
    }

    /**
     * @return RedirectResponse
     */
    public function destroy()
    {
        return redirect()->back();
    }
}
