<?php

namespace App\ViewComposers;

use App\EmailCatcher;
use Carbon\Carbon;
use Illuminate\View\View;

class EmailCatcherComposer
{


    private $ip_address;
    private $pop_up;


    public function __construct()
    {


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
            'pop_up' => $this->pop_up,
            'ip_address' => $this->ip_address,
        ]);
        
    }

    public function getEmailCatcher()
    {
        $this->ip_address = \Request::ip();
        $this->pop_up = true;

        $email_catcher = EmailCatcher::firstOrCreate(
            ['ip_address' => $this->ip_address],
            ['date_last_pop_up' => Carbon::now()->format('Y-m-d')]
        );

        if($email_catcher->date_last_pop_up != null){
            $carbonInstance = Carbon::createFromFormat('Y-m-d', $email_catcher->date_last_pop_up)->addMonth(30);

            if(!$carbonInstance->isPast()){
                $this->pop_up = false;
            }
        }

        return $email_catcher;
    }
}