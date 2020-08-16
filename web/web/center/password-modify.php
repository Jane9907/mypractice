<?php
session_start();
include_once '../conn.php';
if(isset($_POST["submit"])) {
    $username = $_SESSION["username"];
    $password=$_POST["password"];
    $sql = "select password from user where username='$username'";
    //echo $sql;
    //exit;
    $res = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($res);
    //var_dump($row);
    //exit;
    //var_dump($_POST);
    //echo $password;

    if($row["password"]!= $password){
        echo "<script>alert('原密码错误……！');window.location.href='password-modify.php';</script>";
        //header("location:password-modify.php");
       // exit;
    }
    $pass=$_POST["pass"];
    $sql="update user set password='$pass' where username='$username'";
    //echo $sql;
    //exit;
    $res=mysqli_query($conn,$sql);
    if($res){
        echo "<script>alert('编辑成功！');window.location.href='index.php';</script>";
    }else{
        echo "<script>alert('编辑失败！');history.back();window.location.href='index.php';</script>";
    }



}

?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <title>后台首页</title>
    <meta name="keywords" content="Admin">
    <meta name="description" content="Admin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Core CSS  -->
    <link rel="stylesheet" type="text/css" href="CSS/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="CSS/glyphicons.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="CSS/theme.css">
    <link rel="stylesheet" type="text/css" href="CSS/responsive.css">


    <!-- Your Custom CSS -->
    <link rel="stylesheet" type="text/css" href="CSS/custom.css">

    <!-- Core Javascript - via CDN -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/code.js"></script>
</head>

<body>
<!-- Start: Header -->
<header class="navbar navbar-fixed-top" style="background-image: none; background-color: rgb(240, 240, 240);">
    <div class="pull-left"> <a class="navbar-brand" href="#">
            <div class="navbar-logo"><img src="images/logo.png" style="width: 115px; height: 55px;" alt="logo"></div>
        </a> </div>
    <div class="pull-right header-btns">
        <a class="user"><span class="glyphicons glyphicon-user"></span> admin</a>
        <a href="logout.php" class="btn btn-default btn-gradient" type="button"><span class="glyphicons glyphicon-log-out"></span> 退出</a>
    </div>
</header>
<!-- End: Header -->

<!-- Start: Main -->
<div id="main">
    <!-- Start: Sidebar -->
    <aside id="sidebar" class="affix">
        <div id="sidebar-search">

        </div>
        <div id="sidebar-menu">
            <ul class="nav sidebar-nav">
                <li>
                    <a href="index.php"><span class="glyphicons glyphicon-home"></span><span class="sidebar-title">后台首页</span></a>
                </li>
                <li>
                    <a href="password-modify.php"><span class="glyphicons glyphicon-file"></span><span class="sidebar-title">密码修改</span></a>
                </li>
                <li>
                    <a href="information-modify.php"><span class="glyphicons glyphicon-paperclip"></span><span class="sidebar-title">个人资料修改</span></a>
                </li>

            </ul>
        </div>
    </aside>
    <!-- End: Sidebar -->
    <!-- Start: Content -->
    <section id="content">
        <div id="topbar" class="affix">
            <ol class="breadcrumb">
                <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            </ol>
        </div>
        <div class="container">


            <div class="col-md-11">
                <div id="docs-content">
                    <h2 class="page-header margin-top-none">密码修改</h2>
                    <form action="#" method="post">
                    <table class="table">
                        <tr>
                            <td colspan="2">您好，<?php
                                echo $_SESSION["username"];
                                ?></td>
                        </tr>
                        <tr>
                            <td width="100">原密码:</td>
                            <td><input type="text" name="password" placeholder="请输入原始密码"></td>
                        </tr>
                        <tr>
                            <td align="right" valign="middle"><strong>新&nbsp;密&nbsp;&nbsp;码：</strong></td>
                            <td><input name="pass" placeholder="请输入新密码" type="password" id="pass" size="20" maxlength="20" style="height:25px" required onFocus="setStyle(this.id)" onBlur="loseStyle(this.id); checkPass()"/>
                                <span class="star">*</span></td>
                            <td id="pass1">&nbsp;</td>
                        </tr>
                        <tr>
                            <td align="right" valign="middle"><strong>确认密码：</strong></td>
                            <td><input name="password2" placeholder="请再次输入新密码" type="password" id="password" size="20" maxlength="20"  style="height:25px" required onFocus="setStyle(this.id)" onBlur="loseStyle(this.id); "/>
                                <span class="star">*</span></td>
                            <td id="password1">&nbsp;</td>
                        </tr>
                    </table>

                    <h2 class="page-header margin-top-none">密码验证</h2>
                    <table class="table">
                        <tr>
                            <td><input type="text"  onclick="createCode(n)" readonly id="checkCode" class="unchanged" style="width: 80px; background-color:#0F0">
                                <a href="#"  onclick="createCode(n)">看不清楚</a></td>
                        </tr>
                        <tr>
                            <td><input id="input1" type="text" placeholder="请注意大小写"></td>

                        </tr>
                        <tr>
                            <td><input id="button1" onclick="validate()" type="submit" name="submit" value="submit"/></td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>

        </div>
    </section>
    <!-- End: Content -->
</div>
<!-- End: Main --></body>

</html>