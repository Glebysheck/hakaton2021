<?php


namespace App\Components;


use GuzzleHttp\Client;

class ImportDataHttpClient
{
    public $client;

    /**
     * ImportDataHttpClient constructor.
     * @param $client
     */
    public function __construct()
    {
        $this->client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://back-poster.admlr.lipetsk.ru/api/',
            // You can set any number of default request options.
            'timeout'  => 100.0,
            'verify' => false
        ]);
    }
}
