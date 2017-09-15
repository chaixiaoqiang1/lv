<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CommonController extends Controller
{
    public function __construct()
    {
        return view()->share('name','周至二中');
    }

    // 模板的使用方式以及数据展示，是否使用模板引擎
    public function show(){
        echo 'ehldjsalkf';
        return view("Home/Index/show",['name'=>'chaixiaoqiang']);
    }

    // 数据库的操作方式 以及使用模板引擎的数据展示方式 测试css样式引用的路径
    public function db_select(){
        $users = DB::select('select * from l_admin');
        return view('home.index.db_select', ['users' => $users]);
    }

}
