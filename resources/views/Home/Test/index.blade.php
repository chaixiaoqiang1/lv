<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>列表页</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <td>序号</td>
                <td>用户名</td>
                <td>手机号</td>
                <td>邮箱</td>
                <td>添加时间</td>
                <td>状态</td>
                <td>操作</td>
            </tr>
        </thead>
        <tbody>

        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->phone }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->addtime }}</td>
                <td>{{ $user->status }}</td>
            </tr>
        @endforeach

        </tbody>
    </table>
</body>
</html>