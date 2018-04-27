<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
    
use Prismic\Api;
use Prismic\LinkResolver;
use Prismic\Predicates;

class PageController extends Controller
{
    public function home()
    {
        $api = Api::get(env('PRISMIC_URL'));

        $home = $api->getSingle('home');
        $siteWide = $api->getSingle('site_breed');

        $page_title = $home->getText('home.main_titel');
        $meta_description = $home->getText('home.main_omschrijving');

        $buttons = $home->getGroup('home.hero_knoppen')->getArray();

        $points = $home->getGroup('home.punten')->getArray();

        $lightBlue = false;

        return view('home', compact('home', 'siteWide', 'page_title', 'meta_description', 'lightBlue', 'buttons', 'points'));
    }

    public function fondsen()
    {
        $api = Api::get(env('PRISMIC_URL'));

        $fondsen = $api->getSingle('fondsen');
        $siteWide = $api->getSingle('site_breed');
        
        $page_title = $fondsen->getText('fondsen.main_titel');
        $meta_description = $fondsen->getText('fondsen.main_omschrijving');
        $details = $fondsen->getGroup('fondsen.fonds_details')->getArray();
        
        $lightBlue = true;

        return view('fondsen', compact('fondsen', 'siteWide', 'page_title', 'meta_description', 'lightBlue', 'details'));
    }

    public function zoWerktHet()
    {
        $api = Api::get(env('PRISMIC_URL'));

        $zoWerktHet = $api->getSingle('zo_werkt_het');
        $siteWide = $api->getSingle('site_breed');
        
        $page_title = $zoWerktHet->getText('fondsen.main_titel');
        $meta_description = $zoWerktHet->getText('fondsen.main_omschrijving');

        $questions = $zoWerktHet->getGroup('zo_werkt_het.faq_vragen')->getArray();
        
        $lightBlue = false;

        return view('zo-werkt-het', compact('zoWerktHet', 'siteWide', 'page_title', 'meta_description', 'lightBlue', 'questions'));
    }

    public function about()
    {
        $api = Api::get(env('PRISMIC_URL'));

        $about = $api->getSingle('about');
        $siteWide = $api->getSingle('site_breed');
        
        $page_title = $about->getText('fondsen.main_titel');
        $meta_description = $about->getText('fondsen.main_omschrijving');

        $members = $about->getGroup('about.team_leden')->getArray();
        
        $lightBlue = false;

        return view('about', compact('about', 'siteWide', 'page_title', 'meta_description', 'lightBlue', 'members'));
    }

    public function aanmelden()
    {
        $api = Api::get(env('PRISMIC_URL'));

        $aanmelden = $api->getSingle('aanmelden');
        $siteWide = $api->getSingle('site_breed');
        
        $page_title = $aanmelden->getText('aanmelden.page_title');
        $meta_description = $aanmelden->getText('aanmelden.page_description');
        
        $lightBlue = false;

        return view('aanmelden', compact('aanmelden', 'siteWide', 'page_title', 'meta_description', 'lightBlue'));
    }
}