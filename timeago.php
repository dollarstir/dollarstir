
<?php
$date = "now";
            date_default_timezone_set("Africa/Accra");


            $strTimeAgo = "";


            function timeago($date)
            {
                $timestamp= strtotime($date);
                $timelist = array("second","minute","hour","day","month","year");
                $lengh =array("60","60","24","30","12","10");
                $currenttime = time();

                if ($currenttime>$timestamp) {

                    $diff = time()-$timestamp;
                    for ($i=0; $diff >= $lengh[$i] && $i < count($lengh)-1 ; $i++) { 

                        $diff = $diff/$lengh[$i];

                        # code...
                    }
                    $diff = round($diff);
                    return $diff  ." ".$timelist[$i] . " (s) ago";

                    # code...
                }
                elseif ($currenttime=$timestamp) {
                    return "Just Now'";
                }
            }
            $strTimeAgo = timeago($date);

            echo $strTimeAgo;

            ?>