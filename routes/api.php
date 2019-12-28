<?php

Route::post('register', 'Api\RegisterController@register');
Route::post('login', 'Api\LoginController@login');

Route::resource('/users', 'Api\UserController');
