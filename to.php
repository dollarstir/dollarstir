<?php

include 'db.php';

$sl= mysqli_query($conn,"SELECT * FROM test");

function timeago($timing)
            {
                $timestamp= $timing;
                $timelist = array("second","minute","hour","day","week","month","year");
                $lengh =array("60","60","24","7","4","12","10");
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

while ($ro= mysqli_fetch_array($sl)) {

    $post =$ro['post'];
    $timing = $ro['timing'];
    date_default_timezone_set("Africa/Accra");


            $strTimeAgo = "";


            
            $strTimeAgo = timeago($timing);

            echo $post.'-'. $strTimeAgo.'<br>';

}
?>