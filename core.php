<?php

// developed by : dollar Stir (CEO of  Dollarsoft)
// Developed on Monday , Decenmber 9, 2019
// Project Dollarstir.com offical website

function ft(){

    echo'
    <footer id="footer">
    <!-- Arrow -->
    <div class="arrow">
        <a href="index.php#personal-area" class="btn"><i class="fa fa-angle-up"></i></a>
    </div>
    <!--/ End Arrow -->
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <!-- Copyright -->
                <div class="copyright">
                    <p>&copy; Copyright '.date("Y").'    Designed by Dollarsitr (CEO of Dollarsoft Corporation)</p>
                </div>
                <!--/ End Copyright -->
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <!-- Social -->
                <ul class="social">
                    <li><a href="index.php#"><i class="fa fa-facebook"></i></a></li>
                    <li class="active"><a href="index.php#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="index.php#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="index.php#"><i class="fa fa-pinterest"></i></a></li>
                </ul>
                <!--/ End Social -->
            </div>
        </div>
    </div>
</footer>
    ';

}

function hdbar(){
    switch ($_SESSION['pid']) {
        case  1:
             echo '
                <header id="header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-sm-12 col-xs-12">
                            <!-- Logo -->
                        <a href="index.php"><img src="images/logo.png" style="width=100px;height:70px;position:absolute;margin-left:20px;margin-top:-10px;"/></a>
                            <div class="logo">
                                <a href=""></a>
                            </div>
                            <!--/ End Logo -->
                            <div class="mobile-nav"></div>
                        </div>
                        <div class="col-md-10 col-sm-12 col-xs-12">
                            <div class="nav-area">
                                <!-- Main Menu -->
                                <nav class="mainmenu">
                                    <div class="collapse navbar-collapse">
                                        <ul class="nav navbar-nav menu">
                                            <li class="active"><a href="index.php#personal-area"><i class="fa fa-home"></i>Homepage</a>
                                                
                                            </li>
                                            <li><a href="index.php#my-service"><i class="fa fa-rocket"></i>My Service</a></li>
                                            <li><a href="index.php#portfolio"><i class="fa fa-briefcase"></i>Portfolio</a></li>
                                            <li><a href="index.php#pricing"><i class="fa fa-dollar"></i>Pricing</a> </li>

                                            
                                                
                                           
                                           <!-- <li><a href="index.php#my-timeline"><i class="fa fa-history"></i>Timeline</a></li>-->
                                           <li><a href="#market"><i class="fa fa-shopping-cart"></i>Market</a>
											<ul>
												<li><a href="market.php"><i class="fa fa-angle-double-right"></i>Buy E-currency</a></li>
                                                <li><a href="sell.php"><i class="fa fa-angle-double-right"></i>Sell E-currency</a></li>
                                                <li><a href="getpaypal.php"><i class="fa fa-angle-double-right"></i>Get Verified Paypal Account</a></li>

												
											</ul>
										</li>		
                                            <li><a href="products.php"><i class="fa fa-pencil"></i>Products</a>
                                               
                                            </li>		
                                            <li><a href="index.php#contact"><i class="fa fa-address-book"></i>Contact</a></li>		
                                        </ul>
                                        <ul class="social-icon">
                                            <li><a href="index.php#header"><i class="fa fa-plus"></i></a></li>
                                        </ul>
                                        <ul class="social">
                                            <li><a href="index.php#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="index.php#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="index.php#"><i class="fa fa-behance"></i></a></li>
                                            <li><a href="index.php#"><i class="fa fa-dribbble"></i></a></li>
                                        </ul>
                                    </div>
                                </nav>
                                <!--/ End Main Menu -->
                            </div>
                        </div>
                    </div>
                </div>
            </header>
                ';
            break;
        case 2:
                echo '
                <header id="header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-sm-12 col-xs-12">
                            <!-- Logo -->
                        <a href="index.php"><img src="images/logo.png" style="width=100px;height:70px;position:absolute;margin-left:20px;margin-top:-10px;"/></a>
                            <div class="logo">
                                <a href=""></a>
                            </div>
                            <!--/ End Logo -->
                            <div class="mobile-nav"></div>
                        </div>
                        <div class="col-md-10 col-sm-12 col-xs-12">
                            <div class="nav-area">
                                <!-- Main Menu -->
                                <nav class="mainmenu">
                                    <div class="collapse navbar-collapse">
                                        <ul class="nav navbar-nav menu">
                                            <li><a href="index.php#personal-area"><i class="fa fa-home"></i>Homepage</a></li>
                                                
                                            
                                            <li><a href="index.php#my-service"><i class="fa fa-rocket"></i>My Service</a></li>
                                            <li class="active"><a href="index.php#portfolio"><i class="fa fa-briefcase"></i>Portfolio</a> </li>
                                                
                                           
                                            <li><a href="index.php#pricing"><i class="fa fa-dollar"></i>Pricing</a> </li>

                                            <li><a href="#market"><i class="fa fa-shopping-cart"></i>Market</a>
											<ul>
												<li><a href="market.php"><i class="fa fa-angle-double-right"></i>Buy E-currency</a></li>
                                                <li><a href="sell.php"><i class="fa fa-angle-double-right"></i>Sell E-currency</a></li>
                                                <li><a href="getpaypal.php"><i class="fa fa-angle-double-right"></i>Get Verified Paypal Account</a></li>

												
											</ul>
										</li>				
                                            <li><a href="products.php"><i class="fa fa-pencil"></i>Products</a>
                                               
                                            </li>		
                                            <li><a href="index.php#contact"><i class="fa fa-address-book"></i>Contact</a></li>		
                                        </ul>
                                        <ul class="social-icon">
                                            <li><a href="index.php#header"><i class="fa fa-plus"></i></a></li>
                                        </ul>
                                        <ul class="social">
                                            <li><a href="index.php#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="index.php#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="index.php#"><i class="fa fa-behance"></i></a></li>
                                            <li><a href="index.php#"><i class="fa fa-dribbble"></i></a></li>
                                        </ul>
                                    </div>
                                </nav>
                                <!--/ End Main Menu -->
                            </div>
                        </div>
                    </div>
                </div>
            </header>
                ';
            break;
        case 3:
                echo '
                    <header id="header">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-2 col-sm-12 col-xs-12">
                                    <!-- Logo -->
                                <a href="index.php"><img src="images/logo.png" style="width=100px;height:70px;position:absolute;margin-left:20px;margin-top:-10px;"/></a>
                                    <div class="logo">
                                        <a href=""></a>
                                    </div>
                                    <!--/ End Logo -->
                                    <div class="mobile-nav"></div>
                                </div>
                                <div class="col-md-10 col-sm-12 col-xs-12">
                                    <div class="nav-area">
                                        <!-- Main Menu -->
                                        <nav class="mainmenu">
                                            <div class="collapse navbar-collapse">
                                                <ul class="nav navbar-nav menu">
                                                    <li><a href="index.php#personal-area"><i class="fa fa-home"></i>Homepage</a>
                                                        
                                                    </li>
                                                    <li><a href="index.php#my-service"><i class="fa fa-rocket"></i>My Service</a></li>
                                                    <li><a href="index.php#portfolio"><i class="fa fa-briefcase"></i>Portfolio</a>
                                                        
                                                    </li>
                                                    <li><a href="index.php#pricing"><i class="fa fa-dollar"></i>Pricing</a> </li>
                                                    <li><a href="#market"><i class="fa fa-shopping-cart"></i>Market</a>
                                                    <ul>
                                                        <li><a href="market.php"><i class="fa fa-angle-double-right"></i>Buy E-currency</a></li>
                                                        <li><a href="sell.php"><i class="fa fa-angle-double-right"></i>Sell E-currency</a></li>
                                                        <li><a href="getpaypal.php"><i class="fa fa-angle-double-right"></i>Get Verified Paypal Account</a></li>

                                                        
                                                    </ul>
                                                </li>				
                                                    <li class="active"><a href="products.php"><i class="fa fa-pencil"></i>Products</a>
                                                    
                                                    </li>		
                                                    <li><a href="index.php#contact"><i class="fa fa-address-book"></i>Contact</a></li>		
                                                </ul>
                                                <ul class="social-icon">
                                                    <li><a href="index.php#header"><i class="fa fa-plus"></i></a></li>
                                                </ul>
                                                <ul class="social">
                                                    <li><a href="index.php#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="index.php#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="index.php#"><i class="fa fa-behance"></i></a></li>
                                                    <li><a href="index.php#"><i class="fa fa-dribbble"></i></a></li>
                                                </ul>
                                            </div>
                                        </nav>
                                        <!--/ End Main Menu -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
                        ';
            break;

        case 4:

                echo '
                <header id="header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-2 col-sm-12 col-xs-12">
                                <!-- Logo -->
                            <a href="index.php"><img src="images/logo.png" style="width=100px;height:70px;position:absolute;margin-left:20px;margin-top:-10px;"/></a>
                                <div class="logo">
                                    <a href=""></a>
                                </div>
                                <!--/ End Logo -->
                                <div class="mobile-nav"></div>
                            </div>
                            <div class="col-md-10 col-sm-12 col-xs-12">
                                <div class="nav-area">
                                    <!-- Main Menu -->
                                    <nav class="mainmenu">
                                        <div class="collapse navbar-collapse">
                                            <ul class="nav navbar-nav menu">
                                                <li><a href="index.php#personal-area"><i class="fa fa-home"></i>Homepage</a>
                                                    
                                                </li>
                                                <li><a href="index.php#my-service"><i class="fa fa-rocket"></i>My Service</a></li>
                                                <li><a href="index.php#portfolio"><i class="fa fa-briefcase"></i>Portfolio</a>
                                                    
                                                </li>

                                                <li><a href="index.php#pricing"><i class="fa fa-dollar"></i>Pricing</a> </li>
                                                <li><a href="#market"><i class="fa fa-shopping-cart"></i>Market</a>
											<ul>
												<li><a href="market.php"><i class="fa fa-angle-double-right"></i>Buy E-currency</a></li>
                                                <li><a href="sell.php"><i class="fa fa-angle-double-right"></i>Sell E-currency</a></li>
                                                <li><a href="getpaypal.php"><i class="fa fa-angle-double-right"></i>Get Verified Paypal Account</a></li>

												
											</ul>
										</li>				
                                                <li class="active"><a href="products.php"><i class="fa fa-pencil"></i>Products</a>
                                                
                                                </li>		
                                                <li><a href="index.php#contact"><i class="fa fa-address-book"></i>Contact</a></li>		
                                            </ul>
                                            <ul class="social-icon">
                                                <li><a href="index.php#header"><i class="fa fa-plus"></i></a></li>
                                            </ul>
                                            <ul class="social">
                                                <li><a href="index.php#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="index.php#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="index.php#"><i class="fa fa-behance"></i></a></li>
                                                <li><a href="index.php#"><i class="fa fa-dribbble"></i></a></li>
                                            </ul>
                                        </div>
                                    </nav>
                                    <!--/ End Main Menu -->
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                    ';  
            break;

        case 5:
                echo '
                <header id="header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-2 col-sm-12 col-xs-12">
                                <!-- Logo -->
                            <a href="index.php"><img src="images/logo.png" style="width=100px;height:70px;position:absolute;margin-left:20px;margin-top:-10px;"/></a>
                                <div class="logo">
                                    <a href=""></a>
                                </div>
                                <!--/ End Logo -->
                                <div class="mobile-nav"></div>
                            </div>
                            <div class="col-md-10 col-sm-12 col-xs-12">
                                <div class="nav-area">
                                    <!-- Main Menu -->
                                    <nav class="mainmenu">
                                        <div class="collapse navbar-collapse">
                                            <ul class="nav navbar-nav menu">
                                                <li><a href="index.php#personal-area"><i class="fa fa-home"></i>Homepage</a>
                                                    
                                                </li>
                                                <li><a href="index.php#my-service"><i class="fa fa-rocket"></i>My Service</a></li>
                                                <li><a href="index.php#portfolio"><i class="fa fa-briefcase"></i>Portfolio</a>
                                                    
                                                </li>

                                                <li><a href="index.php#pricing"><i class="fa fa-dollar"></i>Pricing</a> </li>
                                                <li class="active"><a href="#market"><i class="fa fa-shopping-cart"></i>Market</a>
                                            <ul>
                                                <li><a href="market.php"><i class="fa fa-angle-double-right"></i>Buy E-currency</a></li>
                                                <li><a href="sell.php"><i class="fa fa-angle-double-right"></i>Sell E-currency</a></li>
                                                <li><a href="getpaypal.php"><i class="fa fa-angle-double-right"></i>Get Verified Paypal Account</a></li>

                                                
                                            </ul>
                                        </li>				
                                                <li><a href="products.php"><i class="fa fa-pencil"></i>Products</a>
                                                
                                                </li>		
                                                <li><a href="index.php#contact"><i class="fa fa-address-book"></i>Contact</a></li>		
                                            </ul>
                                            <ul class="social-icon">
                                                <li><a href="index.php#header"><i class="fa fa-plus"></i></a></li>
                                            </ul>
                                            <ul class="social">
                                                <li><a href="index.php#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="index.php#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="index.php#"><i class="fa fa-behance"></i></a></li>
                                                <li><a href="index.php#"><i class="fa fa-dribbble"></i></a></li>
                                            </ul>
                                        </div>
                                    </nav>
                                    <!--/ End Main Menu -->
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                    ';  
            break;
        
        default:
            # code...
            break;
    }
}


