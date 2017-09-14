<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    // 自定义的测试控制器
    public function index(){
        //原生sql操作数据库的方法
        $users = DB::select('select * from l_admin');
        //视图层分配变量的方法
        return view('admin/index/index')->with('user',$users);
    }
}
