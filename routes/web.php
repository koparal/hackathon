<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', ['uses' => 'Auth\LoginController@showLoginForm', 'as' => 'showLoginForm']);

Route::group(['prefix' => '/dashboard', 'as' => 'dashboard.','middleware' => 'IsAdmin'], function() {
    Route::get('/', ['uses' => 'Dashboard\DashboardController@index', 'as' => 'index']);
    Route::get('/index', ['uses' => 'Dashboard\DashboardController@index', 'as' => 'index']);
});


#### API ####

Route::post('register', 'API\RegisterController@register');

Route::middleware('auth:api')->group( function () {
    Route::get('/users', 'Api\UserController@index');
});


Route::Auth();