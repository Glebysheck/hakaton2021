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
        $response = $imp->client->request('GET', 'categories');
        $data = json_decode($response->getBody()->getContents());

        foreach ($data as $item)
        {
            Categories::create([
                'id' => $item->id,
                'title' => $item->title,
                'image' => $item->image,
                'description' => $item->description,
            ]);
        }
    }
}
