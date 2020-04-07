<?php

//Route::name('route_path')->get('/', 'PagesController@home');
Route::view('/', 'pages.home')->name('home');

//Route::name('about_path')->get('/about', 'PagesController@about');
Route::view('/about', 'pages.about')->name('about');

//Route::name('contact.path')->get('/contact', 'ContactsController@create');
Route::get('/contact', 'ContactsController@create')->name('contact.create');

//Route::name('contact_path')->post('/contact', 'ContactsController@store');
Route::post('/contact', 'ContactsController@store')->name('contact.store');

Auth::routes(['verify' => true]);

//Route::get('/home', 'HomeController@index')->name('home');
