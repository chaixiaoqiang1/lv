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

//使用验证码类的命名空间
use Gregwar\Captcha\CaptchaBuilder;


Route::get('/', function () {
    return view('welcome');
});

Route::get('test123', function () {
    return view('test');
});

Route::get('test/{id}', 'IndexController@test');
Route::get('/show', 'Home\IndexController@show');
Route::get('/db_select', 'Home\IndexController@db_select');


// 模块/控制器/方法    路由和视图的路径是一致的
Route::get('admin/index/index', 'Admin\IndexController@index');
Route::get('admin/index/add', 'Admin\IndexController@add');
//Route::get('test/{id}', 'IndexController@test');
Route::get('index/test/{id}', 'IndexController@test');

//验证码的使用  输出显示方式要用response
Route::get('/yzm', function(){
    $builder = new CaptchaBuilder;
    $builder->build();

    // 把验证码值存进session
    session(['captcha'=> $builder->getPhrase()]);

    return response($builder->output())->header('Content-type','image/jpeg');
});


