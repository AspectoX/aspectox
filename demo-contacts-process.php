<?php
    if( isset($_POST['name']) ){
        $to = 'aspectox.creativa@gmail.com'; // Replace with your email	
        $subject = 'Mensaje desde aspectox'; // Replace with your $subject
        $headers = 'From: ' . $_POST['email'] . "\r\n" . 'Reply-To: ' . $_POST['email'];	

        $message = 'Name: ' . $_POST['name'] . "\n" .
                   'E-mail: ' . $_POST['email'] . "\n" .
                   'Subject: ' . $_POST['subject'] . "\n" .
                   'Message: ' . $_POST['message'];

        mail($to, $subject, $message, $headers);	
        if( $_POST['copy'] == 'on' ){
            mail($_POST['email'], $subject, $message, $headers);
        }
         header("location:contacto.php");
    }else{
        echo '<h3>error mensaje no enviado</h3>';
    }
?>