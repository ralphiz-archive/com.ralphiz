<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Test pages
Route::get('/chat', ['as' => 'chat', function() {
    return view('chat.sendbird');
}]);

Route::get('/chat2', ['as' => 'chat', function() {
    return view('chat.sendbird2');
}]);

// Static pages
Route::get('/', ['as' => 'home', function () {
    return view('pages.home');
}]);
Route::get('/about', ['as' => 'about', function () {
    return view('pages.about');
}]);
Route::get('/projects', ['as' => 'projects', function () {
    return view('pages.projects');
}]);
Route::get('/contact', ['as' => 'contact', function () {
    return view('pages.contact');
}]);