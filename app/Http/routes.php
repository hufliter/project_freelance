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

/*Route::get('/', function () {
    return view('welcome');
});*/

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
    Route::get('intro', [
        'as' => 'intro', 'uses' => 'admin\IntroduceController@index'
    ]);
    Route::get('intro/view', [
        'as' => 'intro.view' , 'uses' => 'admin\IntroduceController@view'
    ]);
    Route::get('intro/create', [
        'as' => 'intro.create' , 'uses' => 'admin\IntroduceController@getCreate'
    ]);
    Route::post('intro/postCreate',[
        'as' => 'intro.postCreate' , 'uses' =>'admin\IntroduceController@postCreate'
    ]);
    Route::get('intro/edit', [
        'as' => 'intro.edit', 'uses' => 'admin\IntroduceController@getEdit'
    ]);
    Route::post('intro/postEdit', [
        'as' => 'intro.postEdit' , 'uses' => 'admin\IntroduceController@postEdit'
    ]);

    //End Introduce

    //Category area
    Route::get('category', [
        'as' => 'category.index' , 'uses' => 'admin\CategoryController@index'
    ]);
    Route::get('category/create', [
        'as' => 'category.getCreate', 'uses' => 'admin\CategoryController@getCreate'
    ]);
    Route::post('category/create', [
        'as' => 'category.postCreate' , 'uses' => 'admin\CategoryController@postCreate'
    ]);
    Route::get('category/view', [
        'as' => 'category.getView' , 'uses' => 'admin\CategoryController@getView'
    ]);
    Route::get('category/edit' , [
        'as' => 'category.getEdit' , 'uses' => 'admin\CategoryController@getEdit'
    ]);
    Route::post('category/edit', [
        'as' => 'category.postEdit' , 'uses' => 'admin\CategoryController@postEdit'
    ]);
    Route::get('category/delete' , [
        'as' => 'category.delete', 'uses' => 'admin\CategoryController@delete'
    ]);
    //End category area

    //Products area
    Route::get('products', [
        'as' => 'products.index', 'uses' => 'admin\ProductsController@index'
    ]);
    Route::get('products/view', [
        'as' => 'products.view', 'uses' => 'admin\ProductsController@getView'
    ]);
    Route::get('products/edit', [
        'as' => 'products.getEdit', 'uses' => 'admin\ProductsController@getEdit'
    ]);
    Route::post('products/edit', [
        'as' => 'products.postEdit', 'uses' => 'admin\ProductsController@postEdit'
    ]);
    Route::get('products/create', [
        'as' => 'products.getCreate', 'uses' => 'admin\ProductsController@getCreate'
    ]);
    Route::post('products/create', [
        'as' => 'products.postCreate', 'uses' => 'admin\ProductsController@postCreate'
    ]);
    Route::get('products/delete', [
        'as' => 'products.delete', 'uses' => 'admin\ProductsController@delete'
    ]);
    //End products area

    //News area
    Route::get('news','admin\NewsController@index');
    //End News area

    //Technical area
    Route::get('technical', [
        'as' => 'technical.index', 'uses' => 'admin\TechnicalController@index'
    ]);
    Route::get('technical/view', [
        'as' => 'technical.view', 'uses' => 'admin\TechnicalController@getView'
    ]);
    Route::get('technical/edit', [
        'as' => 'technical.getEdit', 'uses' => 'admin\TechnicalController@getEdit'
    ]);
    Route::post('technical/edit', [
        'as' => 'technical.postEdit', 'uses' => 'admin\TechnicalController@postEdit'
    ]);
    Route::get('technical/create', [
        'as' => 'technical.getCreate', 'uses' => 'admin\TechnicalController@getCreate'
    ]);
    Route::post('technical/create', [
        'as' => 'technical.postCreate', 'uses' => 'admin\TechnicalController@postCreate'
    ]);
    Route::get('technical/delete', [
        'as' => 'technical.delete', 'uses' => 'admin\TechnicalController@delete'
    ]);

    //End Technical area

    //Contact area
    Route::get('contact',[
        'as' => 'contact.index', 'uses' => 'admin\ContactController@index'
    ]);
    Route::get('contact/view',[
        'as' => 'contact.getView', 'uses' => 'admin\ContactController@getView'
    ]);
    Route::get('contact/edit',[
        'as' => 'contact.getEdit', 'uses' => 'admin\ContactController@getEdit'
    ]);
    Route::post('contact/edit',[
        'as' => 'contact.postEdit', 'uses' => 'admin\ContactController@postEdit'
    ]);
    Route::get('contact/delete',[
        'as' => 'contact.delete', 'uses' => 'admin\ContactController@delete'
    ]);
    //End Contact area

    //Recruitment area
    Route::get('recruitment', [
        'as' => 'recruitment.index', 'uses' => 'admin\RecruitmentController@index'
    ]);
    Route::get('recruitment/create', [
        'as' => 'recruitment.getCreate', 'uses' => 'admin\RecruitmentController@getCreate'
    ]);
    Route::post('recruitment/create', [
        'as' => 'recruitment.postCreate', 'uses' => 'admin\RecruitmentController@postCreate'
    ]);
    Route::get('recruitment/view', [
        'as' => 'recruitment.getView', 'uses' => 'admin\RecruitmentController@getView'
    ]);
    Route::get('recruitment/edit', [
        'as' => 'recruitment.getEdit', 'uses' => 'admin\RecruitmentController@getEdit'
    ]);
    Route::post('recruitment/edit', [
        'as' => 'recruitment.postEdit', 'uses' => 'admin\RecruitmentController@postEdit'
    ]);
    Route::get('recruitment/delete', [
        'as' => 'recruitment.delete', 'uses' => 'admin\RecruitmentController@delete'
    ]);
    //end recruitment area

});

//frontend area
Route::get('/', [
    'as'=> 'fe.index', 'uses' => 'SiteController@index'
]);
Route::get('/introduce', [
    'as'=> 'fe.introduce', 'uses' => 'IntroduceController@index'
]);

Route::get('/news', [
    'as'=> 'fe.news', 'uses' => 'NewsController@index'
]);

//fe recruitment
Route::get('/recruitment', [
    'as'=> 'fe.recruitment', 'uses' => 'RecruitmentController@index'
]);
Route::get('/recruitment/view', [
    'as'=> 'fe.viewRecruitment', 'uses' => 'RecruitmentController@view'
]);
//end recruitment

Route::get('/contact', [
    'as'=> 'fe.contact', 'uses' => 'ContactController@index'
]);

//technical
Route::get('/technical', [
    'as'=> 'fe.technical', 'uses' => 'TechnicalController@index'
]);
//end technical

//products
Route::get('/products', [
    'as'=> 'fe.products', 'uses' => 'ProductsController@index'
]);
Route::get('/products/view', [
    'as'=> 'fe.viewProduct', 'uses' => 'ProductsController@view'
]);
//end products