function showport()
{

        include 'db.php';

        $sh = mysqli_query($conn,"SELECT * FROM  pf ORDER BY id DESC");

        while ($row = mysqli_fetch_array($sh)) {

            $pname = $row['pname'];
            $description =$row['depo'];
            $customer = $row['customer'];
            $contact = $row['contact'];
            $cat = $row['category'];
            $id = $row['id'];

            switch ($cat) {
                case 1:
                   $category = "Web Design";

                    break;
                case 2:
                    $category = "Html 5";

                    break;
                case 3:
                    $category ="Wordpress";
                    break;
                
                default:
                    # code...
                    break;
            }
            $df = $row['df'];
            $pic = $row['pic'];


            echo '<div class="mix design html5 col-md-4 col-sm-6 col-xs-12 col-fix ">
                    <div class="portfolio-single">
                        <div class="portfolio-head">
                            <a href="single.php?portid='.$id.'"><img src="admin/html/ltr/pages/'.$pic.'" alt=""/></a>
                        </div>
                        <div class="portfolio-hover">
                            <h4><span>'.$category.'</span><a href="single.php?portid='.$id.'">'.$pname.'</a></h4>
                            <p>'.$description.'</p>
                            <div class="button">
                                <a data-fancybox="gallery" href="admin/html/ltr/pages/'.$pic.'"><i class="fa fa-search"></i></a>
                                <a href="single.php?portid='.$id.'" class="primary"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>';
            # code...
        }
}


