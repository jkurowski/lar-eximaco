<?php

use Illuminate\Foundation\Auth\EmailVerificationRequest;
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

    Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
        $request->fulfill();
        return redirect('/login');
    })->middleware(['auth', 'signed'])->name('verification.verify');

    Route::get('/email/verify', function () {
        return view('auth.verify-email');
    })->middleware('auth')->name('verification.notice');

    Route::post('/email/verification-notification', function (Request $request) {
        $request->user()->sendEmailVerificationNotification();
        return back()->with('message', 'Wiadomość z link aktywacyjnym wysłana!');
    })->middleware(['auth', 'throttle:6,1'])->name('verification.send');
});

//Route::group(['namespace' => 'Front', 'prefix' => '{locale?}', 'where' => ['locale' => '(?!admin)*[a-z]{2}'],], function() {
Route::group(['namespace' => 'Front', 'middleware' => 'restrictIp', 'as' => 'front.'], function () {
    Route::get('/', 'IndexController@index')->name('index');

    // Static pages
    Route::get('kontakt',
        'ContactController@index')->name('contact.index');
    Route::post('/kontakt', 'ContactController@contact')->name('contact.form');
    Route::post('/kontakt/{property}', 'ContactController@property')->name('contact.property');

    Route::get('inwestor',
        'Static\IndexController@investor')->name('investor');

    // Completed investment
    Route::get('inwestycje-zrealizowane',
        'Developro\Completed\IndexController@index')->name('completed');

    Route::get('z/{slug}',
        'Developro\Completed\IndexController@show')->name('completed.show');

    // Current investment
    Route::get('inwestycje-w-sprzedazy',
        'Developro\Current\IndexController@index')->name('current');

    Route::get('i/{slug}',
        'Developro\Current\IndexController@show')->name('current.show');

    // Inline
    Route::group(['prefix'=>'/inline', 'as' => 'front.inline.'], function() {
        Route::get('/', 'InlineController@index')->name('index');
        Route::get('/loadinline/{inline}', 'InlineController@show')->name('show');
        Route::post('/update/{inline}', 'InlineController@update')->name('update');
    });

    // DeveloPro
    Route::group(['namespace' => 'Developro', 'prefix' => '/i', 'as' => 'developro.'], function () {
        Route::get('/{slug}/plan-inwestycji', 'InvestmentController@index')->name('investment.index');
        Route::get('/{slug}/kontakt', 'Contact\IndexController@index')->name('investment.contact');
        Route::post('/{slug}/kontakt', 'Contact\IndexController@form')->name('investment.contact.form');

        Route::get('/{slug}/d/{property}', 'InvestmentHouseController@index')->name('house.index');
    });
});