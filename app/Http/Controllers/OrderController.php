<?php

namespace App\Http\Controllers;

use App\Services\OrderService;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class OrderController extends Controller
{
    /**
     * @var OrderService
     */
    protected $orderService;

    public function __construct(OrderService $orderService)
    {
        $this->orderService = $orderService;
    }
    /**
     * Display a listing of the resource.
     * @return View
     */
    public function index()
    {
        return view('order.index');
    }

    /**
     * Store a newly created resource in storage.
     * @return RedirectResponse
     */
    public function store()
    {
        try {
            $userId = (int) auth()->id();
            $cart = session()->get('cart');
            $this->orderService->BuyCourses($userId, $cart);
        } catch (Exception $e) {
            session()->flash('error', __('messages.order.error.create_order'));
            return redirect()->route('carts.index');
        }

        return redirect()->route('orders.index');
    }
}
