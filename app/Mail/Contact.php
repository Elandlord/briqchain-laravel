<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    public $form_data;
    public $mail;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data, $mail)
    {
        $this->form_data = $data;
        $this->mail = $mail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(env('MAIL_USERNAME'), env('APP_NAME'))
                    ->subject($this->mail->getText('mails.contact_subject'))
                    ->markdown('emails.contact')
                    ->with([
                        'mail' => $this->mail,
                    ]);
    }
}
