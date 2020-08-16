<?php
session_start();

?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>index</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="CSS/header.css">
    <link rel="stylesheet" type="text/css" href="CSS/lunbo.css">
    <link rel="stylesheet" type="text/css" href="CSS/top-sopt.css">
    <link rel="stylesheet" type="text/css" href="CSS/copyright-info-blk.css">
    <link rel="stylesheet" type="text/css" href="CSS/NEWS.css">
    <link rel="stylesheet" type="text/css" href="CSS/slogan.css">
    <link rel="stylesheet" type="text/css" href="CSS/day.css">
</head>
<body>
<header>
    <div class="head-top"></div>
    <nav class="navbar navbar-default" id="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="container">
                <div class="navbar-header">
                    <div class="logo"><a href="index2.php" class="navbar-brand"><img src="images/logo.png"></a></div>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"> <span class="sr-only">汉堡按钮</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav" id="nav navbar-nav" data-unit-name="home">
                        <li class="item1" style="animation-delay:180ms;"> <a class="menu-title-more" href="Food.php" title="活动资讯"> <img class="thumb" alt="" src="images/zixun.png"> <strong class="title">活动资讯</strong></a> </li>
                        <li class="item2" style="animation-delay:240ms;"> <a class="menu-title-more" href="New.php" title="当地美食"> <img class="thumb" alt="" src="images/food.png"> <strong class="title">当地美食</strong> </a> </li>
                        <li class="item3" style="animation-delay:300ms;"> <a class="menu-title-more" href="" title="旅馆住宿"> <img class="thumb" alt="" src="images/hotel.png"> <strong class="title">旅馆住宿</strong> </a> </li>
                        <li class="item4" style="animation-delay:360ms;"> <a class="menu-title-more" href="TOP.php" title="旅游景点"> <img class="thumb" alt="" src="images/site.png"> <strong class="title">旅游景点</strong> </a> </li>
                        <li class="item5" style="animation-delay:420ms;" > <a class="menu-title-more" href="t.php" title="平机通票"> <img class="thumb" alt="" src="images/tickle.png"> <strong class="title">平价机票</strong> </a> </li>
                        <li class="item5" style="animation-delay:420ms;" > <a class="menu-title-more" href="gonglue.php" title="旅游攻略"> <img class="thumb" alt="" src="images/gonglue.jpg"> <strong class="title">旅游攻略</strong> </a> </li>
                    </ul>
                </div>
                <div class="enter">
                    <?php
                        if(isset($_SESSION["username"])){
                             echo "<a href='center/index.php'>".$_SESSION["username"]."</a>";
                        }else{
                            echo " <a href='denglu.php' class='D'  title='登录'>登录</a>";
                        }
                    ?>

                    <a  href="#"  id="Z" class="btn-member" title="收藏">收藏</a>
                </div>
            </div>
        </div>
        </div>
    </nav>
</header>
<div id="activity-box">
    <div id="slide" class="carousel slide">
        <!--轮播指标-->
        <ul class="carousel-indicators">
            <li  data-target="#slide" data-slide-to="0" class="active"></li>
            <li data-target="#slide" data-slide-to="1"></li>
            <li data-target="#slide" data-slide-to="2"></li>
        </ul>
        <!--轮播项目-->
        <ul class="carousel-inner">
            <li class="item active"><img src="images/p4.jpg"></li>
            <li class="item"><img src="images/p3.jpg"></li>
            <li class="item"> <img src="images/p5.jpg"></li>
        </ul>
        <!--轮播导航-->
        <a class="left carousel-control" href="#slide" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#slide" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span></a> </div>
