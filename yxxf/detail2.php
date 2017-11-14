
<!DOCTYPE html>
<html lang="en">
<?php
include 'connectSql.php';
include 'php/title.php';
include "php/detailData.php";
?>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>湖北伊雪消防科技有限公司</title>
        <meta name="author" content="伊雪消防科技网络中心 4535292@qq.com"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="全国消防车，救援抢险车，军车，环卫车，冷藏车，电动汽车、天然气车，车辆助力器改装" />
        <meta name="keywords" content="全国消防车，救援抢险车，军车，环卫车，冷藏车，电动汽车、天然气车，车辆助力器改装"/>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/templatemo-style.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/modernizr-2.6.2.min.js"></script>
    </head>
<body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div id="loader-wrapper">
            <div id="loader"></div>
        </div>

        <div class="content-bg"></div>
        <div class="bg-overlay"></div>

        <!-- SITE TOP -->
        <div class="site-top">
            <div class="site-banner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-offset-2 col-md-8 text-center">
                            <h2><a href="index.php"><?php echo $Title['detailT1'];?></a> <br/><br/><span class="blue"><?php echo $Title['detailT2'];?></span><span class="green"> >> <?php echo $keywordsC;?></span></h2>
                            <p style="text-align:right!important;"><?php echo $Title['detailT3'];?></p>
                        </div>
                    </div>
                </div>
            </div> <!-- .site-banner -->
        </div> <!-- .site-top -->

        <!-- MAIN POSTS -->
        <div class="main-posts">
            <div class="container">
                <div class="row">
                    <div class="blog-masonry masonry-true">

                    <!-- ajax 动态加载 -->
                        <?php
                        while($data1 = mysqli_fetch_assoc($query1)){
                            echo
                                '<div class="post-masonry col-md-4 col-sm-6">
                           <div class="post-thumb">
                                <img src="picture/'.$data1["url"].'" alt="湖北伊雪">
                                <div class="title-over">
                                    <h4><a href="#">'.$data1["mainTitle"].'</a></h4>
                                    </div>
                                <div class="post-hover text-center">
                                   <div class="inside">
                                        <h4><a>'.$data1["mainTitle"].'</a></h4>
                                        <p>'.$data1["title2"].'</p>
                                        </div>
                                    </div>
                                </div>
                            </div>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- FOOTER -->
        <footer class="site-footer">
            <div class="container">
                <div class="row">

                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p class="copyright-text">Copyright &copy; 2017 湖北伊雪</p>
                        <p style="font-size: 14px">湖北伊雪网络中心 · Gogo 4535292@qq.com</p>
                    </div>
                </div>
            </div>
        </footer>
        <script src="js/plugins.min.js"></script>
        <script src="js/main.min.js"></script>

        <!-- Preloader -->
        <script type="text/javascript">
            //<![CDATA[
            $(window).load(function() { // makes sure the whole site is loaded
                $('#loader').fadeOut(); // will first fade out the loading animation
                    $('#loader-wrapper').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
                $('body').delay(350).css({'overflow-y':'visible'});
            })
            //]]>
        </script>
	<!-- templatemo 434 masonry -->
    </body>
<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1267181567'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s13.cnzz.com/z_stat.php%3Fid%3D1267181567%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script>
</html>