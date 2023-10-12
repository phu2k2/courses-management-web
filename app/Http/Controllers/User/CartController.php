<?php

namespace App\Http\Controllers\User;

use App\Services\CartService;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCartRequest;
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

    /**
     * Store a newly created resource in storage.
     * @return RedirectResponse
     */
    public function store(StoreCartRequest $request): RedirectResponse
    {
        $data = $request->validated();

        if ($this->cartService->addToCart($data)) {
            session()->flash('message', 'Added to cart successfully!');
        }
        session()->flash('error', 'Failed to add to cart!');

        return redirect()->back();
    }
}
