<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'account-management', 'as' => 'account-management.'], function () {
    Route::get('/', ['as' => 'index', 'uses' => 'AccountManagementController@index']);

    Route::get('create', ['as' => 'create', 'uses' => 'AccountManagementController@create']);
    Route::post('create', ['as' => 'store', 'uses' => 'AccountManagementController@store']);

    Route::get('edit/{id}', ['as' => 'edit', 'uses' => 'AccountManagementController@edit']);
    Route::post('edit/{id}', ['as' => 'update', 'uses' => 'AccountManagementController@update']);

    Route::get('show/{id}', ['as' => 'show', 'uses' => 'AccountManagementController@show']);
});
