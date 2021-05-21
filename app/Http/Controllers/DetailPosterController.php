<?php

namespace App\Http\Controllers;

use App\Components\ImportDataHttpClient;
use Illuminate\Http\Client\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Psr\Http\Message\ResponseInterface;

class DetailPosterController extends Controller
{
    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function index(): string
    {
        $imp = new ImportDataHttpClient();
        $response = $imp->client->request('GET', 'posters');
        return $response->getBody()->getContents();
    }
}
