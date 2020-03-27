<?php

use App\Mail\ContactMessageCreated;

Route::name('route_path')->get('/', 'PagesController@home');

Route::get('/test-email', function () {
    return new ContactMessageCreated('Michel Delahaye', 'michel4991@yahoo.com', 'Merci pour le service Laracarte.');
    
});

Route::name('about_path')->get('/about', 'PagesController@about');

Route::name('contact.path')->get('/contact', 'ContactsController@create');

Route::name('contact_path')->post('/contact', 'ContactsController@store');
