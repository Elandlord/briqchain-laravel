<?php

namespace App\Http\Controllers;

use App\Platform;
use Illuminate\Http\Request;


use App\MediaArticle;
use App\Prismic;


class PageController extends Controller
{

    public function home()
    {
        $home = new Prismic('home');

        $mediaArticles = MediaArticle::convert($home->media());

        $lightBlue = false;

        return view('home', compact(
            'home',
            'lightBlue',
            'mediaArticles'
        ));
    }

    public function fondsen()
    {
        $fondsen = new Prismic('fondsen');

        $lightBlue = true;

        return view('fondsen', compact(
            'fondsen',
            'lightBlue'
        ));
    }

    public function zoWerktHet()
    {
        $zoWerktHet = new Prismic('zo_werkt_het');

        $lightBlue = false;

        return view('zo-werkt-het', compact(
            'zoWerktHet',
            'lightBlue'
        ));
    }

    public function about()
    {
        $about = new Prismic('about');

        $lightBlue = false;

        return view('about', compact(
            'about',
            'lightBlue'
        ));
    }

    public function aanmelden()
    {
        $aanmelden = new Prismic('aanmelden');

        $lightBlue = false;

        return view('aanmelden', compact(
            'aanmelden',
            'lightBlue'
        ));
    }

    public function thankYou()
    {
        $aangemeld = new Prismic('aangemeld');

        $lightBlue = false;

        return view('aangemeld', compact(
            'aangemeld',
            'lightBlue'
        ));
    }

    public function contest()
    {
        $bounty = new Prismic('bounty');

        $lightBlue = false;

        return view('contest', compact(
            'bounty',
            'lightBlue'
        ));
    }

    public function contestStructure()
    {
        $page = new Prismic('contest_structure');
        $platforms = Platform::convert($page->platforms());


        $lightBlue = false;        

        return view('contest-structure', compact(
            'page',
            'lightBlue'
        ));
    }

    public function privacyPolicy()
    {
        $page_title = 'privacy policy';
        $meta_description = '';

        $lightBlue = false;

        return view('privacy-policy', compact(
            'platforms',
            'lightBlue'
        ));
    }
}