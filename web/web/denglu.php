<?php
session_start();
header("content-type:text/html;charset=utf8");
include "conn.php";
if(isset($_POST["submit"])){
  $username=$_POST["username"];
  $password=$_POST["password"];
  $sql="select * from user where username='$username' and password='$password'";

 // echo $sql;
  //exit;
  $res=mysqli_query($conn,$sql);
  $row=mysqli_fetch_assoc($res);
  if($row){
    echo "<script>alert('登陆成功');window.location.href='../password-modify.php';</script>";

   // var_dump($row);
   // exit;
    $_SESSION["username"]=$row["username"];
    //var_dump($_SESSION["username"]);
    header("Location:index2.php");
  }else{
    echo "该用户不存在";exit;
  }
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>denglu</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="CSS/denglu.css">
</head>
<?php
include_once "header.php"
?>
<body >
<div id="denglu-page">
  <!-- <h3  id="title">登录</h3>-->
  <div id="login">
  <form id="login-form" method="post" action="">
  <div class="row">
  <label class="label" for="username">用户名</label>
  <input class="username" name="username" type="text" placeholder="请输入用户名">
   </div>
  <div class="row">
  <label class="label" for="psw">密码</label>
  <input class="psw" name="password" type="text" placeholder="请输入密码">
  </div>
  <div class="row">
  <label class="label" for="check">验证码</label>
  <input type="text" class="check" name="check">
  <input type="text" readonly id="checkCode" class="checkCdoe" style="width: 60px; background-color:#0F0"/>
   <a href="#" onClick="createCode(4)">看不清楚</a>
  </div>
  <div class="row">
  <button class="submit" name="submit" title="登录" onclick="validate()">登录</button>
  <button class="zhuce" title="注册">注册</button>
  </div>
  </form>
  </div>

</div>
<?php
include_once "bottom.php"
?>
<script src="js/denglu.js"></script>
</body>
</html>
