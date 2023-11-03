<?php

namespace App\Http\Controllers;

use App\Services\OrderService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
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
     * @return RedirectResponse|View
     */
    public function index()
    {
        $orders = session()->get('cart_payment');
        if ($orders) {
            session()->forget('cart');
            return view('order.index', compact('orders'));
        }
        return redirect()->route('carts.index');
    }

    /**
     * Store a newly created resource in storage.
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $paymentMethod = $request->input('payment_method');

        if ($paymentMethod === 'paypal') {
            return redirect()->route('paypal.payment');
        } elseif ($paymentMethod === 'momo') {
            //implement
        }

        session()->flash('error', __('messages.order.error.create_order'));
        return redirect()->route('carts.index');
    }
}
