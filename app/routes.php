<?php

// Mengganti syntax blade agar syntax AngularJs tidak bentrok
Blade::setContentTags('<%', '%>'); 		// for variables and all things Blade
Blade::setEscapedContentTags('<%%', '%%>'); 	// for escaped data

Route::get('/', function () {
    return View::make('user.index');
});

Route::group(['namespace' => 'Controllers\User'], function () {
    Route::resource('user', 'UserController',
        ['only' => ['index', 'store', 'destroy']]);
//    Route::get('/user', ['uses' => 'UserController@index']);
//    Route::get('/user/{id}', ['uses' => 'UserController@show']);
});
