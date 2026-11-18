<?php

use Illuminate\Support\Facades\Route;

$namespace = "App\Laravel\Controllers\Portal";

Route::group([
    'as' => "portal.",
    'namespace' => $namespace,
    'prefix' => "admin",
    'middleware' => ["web"]
], function () {

    include_once app_path("Laravel/Routes/Portal/Auth.php");

    Route::group(['middleware' => "portal.auth"], function () {
        Route::get('/', ['as' => 'dashboard', 'uses' => 'MainController@index']);
    });

    // Route::group(['middleware' => "portal.auth"], function () {
    //     Route::get('/', ['as' => 'home', 'uses' => 'AuthenticationController@index']);
    //     Route::get('about', ['as' => 'about', 'uses' => 'AuthenticationController@about']);
    // });

    // Route::get('/', ['as' => 'dashboard', 'uses' => 'MainController@index']);;
    // Route::get('home', ['as' => 'home', 'uses' => 'MainController@home']);;
    // Route::get('login', ['as' => 'login', 'uses' => 'MainController@login']);;
    // Route::get('register', ['as' => 'register', 'uses' => 'MainController@register']);;
    // Route::get('about', ['as' => 'about', 'uses' => 'MainController@about']);;
    // Route::get('contact', ['as' => 'contact', 'uses' => 'MainController@contact']);;
});
