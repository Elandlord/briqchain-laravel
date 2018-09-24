<?php

namespace App\Http\Controllers;

use App\EmailCatcher;
use App\EmailSubscription;
use App\Exports\EmailSubscriptionsExport;
use App\Mail\NewEmailSubscription;
use App\Mail\SubscriptionConfirmation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;
use Prismic\Api;
use Session;
use App\Enums\AcceptedLanguages;
use GuzzleHttp\Client;

class EmailSubscriptionController extends Controller
{
    public $api;

    public function __construct()
    {
        $this->api = Api::get(env('PRISMIC_URL'));
    }

    public function getLocale()
    {
        $locale = Session::get('applocale');

        if ($locale == null) {
            $locale = "nl-nl";
        }

        if (!in_array($locale, AcceptedLanguages::ACCEPTED_LANGUAGES)) {
            $locale = "nl-nl";
        }

        return $locale;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emailSubscriptions = EmailSubscription::all();

        return view('cms.email-subscription.index', compact(
            'emailSubscriptions'
        ));
    }


    public function export()
    {
        return Excel::download(new EmailSubscriptionsExport, 'nieuwbrief-inschrijvingen.xlsx');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $locale = $this->getLocale();

        $newsletterConfirmation = $this->api->getByID('W35lWyMAACQAi3yL');
        $newsletterMail = $this->api->getByID('W35lWyMAACQAi3yL');

        foreach(($altLangs = $newsletterConfirmation->getAlternateLanguages()) as $altLang){
            if($locale == $altLang->getLang()){
                $newsletterConfirmation = $this->api->getByID($altLang->getId());
            }
        }

        foreach(($altLangs = $newsletterMail->getAlternateLanguages()) as $altLang){
            if($locale == $altLang->getLang()){
                $newsletterMail = $this->api->getByID($altLang->getId());
            }
        }

        $emailSubscription = EmailSubscription::create($request->all());

        $name = explode(" ", $request->get('name'));

        $client = new Client();
        $response = $client->request('POST', 'https://frontier.mentechmedia.nl/events', [
                'form_params' => [
                    'icon' => 'email',
                    'message' => $name[0] . ' heeft zich aangemeld voor de nieuwsbrief van Briqchain.'
                ]
            ]);

        Mail::to('jos@briqchain.com')->send(new NewEmailSubscription($emailSubscription, $newsletterMail));
        Mail::to($request->get('email_address'))->send(new SubscriptionConfirmation($emailSubscription, $newsletterConfirmation));

        EmailCatcher::disable();

        return response()->json($emailSubscription, 201);
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
