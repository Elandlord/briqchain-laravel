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

        $lightBlue = false;

        return view('home', compact('home', 'siteWide', 'page_title', 'meta_description', 'lightBlue'));
    }

    public function fondsen()
    {
        $api = Api::get(env('PRISMIC_URL'));

        $fondsen = $api->getSingle('fondsen');
        $siteWide = $api->getSingle('site_breed');
        
        $page_title = $fondsen->getText('fondsen.main_titel');
        $meta_description = $fondsen->getText('fondsen.main_omschrijving');
        
        $lightBlue = true;

        return view('fondsen', compact('fondsen', 'siteWide', 'page_title', 'meta_description', 'lightBlue'));
    }

    public function zoWerktHet()
    {
        $api = Api::get(env('PRISMIC_URL'));

        $zoWerktHet = $api->getSingle('zo_werkt_het');
        $siteWide = $api->getSingle('site_breed');
        
        $page_title = $zoWerktHet->getText('fondsen.main_titel');
        $meta_description = $zoWerktHet->getText('fondsen.main_omschrijving');
        
        $lightBlue = false;

        return view('zo-werkt-het', compact('zoWerktHet', 'siteWide', 'page_title', 'meta_description', 'lightBlue'));
    }

    public function about()
    {
        $api = Api::get(env('PRISMIC_URL'));

        $about = $api->getSingle('about');
        $siteWide = $api->getSingle('site_breed');
        
        $page_title = $about->getText('fondsen.main_titel');
        $meta_description = $about->getText('fondsen.main_omschrijving');
        
        $lightBlue = false;

        return view('about', compact('about', 'siteWide', 'page_title', 'meta_description', 'lightBlue'));
    }

    public function aanmelden()
    {
        $api = Api::get(env('PRISMIC_URL'));

        $siteWide = $api->getSingle('site_breed');
        
        $page_title = 'Aanmelden • Briqchain';
        $meta_description = '';
        
        $lightBlue = false;

        return view('aanmelden', compact('siteWide', 'page_title', 'meta_description', 'lightBlue'));
    }
}