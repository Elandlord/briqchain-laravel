<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Newsletter;
use Prismic\Api;
use App\Enums\AcceptedLanguages;
use Carbon\Carbon;
use App;
use GuzzleHttp\Client;
use App\Http\Requests\PreRegisterRequest;
use App\EmailCatcher;

class PreRegisterController extends Controller
{
    public $api;
    public $locale;

    public function __construct()
    {
        $this->api = Api::get(env('PRISMIC_URL'));
    }

    public function getLocale($request)
    {
        $locale = Session::get('applocale');

        if ($locale == null) {
            $locale = 'nl-nl';
        }

//        if (!in_array($locale, AcceptedLanguages::ACCEPTED_LANGUAGES)) {
//            $locale = "en-us";
//        }

        return $locale;
    }

    public function store(PreRegisterRequest $request)
    {
        $locale = $this->getLocale($request);

        $message = $this->api->getSingle('message');

        foreach (($altLangs = $message->getAlternateLanguages()) as $altLang) {
            if ($locale == $altLang->getLang()) {
                $message = $this->api->getByID($altLang->getId());
            }
        }

        $email = $request->get('email');

        Newsletter::subscribe($email);

        $message = $message->getText('message.message');

        $client = new Client();
        $response = $client->request('POST', 'https://frontier.mentechmedia.nl/events', [
            'form_params' => [
                'icon' => 'email',
                'message' => 'Iemand heeft zich aangemeld voor de Private Sale.'
            ]
        ]);

        EmailCatcher::disable();

        Session::flash('message', $message);

        return redirect()->back();

    }
}
