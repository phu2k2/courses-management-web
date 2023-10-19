<?php

namespace App\Http\Controllers;

use App\Services\BadgeService;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    public function home(): View
    {
        return view('home');
    }
}