function relatedport($mid,$catid)
{


    include 'db.php';

        $sh = mysqli_query($conn,"SELECT * FROM  pf WHERE category = '$catid' ORDER BY id DESC");

        while ($row = mysqli_fetch_array($sh)) {

            $pname = $row['pname'];
            $description =$row['depo'];
            $customer = $row['customer'];
            $contact = $row['contact'];
            $cat = $row['category'];
            $id = $row['id'];

            switch ($cat) {
                case 1:
                   $category = "Web Design";

                    break;
                case 2:
                    $category = "Html 5";

                    break;
                case 3:
                    $category ="Wordpress";
                    break;
                
                default:
                    # code...
                    break;
            }
            $df = $row['df'];
            $pic = $row['pic'];

            if ($id ==$mid) {


               
            }
            else {
                echo '<div class="portfolio-single">
                        <div class="portfolio-head">
                           <a href="single.php?portid='.$id.'"><img src="admin/html/ltr/pages/'.$pic.'" alt=""/></a>
                        </div>
                        <div class="portfolio-hover">
                            <h4><span>'.$category.'</span><a href="single.php?portid='.$id.'">'.$pname.'</a></h4>
                            <p>'.$description.' </p>
                            <div class="button">
                            <a data-fancybox="gallery" href="admin/html/ltr/pages/'.$pic.'"><i class="fa fa-search"></i></a>
                            <a href="single.php?portid='.$id.'" class="primary"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                 </div>';
            }

            
        }


}




