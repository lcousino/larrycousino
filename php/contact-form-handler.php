<?php
    $visitor_name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $visitor_message = $_POST['message'];

    $email_from = 'me@larrycousino.com';

    $email_subject = 'Message from portfolio site';

    $email_body = "Name: $visitor_name.\n".
                    "Email: $visitor_email.\n".
                        "Message: $visitor_message.\n";

    $to = "lawrence.cousino@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");
?>