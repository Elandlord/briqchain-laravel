<?php

namespace App\ViewComposers;


use App\Prismic;
use Illuminate\View\View;
use Session;
use App\Enums\AcceptedLanguages;
use Prismic\Api;

class BaseViewComposer
{



    public function __construct()
    {

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
            'siteWide' => new Prismic('site_breed'),
            'app_url' => env('APP_URL'),
            'footerLinks' => new Prismic('fondsen'),
        ]);

    }





}