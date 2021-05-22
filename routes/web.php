<?php

use App\Http\Controllers\Api\PosterController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\DetailPosterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('fame', DetailPosterController::class);

Route::group(['namespace' => 'app\Http\Controllers'], function () {
    Route::get('/category', [CategoriesController::class, 'store']);
    Route::get('/posters', [DetailPosterController::class, 'store']);
    Route::get('/sh', [DetailPosterController::class, 'show']);
});

Route::get('/download',[PosterController::class, 'downloadJSON']);
