<?php

use Illuminate\Http\Request;

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

Route::get('/test', 'TokenController@test');
Route::post('/login', 'TokenController@login');

Route::post('/version/check', 'VersionController@getLatestVersion');
Route::post('/access/token', 'TokenController@playerLogin');


Route::middleware(['auth:game'])->group(function () {
    Route::get('get/player/info', 'PlayerController@getInfo');

    Route::post('post/comment', 'CommentController@comment');

    Route::get('/check/token', 'PlayerController@checkToken');
    Route::get('game/server', 'ServerListController@getServer');
});