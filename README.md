# laravel学习
安装方法
1、composer global require "laravel/installer"
2、laravel new blog

## 学习进行中
1、学习了路由，laravel是得路由的，所以要先写路由才行。 
2、学习了控制器以及命令行创建控制器的方法（php artisan  make:controller Home/IndexController）。  
3、学习了视图，变量分配，两种命名方式，加blade的可以使用laravel模板标签。
4、学习了数据库的连接与操作，配置文件有两个(.env和config/database.php)。  
5、css,js,img放在public目录下，也是根目录下(引用方式是利用asset方法)，如果配置指向Public目录下的域名就可以直接使用根目录。  
6、在视图间共享数据(view()->share('key', 'value'))。    
7、模板继承(参考Blade模板)。
8、http层csrf表单验证，控制器中validate验证(可以在Http中自定义require验证类)，依赖注入Request类（php类型约束）【未验证】。
9、验证码(包引用网址：packagist中国镜像[composer]上搜索[gregwar/captcha]，项目根目录下使用composer命令)[项目里composer.json文件中添加配置项后使用命令(composer update)]
,response方法响应在线输出验证码图片。
10、laravel中如何使用session。