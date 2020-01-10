<?php
include 'db.php';
include 'core.php';

if(isset($_GET['dollar'])){

    if ($_GET['dollar']=='bookform') {


        $name= $_POST['name'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $dateadded = date("jS F,Y");


        if (!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/",$email)) {
            echo '<div class="mess" style="width:100%;background-color:red;height:40px;margin-top:-20px;text-align:center;">
            <p style="color:white;margin-top:5px;position:absolute;">Please enter correct Email</p>
        </div>'; 
            # code...
        }

        // elseif (!preg_match("/^[a-zA-Z]+\/+[a-zA-Z]+\/+[0-9]+\/+[0-9]{4}$/",$name)) {
        //     echo '<div class="mess" style="width:100%;background-color:red;height:40px;margin-top:-20px;text-align:center;">
        //     <p style="color:white;margin-top:5px;position:absolute;">Please enter correct Index Number</p>
        //     </div>';
        // }
        elseif (!preg_match("/^[0-9]{10,13}$/",$contact)){
            
            echo '<div class="mess" style="width:100%;background-color:red;height:40px;margin-top:-20px;text-align:center;">
            <p style="color:white;margin-top:5px;position:absolute;">Please enter correct Number</p>
            </div>'; 

        }

          # code...
        
        else {

    //    $nana = "yesterday";
    //    $ff = strtotime($nana);
    //    echo date("jS F, Y",$ff); 
        addbook($name,$contact,$email,$message,$dateadded);     
            
           

            
             
            
            
        
        }

        


        # code...
    }


    if ($_GET['dollar']=="getlink") {


        
							
								
        $link = $_POST['link'];
        $name = $_POST['name'];

        echo '<div class="mess" style="width:100%;background-color:seagreen;height:40px;margin-top:-20px;text-align:center;position:absolute;border-radius:10px;margin-left:-15px;">
        <strong><p style="color:white;margin-top:10px;text-align:center;">Please Wait '.$name.' is downloading ......</p></strong>
         </div>
            <script>
                setTimeout (()=>{
                    window.location="'.$link.'";
                },10000)
            </script>
         ';
									
								
							
							
    
    }
}
?>