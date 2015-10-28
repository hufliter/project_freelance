<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

//admin area
Route::group(['prefix'=>'/admin'], function(){
    //auth
    Route::get('/','admin\AuthenticateController@login');
    Route::post('login','admin\AuthenticateController@auth');
    Route::get('logout','admin\AuthenticateController@logout');
    //end auth

    //User area
    Route::get('user','admin\UserController@index');
    //End user area
});
