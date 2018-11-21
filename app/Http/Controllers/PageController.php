<?php

namespace App\Http\Controllers;

use App\Platform;
use Illuminate\Http\Request;
use Prismic\Api;
use Prismic\LinkResolver;
use Prismic\Predicates;
use Prismic\Document;

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

        $lightBlue = true;

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

        $api = API::get(env('PRISMIC_URL'));

        $supporter = new Prismic('W73AmxYAAC0AqXg6', function($api, $type) {
            return $api->getByID($type);
        });
        $supporter->setName('platforms');

        $expert = new Prismic('W73ePRYAADAAqeFo', function($api, $type) {
            return $api->getByID($type);
        });
        $expert->setName('platforms');

        $ambassador = new Prismic('W73bqRYAADAAqdkZ', function($api, $type) {
            return $api->getByID($type);
        });
        $ambassador->setName('platforms');

        $platforms = collect([
            'supporter' => collect([
                'supporter_title' => $supporter->supporter_title,
                'supporter_description'=> $supporter->supporter_description,
                'platforms' => Platform::convert($supporter->platforms()),
            ]),
            'ambassador' => collect([
                'supporter_title' => $ambassador->supporter_title,
                'supporter_description'=> $ambassador->supporter_description,
                'platforms' => Platform::convert($ambassador->platforms()),
            ]),
            'expert' => collect([
                'supporter_title' => $expert->supporter_title,
                'supporter_description'=> $expert->supporter_description,
                'platforms' => Platform::convert($expert->platforms()),
            ]),

        ]);


        $lightBlue = false;        

        return view('contest-structure', compact(
            'page',
            'platforms',
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

    public function termsAndConditions()
    {
        $page_title = 'Terms and Conditions';
        $meta_description = 'Terms and Conditions';

        $lightBlue = false;

        return view('terms-and-conditions', compact(
            'lightBlue'
        ));
    }

    public function contact()
    {


        return view('contact', compact(

        ));
    }

    public function ourVision()
    {
        $page = new Prismic('onze_visie');

        $lightBlue = false;

        return view('our-vision', compact(
            'page',
            'lightBlue'
        ));
    }

    public function newInvesting()
    {
        $page = new Prismic('het_nieuwe_beleggen');

        $lightBlue = false;

        return view('a-new-way-to-invest', compact(
            'page',
            'lightBlue'
        ));
    }
}