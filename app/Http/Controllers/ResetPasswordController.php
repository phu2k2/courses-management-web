<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResetPasswordRequest;
use Illuminate\Contracts\View\View;
use App\Services\ResetPasswordService;
use App\Services\UserService;
use Illuminate\Http\RedirectResponse;

class ResetPasswordController extends Controller
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
     * @param string $token
     * @return View
     */
    public function showResetPasswordForm($token): View
    {
        /**
         * Check the creation token time is expired
         */
        $tokenData = $this->resetPasswordService->isExpiredToken($token, now()->toDateTimeString());
        if (!$tokenData) {
            $this->resetPasswordService->deleteByToken($token);
            abort(404);
        }

        /**
         * Get the email data of user
         */
        $email = $tokenData['email'];

        return view(('auth.reset-password'), compact('email', 'token'));
    }

    /**
     * @param ResetPasswordRequest $request
     * @return RedirectResponse
     */
    public function submitResetPasswordForm(ResetPasswordRequest $request)
    {
        /**
         * Validate the token
         */
        $updatePassword = $this->resetPasswordService->isValidToken($request->input('token'), $request->input('email'));

        /**
         * Check the token if the token is valid
         */
        if (!$updatePassword) {
            return redirect()->to(route('password.reset'))->with("error", __('messages.password.error.reset_password'));
        }

        /**
         * Check expiration time after the user clicks the link and access the reset password page
         */
        $tokenData = $this->resetPasswordService->isExpiredToken($request->input('token'), now()->toDateTimeString());

        if (!$tokenData) {
            $this->resetPasswordService->deleteByToken($request->input('token'));
            abort(404);
        }

        /**
         * Hash and update the new password
         */
        $this->userService->updatePassword($request->input('email'), $request->input('password'));

        /**
         * Delete the token
         */
        $this->resetPasswordService->deleteByEmail($request->input('email'));

        return redirect()->route('login.show')->with('message', __('messages.password.success.reset_password'));
    }
}
