<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home/Index/show</title>
    <link rel="stylesheet" href="{{ asset('css/test.css') }}">
</head>
<body>

{{--<form method="POST" action="/test/lv/public/index.php/form_test">--}}
<form method="POST" action="{{ url('/js_form') }}">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    用户名：<input type="text" name="username" value="" placeholder="请输入用户名">
    <input type="submit" value="提交">
</form>


</body>
</html>