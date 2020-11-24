<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\quoteApiController;
use App\Models\quote;
/*

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

Route::get('quoteList','App\Http\Controllers\quoteApiController@list');
Route::get('quoteList/{id}','App\Http\Controllers\quoteApiController@listByID');
Route::post('quoteList','App\Http\Controllers\quoteApiController@insertQuote');
Route::put('quoteList','App\Http\Controllers\quoteApiControllerr@updateQuote');

