<?php


Route::get('/', ['uses' => 'Auth\LoginController@showLoginForm', 'as' => 'showLoginForm']);

Route::group(['prefix' => '/dashboard', 'as' => 'dashboard.','middleware' => 'IsAdmin'], function() {
    Route::get('/', ['uses' => 'Dashboard\DashboardController@index', 'as' => 'index']);
    Route::get('/index', ['uses' => 'Dashboard\DashboardController@index', 'as' => 'index']);
});

Route::Auth();