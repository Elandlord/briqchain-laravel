<?php

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

Route::get('/', 'PageController@home');
Route::get('/funds', 'PageController@fondsen');
Route::get('/how-it-works', 'PageController@zoWerktHet');
Route::get('/about', 'PageController@about');
Route::get('/sign-up', 'PageController@aanmelden');
Route::get('/contest', 'PageController@contest');
Route::get('/contest-structure', 'PageController@contestStructure');
Route::get('/privacy-policy', 'PageController@privacyPolicy');

Route::post('/sign-up/mail', 'MailController@aanmelden');

Route::get('language/{language}', 'LanguageController@changeLanguage');

Route::post('calculate/return', 'CalculateController@calculate');

Route::resource('emailCatchers', 'EmailCatcherController');
Route::resource('emailSubscriptions', 'EmailSubscriptionController');
Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/email-subscriptions', 'EmailSubscriptionController@index');
    Route::get('/export/email-subscriptions', 'EmailSubscriptionController@export')->name('email-subscriptions.export');
});

Route::post('/pre-register', 'PreRegisterController@store')->name('pre-register');
