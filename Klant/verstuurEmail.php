<?php 
if(isset($_POST['submit'])){
    $to_webmaster = "thys.mere@gmail.com";
    
    $from = $_POST['email'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message =  $_POST['vraag'];
    $message2 = "Thanks for contacting Thys Groenten & Fruit. Here is a copy of your message " . $message;

    $headers = "From:" . $from;
    $headers2 = "From:" . $to_webmaster;
    
    mail($to_webmaster,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    header('location: http://thys.000webhostapp.com/contact.html');
    }
    else{echo "oops";}
?>