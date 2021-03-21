<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class HomeController extends Controller
{
    public function index() {
        $client = new \GuzzleHttp\Client();
        $btcRateResponse = $client->get(env('COIN_API_BASE_URL') . 'exchangerate/BTC/USDT?apiKey=' . env('COIN_API_KEY'));
        dd($btcRateResponse);
//        $btcRate = ;

        return view('welcome', [
            'btcRate' => $btcRate
        ]);
    }
}
