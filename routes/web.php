<?php

Route::name('route_path')->get('/', 'PagesController@home');

Route::name('about_path')->get('/about', 'PagesController@about');

Route::name('contact.path')->get('/contact', 'ContactsController@create');
