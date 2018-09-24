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
use GuzzleHttp\Client;

use App;

class MailController extends Controller
{
    public $api;

    public function __construct()
    {
        $this->api = Api::get(env('PRISMIC_URL'));
    }

    public function getLocale($request)
    {
        $locale = Session::get('applocale');

        if($locale == null)
        {
            $locale = 'nl-nl';
        }
        
        return $locale;
    }

    public function aanmelden(Request $request)
    {
        $locale = $this->getLocale($request);

        // Confirmation email
        $confirmation_mail = $this->api->getByID('W35kliMAACIAi3kF');

        // Contact mail
        $contact_mail = $this->api->getByID('W35j4iMAAB4Ai3Xd');

        $aangemeld = $this->api->getSingle('aangemeld');
        $siteWide = $this->api->getSingle('site_breed');

        foreach(($altLangs = $siteWide->getAlternateLanguages()) as $altLang){
            if($locale == $altLang->getLang()){
                $siteWide = $this->api->getByID($altLang->getId());
            }
        }

        foreach(($altLangs = $aangemeld->getAlternateLanguages()) as $altLang){
            if($locale == $altLang->getLang()){
                $aangemeld = $this->api->getByID($altLang->getId());
            }
        }

        foreach(($altLangs = $confirmation_mail->getAlternateLanguages()) as $altLang){
            if($locale == $altLang->getLang()){
                $confirmation_mail = $this->api->getByID($altLang->getId());
            }
        }

        foreach(($altLangs = $contact_mail->getAlternateLanguages()) as $altLang){
            if($locale == $altLang->getLang()){
                $contact_mail = $this->api->getByID($altLang->getId());
            }
        }

        Mail::to(env('MAIL_USERNAME'))->send(new Contact($request->all(), $contact_mail));
        Mail::to($request->get('email_address'))->send(new Application($request->all(), $confirmation_mail));

        $name = explode(" ", $request->get('name'));

        $client = new Client();
        $response = $client->request('POST', 'https://frontier.mentechmedia.nl/events', [
            'form_params' => [
                'icon' => 'email',
                'message' => $name[0] . ' heeft zich aangemeld voor de nieuwsbrief van Briqchain.'
            ]
        ]);

        $page_title = $aangemeld->getText('aangemeld.page_title');
        $meta_description = $aangemeld->getText('aangemeld.page_description');

        $lightBlue = true;
        
        return view('aangemeld', compact('aangemeld', 'siteWide', 'page_title', 'meta_description', 'lightBlue'));
    }
}