<?php

use Illuminate\Support\Facades\Route;

$namespace = "App\Laravel\Controllers\Portal";

Route::group([
    'as' => "portal.",
    'namespace' => $namespace,
    'prefix' => "portal",
    'middleware' => ["web"]
], function () {
    Route::get('/', ['as' => 'dashboard', 'uses' => 'MainController@index']);;
    Route::get('home', ['as' => 'home', 'uses' => 'MainController@home']);;
    Route::get('login', ['as' => 'login', 'uses' => 'MainController@login']);;
    Route::get('register', ['as' => 'register', 'uses' => 'MainController@register']);;
    Route::get('about', ['as' => 'about', 'uses' => 'MainController@about']);;
    Route::get('contact', ['as' => 'contact', 'uses' => 'MainController@contact']);;
});
