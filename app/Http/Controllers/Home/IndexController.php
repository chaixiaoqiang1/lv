<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class IndexController extends CommonController
{
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
    //测试表单提交
    public function form_test(Request $request){
        $method=$request->method();
        if($request->isMethod('post')){
            //
            $input = $request->all();
            var_dump($input);die;
        }

        /*if($request->is('form_test')){
            //
            echo 'form_test1231231';
            echo $request->url();
            echo '<hr>';
            echo $request->fullUrl();

        }
        die;

        echo $request->path();
        die;*/

//        if($request->input()){
//            echo 1;die;
//        }
        return view('home.index.form_test');
    }
    //接收表单数据
    public function js_form(Request $request){
        if($request->isMethod('post')){
            $post = $request->all();
            var_dump($post);die;
        }

    }
}
