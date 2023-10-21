<?php

namespace App\Http\Controllers;

use App\Http\Requests\ForgotPasswordRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use App\Services\ResetPasswordService;
use App\Services\UserService;
use Illuminate\Support\Facades\Mail;

class ForgotPasswordController extends Controller
{
    /**
     * @var UserService
     */
    protected $userService;

    /**
     * @var ResetPasswordService
     */
    protected $resetPasswordService;

    public function __construct(UserService $userService, ResetPasswordService $resetPasswordService)
    {
        $this->userService = $userService;
        $this->resetPasswordService = $resetPasswordService;
    }

    /**
     * @return View
     */
    public function showForgotPasswordForm(): View
    {
        return view('auth.forgot-password');
    }

    /**
     * @param ForgotPasswordRequest $request
     * @return RedirectResponse
     */
    public function submitForgetPasswordForm(ForgotPasswordRequest $request)
    {
        /**
         * Create a object for 'password_reset_token' table
         */
        $this->resetPasswordService->addResetPassWord($request->input('email'), Str::random(60), now(), now()->addMinutes(10));

        /**
         *Get the token just created above
         */
        $tokenData = $this->resetPasswordService->getByEmail($request->input('email'));

        /**
         * Send password reset link to email
         */
        Mail::send("email.index", ['token' => $tokenData['token']], function ($message) use ($request) {
            $message->to($request->input('email'));
            $message->subject("Reset Password");
        });

        return redirect()->back()->with('message', 'A reset link has been sent !');
    }
}
