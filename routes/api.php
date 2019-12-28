<?php

Route::post('register', 'Api\RegisterController@register');
Route::post('login', 'Api\LoginController@login');

Route::get('news/{lang}', 'Api\NewsController@index');
Route::get('news/{id}/{lang_code}', 'Api\NewsController@detail');

Route::get('events/{lang}', 'Api\EventController@index');
Route::get('events/{id}/{lang_code}', 'Api\EventController@detail');

Route::get('users', 'Api\UserController@all');
Route::get('user-detail/{id}', 'Api\UserController@userDetail');
Route::get('companies', 'Api\UserController@companies');
