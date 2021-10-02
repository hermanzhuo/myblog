<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use mysqli;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function reg()
    {
        $name = $_GET['username'] ?? ''; //如果username不存在就返回空字符串
        $password = $_GET['password'] ?? ''; //如果username不存在就返回空字符串
        $confirm_password = $_GET['confirm_password'] ?? ''; //如果username不存在就返回空字符串

        if ($name && $password && $confirm_password) {
            // 创建连接
            $conn = new mysqli('127.0.0.1', 'root', '123123', 'db_blog', '3306');
            // 检测连接
            if ($conn->connect_error) {
                die("连接失败: " . $conn->connect_error);
            }

            //插入数据
            $sql = "insert into t_users (username, password, created_at)
values ('$name', '$password', '" . date("Y-m-d H:i:s") . "')";

            if ($conn->query($sql) === TRUE) {
                echo "用户注册成功";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            $conn->close();
        }else{
            echo "缺少必要参数";
        }
        //显示注册页面
        return view("reg");
    }

        public function login(){
            $name = $_GET['username'] ?? ''; //如果username不存在就返回空字符串
            $password = $_GET['password'] ?? ''; //如果username不存在就返回空字符串
            if($name && $password){
                // 创建连接
                $conn = new mysqli('127.0.0.1', 'root', '123123','db_blog','3306');
                // 检测连接
                if ($conn->connect_error) {
                    die("连接失败: " . $conn->connect_error);
                }

                //插入数据
                $sql = "select password from t_users where username = '$name' ";
                $res = $conn->query($sql)->fetch_assoc(); //从查出来的结果集里取出一行
                if ($res) {
                    if($res['password'] == $password){
                        echo '<script>alert("登录成功，欢迎你'.$name.'")</script>';
                    }
                } else {
                    echo "该用户不存在！";
                }
                $conn->close();
            }

            //显示登录页面
            return view("login");
        }

}
