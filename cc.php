<?php 

include 'db.php';




 $query = "SELECT * FROM book";
 $cc = mysqli_query($conn,$query);
 $count= mysqli_num_rows($cc);

 echo $count;



?>