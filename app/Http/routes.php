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

    //admin index
    Route::get('/','admin\AuthController@index');

    //auth
    Route::get('login','admin\AuthController@getLogin');
    Route::post('login','admin\AuthController@postLogin');

    Route::get('logout','admin\AuthController@logout');
    //end auth

    //User area

    Route::get('users', [
        'as' => 'users.index', 'uses' => 'admin\UsersController@index'
    ]);

    Route::get('users/create', [
        'as' => 'users.create', 'uses' => 'admin\UsersController@getCreate'
    ]);

    Route::post('users/postCreate', [
        'as' => 'users.postCreate' , 'uses' => 'admin\UsersController@postCreate'
    ]);

    Route::get('users/view', [
        'as' => 'users.view', 'uses' => 'admin\UsersController@getView'
    ]);

    Route::get('users/edit', [
        'as' => 'users.edit', 'uses' => 'admin\UsersController@getEdit'
    ]);
    Route::post('users/edit',[
        'as' => 'users.postEdit', 'uses' => 'admin\UsersController@postEdit'
    ]);

    Route::get('users/delete', [
        'as' => 'users.delete', 'uses' => 'admin\UsersController@getDelete'
    ]);

    //End user area

    //Introduce area
    Route::get('intro','admin\IntroduceController@index');
    //End Introduce

    //Category area
    Route::get('category','admin\CategoryController@index');
    //End category area

    //Products area
    Route::get('products','admin\ProductsController@index');
    //End products area

    //News area
    Route::get('news','admin\NewsController@index');
    //End News area

    //Technical area
    Route::get('technical','admin\TechnicalController@index');
    //End Technical area

    //Contact area
    Route::get('contact','admin\ContactController@index');
    //End Contact area
});
