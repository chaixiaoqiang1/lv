<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class IndexController extends Controller
{
    //控制台生成的控制器
    public function test($id,Request $request){
        // 路由请求方式
//        http://localhost/test/lv/public/index.php/index/test?id=1&name=%E7%99%BD%E4%BF%8A%E9%81%A5  可行
//        http://localhost/test/lv/public/index.php/index/test/id/1/name/%E7%99%BD%E4%BF%8A%E9%81%A5  不可行
//        http://localhost/test/lv/public/index.php/index/test/id/1?name=%E7%99%BD%E4%BF%8A%E9%81%A5  不可行
//        http://localhost/test/lv/public/index.php/index/test/1?name=%E7%99%BD%E4%BF%8A%E9%81%A5  可行但是路由要为Route::get('index/test/{id}', 'IndexController@test');

        echo $id; // 输出 1
        echo $request->input('id'); // 输出 1
        echo $request->input('name'); // 输出 白俊遥
        echo 'Index/test';

        $assign = [
            'title' => '白俊遥文章的标题',
            'content' => '白俊遥文章的内容'
        ];
        return view('test', $assign);
    }

}
