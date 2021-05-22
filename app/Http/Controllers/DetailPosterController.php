<?php

namespace App\Http\Controllers;

use App\Components\ImportDataHttpClient;
use App\Models\DetailPoster;
use Illuminate\Http\Client\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Psr\Http\Message\ResponseInterface;

class DetailPosterController extends Controller
{
    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function store()
    {
        $imp = new ImportDataHttpClient();
        $response = $imp->client->request('GET', 'posters');
        $data = json_decode($response->getBody()->getContents());
        $data_2 = $data->results;

        foreach ($data_2 as $item)
        {
            DetailPoster::create([
                'id' => $item->id,
                'title' => $item->title,
                'price' => $item->price,
                'image' => $item->image,
                'address' => $item->address,
                'category_id' => $item->categories->id,
                'date_lower' => $item->date->lower,
                'date_upper' => $item->date->upper,
            ]);
        }
    }
}
