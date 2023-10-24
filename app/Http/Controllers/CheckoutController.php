<?php

namespace App\Http\Controllers;

use App\Services\CartService;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
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
     * Display a listing of the resource.
     * @return View
     */
    public function index(): View
    {
        $carts = Session::get('cart');
        return view('checkout.index', compact('carts'));
    }

    /**
     * Store a newly created resource in storage.
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        try {
            $itemCarts = $request->input('select_items');
            $carts = $this->cartService->findSelectCart($itemCarts);
            Session::put('cart', $carts);

            return redirect()->route('checkouts.index');
        } catch (Exception $e) {
            session()->flash('error', __('messages.checkout.error.save'));

            return redirect()->route('carts.index');
        }
    }
}
