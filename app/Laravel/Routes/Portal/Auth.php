<?php

use Illuminate\Support\Facades\Route;

Route::group(['as' => 'auth.', 'middleware' => 'portal.guest'], function () {
    Route::get('login', ['as' => 'login', 'uses' => 'AuthenticationController@login']);
    Route::post('login', ['uses' => 'AuthenticationController@authenticate']);

    Route::get('register', ['as' => 'register', 'uses' => 'AuthenticationController@register']);
    Route::post('register', ['uses' => 'AuthenticationController@store']);
    // Route::get('logout', ['as' => 'logout', 'uses' => 'AuthController@logout']);
});
