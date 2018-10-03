<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Prismic\Api;
use Prismic\LinkResolver;
use Prismic\Predicates;
use Prismic\Document;
use App\EmailCatcher;

use App\Enums\AcceptedLanguages;

use Illuminate\Support\Facades\Session;

use Carbon\Carbon;

use App;

class PageController extends Controller
{
    public $api;
    public $locale;
    public $ip_address;
    public $pop_up;

    public function __construct()
    {
        $this->api = Api::get(env('PRISMIC_URL'));
    }

    public function contest()
    {
        $bounty = $this->api->getSingle('bounty');
        $siteWide = $this->getSiteWide();

        $bounty = $this->getAlternateLanguages($bounty);

        $questions = $bounty->getGroup('bounty.questions')->getArray();

        $page_title = $bounty->getText('bounty.page_title');
        $meta_description = $bounty->getText('bounty.page_description');

        $lightBlue = false;

        $app_url = env('APP_URL');

        return view('contest', compact(
            'bounty',
            'siteWide',
            'page_title',
            'meta_description',
            'lightBlue',
            'app_url',
            'questions'
        ));
    }

    public function contestStructure()
    {        
        $siteWide = $this->getSiteWide();

        $page_title = 'Contest Structure';
        $meta_description = 'Meta description';

        $lightBlue = false;        

        return view('contest-structure', compact(
            'siteWide',
            'page_title',
            'meta_description',
            'lightBlue'
        ));
    }



    public function getSiteWide()
    {
        $siteWide = $this->api->getSingle('site_breed');
        
        $siteWide = $this->getAlternateLanguages($siteWide);

        return $siteWide;
    }

    public function getAlternateLanguages($page)
    {   
        foreach (($altLangs = $page->getAlternateLanguages()) as $altLang) {
            if (Session::get('applocale') == $altLang->getLang()) {
                return $this->api->getByID($altLang->getId());
            }
        }

        return $page;
    }

    public function home()
    {
        $siteWide = $this->getSiteWide();
        $home = $this->api->getSingle('home');
        $registerForm = $this->api->getSingle('registerform');

        $home = $this->getAlternateLanguages($home);
        $registerForm = $this->getAlternateLanguages($registerForm);

        $page_title = $home->getText('home.main_titel');
        $meta_description = $home->getText('home.main_omschrijving');

        $buttons = $home->getGroup('home.hero_knoppen')->getArray();

        $mediaArticles = $home->getGroup('home.media')->getArray();
        $mediaArticles = App\MediaArticle::convert($mediaArticles);

        $points = $home->getGroup('home.punten')->getArray();

        $app_url = env('APP_URL');

        $lightBlue = false;

        return view('home', compact(
            'home',
            'siteWide',
            'registerForm',
            'page_title',
            'meta_description',
            'lightBlue',
            'buttons',
            'points',
            'app_url',
            'mediaArticles'
        ));
    }

    public function fondsen()
    {
        $fondsen = $this->api->getSingle('fondsen');
        $siteWide = $this->getSiteWide();

        $fondsen = $this->getAlternateLanguages($fondsen);

        $app_url = env('APP_URL');

        $page_title = $fondsen->getText('fondsen.main_titel');
        $meta_description = $fondsen->getText('fondsen.main_omschrijving');
        $details = $fondsen->getGroup('fondsen.fonds_details')->getArray();
        $buttons = $fondsen->getGroup('fondsen.knoppen')->getArray();

        $lightBlue = true;

        return view('fondsen', compact(
            'fondsen',
            'siteWide',
            'page_title',
            'meta_description',
            'lightBlue',
            'details',
            'app_url',
            'buttons'
        ));
    }

    public function zoWerktHet()
    {
        $zoWerktHet = $this->api->getSingle('zo_werkt_het');
        $siteWide = $this->getSiteWide();

        $zoWerktHet = $this->getAlternateLanguages($zoWerktHet);

        $buttons = $zoWerktHet->getGroup('zo_werkt_het.knoppen')->getArray();

        $app_url = env('APP_URL');

        $page_title = $zoWerktHet->getText('zo_werkt_het.main_titel');
        $meta_description = $zoWerktHet->getText('fondsen.main_omschrijving');

        $questions = $zoWerktHet->getGroup('zo_werkt_het.faq_vragen')->getArray();

        $lightBlue = false;

        return view('zo-werkt-het', compact(
            'zoWerktHet',
            'siteWide',
            'page_title',
            'meta_description',
            'lightBlue',
            'questions',
            'app_url',
            'buttons'
        ));
    }

    public function about()
    {
        $about = $this->api->getSingle('about');
        $siteWide = $this->getSiteWide();

        $about = $this->getAlternateLanguages($about);

        $page_title = $about->getText('about.main_titel');
        $meta_description = $about->getText('fondsen.main_omschrijving');

        $members = $about->getGroup('about.team_leden')->getArray();
        $partners = $about->getGroup('about.partners')->getArray();

        $app_url = env('APP_URL');

        $lightBlue = false;

        return view('about', compact(
            'about',
            'siteWide',
            'page_title',
            'meta_description',
            'lightBlue',
            'members',
            'partners',
            'app_url'
        ));
    }

    public function aanmelden()
    {
        $aanmelden = $this->api->getSingle('aanmelden');
        $siteWide = $this->getSiteWide();

        $aanmelden = $this->getAlternateLanguages($aanmelden);

        $questions = $aanmelden->getGroup('aanmelden.questions')->getArray();

        $page_title = $aanmelden->getText('aanmelden.page_title');
        $meta_description = $aanmelden->getText('aanmelden.page_description');

        $lightBlue = false;

        $app_url = env('APP_URL');

        return view('aanmelden', compact(
            'aanmelden',
            'siteWide',
            'page_title',
            'meta_description',
            'lightBlue',
            'app_url',
            'questions'
        ));
    }

    public function thankYou()
    {
        $aangemeld = $this->api->getSingle('aangemeld');
        $siteWide = $this->getSiteWide();

        $aangemeld = $this->getAlternateLanguages($aangemeld);

        $page_title = $aangemeld->getText('aanmelden.page_title');
        $meta_description = $aangemeld->getText('aanmelden.page_description');

        $lightBlue = false;

        $app_url = env('APP_URL');

        return view('aangemeld', compact(
            'aangemeld',
            'siteWide',
            'page_title',
            'meta_description',
            'lightBlue',
            'app_url'
        ));
    }


    public function privacyPolicy()
    {
        $page_title = 'privacy policy';
        $meta_description = '';
        $lightBlue = false;

        $siteWide = $this->getSiteWide();

        return view('privacy-policy', compact(
            'siteWide',
            'page_title',
            'meta_description',
            'lightBlue'
        ));
    }
}