</div>
<div id="top-spot" class="top-spot"> <a href="#" class="logo2"><img src="images/logo.png"></a>
    <p class="remark">旅游胜地</p>
    <p class="remark">女生请点击左图  男生请点击右图</p>
    <div class="wrapper">
        <div class="blk">
            <form method="post" action="">
            <div id="gril"><a href="TOP.php?sex=<?php echo "女"  ?>" class="gril-section" title="女生请点击这儿"><img src="images/p6.jpg" class="grilimg"  onMouseover="borderit(this,'#7d6d6d')" onMouseout="borderit(this,'white')"></span></a></div>
            <div id="boy"><a href="TOP.php?sex=<?php echo "男"  ?>" class="boy-section" title="男生请点击这儿"><img src="images/p7.jpg" class="boyimg"  onMouseover="borderit(this,'#7d6d6d')" onMouseout="borderit(this,'white')"></span></a></div>
            </form>
        </div>
    </div>

    <!--留言板-->
    <div id="Message-Board" class="Message-Board">
        <a href="#" onclick="ShowDiv('MyDiv','fade')"  class="link-show" title="旅者留言"  onMouseover="borderit(this,'#7d6d6d')" onMouseout="borderit(this,'#eae0e0')" ><span class="thumb-frame"  ></span></a>
        <a href="#"  onclick="ShowDiv('MyDiv','fade')" class="link-show" title="旅者留言"  onMouseover="borderit(this,'#7d6d6d')" onMouseout="borderit(this,'#eae0e0')"><span class="thumb-frame" ></span></a>
        <a href="#"  onclick="ShowDiv('MyDiv','fade')" class="link-show" title="旅者留言"  onMouseover="borderit(this,'#7d6d6d')" onMouseout="borderit(this,'#eae0e0')"><span class="thumb-frame" ></span></a>
        <a href="#"  onclick="ShowDiv('MyDiv','fade')" class="link-show" title="旅者留言"   onMouseover="borderit(this,'#7d6d6d')" onMouseout="borderit(this,'#eae0e0')"><span class="thumb-frame"></span></a>
        <a href="#"  onclick="ShowDiv('MyDiv','fade')" class="link-show" title="旅者留言" onMouseover="borderit(this,'#7d6d6d')" onMouseout="borderit(this,'#eae0e0')"><span class="thumb-frame" ></span></a>
        <a href="New.php"  onclick="ShowDiv('MyDiv','fade')" class="btn-more" title="更多" target="_blank">更多</a>
    </div>
</div>
<!--蒙版-->
<div id="fade" class="black" style="display: none;position: absolute;top: 0%;left: 0%;width: 100%;height: 100%;background-color: black;z-index: 1001;-moz-opacity: 0.8;opacity: .80;filter: alpha(opacity=80);">
</div>
<div id="MyDiv" class="white">
    <div style="text-align: right; cursor: default; height: 40px;" id="move">
        <span style="font-size: 16px;" onclick="CloseDiv('MyDiv','fade')">关闭</span>

        <div class="redio" style="float:left;margin:10px">
            <video src="" oncanplaythrough="progress()"  width="600" height="400"  id="video" controls    > <!-- poster="实验11 HTML5多媒体/images/5.jpg"-->
                您的浏览器暂不支持video标签。播放视频
            </video>
            <span id="playProgress"></span>
            <div id="progress">
            </div>
        </div>


        <div id="liuyan">
            <?php
            include_once "conn.php";
            $sql="select * from video";
            $res=mysqli_query($conn,$sql);
            $row=mysqli_fetch_assoc($res);
                echo $row["mark"];
            ?>
        </div>
    </div>
</div>

<div id="slogan">
</div>

