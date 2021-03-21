<?php

namespace App\Services;

use Symfony\Component\HttpKernel\Exception\HttpException;

class CurlService
{
    protected const CURLOPT_TIMEOUT = 30;
    protected const CURLOPT_MAXREDIRS = 10;
    protected const CURLOPT_ENCODING = "";

    protected function sendRequest(string $url, string $method, array $params = null)
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => self::CURLOPT_ENCODING,
            CURLOPT_MAXREDIRS => self::CURLOPT_MAXREDIRS,
            CURLOPT_TIMEOUT => self::CURLOPT_TIMEOUT,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => $method,
            CURLOPT_HTTPHEADER => [
                "content-type: application/json",
            ],
        ]);

        if ($params) {
            curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($params));
        }
        $result = $this->curlExec($curl);
        $error = curl_error($curl);
        curl_close($curl);
        if ($error) {
            throw new HttpException($error);
        }

        return $result;
    }

    protected function curlExec($resource): object
    {
        $response = curl_exec($resource);
        if (!$response) {
            throw new HttpException(400, 'Request fails');
        }
        return json_decode($response, false, 512, JSON_THROW_ON_ERROR);
    }
}
