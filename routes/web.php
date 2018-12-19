<?php

Route::get('/', 'PageController@home')->name('home');
Route::get('/funds', 'PageController@fondsen')->name('funds');
Route::get('/how-it-works', 'PageController@zoWerktHet')->name('howItWorks');
Route::get('/about', 'PageController@about')->name('about');
Route::get('/sign-up', 'PageController@aanmelden')->name('signUp');
Route::get('/thank-you', 'PageController@thankYou')->name('thankYou');
Route::get('/contest', 'PageController@contest')->name('contest');
Route::get('/downloads', 'PageController@downloads')->name('downloads');
Route::get('/contest-structure', 'PageController@contestStructure')->name('contestStructure');
Route::get('/privacy-policy', 'PageController@privacyPolicy')->name('privacyPolicy');
Route::get('/terms-and-conditions', 'PageController@termsAndConditions')->name('termsAndCondition');
Route::get('/a-new-way-to-invest', 'PageController@newInvesting')->name('newInvesting');
Route::get('/our-vision', 'PageController@ourVision')->name('ourVision');
Route::get('/contact', 'PageController@contact')->name('contact');
Route::post('/contact/mail', 'ContactController@contact')->name('contact-us');

/**
 * Housing routes
 */
Route::get('/housing/properties', 'HousingPageController@properties')->name('properties');
Route::get('/housing/map', 'HousingPageController@map')->name('map');
Route::get('/housing/buy-or-rent', 'HousingPageController@buyOrRent')->name('buy-or-rent');
Route::get('/housing/sign-up', 'HousingPageController@signUp')->name('housing-sign-up');
Route::get('/housing/sell-property', 'HousingPageController@sellProperty')->name('sell-property');

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
