<?php

namespace App\Services;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Mail;

class EmailService
{
    /**
     * @param int $userId
     * @return string
     */
    public function expiredLink(int $userId): string
    {
        $confirmationUrl = URL::temporarySignedRoute(
            'users.comfirm',
            now()->addMinutes(10),
            ['id' => $userId]
        );

        return $confirmationUrl;
    }

    /**
     * @param string $email
     * @param string $username
     * @param string $confirmationUrl
     * @return void
     */
    public function sendEmail(string $email, string $username, string $confirmationUrl): void
    {
        Mail::send("email.register", ['confirmationUrl' => $confirmationUrl, 'username' => $username], function ($message) use ($email) {
            $message->to($email);
            $message->subject('Instructor Registration');
        });
    }
}
