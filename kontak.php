<?php 
session_start();
//koneksi database
$koneksi = new mysqli("localhost","root","","penjualan");
 ?>

<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Halaman Pelanggan</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />
	<link href="https://fonts.googleapis.com/css?family=Oxygen:300,400" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet">
	<!--link difolder css -->
	<link rel="stylesheet" type="text/css" href="admin/assets/css/bootstrap.css">
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	</head>
	<body>
	<div class="fh5co-loader"></div>
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container-wrap">
			<div class="top-menu">
				<div class="row">
					<div class="col-xs-2">
						<div id="fh5co-logo"><a href="index.html">SneekerHead</a></div>
					</div>
					<div class="col-xs-10 text-right menu-1">
						<ul>
							<li><a href="index.php">Beranda</a></li>
							<li><a href="produk.php">Produk</a></li>
							<li class="active"><a href="kontak.php">Kontak</a></li>
							<li><a href="login.php">Login Admin</a></li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</nav>
	<div class="container-wrap">
				<div id="fh5co-work" class="fh5co-light-grey">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Kontak Kami</h2>
					<p class="fh5co-footer-links">
						Jalan Padjajaran<br>Kota Bogor, Jawa Barat,<br> Indonesia <br>
						<a href="tel://082313126888">082313126888</a><br>
						<a href="mailto:sneekerhead.com">sneekerhead@gmail.com</a>
					</p>
				</div>
			</div>
	</div><!-- END container-wrap -->

	<div class="container-wrap">
		<footer id="fh5co-footer" role="contentinfo">
			<div class="row">
				<div class="col-md-4 fh5co-widget">
					<h4>Tentang Kami</h4>
					<p>Seiring dengan semakin berkembangnya teknologi, maka kami mencoba berinovasi dalam berbisnis. Salah satu bentuk inovasinya adalah dengan menyediakan berbagai layanan toko kami melalui media internet, dan toko online ini adalah salah satu bentuk pelayanan kami kepada Anda. Keberadaan dari toko online ini diharapkan dapat mempermudah Anda untuk mendapatkan berbagai produk berkualitas tinggi namun dengan harga yang terjangkau. Mudah-mudahan dengannya toko online kami bisa memberi banyak manfaat bagi Anda.</p>
				</div>
				<div class="col-md-4 col-md-push-1">
					<h4>Link</h4>
					<ul class="fh5co-footer-links">
						<li><a href="index.php">Beranda</a></li>
						<li><a href="produk.php">Produk</a></li>
						<li><a href="kontak.php">Kontak</a></li>
					</ul>
				</div>
				<div class="col-md-4">
					<h4>Informasi Kontak</h4>
					<ul class="fh5co-footer-links">
						<li>Jalan Padjajaran<br>Kota Bogor, Jawa Barat,<br> Indonesia</li>
						<li><a href="tel://082313126888">082313126888</a></li>
						<li><a href="mailto:sneekerhead.com">sneekerhead@gmail.com</a></li>
					</ul>
				</div>
			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2020. All Rights Reserved.</small>
					</p>
				</div>
			</div>
		</footer>
	</div><!-- END container-wrap -->
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>