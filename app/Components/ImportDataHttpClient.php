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
            'base_uri' => 'https://back-poster.admlr.lipetsk.ru/api/',
            'timeout'  => 100.0,
            'verify' => false
        ]);
    }
}
