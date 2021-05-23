<?php

namespace App\Http\Controllers;

use App\Components\ImportDataHttpClient;
use App\Models\DetailPoster;

class DetailPosterController extends Controller
{
    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function store()
    {
        $i = 1;
        while (true)
        {
            $imp = new ImportDataHttpClient();
            if ($i < 2)
                $response = $imp->client->request('GET', 'posters');
            elseif (5 >= $i)
                $response = $imp->client->request('GET', "posters/?page=$i");
            else
                break;
            $data = json_decode($response->getBody()->getContents());
            $data_2 = $data->results;

            foreach ($data_2 as $item)
            {
                if ($item->date == null)
                {
                    DetailPoster::firstOrCreate(['id' => $item->id],[
                        'id' => $item->id,
                        'title' => $item->title,
                        'price' => $item->price,
                        'image' => $item->image,
                        'address' => $item->address,
                        'category' => $item->categories->title,
                    ]);
                }
                else
                {
                    DetailPoster::firstOrCreate(['id' => $item->id],[
                        'id' => $item->id,
                        'title' => $item->title,
                        'price' => $item->price,
                        'image' => $item->image,
                        'address' => $item->address,
                        'category' => $item->categories->title,
                        'date_lower' => $item->date->lower,
                        'date_upper' => $item->date->upper
                    ]);
                }
            }
            $i++;
        }
    }
}
