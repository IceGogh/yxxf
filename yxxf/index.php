<!DOCTYPE html>
<html lang="en">
<?php
include 'connectSql.php';
include 'php/indexData.php';
include 'php/title.php';
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

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
	<!-- Google Fonts -->
	<link href='css/6ee71f2522e849ad9d9c36b6cdfee8cc.css' rel='stylesheet' type='text/css'>
	<!-- Animate -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon -->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/style.css">

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	
	<!-- Main JS -->
	<script src="js/main.js"></script>

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
<body>

	<!-- Loader -->
	<div class="fh5co-loader"></div>

<!--	<div id="fh5co-logo">-->
<!--		<a href="index.html" class="transition"><i class="icon-camera"></i><em><span class="icon-home"></span></em></a>	-->
<!--	</div>-->

	<div id="fh5co-main" role="main">
		

		<div class="container">
			
			<div class="fh5co-grid">
            	
				
				<div class="fh5co-col-1">
					<div class="fh5co-intro padding-right">
						<h1>
							<?php echo $Title['title0'];?>
							<em><?php echo $Title['title1'];?></em><br/>
							<span style="font-size:18px;"><?php echo $Title['title2'];?></span>
							<!-- <a href="about.html" class="transition"><em>About Me</em></a>-->

						</h1>
						<i style=" font-size: 24px; line-height:24px; font-weight: normal"><?php echo $Title['title3'];?></i>
						<!--<ul class="fh5co-social">-->
							<!--<li><a href="#"><i class="icon-twitter-with-circle"></i></a></li>-->
							<!--<li><a href="#"><i class="icon-facebook-with-circle"></i></a></li>-->
							<!--<li><a href="#"><i class="icon-instagram-with-circle"></i></a></li>-->
							<!--<li><a href="#"><i class="icon-dribbble-with-circle"></i></a></li>-->
						<!--</ul>-->
					</div>
					<div class="fh5co-item">
						<a href="detail2.php?huanwei" class="transition animate-box">
							<img class="imgSrc" src="picture/<?php echo $arr[1]['url'];?>" alt="湖北伊雪公司">
							<div class="fh5co-item-text-wrap">
								<div class="fh5co-item-text">
									<h2><?php echo $arr[1]['title'];?></h2>
								</div>
							</div>
						</a>
					</div>
					<div class="fh5co-item">
						<a href="detail2.php?qiangxian" class="transition animate-box">
							<img src="picture/<?php echo $arr[3]['url'];?>" alt="湖北伊雪公司">
							<div class="fh5co-item-text-wrap">
								<div class="fh5co-item-text">
									<h2><?php echo $arr[3]['title'];?></h2>
								</div>
							</div>
						</a>
					</div>
					<div class="fh5co-item">
						<a href="detail2.php?lengcang" class="transition animate-box">
							<img src="picture/<?php echo $arr[5]['url'];?>" alt="湖北伊雪公司">
							<div class="fh5co-item-text-wrap">
								<div class="fh5co-item-text">
									<h2><?php echo $arr[5]['title'];?></h2>
								</div>
							</div>
						</a>
					</div>
					<div class="fh5co-item">
						<a href="detail2.php?junjing" class="transition animate-box">
							<img src="picture/<?php echo $arr[7]['url'];?>" alt="湖北伊雪公司">
							<div class="fh5co-item-text-wrap">
								<div class="fh5co-item-text">
									<h2><?php echo $arr[7]['title'];?></h2>
								</div>
							</div>
						</a>
					</div>
					<div class="fh5co-item">
						<a href="detail2.php?laji" class="transition animate-box">
							<img src="picture/<?php echo $arr[9]['url'];?>" alt="湖北伊雪公司">
							<div class="fh5co-item-text-wrap">
								<div class="fh5co-item-text">
									<h2><?php echo $arr[9]['title'];?></h2>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="fh5co-col-2">
					<div class="fh5co-item">
						<a href="detail2.php?xiaofang" class="transition animate-box">
							<img src="picture/<?php echo $arr[0]['url'];?>" alt="湖北伊雪公司">
							<div class="fh5co-item-text-wrap">
								<div class="fh5co-item-text">
									<h2><?php echo $arr[0]['title'];?></h2>
								</div>
							</div>
						</a>
					</div>
					<div class="fh5co-item">
						<a href="detail2.php?other" class="transition animate-box">
							<img src="picture/<?php echo $arr[2]['url'];?>" alt="湖北伊雪公司">
							<div class="fh5co-item-text-wrap">
								<div class="fh5co-item-text">
									<h2><?php echo $arr[2]['title'];?></h2>
								</div>
							</div>
						</a>
						
					</div>
					<div class="fh5co-item">
						<a href="detail2.php?guanche" class="transition animate-box">
							<img src="picture/<?php echo $arr[4]['url'];?>" alt="湖北伊雪公司">
							<div class="fh5co-item-text-wrap">
								<div class="fh5co-item-text">
									<h2><?php echo $arr[4]['title'];?></h2>
								</div>
							</div>
						</a>
					</div>
					<div class="fh5co-item">
						<a href="detail2.php?peijian" class="transition animate-box">
							<img src="picture/<?php echo $arr[6]['title'];?>" alt="湖北伊雪公司">
							<div class="fh5co-item-text-wrap">
								<div class="fh5co-item-text">
									<h2><?php echo $arr[6]['url'];?></h2>
								</div>
							</div>
						</a>
					</div>
					<div class="fh5co-item">
						<a href="detail2.php?guoshu" class="transition animate-box">
							<img src="picture/<?php echo $arr[8]['url'];?>" alt="湖北伊雪公司">
							<div class="fh5co-item-text-wrap">
								<div class="fh5co-item-text">
									<h2><?php echo $arr[8]['title'];?></h2>
								</div>
							</div>
						</a>
					</div>
					<div class="fh5co-item">
						<a href="detail2.php?jiguan" class="transition animate-box">
							<img src="picture/<?php echo $arr[10]['url'];?>" alt="湖北伊雪公司">
							<div class="fh5co-item-text-wrap">
								<div class="fh5co-item-text">
									<h2><?php echo $arr[10]['title'];?></h2>
								</div>
							</div>
						</a>
					</div>

					<div id="fh5co-footer" class="padding-left">
						<p><small>&copy; 2017 湖北伊雪. All Rights Reserved. <br> Designed by <a>湖北伊雪网络中心 Gogh 4535292@qq.com</a></small></p>
						<p></p>
						<!--<ul class="fh5co-social">-->
							<!--<li><a href="#"><i class="icon-twitter-with-circle"></i></a></li>-->
							<!--<li><a href="#"><i class="icon-facebook-with-circle"></i></a></li>-->
							<!--<li><a href="#"><i class="icon-instagram-with-circle"></i></a></li>-->
							<!--<li><a href="#"><i class="icon-dribbble-with-circle"></i></a></li>-->
						<!--</ul>-->
					</div>
				</div>
			</div>
		</div>

	</div>
	
	</body>
<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1267181567'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s13.cnzz.com/z_stat.php%3Fid%3D1267181567%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script>
</html>

