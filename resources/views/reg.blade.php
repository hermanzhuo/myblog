<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>注册</title>
</head>
<body>

<a href="{{url("/")}}">首页</a>
<a href="{{url("/login")}}">登录</a>
<a href="{{url("/reg")}}">注册</a>
<form action="{{url("/reg")}}" method="get">
<table>
    <tr>
        <td>用户名：</td>
        <td><input type="text" name="username" size="20">
    </tr>
    <tr>
        <td>密 码：</td>
        <td><input type="text" name="password" size="20">
    </tr>
    <tr>
        <td>确认密码：</td>
        <td><input type="text" name="confirm_password" size="20">
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" value="注册"></td>
    </tr>
</table>
</form>

这是注册页

</body>
</html>
