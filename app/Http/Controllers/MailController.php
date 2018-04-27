<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;
use Session;
use App\Mail\Contact;
use App\Mail\Application;
use Prismic\Api;
use Prismic\LinkResolver;
use Prismic\Predicates;

class MailController extends Controller
{
    public $api;

    public function __construct()
    {
        $this->api = Api::get(env('PRISMIC_URL'));
    }

    public function aanmelden(Request $request)
    {
        Mail::to($request->get('email_address'))->send(new Application($request->all()));
        Mail::to(env('MAIL_USERNAME'))->send(new Contact($request->all()));

        $aangemeld = $this->api->getSingle('aangemeld');
        $siteWide = $this->api->getSingle('site_breed');

        $page_title = $aangemeld->getText('aangemeld.page_title');
        $meta_description = $aangemeld->getText('aangemeld.page_description');

        $lightBlue = true;
        
        return view('aangemeld', compact('aangemeld', 'siteWide', 'page_title', 'meta_description', 'lightBlue'));
    }
}