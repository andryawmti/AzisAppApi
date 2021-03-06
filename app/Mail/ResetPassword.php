<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ResetPassword extends Mailable
{
    use Queueable, SerializesModels;
    protected $user;
    protected $link;

    /**
     * ResetPassword constructor.
     * @param string $link
     * @param array $user
     */
    public function __construct(string $link, $user)
    {
        $this->link = $link;
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Reset Password')
            ->markdown('emails.reset-password')
            ->with(['link' => $this->link, 'user' => $this->user]);
    }
}
