<?php

namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;
use Illuminate\View\View;

class RegisterController extends Controller
{
    /**
     * @var userService
     */
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    /**
     * @return View
     */
    public function index(): View
    {
        $user = $this->userService->getInfor((int) auth()->id());

        return view('user.register', compact('user'));
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function submitRegisterForm(Request $request): RedirectResponse
    {
        /** @var User */
        $user = auth()->user();
        $userId = $user->id;
        $email = $user->email;
        $userName = $user->username;

        $expireTime = 60;
        $lastEmailSentTime = $request->session()->get('last_email_sent_time');
        if ($lastEmailSentTime && now()->diffInSeconds($lastEmailSentTime) < $expireTime) {
            session()->flash('error', __('messages.instructor.error.request'));

            return redirect()->back();
        }

        $confirmationUrl = URL::temporarySignedRoute(
            'users.edit',
            now()->addMinutes(10),
            ['id' => $userId]
        );

        Mail::send("email.register", ['confirmationUrl' => $confirmationUrl, 'username' => $userName], function ($message) use ($email) {
            $message->to($email);
            $message->subject('Instructor Registration');
        });

        $request->session()->put('last_email_sent_time', now());
        session()->flash('message', __('messages.instructor.success.send'));

        return redirect()->back();
    }

    /**
     * @param int $id
     * @return RedirectResponse
     */
    public function updateRole($id): RedirectResponse
    {
        if ($this->userService->findRole($id)) {
            session()->flash('error', __('messages.instructor.error.register'));

            return redirect()->back();
        }
        $this->userService->updateRole($id);
        session()->flash('message', __('messages.instructor.success.register'));

        return redirect()->back();
    }
}
