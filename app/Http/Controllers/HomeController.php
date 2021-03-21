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
        $currencyRate = $this->cryptoService->getRate('NAWA', 'USDT');

        if ($currencyRate->error) {
            $currencyRate = 'Sorry, we don\'t have this currency';
        }
        return view('welcome', [
            'currencyRate' => $currencyRate
        ]);
    }
}
