<?php
require_once "books.php";
$link = new mysqli($Hn , $User , $Pass , $Db );

// Check if the form is submitted
if ( isset( $_POST['submit'] ) ) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $query = $_POST['message'];
    $submit = "INSERT INTO `client` (`name` , `email` ,`query`,`timestamp`) VALUES ('$name' , '$email' , '$query','timeStamp(date)')";
    $link->query($submit);
    //mail sending
    $to = 'hello@zelta.com';
    $subject = 'Marriage Proposal';
    $message = $query; 
    $from = $email;
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: '.$from.'<'.$from.'>' . "\r\n".'Reply-To: '.$from."\r\n" . 'X-Mailer: PHP/' . phpversion();
    $message = '<!doctype html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport"
                        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <title>Client</title>
            </head>
            <body>
            <span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;">'.$message.'</span>
                <div class="container">
                    '.$message.'<br/>
                    Regards<br/>
                    '.$from.'
                </div>
            </body>
            </html>';
    $result = @mail($to, $subject, $message, $headers);

    echo '<script>alert("Email sent successfully !")</script>';
    echo '<script>window.location.href="index.php#contactUs";</script>';
}
$link->close();
?>