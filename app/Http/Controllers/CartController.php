<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCartRequest;
use App\Services\CartService;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

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
     * Remove the specified resource from storage.
     * @return RedirectResponse
     */
    public function destroy(Request $request, string $id): RedirectResponse
    {
        if ($this->cartService->deleteCart($id)) {
            session()->flash('message', __('messages.cart.success.delete'));
        } else {
            session()->flash('error', __('messages.cart.error.delete'));
        }

        return redirect()->back();
    }
}
