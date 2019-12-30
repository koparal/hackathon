<?php


Route::get('/', ['uses' => 'Auth\LoginController@showLoginForm', 'as' => 'showLoginForm']);

Route::group(['prefix' => '/dashboard', 'as' => 'dashboard.','middleware' => 'IsAdmin'], function() {
    Route::get('/', ['uses' => 'Dashboard\DashboardController@index', 'as' => 'index']);
    Route::get('/index', ['uses' => 'Dashboard\DashboardController@index', 'as' => 'index']);

    Route::group(['prefix' => '/roller', 'as' => 'roles.'], function(){
        Route::get('/', ['uses' => 'Dashboard\RolesController@index', 'as' => 'index']);
    });

    Route::group(['prefix' => '/haberler', 'as' => 'news.'], function(){
        Route::get('/', ['uses' => 'Dashboard\NewsController@index', 'as' => 'index']);
    });

    Route::group(['prefix' => '/push-notifications', 'as' => 'push_notifications.'], function(){
        Route::get('/', ['uses' => 'Dashboard\PushNotificationController@index', 'as' => 'index']);
    });


    Route::group(['prefix' => '/etkinlikler', 'as' => 'events.'], function(){
        Route::get('/', ['uses' => 'Dashboard\EventController@index', 'as' => 'index']);
    });

    Route::group(['prefix' => '/is-ilanlari', 'as' => 'jobs.'], function(){
        Route::get('/', ['uses' => 'Dashboard\JobController@index', 'as' => 'index']);
    });

    Route::group(['prefix' => '/cvler', 'as' => 'cvs.'], function(){
        Route::get('/', ['uses' => 'Dashboard\CvController@index', 'as' => 'index']);
    });
    Route::group(['prefix' => '/push-notifications', 'as' => 'push_notifications.'], function(){
        Route::get('/', ['uses' => 'Dashboard\PushNotificationController@index', 'as' => 'index']);
        Route::get('/olustur', ['uses' => 'Dashboard\PushNotificationController@create', 'as' => 'create']);
        Route::get('/hedefler', ['uses' => 'Dashboard\PushNotificationController@targets', 'as' => 'targets']);
    });




});

Route::Auth();