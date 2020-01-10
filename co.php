<?php
    
    include 'db.php';
    
            $post = $_POST['post'];
            $dd = date("h:i a");
            $timing = strtotime($dd);

            $go = mysqli_query($conn,"INSERT INTO test(post,timing) VALUES ('$post','$timing')");   
            if ($go) {
                echo "success;
            ";
            }

    ?>