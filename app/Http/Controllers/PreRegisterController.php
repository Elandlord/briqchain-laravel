<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Newsletter;
use Prismic\Api;
use App\Enums\AcceptedLanguages;
use Carbon\Carbon;
use App;

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
            $locale = strtolower(explode(",", $request->server('HTTP_ACCEPT_LANGUAGE'))[0]);
        }

        if (!in_array($locale, AcceptedLanguages::ACCEPTED_LANGUAGES)) {
            $locale = "en-us";
        }

        return $locale;
    }

    public function store(Request $request)
    {
        $locale = $this->getLocale($request);

        $message = $this->api->getSingle('message');

        foreach (($altLangs = $message->getAlternateLanguages()) as $altLang) {
            if ($locale == $altLang->getLang()) {
                $message = $this->api->getByID($altLang->getId());
            }
        }

        $message = $message->getText('message.message');

        Newsletter::subscribe($request->get('email'));

        Session::flash('message', $message);

        return redirect()->back();

    }
}