function relatedprod($mid,$catid)
{

    include 'db.php';

        $sh = mysqli_query($conn,"SELECT * FROM  products WHERE category = '$catid' ORDER BY id DESC");

        while ($row = mysqli_fetch_array($sh)) {

            $pname = $row['name'];
            $description =$row['depo'];
            $developer = $row['developer'];
            $devcontact = $row['devcontact'];
            $cat = $row['category'];
            $id = $row['id'];

            switch ($cat) {
                case 1:
                   $category = "Web Design";

                    break;
                case 2:
                    $category = "Html 5";

                    break;
                case 3:
                    $category ="Wordpress";
                    break;
                
                default:
                    # code...
                    break;
            }
            $df = $row['df'];
            $pic = $row['pic1'];

            if ($id ==$mid) {


               
            }
            else {
                echo '<div class="portfolio-single">
                        <div class="portfolio-head">
                           <a href="single.php?portid='.$id.'"><img src="admin/html/ltr/pages/'.$pic.'" alt=""/></a>
                        </div>
                        <div class="portfolio-hover">
                            <h4><span>'.$category.'</span><a href="single.php?portid='.$id.'">'.$pname.'</a></h4>
                            <p>'.$description.' </p>
                            <div class="button">
                            <a data-fancybox="gallery" href="admin/html/ltr/pages/'.$pic.'"><i class="fa fa-search"></i></a>
                            
                            <form action="downloadp.php" method="POST">
                                    <input type="hidden" value="'.$id.'" name="portid">
                                   <center> <button type="submit" class="primary" style="width:50px;height:50px;border-radius:100%;margin-left:60px;margin-top:-40px;position:absolute;"><i class="fa fa-download"></i></button></center>
                                   </form>
                            </div>
                        </div>
                 </div>';
            }

            
        }
}

