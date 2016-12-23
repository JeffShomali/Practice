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
Route::get('admin', ['as' => 'admin', 'uses' => 'AdminController@index']);
