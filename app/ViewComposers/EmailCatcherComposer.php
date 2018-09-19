<?php

namespace App\ViewComposers;

use App\EmailCatcher;
use App\EmailSubscription;
use Carbon\Carbon;
use Illuminate\View\View;
use Session;
use App\Enums\AcceptedLanguages;
use Prismic\Api;

class EmailCatcherComposer
{


    private $ip_address;
    private $should_pop_up;
    public $api;


    public function __construct()
    {
        $this->ip_address = \Request::ip();
        $this->api = Api::get(env('PRISMIC_URL'));
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
            'emailCatcher_text' => $this->getEmailCatcherText(),
        ]);
        
    }

    public function getEmailCatcher()
    {
        $emailCatcher = EmailCatcher::firstOrCreate(
            ['ip_address' => $this->ip_address],
            ['date_last_pop_up' => "1970-01-01"]
        );

        $emailSubscription = EmailSubscription::where('ip_address', \Request::ip())->first();

        $this->should_pop_up = $emailCatcher->date_last_pop_up->addDay()->isPast() && $emailSubscription == null;

        return $emailCatcher;
    }

    public function getLocale()
    {
        $locale = Session::get('applocale');

        if ($locale == null) {
            $locale = "en-us";
        }

        if (!in_array($locale, AcceptedLanguages::ACCEPTED_LANGUAGES)) {
            $locale = "en-us";
        }

        return $locale;
    }

    public function getEmailCatcherText()
    {
        $locale = $this->getLocale();

        $siteWide = $this->api->getSingle('site_breed');

        foreach (($altLangs = $siteWide->getAlternateLanguages()) as $altLang) {
            if ($locale == $altLang->getLang()) {
                $siteWide = $this->api->getByID($altLang->getId());
            }
        }

        return $siteWide;
    }
}