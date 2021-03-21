<?php


namespace App\Services;


class CryptoService extends CurlService
{
    public function getBtcRate()
    {
        $url = env('COIN_API_BASE_URL') . 'exchangerate/BTC/USDT?apiKey=' . env('COIN_API_KEY');
        return $this->sendRequest($url, 'GET');
    }
}
