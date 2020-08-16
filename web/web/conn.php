<?php
$conn=mysqli_connect("localhost:3306","root","root") or die("数据库服务器连接失败".mysqli_error());
mysqli_select_db($conn,"hrtwists")or die("数据库选择连接失败".mysqli_error());
mysqli_query($conn,"set names utf8");

