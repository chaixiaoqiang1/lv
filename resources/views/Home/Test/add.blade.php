<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>添加</title>
</head>
<body>
<form action="{{ url('test/add') }}" method="post">
    {{--表单中添加csrf验证的两种方式--}}
    {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
    {{ csrf_field() }}
    用户名：<input type="text" name="username" placeholder="" id="username">
    手机：<input type="text" name="phone" placeholder="" id="phone">
    邮箱：<input type="text" name="email" placeholder="" id="email">
    <input type="submit" value="提交" id="submit">
</form>
</body>
</html>