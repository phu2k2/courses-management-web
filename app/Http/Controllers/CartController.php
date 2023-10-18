<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCartRequest;
use App\Services\CartService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

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

    /**
     * show list course of cart by user
     * @return View
     */
    public function index(): View
    {
        $cart = $this->cartService->getCartByUser((int)auth()->id());

        return view('cart.index', compact('cart'));
    }

    /**
     * Store a newly created resource in storage.
     * @return RedirectResponse
     */
    public function store(StoreCartRequest $request): RedirectResponse
    {
        $data = $request->all();
        session()->flash('message', __('messages.user.success.create_cart'));
        if (!$this->cartService->addToCart($data)) {
            session()->forget('message');
            session()->flash('error', __('messages.user.error.create_cart'));
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

    /**
     * @return RedirectResponse
     */
    public function deleteMutilCarts(Request $request)
    {
        $ids = $request->all();
        session()->flash('message', __('messages.user.success.create_cart'));
        if (!$this->cartService->deleteMultipleCart($ids)) {
            session()->forget('message');
            session()->flash('error', __('messages.user.error.create_cart'));
        }

        return redirect()->back();
    }
}
