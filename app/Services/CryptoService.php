<?php


namespace App\Services;


use function PHPUnit\Framework\returnArgument;

class CryptoService extends CurlService
{
    public function getRate($fromCurrency, $toCurrency)
    {
        $url = $this->buildUrl($fromCurrency, $toCurrency);
        return $this->sendRequest($url, 'GET');
    }

    public function buildUrl($fromCurrency, $toCurrency) {
        $params = 'exchangerate/' . $fromCurrency . '/' . $toCurrency;

        return env('COIN_API_BASE_URL') . $params . '?apiKey=' . env('COIN_API_KEY');
    }
}
