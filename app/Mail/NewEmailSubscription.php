<?php

namespace App\Mail;

use App\EmailSubscription;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewEmailSubscription extends Mailable
{
    use Queueable, SerializesModels;

    public $emailSubscription;
    public $mail;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(EmailSubscription $emailSubscription, $mail)
    {
        $this->emailSubscription = $emailSubscription;
        $this->mail = $mail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('jos@briqchain.com')
            ->subject($this->mail->getText('mails.contact_subject'))
            ->markdown('cms.emails.newsletter.new-email-subscription')->with([
                'emailSubscription' => $this->emailSubscription,
                'mail' => $this->mail,
            ]);
    }
}
