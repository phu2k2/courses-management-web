<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Services\RegisterService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class RegisterController extends Controller
{
    /**
     * @var RegisterService
     */
    protected $registerService;

    public function __construct(RegisterService $registerService)
    {
        $this->registerService = $registerService;
    }

    public function show(): View
    {
        return view('user.auth.register');
    }

    public function store(RegisterRequest $request): RedirectResponse
    {
        $this->registerService->create($request->validated());
        session()->flash('message', config('define.register.success'));
        return redirect()->route('login.show');
    }
}
