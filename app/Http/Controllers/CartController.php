<?php

namespace App\Http\Controllers;

use App\Services\BadgeService;
use App\Services\CartService;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * @var CartService
     */
    private $cartService;

    /**
     * @var BadgeService
     */
    protected $badgeService;

    public function __construct(CartService $cartService, BadgeService $badgeService)
    {
        $this->cartService = $cartService;
        $this->badgeService = $badgeService;
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
    public function store(Request $request): RedirectResponse
    {
        try {
            $courseId = $request->input('course_id');
            $userId = (int) auth()->id();
            $this->cartService->addToCart($userId, $courseId);
            session()->flash('message', __('messages.user.success.create_cart'));
            $cart = $this->badgeService->getCountCart($userId);
            session()->put('cart', $cart);
        } catch (Exception $e) {
            session()->flash('error', __('messages.user.error.create_cart'));
        }
        return redirect()->back();
    }

    /**
     * @param int $id
     * Remove the specified resource from storage.
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        if ($this->cartService->deleteCart($id)) {
            $cart = $this->badgeService->getCountCart((int) auth()->id());
            session()->put('cart', $cart);
            session()->flash('message', __('messages.cart.success.delete'));
            return redirect()->back();
        }
        session()->flash('error', __('messages.cart.error.delete'));
        return redirect()->back();
    }
}
