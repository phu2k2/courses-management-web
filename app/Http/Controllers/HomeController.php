<?php

namespace App\Http\Controllers;

use App\Services\BadgeService;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    /**
     * @var BadgeService
     */
    protected $badgeService;

    public function __construct(BadgeService $badgeService)
    {
        $this->badgeService = $badgeService;
    }

    public function home(): View
    {
        if (auth()->id()) {
            $cart = $this->badgeService->getCountCart((int) auth()->id());
            session()->put('cart', $cart);
        }
        return view('home');
    }
}
