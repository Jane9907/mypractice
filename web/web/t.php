
<?php
require_once "header.php";
?>
<!doctype html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="CSS/t.css">
    <link rel="stylesheet" type="text/css" href="CSS2/ticket.css">



</head>
<body>
<div id="main">

    <div id="slide">
        <div id="sidebar-search">


            <div id="sidebar-menu">
                <div id="search">
                    <div class="search-option-switch" id="search-option-switch" >
                        <label>
                            <input type="radio" style="display: inline-block; width: 25px;" class="checkbox" checked="checked" value="2" name="roundType" autocomplete="off" id="roundType-input-2"> 往返
                        </label>
                        <label>
                            <input type="radio" style="display: inline-block; width: 25px;" class="checkbox" value="1" name="roundType" autocomplete="off" id="roundType-input-1"> 单程
                        </label>
                        <label>
                            <input type="radio" style="display: inline-block; width: 25px;" class="checkbox" value="3" name="roundType" autocomplete="off" id="roundType-input-3"> 国际多程(含缺口)
                        </label>

                    </div>
                    <br><br>
                    <!--机票的相关搜索-->

                    <section id="search-box-s" style="max-width: 350px;
   margin-left: auto;
   margin-right: auto;
   position: relative;">



                        <!--机票的相关搜索-->

                        <section class="search-multi-city none" id="search-box-m" >
                            <label >
                                <span>出发地：</span>
                                <select id="staring" name="origin">
                                    <option value="安徽">安徽</option>
                                    <option value="北京">北京</option>
                                    <option value="重庆">重庆</option>
                                    <option value="福建">福建</option>
                                    <option value="甘肃">甘肃</option>
                                    <option value="广东" selected="selected">广东</option>
                                    <option value="广西">广西</option>
                                    <option value="贵州">贵州</option>
                                    <option value="海南">海南</option>
                                    <option value="河北">河北</option>
                                    <option value="黑龙"江>黑龙江</option>
                                    <option value="河南">河南</option>
                                    <option value="香港">香港</option>
                                    <option value="湖北">湖北</option>
                                    <option value="湖南">湖南</option>
                                    <option value="江苏">江苏</option>
                                    <option value="江西">江西</option>
                                    <option value="吉林">吉林</option>
                                    <option value="辽宁">辽宁</option>
                                    <option value="澳门">澳门</option>
                                    <option value="内蒙古">内蒙古</option>
                                    <option value="宁夏">宁夏</option>
                                    <option value="青海">青海</option>
                                    <option value="山东">山东</option>
                                    <option value="上海">上海</option>
                                    <option value="山西">山西</option>
                                    <option value="陕西">陕西</option>
                                    <option value="四川">四川</option>
                                    <option value="台湾">台湾</option>
                                    <option value="天津">天津</option>
                                    <option value="新疆">新疆</option>
                                    <option value="西藏">西藏</option>
                                    <option value="云南">云南</option>
                                    <option value="浙江">浙江</option>
                                </select>
                            </label>

                            <label>
                                <span>目的地：</span>
                                <select id="destination" name="destination">
                                    <option value="安徽">安徽</option>
                                    <option value="北京">北京</option>
                                    <option value="重庆">重庆</option>
                                    <option value="福建">福建</option>
                                    <option value="甘肃">甘肃</option>
                                    <option value="广东" >广东</option>
                                    <option value="广西">广西</option>
                                    <option value="贵州">贵州</option>
                                    <option value="海南">海南</option>
                                    <option value="河北">河北</option>
                                    <option value="黑龙"江>黑龙江</option>
                                    <option value="河南">河南</option>
                                    <option value="香港" selected="selected">香港</option>
                                    <option value="湖北">湖北</option>
                                    <option value="湖南">湖南</option>
                                    <option value="江苏">江苏</option>
                                    <option value="江西">江西</option>
                                    <option value="吉林">吉林</option>
                                    <option value="辽宁">辽宁</option>
                                    <option value="澳门">澳门</option>
                                    <option value="内蒙古">内蒙古</option>
                                    <option value="宁夏">宁夏</option>
                                    <option value="青海">青海</option>
                                    <option value="山东">山东</option>
                                    <option value="上海">上海</option>
                                    <option value="山西">山西</option>
                                    <option value="陕西">陕西</option>
                                    <option value="四川">四川</option>
                                    <option value="台湾">台湾</option>
                                    <option value="天津">天津</option>
                                    <option value="新疆">新疆</option>
                                    <option value="西藏">西藏</option>
                                    <option value="云南">云南</option>
                                    <option value="浙江">浙江</option>
                                </select>
                            </label>
                            <br>
                            <br>
                            <label >
                                <span>乘&nbsp;&nbsp;&nbsp;客：</span>
                                <select name="person">
                                    <option value="1">1人</option>
                                    <option value="2">2人</option>
                                    <option value="3">多人</option>
                                </select>
                            </label>
                            <br><br>

                        </section>
                    </section>
                </div>

            </div>
        </div>
    </div>
    <div id="content">
        <div id="headline">
          <span ID="content-head">

          </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="content-date">


            </span>
        </div>
        <div id="essay">
            <p id="content-essay">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


                <script>
                  var  Starting = document.getElementById("staring");//定位id(获取select)
                  var index = Starting.selectedIndex;
                  var destination =document.getElementById("destination");
                  var indexd=destination.selectedIndex;
              </script>
<ul>

                <?php
                require_once 'conn.php';
              //error_reporting("E_ALL & ~E_NOTICE");
             // if(index=="广东"&& indexd=="河北"){
                  $sql="select * from flight where start_city='广东' and end_city='河北'";
                  $res=mysqli_query($conn,$sql);
                  while($row=mysqli_fetch_assoc($res)){
              ?>

            <li>开始时间：<?php echo $row["start_time"];echo $row["start_date"]?>&nbsp;&nbsp;结束时间:<?php echo $row["end_time"];echo $row["arrive_date"]?></li>
            <li>出发地:<?php echo $row["start_city"]?>&nbsp;&nbsp;目的地:<?php echo $row["end_city"] ?></li>
            <li>价格:<?php echo $row["price"]?>&nbsp;&nbsp; 数量:<?php echo $row["num"]?></li>
            <?php
          //  }
            }
            ?>

            </ul>
            </p>

        </div>


    </div>

</div>


<?php
include_once "bottom.php"
?>
<script src="js/changebig.js"></script>
</body>

</html>