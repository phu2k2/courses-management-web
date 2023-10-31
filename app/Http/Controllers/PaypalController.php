<?php

namespace App\Http\Controllers;

use App\Services\OrderService;
use App\Services\PaypalService;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PaypalController extends Controller
{
    /**
     * @var OrderService
     */
    protected $orderService;

    /**
     * @var PaypalService
     */
    protected $paypalService;

    public function __construct(OrderService $orderService, PaypalService $paypalService)
    {
        $this->orderService = $orderService;
        $this->paypalService = $paypalService;
    }

    /**
     * create order payment and redirect to paypal
     * @return RedirectResponse
     */
    public function handlePayment(): RedirectResponse
    {
        $cart = session()->get('cart');

        if (!$cart) {
            abort(404);
        }
        $totalAmount = $this->paypalService->calculateTotalAmount($cart);

        $response = $this->paypalService->createOrder($totalAmount);
        $approveLink = $this->paypalService->findApproveLink($response['links']);

        if ($approveLink) {
            return redirect()->away($approveLink);
        }

        return redirect()->route('checkouts.index')->with('error', $response['message'] ?? __('messages.payment.paypal.error'));
    }

    /**
     * Store a newly created resource in storage.
     * @return RedirectResponse
     */
    public function paymentSuccess(Request $request): RedirectResponse
    {
        $token = $request->input('token');

        if (!$token) {
            abort(404);
        }
        $response = $this->paypalService->capturePaymentOrder($token);

        if (array_key_exists('error', $response)) {
            abort(404);
        }

        if ($response['status'] == 'COMPLETED') {
            try {
                $userId = (int) auth()->id();
                $cart = session()->get('cart');
                $this->orderService->buyCourses($userId, $cart);
            } catch (Exception $e) {
                session()->flash('error', __('messages.order.error.create_order'));
                return redirect()->route('carts.index');
            }
            return redirect()->route('orders.index');
        }

        return redirect()->route('checkouts.index')->with('error', $response['message'] ?? __('messages.payment.paypal.error'));
    }
}
