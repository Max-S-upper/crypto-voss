<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Services\CryptoService;

class HomeController extends Controller
{
    protected CryptoService $cryptoService;

    public function __construct(CryptoService $cryptoService)
    {
        $this->cryptoService = $cryptoService;
    }

    public function index() {
        $btcRate = $this->cryptoService->getRate('BTC', 'USDT');

        return view('welcome', [
            'btcRate' => $btcRate->rate
        ]);
    }
}
