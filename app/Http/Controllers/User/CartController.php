<?php

namespace App\Http\Controllers\User;

use App\Services\CartService;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCartRequest;
use Illuminate\Contracts\View\View;

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
     * @return View
     */
    public function store(StoreCartRequest $request): View
    {
        $data = $request->validated();
        $this->cartService->addToCart($data);

        return View('lesson.index');
    }
}
