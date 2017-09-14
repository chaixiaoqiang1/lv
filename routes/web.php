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

Route::get('/', function () {
    return view('welcome');
});

Route::get('test123', function () {
    return view('test');
});

Route::get('test/{id}', 'IndexController@test');



Route::get('admin/index/index', 'Admin\IndexController@index');
Route::get('admin/index/add', 'Admin\IndexController@add');
//Route::get('test/{id}', 'IndexController@test');
Route::get('index/test/{id}', 'IndexController@test');
