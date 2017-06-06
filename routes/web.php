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
Route::group(['namespace' => 'Auth'], function() {
    Route::get('/', [
        'as' => '/',
        'uses' => 'LoginController@getLogin'
    ]);

    Route::post('/login', [
        'as' => 'login',
        'uses' => 'LoginController@postLogin'
    ]);
});

Route::group([
    'middleware' => ['authen', 'checkrole'],
    'namespace' => 'Admin',
    'prefix' => 'admin'
        ], function() {
    Route::get('dashboard', [
        'as' => 'admin.dashboard',
        'uses' => 'DashBoardController@getDashboard'
    ]);
});

