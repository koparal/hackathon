<?php

Route::post('register', 'Api\RegisterController@register');
Route::post('login', 'Api\LoginController@login');

Route::get('news/{lang}', 'Api\NewsController@index');
Route::get('news/{id}/{lang_code}', 'Api\NewsController@detail');

Route::get('events/{lang}', 'Api\EventController@index');
Route::get('events/{id}/{lang_code}', 'Api\EventController@detail');
Route::get('event-join', 'Api\EventController@join');

Route::get('users', 'Api\UserController@all');
Route::post('user-update', 'Api\UserController@userUpdate');
Route::get('user-detail/{id}', 'Api\UserController@userDetail');

Route::get('companies', 'Api\UserController@companies');

Route::post('voteCompany', 'Api\CompanyRateController@vote');
Route::post('salaryAdd', 'Api\SalaryController@add');

Route::get('jobs/{lang}', 'Api\JobController@index');
Route::get('job-detail/{lang}', 'Api\JobController@jobDetail');
Route::post('job-apply', 'Api\JobController@jobApply');