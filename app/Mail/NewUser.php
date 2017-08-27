<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewUser extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mail_vars)
    {
        $this->email = $mail_vars['email'];
        $this->password = $mail_vars['password'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('noreply@peafoundation.org')
                    ->view('emails.newuser')
                     ->with([
                        'email' => $this->email,
                        'password' => $this->password,
                    ]);
    }
}
