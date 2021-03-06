<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});


// --------------------------------------------------------------------
//后台
Route::any('/Admin/login',"Admin\AdminController@login");
Route::any('/Admin/login_go',"Admin\AdminController@login_go");
Route::any('/Admin/zhi_type',"Admin\AdminController@zhi_type");
Route::any('/Admin/zhi_fang',"Admin\AdminController@zhi_fang");
Route::any('/Admin/zhi_juti',"Admin\AdminController@zhi_juti");
Route::any('/Admin/add_adress',"Admin\AdminController@add_adress");
Route::any('/Admin/content',"Admin\AdminController@content");