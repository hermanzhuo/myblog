<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>登录</title>
    <style>
        .news{

        }
    </style>
</head>
<body>

<a href="{{url("/")}}">首页</a>
<a href="{{url("/login")}}">登录</a>
<a href="{{url("/reg")}}">注册</a>
<div class = "login_form">
    <form >

    </form>
</div>

这是登录页
<form action="{{url("/login")}}" method="get">
    昵称:<br>
    <input type="text" name="username" value="">
    <br>
    密码:<br>
    <input type="text" name="password" value="">
    <br><br>
    <input type="submit" value="登录">
</form>

<p>这是登录页！</p>

</body>
</html>
