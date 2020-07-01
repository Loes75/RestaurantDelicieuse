<?php 
    if(isset($_POST['submit'])){
        $to = "anacor1540@gmail.com"; // this is my Email address
        $from = $_POST['email']; // this is the sender's Email addres
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $time = $_POST['time'];
        $date = $_POST['date'];
        $person = $_POST['person'];
        if(empty($from) || empty($name) || empty($phone) || empty($time) || empty($date) || empty($person)){
            echo "You must filled all the data";
        }else{
            $subject = "Reservation at Délicieuse";
            $message2 = "This mail is a copy of your reservation."."\n Name: ".$name."\n Email: ".$from." \n phone: ".$phone." \n  date:".$date." \n  time".$time."\n  # person:".$person;
            $message = "This mail is sent from your web page."."\n Name: ".$name."\n Email: ".$from." \n phone: ".$phone." \n  date:".$date." \n  time".$time."\n  # person:".$person;
            $headers = "From:" . $from;
            $headers2 = "From:" . $to;
            mail($to,$subject,$message,$headers);
            mail($from,$subject,$message2,$headers2); // sends a copy of the message to the sender
            echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
            //header('Location: index.html');
        }       
            
    }
    
?>