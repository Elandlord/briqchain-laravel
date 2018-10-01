<?php

namespace App\ViewComposers;


use Illuminate\View\View;
use Session;
use App\Enums\AcceptedLanguages;
use Prismic\Api;

class NavigationViewComposer
{

    public $api;

    public function __construct()
    {
        $this->api = Api::get(env('PRISMIC_URL'));
    }


    /**
     * Bind data to the view.
     *
     * @param  View $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with([
            'navigationComponents' => $this->getNavigationComponents(),
        ]);

    }


    public function getLocale()
    {

        $locale = Session::get('applocale');

        if ($locale == null) {
            $locale = 'nl-nl';
        }

//        if (!in_array($locale, AcceptedLanguages::ACCEPTED_LANGUAGES)) {
//            $locale = "en-us";
//        }

        return $locale;

    }

    public function getNavigationComponents()
    {
        $locale = $this->getLocale();

        $siteWide = $this->api->getSingle('site_breed');

        foreach (($altLangs = $siteWide->getAlternateLanguages()) as $altLang) {
            if ($locale == $altLang->getLang()) {
                $siteWide = $this->api->getByID($altLang->getId());
            }
        }

        return [
            'home' => ['url' => Config('url') . '/', 'linkName' => $siteWide->getText('site_breed.home')],
            'fonds' => ['url' => Config('url') . '/funds', 'linkName' => $siteWide->getText('site_breed.fonds')],
            'zo_werkt_het' => ['url' => Config('url') . '/how-it-works', 'linkName' => $siteWide->getText('site_breed.zo_werkt_het')],
            'about' => ['url' => Config('url') . '/about', 'linkName' => $siteWide->getText('site_breed.about')],
            'sign_up' => ['url' => Config('url') . '/sign-up', 'linkName' => $siteWide->getText('site_breed.aanmelden')]
        ];
    }
}