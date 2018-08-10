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
        $this->getEmailCatcher();
    }

    public function getEmailCatcher()
    {
        if(!empty($_SERVER['REMOTE_ADDR'])){
            $this->ip_address = $_SERVER['REMOTE_ADDR'];
        }else{
            $this->ip_address = "127.0.0.1";
        }

        $email_catcher = EmailCatcher::firstOrCreate(
            ['ip_address' => $this->ip_address]
        );

        if($email_catcher->date_last_pop_up != null){
            $carbonInstance = Carbon::createFromFormat('Y-m-d', $email_catcher->date_last_pop_up);
            if($carbonInstance->addMonth()->isPast()){
                $this->pop_up = true;
            }
            return;
        }else{
            $this->pop_up = true;
            return;
        }

        $this->pop_up = false;
        return;
    }

    public function getLocale($request)
    {
        $locale = Session::get('applocale');

        if($locale == null)
        {
            $locale = strtolower(explode(",", $request->server('HTTP_ACCEPT_LANGUAGE'))[0]);
        }

        if(!in_array($locale, AcceptedLanguages::ACCEPTED_LANGUAGES)){
            $locale = "en-us";
        }
        
        return $locale;
    }

    public function home(Request $request)
    {
        $locale = $this->getLocale($request);

        $siteWide = $this->api->getSingle('site_breed');
        $home = $this->api->getSingle('home');

        foreach(($altLangs = $siteWide->getAlternateLanguages()) as $altLang){
            if($locale == $altLang->getLang()){
                $siteWide = $this->api->getByID($altLang->getId());
            }
        }

        foreach(($altLangs = $home->getAlternateLanguages()) as $altLang){
            if($locale == $altLang->getLang()){
                $home = $this->api->getByID($altLang->getId());
            }
        }

        $page_title = $home->getText('home.main_titel');
        $meta_description = $home->getText('home.main_omschrijving');

        $buttons = $home->getGroup('home.hero_knoppen')->getArray();

        $points = $home->getGroup('home.punten')->getArray();

        $app_url = env('APP_URL');
        
        $lightBlue = false;

        $ip_address = $this->ip_address;
        $pop_up = $this->pop_up;

        return view('home', compact('home', 'siteWide', 'page_title', 'meta_description', 'lightBlue', 'buttons', 'points', 'app_url', 'ip_address', 'pop_up'));
    }

    public function fondsen(Request $request)
    {
        $locale = $this->getLocale($request);

        $fondsen = $this->api->getSingle('fondsen');
        $siteWide = $this->api->getSingle('site_breed');

        foreach(($altLangs = $siteWide->getAlternateLanguages()) as $altLang){
            if($locale == $altLang->getLang()){
                $siteWide = $this->api->getByID($altLang->getId());
            }
        }

        foreach(($altLangs = $fondsen->getAlternateLanguages()) as $altLang){
            if($locale == $altLang->getLang()){
                $fondsen = $this->api->getByID($altLang->getId());
            }
        }

        $app_url = env('APP_URL');        
        
        $page_title = $fondsen->getText('fondsen.main_titel');
        $meta_description = $fondsen->getText('fondsen.main_omschrijving');
        $details = $fondsen->getGroup('fondsen.fonds_details')->getArray();
        
        $lightBlue = true;

        $ip_address = $this->ip_address;
        $pop_up = $this->pop_up;

        return view('fondsen', compact('fondsen', 'siteWide', 'page_title', 'meta_description', 'lightBlue', 'details', 'app_url', 'ip_address', 'pop_up'));
    }

    public function zoWerktHet(Request $request)
    {
        $locale = $this->getLocale($request);

        $zoWerktHet = $this->api->getSingle('zo_werkt_het');
        $siteWide = $this->api->getSingle('site_breed');

        foreach(($altLangs = $siteWide->getAlternateLanguages()) as $altLang){
            if($locale == $altLang->getLang()){
                $siteWide = $this->api->getByID($altLang->getId());
            }
        }

        foreach(($altLangs = $zoWerktHet->getAlternateLanguages()) as $altLang){
            if($locale == $altLang->getLang()){
                $zoWerktHet = $this->api->getByID($altLang->getId());
            }
        }

        $app_url = env('APP_URL');        
        
        $page_title = $zoWerktHet->getText('zo_werkt_het.main_titel');
        $meta_description = $zoWerktHet->getText('fondsen.main_omschrijving');

        $questions = $zoWerktHet->getGroup('zo_werkt_het.faq_vragen')->getArray();
        
        $lightBlue = false;

        $ip_address = $this->ip_address;
        $pop_up = $this->pop_up;

        return view('zo-werkt-het', compact('zoWerktHet', 'siteWide', 'page_title', 'meta_description', 'lightBlue', 'questions', 'app_url', 'ip_address', 'pop_up'));
    }

    public function about(Request $request)
    {   
        $locale = $this->getLocale($request);

        $about = $this->api->getSingle('about');
        $siteWide = $this->api->getSingle('site_breed');

        foreach(($altLangs = $siteWide->getAlternateLanguages()) as $altLang){
            if($locale == $altLang->getLang()){
                $siteWide = $this->api->getByID($altLang->getId());
            }
        }

        foreach(($altLangs = $about->getAlternateLanguages()) as $altLang){
            if($locale == $altLang->getLang()){
                $about = $this->api->getByID($altLang->getId());
            }
        }
        
        $page_title = $about->getText('about.main_titel');
        $meta_description = $about->getText('fondsen.main_omschrijving');

        $members = $about->getGroup('about.team_leden')->getArray();
        $partners = $about->getGroup('about.partners')->getArray();

        $app_url = env('APP_URL');        
        
        $lightBlue = false;

        $ip_address = $this->ip_address;
        $pop_up = $this->pop_up;

        return view('about', compact('about', 'siteWide', 'page_title', 'meta_description', 'lightBlue', 'members', 'partners', 'app_url', 'ip_address', 'pop_up'));
    }

    public function aanmelden(Request $request)
    {
        $locale = $this->getLocale($request);

        $aanmelden = $this->api->getSingle('aanmelden');
        $siteWide = $this->api->getSingle('site_breed');
        
        foreach(($altLangs = $siteWide->getAlternateLanguages()) as $altLang){
            if($locale == $altLang->getLang()){
                $siteWide = $this->api->getByID($altLang->getId());
            }
        }

        foreach(($altLangs = $aanmelden->getAlternateLanguages()) as $altLang){
            if($locale == $altLang->getLang()){
                $aanmelden = $this->api->getByID($altLang->getId());
            }
        }

        $page_title = $aanmelden->getText('aanmelden.page_title');
        $meta_description = $aanmelden->getText('aanmelden.page_description');
        
        $lightBlue = false;

        $ip_address = $this->ip_address;
        $pop_up = $this->pop_up;

        $app_url = env('APP_URL');        

        return view('aanmelden', compact('aanmelden', 'siteWide', 'page_title', 'meta_description', 'lightBlue', 'app_url', 'ip_address', 'pop_up'));
    }
}