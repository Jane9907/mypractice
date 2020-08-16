<?php
require_once "header.php";
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>denglu</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/denglu.css">
</head>
<body onload="createCode(4)">
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
                <input class="psw" name="psw" type="text" placeholder="请输入密码">
            </div>
            <div class="row">
                <label class="label" for="check">验证码</label>
                <input type="text" class="check" name="check">
                <input type="text" readonly id="checkCode" class="checkCdoe" style="width: 60px; background-color:#0F0"/>
                <a href="#" onClick="createCode(4)">看不清楚</a>
            </div>
            <div class="row">
                <button class="submit" title="登录" onclick="validate()">登录</button>
                <button class="zhuce" title="注册">注册</button>
            </div>
        </form>
    </div>

</div>
<div class="copyright-info-blk" id="copyright-info-blk">
    <p class="info">Copyright © 2018 Department of Information and Tourism,All rights HrTwists reserved</p>
</div>
<script src="js/denglu.js"></script>
</body>
</html>