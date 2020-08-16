
<?php
require_once "header.php";
session_start();
?>
<!doctype html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="CSS/Top2.css">


</head>
<body>
<div id="main">

    <div id="slide">
        <div id="sidebar-search">
            <form name="form1" method="post" action="">
                <input name="keyword" type="text" id="keyword" size="40" placeholder="查询关键字">

                <input id="submit" type="submit" name="submit" value="搜索" onClick="return check(form)">
            </form>

            <div id="sidebar-menu">

                <ul>
                   <?php
                   require_once "conn.php";
                if(isset($_GET["sex"])){
                   $_SESSION["sex"]=$_GET["sex"];
                   $sex=$_SESSION["sex"];
                   $res = mysqli_query($conn, "select * from Top where sex='$sex' ");
                   while ($row = $res->fetch_object()){
                   ?>

                       <li><h6><a href="Top.php?id=<?php echo $row->id ?>"><?php echo $row->title ?></a></h6></li>


                       <?php
                            };
                }else {
                    $sex = $_SESSION["sex"];
                    $res = mysqli_query($conn, "select * from Top where sex='$sex' ");
                    while ($row = $res->fetch_object()) {
                        ?>
                        <li><h6><a href="Top.php?id=<?php echo $row->id ?>"><?php echo $row->title ?></a></h6></li>
                        <?php
                    };
                }
                    ?>



                </ul>
            </div>
        </div>
    </div>
    <div id="content">
        <div id="headline">
          <span ID="content-head">
              <?php
              //error_reporting("E_ALL & ~E_NOTICE");
              if(!isset($_GET['id'])){
                  $sql="select title from Top where id=1";
                  $res=mysqli_query($conn,$sql);
                  $row=$res->fetch_object();
                  echo $row->title;
              }else{
                  require_once 'conn.php';
                  $id=$_GET['id'];
                  $sql="select title from Top where id=$id ";
                  $res=mysqli_query($conn,$sql);
                  $row=$res->fetch_object();
                  echo $row->title;
              }
              ?>


          </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="content-date">
                发布时间:
                <?php
               //error_reporting("E_ALL & ~E_NOTICE");

               if(!isset($_GET['id'])){
                   $sql="select publish,createtime from Top where id=1";
                   $res=mysqli_query($conn,$sql);
                   $row=mysqli_fetch_assoc($res);
                   echo $row["publish"];

               }else{
                   require_once 'conn.php';
                   $id=$_GET['id'];
                   $sql="select publish,createtime from Top where id=$id ";
                   $res=mysqli_query($conn,$sql);
                   $row=mysqli_fetch_assoc($res);
                   //$row=$res->fetch_object();
                   echo $row["publish"];
               }
               ?>
                更新日期：
                <?php
                if(!isset($_GET['id'])){
                    $sql="select publish,createtime from Top where id=1";
                    $res=mysqli_query($conn,$sql);
                    $row=mysqli_fetch_assoc($res);
                    echo $row["createtime"];

                }else{
                    require_once 'conn.php';
                    $id=$_GET['id'];
                    $sql="select publish,createtime from Top where id=$id ";
                    $res=mysqli_query($conn,$sql);
                    $row=mysqli_fetch_assoc($res);
                    //$row=$res->fetch_object();
                    echo $row["createtime"];
                }
                ?>

            </span>
        </div>
        <div id="essay">
            <p id="content-essay">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <?php
                require_once 'conn.php';
               error_reporting("E_ALL & ~E_NOTICE");
                if(!isset($_GET['id'])) {
                    $sql = "select content from Top where id=1";
                    $res = mysqli_query($conn, $sql);
                    $row =  $res->fetch_object();
                    echo $row->content;

                }else {
                    $id = $_GET['id'];
                    $sql = "select content from Top where id=$id ";
                    $res = mysqli_query($conn, $sql);
                    $row = $res->fetch_object();
                    //$row=$res->fetch_object();
                    echo $row->content;
                }
                ?>
            </p>

            <!--
            <p id="content-essay">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;秋意漸濃，街道如同換裝一般，披上大地系的彩衣，其中，四色台灣欒樹也開始由綠、黃轉紅，熱熱鬧鬧展出變裝秀。
                喜愛漫步賞受詩意秋天的您，歡迎來到士林區忠誠公園側及忠誠路沿線，參加這場大自然導演的身心靈盛宴。
                秋季10月起將是台灣欒樹變裝秀的開始，欒樹是台灣四季常見的行道樹，也是台灣本土的原生特有樹種，在四季如春的台灣蓬勃成長，從南到北都有分布，放眼望去，校園、公園、植物園，馬路、公路、高速公路，很容易就可看見台灣欒樹的身影。
                工務局公園處黃立遠處長表示，台灣欒樹樹性強，生長快速，適應性良好，是臺灣隨處可見的樹種，秋天黃色小花佈滿樹冠，週期不過短短二週，隨即結成覆有嫩紅苞片的蒴果，入冬時嫩紅的蒴果轉為暗紅色，
                暗紅色的蒴果膨脹成氣囊狀，時序進入冬，蒴果將乾枯轉為褐色，樹葉也轉黃而離枝，四色欒樹像舞台模特兒忙著換裝，呈現出豐富的色彩。
                另外，臺灣欒樹果實成熟時，樹上總是出現許多紅色的小蟲，鮮紅的一群小小若蟲（幼蟲），名叫「紅姬緣椿象」，
                他喜歡吸食台灣欒樹的種子汁液，有時也會在樹葉堆裡覓食，紅姬緣椿象與台灣欒樹是互利共生的關係，無攻擊性，雖有臭味，但不會使人受傷，若是民眾見到紅姬緣椿象別驚慌。
                公園處陽明所林晁嘉主任表示，來到忠誠路與忠誠公園賞花之際，公園內的「減壓公廁」更是您不容錯過的地點，這座減壓公廁榮獲北市環保局評鑑連續「優等」公廁，績優公廁除代表對公廁管理單位的肯定外，更表達了對默默付出的清潔人員無比的尊敬與感恩。減壓公廁彩繪玻璃採光罩，特別邀請知名畫家-吳炫三老師與池上鳳珠老師聯手創作，走入裡面就感受到透過陽光折射的炫麗光影，彷彿置身大自然中，是一座兼顧通用、無障礙、親子需求、性別友善公廁，在您放鬆心情遊逛公園時，提供「方便」如廁環境。
            </p>
         -->
            <div id="relate-photo">
                <?php
                //error_reporting("E_ALL & ~E_NOTICE");
                require_once 'conn.php';
                if(!isset($_GET['id'])) {
                    $sql = "select image,image1,image2,image3,image4 from Top where id=1";
                    $res = mysqli_query($conn, $sql);
                    $row=mysqli_fetch_row($res);


                }else {
                    $id = $_GET['id'];
                    $sql = "select image,image1,image2,image3,image4 from Top where id=$id ";
                    $res = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_row($res);
                    //$row=$res->fetch_object();
                }
                ?>
                <a href="#" class="relate"  onMouseover="borderit(this,'#7d6d6d')" onMouseout="borderit(this,'#eae0e0')"><img src="images/<?php echo $row[0] ?>" ></a>
                <a href="#" class="relate"  onMouseover="borderit(this,'#7d6d6d')" onMouseout="borderit(this,'#eae0e0')"><img src="images/<?php echo $row[1] ?>" ></a>
                <a href="#" class="relate"  onMouseover="borderit(this,'#7d6d6d')" onMouseout="borderit(this,'#eae0e0')"><img src="images/<?php echo $row[2] ?>" ></a>
                <a href="#" class="relate"  onMouseover="borderit(this,'#7d6d6d')" onMouseout="borderit(this,'#eae0e0')"><img src="images/<?php echo $row[3] ?>" ></a>
                <a href="#" class="relate"  onMouseover="borderit(this,'#7d6d6d')" onMouseout="borderit(this,'#eae0e0')"><img src="images/<?php echo $row[4] ?>" ></a>

            </div>

        </div>


    </div>

</div>


<?php
include_once "bottom.php"
?>
<script src="js/changebig.js"></script>
</body>

</html>