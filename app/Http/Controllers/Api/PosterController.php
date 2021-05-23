<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\DetailPoster;
use Illuminate\Http\Request;

class PosterController extends Controller
{
    public function index()
    {
        return DetailPoster::all();
    }

    public function sort_in_descending_order_of_price()
    {
        return DetailPoster::orderBy('price', 'desc')->get();
    }

    public function sort_in_ascending_order_of_price()
    {
        return DetailPoster::orderBy('price', 'asc')->get();
    }

    public function sort_in_descending_order_of_date()
    {
        return DetailPoster::orderBy('date_lower', 'desc')->get();
    }

    public function sort_in_ascending_order_of_date()
    {
        return DetailPoster::orderBy('date_lower', 'asc')->get();
    }

    public function search_by_address(Request $request): array
    {
        $arr = [];
        foreach (DetailPoster::all() as $item)
        {
            if (false !== strpos($item->address, $request))
                $arr[] = $item;
        }
        return $arr;
    }

    public function search_by_title(Request $request): array
    {
        $arr = [];
        foreach (DetailPoster::all() as $item)
        {
            if (false !== strpos($item->title, $request))
                $arr[] = $item;
        }
        return $arr;
    }

    public function sort_by_category_movie(): array
    {
        $arr = [];
        foreach (DetailPoster::orderBy('date_lower', 'asc')->get() as $item)
        {
            if (2 == $item->category_id)
                $arr[] = $item;
        }
        return $arr;
    }

    public function sort_by_category_concert(): array
    {
        $arr = [];
        foreach (DetailPoster::orderBy('date_lower', 'asc')->get() as $item)
        {
            if (1 == $item->category_id)
                $arr[] = $item;
        }
        return $arr;
    }

    public function sort_by_category_performance(): array
    {
        $arr = [];
        foreach (DetailPoster::orderBy('date_lower', 'asc')->get() as $item)
        {
            if (3 == $item->category_id)
                $arr[] = $item;
        }
        return $arr;
    }

    public function sort_by_category_exhibitions(): array
    {
        $arr = [];
        foreach (DetailPoster::orderBy('date_lower', 'asc')->get() as $item)
        {
            if (4 == $item->category_id)
                $arr[] = $item;
        }
        return $arr;
    }

    public function sort_by_category_libraries(): array
    {
        $arr = [];
        foreach (DetailPoster::orderBy('date_lower', 'asc')->get() as $item)
        {
            if (5 == $item->category_id)
                $arr[] = $item;
        }
        return $arr;
    }

    public function sort_by_category_festivals(): array
    {
        $arr = [];
        foreach (DetailPoster::orderBy('date_lower', 'asc')->get() as $item)
        {
            if (6 == $item->category_id)
                $arr[] = $item;
        }
        return $arr;
    }

    public function sort_by_category_museums(): array
    {
        $arr = [];
        foreach (DetailPoster::orderBy('date_lower', 'asc')->get() as $item)
        {
            if (7 == $item->category_id)
                $arr[] = $item;
        }
        return $arr;
    }
}
