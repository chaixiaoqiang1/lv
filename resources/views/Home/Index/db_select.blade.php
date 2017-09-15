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
    <?php echo $name; ?>

    @foreach ($users as $k=>$v)
         {{ $v->username }}
    @endforeach

    <div class="one">
        <p>测试css样式引用的路径</p>
    </div>
</body>
</html>