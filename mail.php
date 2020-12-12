<?php 

if (isset($_POST['submit'])) {
    $to = $_POST['mail']; 
    $subject = $_POST['subject'];
    $message = $_POST['msg'];
    $from = "nithuthiyyary@gmail.com";
    $headers = "From:" . $from;

    if (mail($to, $subject, $message, $headers)) {
        echo "Mail Sent.";
    }
    else {
        echo "failed";
    }
}

?>