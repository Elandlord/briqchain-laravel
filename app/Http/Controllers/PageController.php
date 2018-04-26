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

        $lightBlue = true;

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
}