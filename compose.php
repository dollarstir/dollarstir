 <?php

 include 'send.php';

 $send = new send();
        $send->key = "cQxnbAegMIwOox39ZFA2DFTj9";
        $send->message = $message.'.. Sent by: '.$name.'| '.$contact.'  Sent on : '.$dateadded;
        $send->numbers = "0556676471";
        $send->sender = "D-Customer";
        $isError = true;
        $response = $send->sendMessage();
        ?>