<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class CalculateController extends Controller
{
    public function calculate(Request $request){
        $data = [
            'userkey' => 'BCHN-GT42-2FPA-399R-FMQ4-6SDP',
            'calc' => 'eindkapitaal-en-rendement',
            'data' => $request->all()
        ];

        $client = new Client;
        $response = $client->request('POST', 'https://rekentools.webbridge.nl/berekenen/briqchain',[
            'json' => $data
        ]);

        return $response->getBody()->getContents();
    }
}
