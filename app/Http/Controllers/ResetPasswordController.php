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
        $userData = $this->resetPasswordService->isExpiredToken($token, now());

        if (!$userData) {
            $this->resetPasswordService->deleteByToken($token);
            abort(404);
        }
        $email = $userData['email'];
        return view(('auth.reset-password'), compact('email', 'token'));
    }

    /**
     * @param ResetPasswordRequest $request
     * @return RedirectResponse
     */
    public function submitResetPasswordForm(ResetPasswordRequest $request)
    {
        //Validate the token
        $updatePassword = $this->resetPasswordService->isValidToken($request->input('token'), $request->input('email'));

        //Check the token
        if (!$updatePassword) {
            return redirect()->to(route('password.reset'))->with("error", "Error Token!");
        }

        //Hash and update the new password
        $this->userService->updatePassword($request->input('email'), $request->input('password'));

        //Delete the token
        $this->resetPasswordService->deleteByEmail($request->input('email'));

        return redirect()->route('login.show')->with('message', 'Reset Password Successfully!');
    }
}