function prodisplay()
{

    include 'db.php';
        $pds = mysqli_query($conn,"SELECT * FROM  products ORDER BY id DESC");

        while ($row = mysqli_fetch_array($pds)) {

            $pname = $row['name'];
            $description =$row['depo'];
            $developer = $row['developer'];
            $devcontact = $row['devcontact'];
            $cat = $row['category'];
            $id = $row['id'];
            $website = $row['website'];
            $dm = $row['df'];
            $df = preg_split("/ /", $dm);

            $dd = $df[0];
            $mm = $df[1];
            $yy = $df[2];

            switch ($cat) {
                case 1:
                   $category = "Web Design";

                    break;
                case 2:
                    $category = "Html 5";

                    break;
                case 3:
                    $category ="Wordpress";
                    break;

                case 4:
                    $category ="Android/IOS Apps";
                    break;

                case 5:
                    $category ="Desktop Apps";
                    break;
                
                default:
                    $category ="Unknown";
                    break;
            }
            $df = $row['df'];
            $pic = $row['pic1'];
            $pic2 = $row['pic2'];
            $pic3 = $row['pic3'];




            echo '<div class="col-md-6 col-sm-6 col-xs-12">
                            <!-- Single Blog -->
                            <div class="single-blog">
                                <div class="blog-head slider">
                                    <!-- Blog Slide -->
                                    <div class="slide">
                                        <div class="single-slide">
                                            <img src="admin/html/ltr/pages/'.$pic.'" alt="" class="img-responsive" style="height:350px">
                                        </div>
                                        <div class="single-slide">
                                            <img src="admin/html/ltr/pages/'.$pic2.'" alt="" class="img-responsive" style="height:350px">
                                        </div>
                                        <div class="single-slide">
                                            <img src="admin/html/ltr/pages/'.$pic3.'" alt="" class="img-responsive" style="height:350px">
                                        </div>
                                    </div>
                                    <!--/ End Blog Slide -->
                                </div>
                                <div class="blog-info">
                                    <div class="date">
                                        <div class="day"><span>'.$dd.'</span>'.$mm.'</div>
                                        <div class="year">'.$yy.'</div>
                                    </div>
                                    <h2>
                                    
                                    
                                   '.$pname.'
                                  
                                    
                                    </h2>
                                    <div class="meta">
                                        <span><i class="fa fa-user"></i>'.$category.'</span>
                                        <span><i class="fa fa-download"></i>45 comments</span>
                                        <span><i class="fa fa-eye"></i>5k views</span>
                                    </div>
                                    <p>'.$description.'</p>
                                    <form action="downloadp.php" method="POST">
                                    <input type="hidden" value="'.$id.'" name="portid">
                                   <center> <button type="submit" class="dsbut"><i class="fa fa-download"></i> Download Now</button></center>
                                   </form>
                                </div>
                            </div>						
                            <!--/ End  single Blog -->
                </div>';
            # code...
        }
    




}  

function addbook($name,$contact,$email,$message,$dateadded)
{
    include 'db.php';
    $ins = mysqli_query($conn,"INSERT INTO book(name,contact,email,message,dateadded) VALUES('$name','$contact','$email','$message','$dateadded')");
    if ($ins)
    {

        echo '<div class="mess" style="width:100%;background-color:seagreen;height:40px;margin-top:-20px;text-align:center;">
        <p style="color:white;margin-top:5px;position:absolute;">Message Delivered Successfully</p>
         </div>';
    }
}


?>