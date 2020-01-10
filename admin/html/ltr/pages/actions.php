<?php

include 'core.php';


if (isset($_GET['dollar'])) {
     
    if ($_GET['dollar']=='addport') {
        $pname = $_POST['pname'];
        $description = $_POST['description'];
        $customer = $_POST['customer'];
        $contact = $_POST['contact'];
        $category = $_POST['category'];
        $website = $_POST['website'];
       

        if (empty($pname)) {
            echo '<div class="alert alert-danger mb-2" role="alert" id="fout">
            <strong>Opps!</strong> Please enter project name.
        </div>';
            
        }
        elseif (empty($category)) {

            echo '<div class="alert alert-danger mb-2" role="alert" id="fout">
            <strong>Oops!</strong> Please choose category
        </div>';
            # code...
        }
        
       
        # code...
       else {
        addporto($pname,$description,$customer,$contact,$category,$website);
       }

        
    }

    if ($_GET['dollar']=='adprod') {

            $name = $_POST['pname'];
            $developer = $_POST['developer'];
            $depo = $_POST['description'];
            $ptype = $_POST['ptype'];
            $devcontact = $_POST['devcontact'];
            $category = $_POST['category'];
            $website = $_POST['website'];
            $df = date('jS F, Y');

            if (empty($name)) {
                echo '<div class="alert alert-danger mb-2" role="alert" id="fout">
                <strong>Opps!</strong> Please enter project name.
            </div>';
                
            }
            elseif (empty($category)) {
    
                echo '<div class="alert alert-danger mb-2" role="alert" id="fout">
                <strong>Oops!</strong> Please choose category
            </div>';
                # code...
            }
            
           
            # code...
           else {
            adpro($name,$category,$depo,$website,$ptype,$developer,$devcontact,$df);
           }
    }
}

?>