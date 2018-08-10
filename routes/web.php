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

Route::post('/sign-up/mail', 'MailController@aanmelden');

Route::get('language/{language}', 'LanguageController@changeLanguage');

Route::post('calculate/return', 'CalculateController@calculate');


Route::resource('emailCatchers', 'EmailCatcherController');
Route::resource('emailSubscriptions', 'EmailSubscriptionController');