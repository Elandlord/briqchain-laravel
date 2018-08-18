<?php

namespace App\ViewComposers;

use App\EmailCatcher;
use Carbon\Carbon;
use Illuminate\View\View;

class EmailCatcherComposer
{


    private $ip_address;
    private $should_pop_up;


    public function __construct()
    {
        $this->ip_address = \Request::ip();
    }



    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with([
            'emailCatcher' => $this->getEmailCatcher(),
            'should_pop_up' => $this->should_pop_up,
            'ip_address' => $this->ip_address,
        ]);
        
    }

    public function getEmailCatcher()
    {
        $email_catcher = EmailCatcher::firstOrCreate(
            ['ip_address' => $this->ip_address],
            ['date_last_pop_up' => "1970-01-01"]
        );

        $this->should_pop_up = $email_catcher->date_last_pop_up->addMonth()->isPast();

        return $email_catcher;
    }
}