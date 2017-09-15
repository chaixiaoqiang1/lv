<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home/Index/show</title>
</head>
<body>
    <h1>Laravel</h1>
    <!--  未使用模板引擎的文件，下面的不可使用  -->
    Hello, @{{ name }}.
    <hr>
    <?php echo $name; ?>
    <p>测试非模板引擎Home/Index/show</p>
</body>
</html>