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

    /**
     * @var string
     */
    protected $tokenField = 'token';

    /**
     * @var string
     */
    protected $emailField = 'email';

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
            $this->resetPasswordService->deleteByField($this->tokenField, $token);
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
        $token = $request->input('token');
        $email = $request->input('email');
        $updatePassword = $request->input('password');

        /**
         * Validate the token
         */
        $updateData = $this->resetPasswordService->isValidToken($token, $email);

        /**
         * Check the token if the token is valid
         */
        if (!$updateData) {
            return redirect()->to(route('password.reset'))->with("error", __('messages.password.error.reset_password'));
        }

        /**
         * Check expiration time after the user clicks the link and access the reset password page
         */
        $tokenData = $this->resetPasswordService->isExpiredToken($token, now()->toDateTimeString());

        if (!$tokenData) {
            $this->resetPasswordService->deleteByField($this->tokenField, $token);
            abort(404);
        }

        /**
         * Hash and update the new password
         */
        $this->userService->updatePassword($email, $updatePassword);

        /**
         * Delete the token
         */
        $this->resetPasswordService->deleteByField($this->emailField, $email);

        return redirect()->route('login.show')->with('message', __('messages.password.success.reset_password'));
    }
}
