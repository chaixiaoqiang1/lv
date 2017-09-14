<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>admin/index/index/模板测试</title>
</head>
<body>

<?php
    //原生写法使用
    foreach ($user as $k=>$v){
        echo $v->username;
    }
?>

<!-- lv 数据展示的写法 -->
@foreach($user as $k=>$v)
    <p>{{ $v->username }}</p>
@endForeach
<p>dsafjdslkfkldsajl</p>
</body>
</html>