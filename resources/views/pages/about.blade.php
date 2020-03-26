@extends('layouts.default', ['title' => 'About'])
@section('content')
<p>&nbsp;</p>
<div class="container">
    <h2>What is {{ config('app.name') }}?</h2>
    <p>{{ config('app.name') }} is a clone of <a href="https://laramap.com" target="_blank">Laramap.com</a></p>
    
    <div class="row">
        <div class="col-md-6">
            <div class="alert alert-warning">
                <strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></strong>
                This app has been built by <a href="https://twitter.com/etsmo">@etsmo</a> for learning purposes.</strong>
            </div>
        </div>
    </div>
    
    <p>Feel free to help to improve the <a href="https://github.com/mikel49/laracarte-tdn">source code.</a></p>
    
    <hr>
    
    <h2>What is Laramap?</h2>
    <p>Laramap is the website by which {{ config('app.name') }} was inspired :).</p>
    <p>More info <a href="https://laramap.com" target="_blank">here</a></p>
    
    <hr>
    
    <h2>Which tools and services are used in {{ config('app.name') }}?</h2>
    <p>
        Basically it's built on Laravel &amp; Bootstrap. But there's a bunch of services used for email and 
       other sections.
    </p>
    <ul>
        <li>Laravel</li>
        <li>Bootstrap</li>
        <li>Amazon 53</li>
        <li>Mandrill</li>
        <li>Google Maps</li>
        <li>Gravatar</li>
        <li>Anthony Martin's geolocation package</li>
        <li>Michel Fortin's Mardown Parser Package</li>
        <li>Heroku</li>
    </ul>
</div>

@stop





