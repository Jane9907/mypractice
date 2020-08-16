
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="CSS/day.css">
    <link rel="stylesheet" type="text/css" href="CSS2/ticket.css">
    <link rel="stylesheet" type="text/css" href="CSS2/searchbox.css">
    <script type="text/javascript" src="js/account_helper.js"></script>
    <script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>
</head>
<?php
require_once "header.php"
?>
<body  >
<div id="search">
<div class="type" id="search-option-switch" style="max-width: 1280px;
   margin-left: auto;
   margin-right: auto;
   position: relative;  font-size: 20px;">
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

<section id="search-box-s" style="max-width: 1280px;
   margin-left: auto;
   margin-right: auto;
   position: relative;">



<!--机票的相关搜索-->

<section class="search-multi-city none" id="search-box-m" style="max-width: 1280px;
   margin-left: auto;
   margin-right: auto;
   position: relative;">
    <label class="la" style="font-size: 25px; width: 300px;">
        <span>出发地：</span>
        <select name="origin">
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

    <label class="la"  style="font-size: 25px; width: 300px;">
        <span>目的地：</span>
        <select name="destination">
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
    <label class="la"  style="font-size: 25px; width: 300px;">
    <span>乘&nbsp;&nbsp;&nbsp;客：</span>
    <select name="person">
        <option value="1">1人</option>
        <option value="2">2人</option>
        <option value="3">多人</option>
    </select>
        </label>
    <br><br>
    <button style="font-size: 25px; width: 150px; color: red;" value="搜索">搜索</button>
</section>
</section>
</div>
<div class="txt" style="max-width: 1280px;
    margin-left: auto;
    margin-right: auto;
    position: relative;">
    <div class="seo_footer">
        <h3>即刻出发旅行网提供机票预订，飞机票查询时刻表。票价查询以及特价机票，便宜机票，打折机票查询预订服务</h3>
        <p> <strong>热门航线</strong> </p>
        <!-- SEO:SEO区域块 -->
        <p class="p_link3"><strong>机票工具箱</strong> <a href="#" title="打折机票">打折机票</a> <a href="#" title="航班查询时刻表">航班时刻表查询</a> <a href="#" title="航班实时起降查询">航班动态查询</a> <a href="#" title="热门机场">机场查询</a> <a href="#" title="机票排行榜">机票排行榜</a> <a href="#" title="机票地图">机票地图</a> <a href="#" title="机票手机版">机票手机版</a> <a href="#" title="天海游轮">天海游轮</a> <a href="#" title="值机">值机</a></p>
        <p class="p_link3"> <strong>打折机票</strong> <a href="#">更多特价机票</a> </p>
        <p class="p_link3"> <strong>航空机票</strong>  </p>
        <p class="latest" id="pDynamicShowList"> <strong>最新预订</strong> </p>
    </div>
</div>


<div id="day">
    <section class="daytour">
    </section>

</div>
<?php
include_once "bottom.php"
    ?>



<script src="bootstrap/js/jquery-3.3.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
