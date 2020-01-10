<?php

include 'db.php';

        $sh = mysqli_query($conn,"SELECT * FROM  pf WHERE category=1 ORDER BY id DESC");

        while ($row = mysqli_fetch_array($sh)) {

            $pname = $row['pname'];
            $description =$row['depo'];
            $customer = $row['customer'];
            $contact = $row['contact'];
            $cat = $row['category'];

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
                            <img src="admin/html/ltr/pages/'.$pic.'" alt=""/>
                        </div>
                        <div class="portfolio-hover">
                            <h4><span>'.$category.'</span><a href="index.html#">'.$pname.'</a></h4>
                            <p>'.$description.'</p>
                            <div class="button">
                                <a data-fancybox="gallery" href="admin/html/ltr/pages/'.$pic.'"><i class="fa fa-search"></i></a>
                                <a href="single.php" class="primary"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>';
            # code...
        }
?>