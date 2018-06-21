<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class CalculateController extends Controller
{
    public function calculate(Request $request){
        $string = (string) $request->get('herbeleggen');
        $boolean = ($string == 'true');

        $data = [
            'userkey' => 'BCHN-GT42-2FPA-399R-FMQ4-6SDP',
            'calc' => 'eindkapitaal-en-rendement',
            'data' => [
                'startkapitaal' => $request->get('startkapitaal'),
                'inlegPerMaand' => $request->get('inlegPerMaand'),
                'herbeleggen' => $boolean,
                'looptijden' => $request->get('looptijden'),
                'rendement' => $request->get('rendement'),
            ]
        ];

        $client = new Client;
        $response = $client->request('POST', 'https://rekentools.webbridge.nl/berekenen/briqchain',[
            'json' => $data
        ]);

        return $response->getBody()->getContents();
    }
}
