<?php

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
Route::middleware(['restrictIp'])->group(function () {
    Auth::routes();

    Route::get('routes', function() {
        \Artisan::call('route:list');
        return '<pre>' . \Artisan::output() . '</pre>';
    });
});

Route::group(['namespace' => 'Front', 'prefix' => '{locale?}', 'where' => ['locale' => '(?!admin)*[a-z]{2}'],], function() {
    Route::get('/', 'IndexController@index')->name('index');

    Route::get('kontakt',
        'ContactController@index')->name('contact.index');

    Route::get('jak-kupic-mieszkanie',
        'Static\IndexController@howbuy')->name('static.howbuy');

    // Inline
    Route::group(['prefix'=>'/inline', 'as' => 'front.inline.'], function() {
        Route::get('/', 'InlineController@index')->name('index');
        Route::get('/loadinline/{inline}', 'InlineController@show')->name('show');
        Route::post('/update/{inline}', 'InlineController@update')->name('update');
    });

    // DeveloPro
    Route::group(['namespace' => 'Developro', 'prefix' => '/i', 'as' => 'developro.'], function () {
        Route::get('/{slug}', 'InvestmentController@index')->name('investment.index');

    });

    Route::get('{uri}', 'MenuController@index')->where('uri', '([A-Za-z0-9\-\/]+)');
});