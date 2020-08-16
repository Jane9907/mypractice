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
</head>

<body>
<!-- Start: Header -->
<header class="navbar navbar-fixed-top" style="background-image: none; background-color: rgb(240, 240, 240);">
  <div class="pull-left"> <a class="navbar-brand" href="#">
      <div class="navbar-logo"><img src="images/logo.png" style="width: 115px; height: 55px;" alt="logo"></div>
    </a> </div>
  <div class="pull-right header-btns">
    <a class="user"><span class="glyphicons glyphicon-user"></span> admin</a>
    <a href="logout.php " class="btn btn-default btn-gradient" type="button"> <span class="glyphicons glyphicon-log-out"></span> 退出</a>
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
          <h2 class="page-header margin-top-none">个人信息</h2>
          <table class="table">
            <tr>
              <td colspan="2">您好，Admin</td>
            </tr>
            <tr>
              <td width="100">最后登录时间:</td>
              <td>2015-01-02 13：20</td>
            </tr>
            <tr>
              <td>最后登录IP:</td>
              <td>127.0.0.1</td>
            </tr>
          </table>

          <h2 class="page-header margin-top-none">系统信息</h2>
          <table class="table">
            <tr>
              <td width="100">操作系统：</td>
              <td>Linux</td>
            </tr>
            <tr>
              <td>PHP 版本:</td>
              <td>5.3.0</td>
            </tr>
            <tr>
              <td>MySQL 版本:</td>
              <td>5.6.0</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </section>
  <!-- End: Content -->
</div>
<!-- End: Main --></body>

</html>