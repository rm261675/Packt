<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;

class BooksController extends Controller
{
    public function getPacktBooks()
    {
        $client = new Client();
        $url = "https://api.packt.com/api/v1/products?token=oXkfPBr51ZGphFak91TWA9arehvZhyONuC70tTE4";

        $params = [
            'page' => '1',
            'limit' => '30',
        ];

        $response = $client->request('GET', $url, [
            'json' => $params,
            'verify'  => false,
        ]);

        $responseBody = json_decode($response->getBody()->getContents(), true);

        return view('welcome', compact('responseBody'));
    }
}
