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
    public function aanmelden(Request $request)
    {
        Mail::to($request->get('email_address'))->send(new Application($request->all()));
        Mail::to(env('MAIL_USERNAME'))->send(new Contact($request->all()));
        $api = Api::get(env('PRISMIC_URL'));

        $siteWide = $api->getSingle('site_breed');

        $page_title = "Aangemeld • Briqchain";
        $meta_description = "";

        $lightBlue = true;
        return view('aangemeld', compact('siteWide', 'page_title', 'meta_description', 'lightBlue'));
    }
}