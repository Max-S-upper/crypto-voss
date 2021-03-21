<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class HomeController extends Controller
{
    public function index() {
        $client = new \GuzzleHttp\Client();
        $btcRate = $client->get(env('COIN_API_BASE_URL') . 'exchangerate/BTC/USDT', [
            'apiKey' => env('COIN_API_KEY')
        ]);

        return view('welcome', [
            'btcRate' => $btcRate
        ]);
    }
}
