<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::group(['middleware' => 'api', 'prefix' => 'auth'], function ($router) {
    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

    Route::group(['middleware' => 'auth:api'], function(){
        Route::group(['namespace' => 'Fruit', 'prefix' => 'fruits'], function () {
            Route::get('/', 'IndexController');
        });
    });
});

Route::group(['namespace' => 'User', 'prefix' => 'users'], function () {
    Route::post('/', 'StoreController');
});
