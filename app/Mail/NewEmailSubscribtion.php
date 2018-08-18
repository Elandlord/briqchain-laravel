<?php

namespace App\Mail;

use App\EmailSubscription;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewEmailSubscribtion extends Mailable
{
    use Queueable, SerializesModels;

    public $emailSubscription;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(EmailSubscription $emailSubscription)
    {
        $this->emailSubscription = $emailSubscription;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('jos@briqchain.com')
            ->markdown('cms.emails.new-email-subscription')->with([
                'emailSubscription' => $this->emailSubscription,
            ]);
    }
}
