<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route Authentication
Route::group(['prefix' => 'auth'], function () {
    Route::post('login', 'AuthController@login');
    Route::post('register', 'AuthController@register');
    Route::post('request/reset-password', 'AuthController@requestResetPassword');
    Route::post('accept/reset-password', 'AuthController@acceptResetPassword');
    Route::group(['middleware' => ['jwt']], function () {
        Route::put('change-password', 'AuthController@changePassword');
        Route::post('logout', 'AuthController@logout');
    });
});

//Route Devices
Route::group(['prefix' => 'devices'], function () {
    Route::group(['middleware' => ['jwt']], function () {
        Route::get('getData', 'DevicesController@getData');
    });
});

//Route User
Route::group(['prefix' => 'user'], function () {
    Route::group(['middleware' => ['jwt']], function () {
        Route::get('getNotifications', 'UserController@getNotifications');
        Route::post('postFeedback', 'UserController@postFeedback');
        Route::put('seenNotification', 'UserController@seenNotification');
    });
});

//Route Admin
Route::group(['prefix' => 'admin'], function () {
    Route::middleware(['jwt', 'admin'])->group(function () {
        Route::get('all-user', 'AdminController@getAllUser');
        Route::get('statistic', 'AdminController@getStatistic');
        Route::put('/{id}', 'AdminController@editUser');
        Route::delete('/{id}', 'AdminController@deleteUser');
        Route::post('sendNotification', 'AdminController@sendNotification');
    });
});