<div id="news" class="news">
    <p class="Newsp">最新消息NEWS</p>
    <div id="Box">
        <ul id="con1">
            <?php
            error_reporting("E_ALL & ~E_NOTICE");
            require_once 'conn.php';
            $res=mysqli_query($conn,"select * from News");
            while($row=mysqli_fetch_assoc($res)){
            ?>
            <li>
                <div id="card">
                       <a id="Newsa" href="New.php?id=<?php echo $row["id"] ?>" title="<?php  echo $row["title"] ?>">
                           <span id="imgs"><img src="images/<?php  echo $row["image"] ?>"></span>
                           <div id="fonts">
                               <span id="date" ><?php  echo $row["createtime"]  ?></span>
                               <h5><?php  echo $row["title"] ?> </h5>
             </div>
            </a>
            </div>
                </li>

                <?php
            };

            ?>
                <!--
                <li>
                <div id="card">
                    <a id="Newsa" href="#" title="最新消息">
                        <span id="imgs"><img src="images/1.jpg"></span>
                        <div id="fonts">
                            <span id="date" >2018-11-08</span>
                            <h3>【柳永《凤栖梧》衣带渐宽终不悔，为伊消得人憔悴】  </h3>
                        </div>
                    </a>
                </div>
            </li>

            <li>
                <div id="card">
                    <a id="Newsa"  href="#" title="最新消息">
                        <span id="imgs"><img src="images/2.jpg"></span>
                        <div id="fonts">
                            <span id="date" >2018-11-08</span>
                            <h3>【柳永《凤栖梧》衣带渐宽终不悔，为伊消得人憔悴】  </h3>
                        </div>
                    </a>
                </div>
            </li>
            <li>
                <div id="card">
                    <a id="Newsa"  href="#" title="最新消息">
                        <span id="imgs"><img src="images/3.jpg"></span>
                        <div id="fonts">
                            <span id="date" >2018-11-08</span>
                            <h3>【柳永《凤栖梧》衣带渐宽终不悔，为伊消得人憔悴】  </h3>
                        </div>
                    </a>
                </div>
            </li>
            <li>
                <div id="card">
                    <a id="Newsa"  href="#" title="最新消息">
                        <span id="imgs"><img src="images/4.jpg"></span>
                        <div id="fonts">
                            <span id="date" >2018-11-08</span>
                            <h3>【柳永《凤栖梧》衣带渐宽终不悔，为伊消得人憔悴】  </h3>
                        </div>
                    </a>
                </div>
            </li>
            <li>
                <div id="card">
                    <a id="Newsa"  href="#" title="最新消息">
                        <span id="imgs"><img src="images/1.jpg"></span>
                        <div id="fonts">
                            <span id="date" >2018-11-08</span>
                            <h3>【柳永《凤栖梧》衣带渐宽终不悔，为伊消得人憔悴】  </h3>
                        </div>
                    </a>
                </div>
            </li>
            <li>
                <div id="card">
                    <a id="Newsa"  href="#" title="最新消息">
                        <span id="imgs"><img src="images/2.jpg"></span>
                        <div id="fonts">
                            <span id="date" >2018-11-08</span>
                            <h3>【柳永《凤栖梧》衣带渐宽终不悔，为伊消得人憔悴】  </h3>
                        </div>
                    </a>
                </div>
            </li>
            <li>
                <div id="card">
                    <a id="Newsa"  href="#" title="最新消息">
                        <span id="imgs"><img src="images/3.jpg"></span>
                        <div id="fonts">
                            <span id="date" >2018-11-08</span>
                            <h3>【柳永《凤栖梧》衣带渐宽终不悔，为伊消得人憔悴】  </h3>
                        </div>
                    </a>
                </div>
            </li>
            <li>
                <div id="card">
                    <a id="Newsa"  href="#" title="最新消息">
                        <span id="imgs"><img src="images/4.jpg"></span>
                        <div id="fonts">
                            <span id="date" >2018-11-08</span>
                            <h3>【柳永《凤栖梧》衣带渐宽终不悔，为伊消得人憔悴】  </h3>
                        </div>
                    </a>
                </div>
            </li>
            <li>
                <div id="card">
                    <a id="Newsa"  href="#" title="最新消息">
                        <span id="imgs"><img src="images/1.jpg"></span>
                        <div id="fonts">
                            <span id="date" >2018-11-08</span>
                            <h3>【柳永《凤栖梧》衣带渐宽终不悔，为伊消得人憔悴】  </h3>
                        </div>
                    </a>
                </div>
            </li>
 -->
        </ul>
        <ul id="con2"></ul>
    </div>
    <a href="New.php" class="btn-more" title="更多讯息" target="_blank">更多讯息</a></div>
</div>
<div id="day">
    <section class="daytour">
    </section>

</div>
<div class="copyright-info-blk" id="copyright-info-blk">
    <p class="info">Copyright © 2018 Department of Information and Tourism,All rights HrTwists reserved</p>
</div>
<script src="bootstrap/js/jquery-3.3.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/changebig.js"></script>
<script src="js/light-black.js"></script>
<script src="js/vedio.js"></script>
</body>
</html>
