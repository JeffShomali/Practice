<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Auth route
Auth::routes();

// Home page route
Route::get('/', 'PagesController@index');

// Test route
Route::get('test', 'TestController@index');

// Widget routes (p180)
Route::get('widget/create', ['as' => 'widget.create',
           'uses' => 'WidgetController@create', ]);
Route::get('widget/{id}-{slug?}', ['as' => 'widget.show',
            'uses' => 'WidgetController@show', ]);
Route::resource('widget', 'WidgetController', ['except' => ['show', 'create']]);

// Admin routes
Route::get('admin', ['as' => 'admin', 'uses' => 'AdminController@index']);

//Pages routes
Route::get('terms-of-service', 'PagesController@terms');
Route::get('privacy', 'PagesController@privacy');

// Profile routes
Route::get('show-profile', ['as' => 'show-profile',
           'uses' => 'ProfileController@showProfileToUser']);
Route::get('my-profile', ['as' => 'my-profile',
           'uses' => 'ProfileController@myProfile']);
Route::resource('profile', 'ProfileController');

// Setting  routes
Route::get('settings', 'SettingsController@edit');
Route::post('settings', ['as' => 'userUpdate',
            'uses' => 'SettingsController@update']);
