<?php

use Illuminate\Support\Facades\Route;

$namespace = "App\Laravel\Controllers\Portal";

Route::group([
    'as' => "portal.",
    'namespace' => $namespace,
    'prefix' => "portal",
    'middleware' => ["web"]
], function () {
    Route::get('/', ['as' => 'home', 'uses' => 'MainController@index']);;
    Route::get('login', ['as' => 'login', 'uses' => 'MainController@login']);;
    Route::get('register', ['as' => 'register', 'uses' => 'MainController@register']);;
    Route::get('dashboard', ['as' => 'dashboard', 'uses' => 'MainController@dashboard']);;
    Route::get('about', ['as' => 'about', 'uses' => 'MainController@about']);;
});
