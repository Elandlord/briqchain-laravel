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
Route::get('/fondsen', 'PageController@fondsen');
Route::get('/zo-werkt-het', 'PageController@zoWerktHet');
Route::get('/about', 'PageController@about');
Route::get('/aanmelden', 'PageController@aanmelden');

Route::post('/aanmelden/mail', 'MailController@aanmelden');
