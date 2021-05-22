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
}
