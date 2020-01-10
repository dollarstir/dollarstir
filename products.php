<!-- developer: Frederick Ennin (Dollarstir)
 Position: CEO and Founder of Dollarsoft
-->

<?php

session_start();

$_SESSION['pid']=3;
include 'core.php';?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">
    <head>
        <!-- Meta tag -->
		<meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="description" content="">
		<meta name='copyright' content='codeglim'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">	
		
		<!-- Title Tag -->
        <title>Dollarstir - Products</title>
		
		<!-- Favicon -->
<!-- Favicon -->
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
		<link rel="icon" href="images/favicon.ico" type="image/x-icon">		
        <!-- Google Font -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet"> 
		
		<!-- Animate CSS -->
        <link rel="stylesheet" href="css/animate.min.css">
		
		<!-- Font Awesome CSS -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		
		<!-- Fancy Box CSS -->
        <link rel="stylesheet" href="css/jquery.fancybox.min.css">
		
		<!-- Slick Nav CSS -->
        <link rel="stylesheet" href="css/slicknav.min.css">
		
		<!-- Animate Text -->
        <link rel="stylesheet" href="css/animate-text.css">
		
		<!-- Owl Carousel CSS -->
		<link rel="stylesheet" href="css/owl.theme.default.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
		
		<!-- Bootstrap Css -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		
		<!-- Sufia StyleShet -->
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/reset.css">	
        <link rel="stylesheet" href="css/responsive.css">	
		
		<!-- Maheraj Template Color -->
		<link rel="stylesheet" href="css/color/color1.css">
		<!--<link rel="stylesheet" href="css/color/color2.css">-->
		<!--<link rel="stylesheet" href="css/color/color3.css">-->
		<!--<link rel="stylesheet" href="css/color/color4.css">-->
		<!--<link rel="stylesheet" href="css/color/color5.css">-->
		<!--<link rel="stylesheet" href="css/color/color6.css">-->
		<!--<link rel="stylesheet" href="css/color/color7.css">-->
		<!--<link rel="stylesheet" href="css/color/color8.css">-->
		<!--<link rel="stylesheet" href="css/color/color9.css">-->
		<!--<link rel="stylesheet" href="css/color/color10.css">-->

		<!--[if lt IE 9]>
           <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<link rel="stylesheet" href="blog-grid.html#" id="colors">	
    </head>
    <body>
	
		<!-- Preloader -->
		<div class="loader">
			<div class="loader-inner">
				<div class="k-line k-line11-1"></div>
				<div class="k-line k-line11-2"></div>
				<div class="k-line k-line11-3"></div>
				<div class="k-line k-line11-4"></div>
				<div class="k-line k-line11-5"></div>
			</div>
		</div>
		<!-- End Preloader -->
	
		<!-- Mp Color -->
		<!-- <div class="mp-color">
			<div class="icon inOut"><i class="fa fa-cog fa-spin"></i></div>
			<h4>Choose Color</h4>
			<span class="color1"></span>
			<span class="color2"></span>
			<span class="color3"></span>
			<span class="color4"></span>
			<span class="color5"></span>
			<span class="color6"></span>
			<span class="color7"></span>
			<span class="color8"></span>
			<span class="color9"></span>
			<span class="color10"></span>
		</div> -->
		<!--/ End Mp Color -->
	
		<!-- Start Header -->
		<?php  hdbar() ;?>
		<!--/ End Header -->
			
		<!-- Start Breadcrumbs -->
		<section id="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12" style="margin-top:20px;">
						<center><h2>All Products</h2></center>
						<!-- <ul class="bread-list">
							<li><a href="index.html">Home</a></li>
							<li class="active"><a href="blog-grid.html">blog grid</a></li>
						</ul> -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End Breadcrumbs -->
		
		<!-- Start Blog -->
		<section id="blog" class="section archive">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="row">
                            <?php
                                prodisplay();
                            ?>
                            

                            
									
							
						</div>	
						
						
						<div class="row">
							<div class="col-md-12">
							<!-- Start Pagination -->
								<ul class="pagination">
									<li class="prev"><a href="blog-grid.html#"><span class="fa fa-angle-left"></span>Next</a></li>
									<li><a href="blog-grid.html#">1</a></li>
									<li><a href="blog-grid.html#">2</a></li>
									<li class="active"><a href="blog-grid.html#">3</a></li>
									<li><a href="blog-grid.html#">4</a></li>
									<li class="next"><a href="blog-grid.html#">Prev<span class="fa fa-angle-right"></span></a></li>
								</ul>
								<!--/ End Pagination -->
							</div>
						</div>				
					</div>
				</div>
			</div>
		</section>
		<!--/ End Blog -->	
		
		<!-- Footer Top -->
		<section id="footer-top" class="section">
			<div class="container">
				<div class="row">
					<!-- Single Widget -->
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="newslatter">
							<h2><span>Signup</span>Newslatter</h2>
                            <p>Join my mailing List to get updates </p>						</div>
						<form class="news-form">
							<input type="email" placeholder="type your email">
							<button type="submit" class="button primary"><i class="fa fa-paper-plane"></i></button>
						</form>	
					</div>
					<!--/ End Single Widget -->
				</div>
			</div>
		</section>
		<!--/ End footer Top -->
	
		<!-- Start Footer -->
        <?php  ft();?>
		<!--/ End Footer -->
		
		<!-- Jquery -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
		
		<!-- Colors JS -->
		<script type="text/javascript" src="js/colors.js"></script>
		
		<!-- Modernizr JS -->
		<script type="text/javascript" src="js/modernizr.min.js"></script>
			
		<!-- WOW JS -->
		<script type="text/javascript" src="js/wow.min.js"></script>
		
		<!-- Fancybox js -->
		<script type="text/javascript" src="js/jquery.fancybox.min.js"></script>
		
		<!-- Animate Text JS -->
		<script type="text/javascript" src="js/animate-text.js"></script>
		
		<!-- Mobile Menu JS -->
    	<script type="text/javascript" src="js/jquery.slicknav.min.js"></script>
		
		<!-- Jquery Parallax -->
    	<script type="text/javascript" src="js/jquery.stellar.min.js"></script>
		
		<!-- Jquery Easing -->
    	<script type="text/javascript" src="js/easing.js"></script>
		
		<!-- One Page Nav JS -->
    	<script type="text/javascript" src="js/jquery.nav.js"></script>
		
		<!-- Slider Carousel JS -->
		<script type="text/javascript" src="js/owl.carousel.min.js"></script>

		<!-- Youtube Player JS -->
		<script type="text/javascript" src="js/ytplayer.min.js"></script>

		<!-- Particle JS -->
		<script type="text/javascript" src="js/particles.min.js"></script>
		
		<!-- Counter JS -->
		<script type="text/javascript" src="js/waypoints.min.js"></script>
		<script type="text/javascript" src="js/jquery.counterup.min.js"></script>
		
		<!-- Mixitup JS -->
		<script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
		
		<!-- Bootstrap JS -->
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		
		<!-- Main JS -->
		<script type="text/javascript" src="js/main.js"></script>
    </body>
</html>