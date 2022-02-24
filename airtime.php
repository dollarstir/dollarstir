<!-- developer: Frederick Ennin (Dollarstir)
 Position: CEO and Founder of Dollarsoft
-->

<?php

session_start();

$_SESSION['pid']=5;
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
        <title>Dollarstir - Free Airtime</title>




        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-156004220-1"></script>
            <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'UA-156004220-1');
        </script>

		
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
		
		<!--/ End Breadcrumbs -->
		
		<!-- Start Blog -->
		


        <!-- Start contact -->

        <br><br>    

        <section id="contact" class="section">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="section-title">
                                                    <h1><span>Get </span> Free Airtime<i class="fa fa-star"></i></h1>
                                                    <!-- <p>feel free to give me a call or leave your message i will contact you as soon as possible<p> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <!-- Contact Form -->
                                            <div class="col-md-12 col-sm-12 col-xs-12 wow fadeInLeft" data-wow-delay="0.4s">
                                                <form class="form" method="post" action="" id="creditform" style="height:auto;">
                                                    <div class="row">
                                                        <!-- <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" name="name" placeholder="Full Name" required="required">
                                                            </div>
                                                        </div> -->

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="number" name="number" placeholder="Phone Number for credit" required="required">
                                                            </div>
                                                        </div>
                                                        <!-- <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="email" name="email" placeholder="Your Email" required="required">
                                                            </div>
                                                        </div> -->

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <select name="network" id="ccre">
                                                                    <option value="">Select your Network</option>
                                                                    <option value="mtn">Mtn</option>
                                                                    <option value="vodafone">Vodafone</option>
                                                                    <option value="airtel-tigo">Airtel-Tigo</option>

                                                                </select>
                                                            </div>
                                                        </div>



                                                        <div class="col-md-6" id="dp">
                                                            <div class="form-group">
                                                                Enter how much dollars to buy : <span style='font-size:18px;'>&#36;</span>  <input type="text" name="dollar" id="us"   value=""  placeholder="Enter how much dollar you want">
                                                               <span id="er" style="color:red;"></span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6" id="cp">
                                                            <div class="form-group">
                                                            Amount to pay in <span style='font-size:18px;'>Gh&#8373;</span> <input type="text" name="cedis" id="gh" value=""  placeholder="Amount in cedis" readonly>
                                                            </div>
                                                        </div>




                                                        <div class="col-md-6" id="ep">
                                                            <div class="form-group">
                                                                <input type="text" name="payemail"  placeholder="Enter paypal email">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6" id="np">
                                                            <div class="form-group">
                                                             <input type="text" name="payname"  placeholder="Enter paypal account name" >
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12" id="ad1">
                                                            <div class="form-group">
                                                                <input type="text" name="address1"  placeholder="Enter Residential/Street Address  for your paypal account" >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12" id="ad2">
                                                            <div class="form-group">
                                                             <input type="text" name="address2"  placeholder="Addres Line 2">
                                                            </div>
                                                        </div>





                                                        <div class="col-md-6" id="ct">
                                                            <div class="form-group">
                                                                <input type="text" name="city"  placeholder="Enter city you will use for paypal">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6" id="st">
                                                            <div class="form-group">
                                                             <input type="text" name="state"  placeholder="Enter State / Region  you will use for paypal">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6" id="county">
                                                            <div class="form-group">
                                                             <input type="text" name="country"  placeholder="Country you will choose for your card">
                                                            </div>
                                                        </div>



                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <select name="cardtype" id="typec">
                                                                    <option value="">Select card type</option>
                                                                    <option value="1">$5 Virtual Visa card</option>
                                                                    <option value="2">$10 Virtual Visa Card</option>
                                                                    <option value="3">$20 Virtual Credit Card</option>

                                                                </select>
                                                            </div>
                                                        </div>


                                                        <div class="col-md-12" id="tmount">
                                                            <div class="form-group">
                                                                Total Cost of Card: <span style='font-size:20px;'>Gh&#8373;</span>
                                                             <input type="number" name="cardtotal" id="amount"  placeholder="" readonly>
                                                            </div>
                                                        </div>



                                                        <div class="col-md-12" id="bita">
                                                            <div class="form-group">
                                                               NB: Please enter correct <strong>Bitcoin Address</strong> Below
                                                             <input type="text" name="bitaddress" id="bitad"  placeholder="enter or paste your bitcoin address here">
                                                            </div>
                                                        </div>



                                                        <div class="col-md-12" id="bamount">
                                                            <div class="form-group">
                                                                Enter amount : <span style='font-size:20px;'>Gh&#8373;</span>
                                                             <input type="text" name="bitgh" id="bam"  placeholder="">
                                                            </div>
                                                        </div>


                                                        <div class="col-md-12" id="bbt">
                                                            <div class="form-group">
                                                                Bitcoin amount you get:  <span style='font-size:20px;'>&#8383;</span>
                                                             <input type="text" name="bit" id="bamt"  placeholder="">
                                                            </div>
                                                        </div>




                                                        <!-- <div class="col-md-12">
                                                            <div class="form-group">
                                                                <textarea name="message" style="height:80px;" rows="2" placeholder="Type Your Message Here" ></textarea>
                                                            </div>
                                                        </div> -->
                                                        <img src="images/load.gif" id="myload" alt=""><br><br>

                                                        <div class="col-md-12" id="rep">
                                                            <!-- <div class="mess" style="width:100%;background-color:seagreen;height:40px;margin-top:-20px;text-align:center;">
                                                                <p style="color:white;margin-top:5px;position:absolute;">Message Delivered Successfully</p>
                                                            </div> -->


                                                            <!-- 5.7gh  = 0.0001154BT -->
                                                            
                                                        </div><br><br>
                                                        <div class="col-md-12">
                                                            <div class="form-group button">	
                                                                <button type="submit" class="button primary"><i class="fa fa-send"></i>Submit</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!--/ End Contact Form -->
                                            <!-- Contact Address -->
                                            
                                            <!--/ End Contact Address -->
                                        </div>
                                    </div>
        </section> 

        <!-- End Cotact -->



        <section id="blog" class="section archive">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="row">
                            
                                

                            
									
							
						</div>	
						
						
							
					</div>
				</div>
			</div>
		</section>

        <section id="blog" class="section archive">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="row">
                            
                                

                            
									
							
						</div>	
						
						
							
					</div>
				</div>
			</div>
		</section>

        <section id="blog" class="section archive">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="row">
                            
                                

                            
									
							
						</div>	
						
						
							
					</div>
				</div>
			</div>
		</section>




		<!--/ End Blog -->	
		
		<!-- Footer Top -->
		
		<!--/ End footer Top -->
	
		<!-- Start Footer -->
        <?php  ft();?>
		<!--/ End Footer -->
		
		<!-- Jquery -->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script src="ajax.js"></script>
        
        <script>
        $(function () {
            $("#er").html("");
            $("#amount").val(0.00);
            $("#amount").css("cursor","not-allowed");


            $("#us").keyup(function () {

              var  result= $(this).val() * 5.3;
               if ($(this).val()>= 10) {

                $("#gh").val(result);
                $("#er").html("");
                   
               }
               else{
                   $("#er").html("please enter amount greater than 10");
                  
               }
                
            });

        $("#typec").change(function () {

                if ($("#typec").val() == "") {
                    var result1 = 0;

                    $("#amount").val(result1);
                    
                    
                }
                else{

                  
                }
        

                if ($("#typec").val() == 1) {
                    var result1 = 98;

                    $("#amount").val(result1);
                    
                    
                }
                else{

                  
                }




                if ($("#typec").val() == 2) {
                    var result2 = 160;

                    $("#amount").val(result2);
                   
                    
                }
                else{

                   
                }


                if ($("#typec").val() == 3) {
                    var result3 = 200;

                    $("#amount").val(result3);
                    $("#amount").css("cursor","not-allowed");
                    
                }
                else{

                   

                   
                }
        })


        $("#bam").keyup(function(){
            var resu= $("#bam").val() * 0.000020;

            $("#bamt").val(resu);



           
        })

            
        })
        
        </script>
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



        <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5e1cd1c027773e0d832d5b4d/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
    </body>
</html>