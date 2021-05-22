<?php

namespace App\Http\Controllers;

use App\Components\ImportDataHttpClient;
use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function store()
    {
        $imp = new ImportDataHttpClient();
        $response = $imp->client->request('GET', 'categories/');
        $data = json_decode($response->getBody()->getContents());

        foreach ($data as $item)
        {
            Categories::firstOrCreate(['id' => $item->id],[
                'id' => $item->id,
                'title' => $item->title,
                'description' => $item->description,
                'image' => $item->image
            ]);
        }
    }
}
