<?php

namespace App\Http\Controllers;

use App\Models\Airport;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class WebController extends Controller
{
    public function inicio()
    {
        return view('inicio.inicio');
    }
    public function contacto()
    {
        return view('contacto.contacto');
    }
    public function registroCompletado()
    {
        return view('mensajes.registro');
    }

    public function aeropuetos()
    {
        $client = new \GuzzleHttp\Client();


        $request_param_aeropuertos = [
            "offset" => 1
        ];

        $request_aeropuertos = json_encode($request_param_aeropuertos);
        // 6705
        $response_aeropuertos = $client->request(
            'GET',
            url('http://api.aviationstack.com/v1/airports?access_key=b5466b4edaad83c66e16115f5ae8697a'),
            [
                'headers' => [
                    'Accept' => 'application/json',
                    'Content-Type' => 'application/json',
                ],
                'body' => $request_aeropuertos
            ]
        );


        $aeropuertos = json_decode($response_aeropuertos->getBody()->getContents());

        // foreach ($aeropuertos->data as $key => $data) {
        //     $airport = Airport::create([
        //         'name' => trim(
        //             $data->airport_name
        //         )
        //     ]);
        // }
    }
}
