<?php

    $name=$_POST['Name'];
    $visitor_email=$_POST['Email'];
    $message=$POST['Message'];

    $email_from=''; // Your ebsite email address.
    $email_subject='New form submission';
    $email_body="User Name: $name.\n"
                    "User Email: $visitor_email.\n"
                        "User Message: $message.";
    
    $to=''; //Email on which you want to recieve mails.
    $header="From $email_from \r\n";
    $header="Reply to $visitor_email \r\n"

    mail($to,$email_subject,$email_body,$header);
    header("Location: Contact Us.html")


?>