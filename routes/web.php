<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuoteController;
use App\Models\quote;
use App\Models\customer;
use App\Http\Controllers\customerController;

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
    return view('index');
});

Route::get('/quote', 'App\Http\Controllers\QuoteController@index');
Route::post('/quote', 'App\Http\Controllers\QuoteController@store');
Route::view('/customer','customer');
Route::post('/customer', 'App\Http\Controllers\customerController@addCustomer');
