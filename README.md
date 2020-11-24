<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## RecsueMyCar:
Its a simple project for getting a quote from here. 
To run the project : php artisan serve

## View Pages:
   Goto resoures --> view--> 
   1) index.blade.php : home page
   2) customer.blade.php : customer form
   3) quote.blade.php : get quote form
   
## CSS and Javascript:
   Goto public ---> 
   1) css ---> main.css : all internat style.
   2) js ---> datepicker.js 
             ---->main.js
             


## database:
    create database rescuemycar
    create customer table by(php artisan make:migration create_customers_table)
    create quote table  by(php artisan make:migration create_quotes_table)
    then migrate tables
    
## Controller:
    make controller: customerController, quoteController, quoteApiController .
    
## Model: 
    make model customer and quote.
    
## Route:   
    1) web.php:
        Route::get('/', function () { return view('index');});
        Route::get('/quote', 'App\Http\Controllers\QuoteController@index');
        Route::post('/quote', 'App\Http\Controllers\QuoteController@store');
        Route::view('/customer','customer');
        Route::post('/customer', 'App\Http\Controllers\customerController@addCustomer');
    2)api.php)
        Route::get('quoteList','App\Http\Controllers\quoteApiController@list');
        Route::get('quoteList/{id}','App\Http\Controllers\quoteApiController@listByID');
        Route::post('quoteList','App\Http\Controllers\quoteApiController@insertQuote');
        Route::put('quoteList','App\Http\Controllers\quoteApiControllerr@updateQuote');

