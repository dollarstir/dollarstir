<?php
include 'db.php';
include 'core.php';
require_once 'send.php';

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

        $send = new send();
        $send->key = "cQxnbAegMIwOox39ZFA2DFTj9";
        $send->message = $message.'.. Sent by: '.$name.'| '.$contact.'  Sent on : '.$dateadded;
        $send->numbers = "0556676471";
        $send->sender = "D-Customer";
        $isError = true;
        $response = $send->sendMessage();
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

    // free credit code


    if ($_GET['dollar']=="getcredit"){

        $number = mysqli_real_escape_string($conn,$_POST['number']);
        $network = mysqli_real_escape_string($conn,$_POST['network']);

        if(preg_match("/^[0-9]{10,14}$/",$number)){

            $verify = mysqli_query($conn,"SELECT * FROM credit WHERE user = '$number' ");
            $rnum = mysqli_fetch_array($verify);

            if ($rnum >=1) {

                echo '<div class="mess" style="width:100%;background-color:red;height:40px;margin-top:-20px;text-align:center;">
                <p style="color:white;margin-top:5px;position:absolute;">Sorry you have already received your airtime</p>
                </div>'; 
                # code...
            }
            else {
                 $availability = mysqli_query($conn,"SELECT * FROM credit WHERE status='unused' AND  network='$network' ");

                 $cred= mysqli_fetch_array($availability);

                 if ($cred >=1) {
                    $mycredit = $cred['cno'];
                    $myid = $cred['id'];

                    echo '<div class="mess" style="width:100%;background-color:seagreen;height:40px;margin-top:-20px;text-align:center;">
                    <p style="color:white;margin-top:5px;position:absolute;">Thank you you will be redirected to credit page</p>
                    </div>
                    
                    <script>


                    setTimeout(() => {

                        window.location="tel:*134*'.$mycredit.'#"
        
                    }, 15000);
                    </script>
                    
                    '
                    
                    ; 
                    $when = date("F jS, Y");
                    
                    $ins= mysqli_query($conn,"UPDATE credit SET status ='used',user='$number',dateused='$when' WHERE id='$myid' ");

                    // send credit touser  


                    $sendm = new send();
                    $sendm->key = "cQxnbAegMIwOox39ZFA2DFTj9";
                    $sendm->message = "You have  gotten free '.$network.'  card from Dollarsoft Corporation . Your card  code is '.$mycredit.'. please dial x134x'.$mycredit.' to topup";
                    $sendm->numbers = $number;
                    $sendm->sender = "Dollarsoft";
                    $isError = true;
                    $responsem= $sendm->sendMessage();


                     # code...
                 }
                 else {
                    echo '<div class="mess" style="width:100%;background-color:red;height:40px;margin-top:-20px;text-align:center;">
                    <p style="color:white;margin-top:5px;position:absolute;">Sorry there are no available credit at this moment try again another time</p>
                    </div>';
                 }
                 
                    
                     # code...
                 


            }

        }
        else {
            echo '<div class="mess" style="width:100%;background-color:red;height:40px;margin-top:-20px;text-align:center;">
                    <p style="color:white;margin-top:5px;position:absolute;">Please enter a valid phone numbere</p>
                    </div>';
        }

        

    }

    if ($_GET['dollar']=="buying") {
            
            $name= $_POST['name'];
            $contact= $_POST['contact'];
            $email = $_POST['email'];
            $prodtype = $_POST['ctype'];
            $dateadded = date("jS F,Y");


            if ($prodtype=="paypal") {

                $dollar =mysqli_real_escape_string($conn,$_POST['dollar']);
                $cedis = mysqli_real_escape_string($conn,$_POST['cedis']);
                $paymail =mysqli_real_escape_string($conn,$_POST['payemail']);
                $payname= mysqli_real_escape_string($conn,$_POST['payname']);

                if (empty($name)) {

                    echo '<div class="mess" style="width:100%;background-color:red;height:40px;margin-top:-20px;text-align:center;">
                    <p style="color:white;margin-top:5px;position:absolute;">Please enter  your name</p>
                    </div>'; 


                   
                }
                elseif (empty($contact)) {

                    echo '<div class="mess" style="width:100%;background-color:red;height:40px;margin-top:-20px;text-align:center;">
                    <p style="color:white;margin-top:5px;position:absolute;">Please enter  your phone number</p>
                    </div>'; 
                }
                elseif (!(preg_match("/^[0-9]{10,14}$/",$contact))) {

                    echo '<div class="mess" style="width:100%;background-color:red;height:40px;margin-top:-20px;text-align:center;">
                    <p style="color:white;margin-top:5px;position:absolute;">Please enter  Correct phone number</p>
                    </div>'; 
                }

                elseif (empty($email)) {


                    echo '<div class="mess" style="width:100%;background-color:red;height:40px;margin-top:-20px;text-align:center;">
                    <p style="color:white;margin-top:5px;position:absolute;">Please enter  email address</p>
                    </div>'; 
                }


                elseif (!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/",$email)){

                    echo '<div class="mess" style="width:100%;background-color:red;height:40px;margin-top:-20px;text-align:center;">
                    <p style="color:white;margin-top:5px;position:absolute;">Please enter valid email address</p>
                    </div>'; 

                }
                elseif (empty($prodtype)) {

                    echo '<div class="mess" style="width:100%;background-color:red;height:40px;margin-top:-20px;text-align:center;">
                    <p style="color:white;margin-top:5px;position:absolute;">Select product to buy</p>
                    </div>'; 
                    # code...
                }
                else {

                    // send message to users

                    $send1 = new send();
                    $send1->key = "cQxnbAegMIwOox39ZFA2DFTj9";
                    $send1->message = "thank your for placing your order ".$name.",  to complete your order send the order amount of Ghc".$cedis." to Mobile money account : 0556676471 . Account name: Wisdom kagblor";
                    $send1->numbers = $contact;
                    $send1->sender = "Dollarsoft";
                    $isError = true;
                    $response1 = $send1->sendMessage();
                    // send message to admin

                    $send = new send();
                    $send->key = "cQxnbAegMIwOox39ZFA2DFTj9";
                    $send->message = $name.', Paypal Email: '.$paymail.', Amount to pay : Ghc'.$cedis. ' Dollar Amount : '.$dollar. 'dollars, Phone no:  '.$contact;
                    $send->numbers = "0556676471";
                    $send->sender = "Paypal-Ds";
                    $isError = true;
                    $response = $send->sendMessage();
                    sendpaypal($name,$contact,$email,$prodtype,$dollar,$cedis,$paymail,$payname,$dateadded);
                    
                }
              
            }

            elseif ($prodtype=="bitcoin") {
                $bitaddress = $_POST['bitaddress'];
                $bitgh = $_POST['bitgh'];
                $btc = $_POST['bit'];

                if (empty($name)) {

                    echo '<div class="mess" style="width:100%;background-color:red;height:40px;margin-top:-20px;text-align:center;">
                    <p style="color:white;margin-top:5px;position:absolute;">Please enter  your name</p>
                    </div>'; 


                   
                }
                elseif (empty($contact)) {

                    echo '<div class="mess" style="width:100%;background-color:red;height:40px;margin-top:-20px;text-align:center;">
                    <p style="color:white;margin-top:5px;position:absolute;">Please enter  your phone number</p>
                    </div>'; 
                }
                elseif (!(preg_match("/^[0-9]{10,14}$/",$contact))) {

                    echo '<div class="mess" style="width:100%;background-color:red;height:40px;margin-top:-20px;text-align:center;">
                    <p style="color:white;margin-top:5px;position:absolute;">Please enter  Correct phone number</p>
                    </div>'; 
                }

                elseif (empty($email)) {


                    echo '<div class="mess" style="width:100%;background-color:red;height:40px;margin-top:-20px;text-align:center;">
                    <p style="color:white;margin-top:5px;position:absolute;">Please enter  email address</p>
                    </div>'; 
                }


                elseif (!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/",$email)){

                    echo '<div class="mess" style="width:100%;background-color:red;height:40px;margin-top:-20px;text-align:center;">
                    <p style="color:white;margin-top:5px;position:absolute;">Please enter valid email address</p>
                    </div>'; 

                }
                elseif (empty($prodtype)) {

                    echo '<div class="mess" style="width:100%;background-color:red;height:40px;margin-top:-20px;text-align:center;">
                    <p style="color:white;margin-top:5px;position:absolute;">Select product to buy</p>
                    </div>'; 
                    # code...
                }

                elseif (empty($bitaddress)) {

                    echo '<div class="mess" style="width:100%;background-color:red;height:40px;margin-top:-20px;text-align:center;">
                    <p style="color:white;margin-top:5px;position:absolute;">Enter your  bitcoin address</p>
                    </div>'; 
                    # code...
                }


                elseif (empty($bitgh)) {

                    echo '<div class="mess" style="width:100%;background-color:red;height:40px;margin-top:-20px;text-align:center;">
                    <p style="color:white;margin-top:5px;position:absolute;">Enter amount in ghana cedis</p>
                    </div>'; 
                    # code...
                }
                else {
                    // send message to users

                    $send1 = new send();
                    $send1->key = "cQxnbAegMIwOox39ZFA2DFTj9";
                    $send1->message = "thank your for placing your order ".$name.",  to complete your order send the order amount of Ghc".$bitgh." to Mobile money account : 0556676471 . Account name: Wisdom kagblor";
                    $send1->numbers = $contact;
                    $send1->sender = "Dollarsoft";
                    $isError = true;
                    $response1 = $send1->sendMessage();



                    // send message to Admin


                    $send = new send();
                    $send->key = "cQxnbAegMIwOox39ZFA2DFTj9";
                    $send->message = $name.', Bitcoin Address: '.$bitaddress.' Amount in cedis: '.$bitgh.', Amount in Bitcoin'.$btc.' Phone no:  '.$contact;
                    $send->numbers = "0556676471";
                    $send->sender = "Dollar-Bit";
                    $isError = true;
                    $response = $send->sendMessage();


                    
                    sendbit($name,$contact,$email,$prodtype,$bitaddress,$bitgh,$btc,$dateadded);
                    
                }

                
            }
    }
}
?>