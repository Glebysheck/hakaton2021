<?php

use App\Http\Controllers\DetailPosterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PosterController;
use App\Http\Controllers\Api\CategoryController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/posters', [PosterController::class, 'index']);
Route::get('/categories', [CategoryController::class, 'index']);

Route::get('/sort_in_descending_order_of_price', [PosterController::class, 'sort_in_descending_order_of_price']);
Route::get('/sort_in_ascending_order_of_price', [PosterController::class, 'sort_in_ascending_order_of_price']);
Route::get('/sort_in_descending_order_of_date', [PosterController::class, 'sort_in_descending_order_of_date']);
Route::get('/sort_in_ascending_order_of_date', [PosterController::class, 'sort_in_ascending_order_of_date']);

Route::get('/search_by_title', [PosterController::class, 'search_by_title']);
Route::get('/search_by_address', [PosterController::class, 'search_by_address']);

Route::get('/sort_by_category_movie', [PosterController::class, 'sort_by_category_movie']);
Route::get('/sort_by_category_concert', [PosterController::class, 'sort_by_category_concert']);
Route::get('/sort_by_category_performance', [PosterController::class, 'sort_by_category_performance']);
Route::get('/sort_by_category_exhibitions', [PosterController::class, 'sort_by_category_exhibitions']);
Route::get('/sort_by_category_libraries', [PosterController::class, 'sort_by_category_libraries']);
Route::get('/sort_by_category_festivals', [PosterController::class, 'sort_by_category_festivals']);
Route::get('/sort_by_category_museums', [PosterController::class, 'sort_by_category_museums']);
