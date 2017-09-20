<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class TestController extends CommonController
{
    // 模板的使用方式以及数据展示，是否使用模板引擎
    public function index(){
        $users = DB::select('select * from l_admin');
        return view('home/test/index',['users'=>$users]);
    }

    public function add(Request $request){
        if($request->isMethod('post')){
            $input = $request->all();
            $input['addtime'] = time();
            $input['status'] = 1;
            unset($input['_token']);
            $return = DB::insert('insert into l_admin(username,phone,email)  values (?)', $input);
            var_dump($return);die;
        }
        return view('home/test/add');
    }

    public function updata(){
        return view('updata');
    }

    public function delete(){
        return view('delete');
    }
}

