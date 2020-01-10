<?php

function addporto($pname,$description,$customer,$contact,$category,$website)
{
    include 'db.php';
    // $ama = "kofi";
    $df = date('jS F, Y');

    if ($_FILES['image']['name']==""){
        echo '<div class="alert alert-danger mb-2" role="alert" id="fout">
        <strong>Oops!</strong> Please add image .
    </div>';
    }
    else {
        $fileinfo = PATHINFO($_FILES['image']['name']);
        $newfilename = $fileinfo['filename']."-".time().".".$fileinfo['extension'];
        move_uploaded_file($_FILES['image']['tmp_name'],'upload/'.$newfilename);
        $pic =  'upload/' .$newfilename;


         // echo $pname.'<br>'.$description.'<br>'.$customer.'<br>'.$contact.'<br>'.$category.'<br>'.$website.'<br>';
         $ss = mysqli_query($conn,"INSERT INTO pf (pname,depo,customer,contact,category,website,df,pic) VALUES ('$pname','$description','$customer','$contact','$category','$website','$df','$pic')");
        //    $puto= mysqli_query($conn,"INSERT INTO pf (pname,depo,customer,contact,category,website,df) VALUES ('$pname','$description','$customer','$contact','$category,'$website','$dd')");
        if ($ss) {
    
        
                echo '<div class="alert alert-success mb-2" role="alert" id="fout">
                     <strong>Well done!</strong> You successfully Added '.$pname.' you will be redirected soon ....
                 </div>
                 
                 <script>
                 
                    setTimeout(()=>{
                        window.location="viewport.php";

                    },5000)
                 </script>
                 
                 ';
            # code...
        }
        else{
            
                echo '<div class="alert alert-danger mb-2" role="alert" id="fout">
                     <strong>Oops!</strong> Failed to Add portfolio '.$pname.'.
                 </div>';
        
            }
    }



   


}





function adpro($name,$category,$depo,$website,$ptype,$developer,$devcontact,$df)
{

    include 'db.php';

    if ($_FILES['image']['name']=="") {


        echo '<div class="alert alert-danger mb-2" role="alert" id="fout">
        <strong>Oops!</strong> Please add image .
         </div>';
        
    }
    else {
        $fileinfo = PATHINFO($_FILES['image']['name']);
        $newfilename = $fileinfo['filename'].'-'.time().'.'.$fileinfo['extension'];
        move_uploaded_file($_FILES['image']['tmp_name'],'upload/'.$newfilename);
        $pic1 = 'upload/'.$newfilename;

        $fileifno2 = PATHINFO($_FILES['image2']['name']);
        $newfilename2 =$fileifno2['filename'].'-'.time().'.'.$fileifno2['extension'];
        move_uploaded_file($_FILES['image2']['tmp_name'],'upload/'.$newfilename2);
        $pic2 ='upload/'.$newfilename2;


        $fileifno3 = PATHINFO($_FILES['image3']['name']);
        $newfilename3 = $fileifno3['filename'].'-'.time().'.'.$fileifno3['extension'];
        move_uploaded_file($_FILES['image3']['tmp_name'],'upload/'.$newfilename3);
        $pic3 = 'upload/'.$newfilename3;

        $soso = mysqli_query($conn,"INSERT INTO products (name,category,depo,website,pic1,pic2,pic3,ptype,developer,devcontact,df) VALUES ('$name','$category','$depo','$website','$pic1','$pic2','$pic3','$ptype','$developer','$devcontact','$df')");

        if ($soso) {
    
        
            echo '<div class="alert alert-success mb-2" role="alert" id="fout">
                 <strong>Well done!</strong> You successfully Added '.$name.' you will be redirected soon ....
             </div>
             
             <script>
             
                setTimeout(()=>{
                    window.location="viewprod.php";

                },5000)
             </script>
             
             ';
        # code...
        }
        else{
            
            echo '<div class="alert alert-danger mb-2" role="alert" id="fout">
                 <strong>Oops!</strong> Failed to Add portfolio '.$name.'.
             </div>';
    
        }



    }

}





function getport()
{
   include 'db.php';

   $gall = mysqli_query($conn,"SELECT * FROM pf ");

   while ($row = mysqli_fetch_array($gall)) {

    $pname = $row['pname'];
    $description =$row['depo'];
    $customer = $row['customer'];
    $contact = $row['contact'];
    $category = $row['category'];
    $df = $row['df'];
    $pic = $row['pic'];


            echo '<tr>
                    <td>'.$pname.'</td>
                    <td>'.$category.'</td>
                    <td>'.$customer.'</td>
                    <td>'.$contact.'</td>
                    <td>'.$description.'</td>
                    <td><img src ="'.$pic.'" style="width:150px;height:150px;"/></td>
                    <td>'.$df.'</td>
                </tr>';

       # code...
   }
}





function getprod()
{
    include 'db.php';

   $gall = mysqli_query($conn,"SELECT * FROM products ");

   while ($row = mysqli_fetch_array($gall)) {

        $name = $row['name'];
        $description =$row['depo'];
        $developer = $row['developer'];
        $devcontact = $row['devcontact'];
        $category = $row['category'];
        $df = $row['df'];
        $pic = $row['pic1'];


            echo '<tr>
                    <td>'.$name.'</td>
                    <td>'.$category.'</td>
                    <td>'.$developer.'</td>
                    <td>'.$devcontact.'</td>
                    <td>'.$description.'</td>
                    <td><img src ="'.$pic.'" style="width:150px;height:150px;"/></td>
                    <td>'.$df.'</td>
                </tr>';

       # code...
   }
}

?>