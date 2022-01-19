<?php
$to = 'onyambusamson@gmail.com';
$subject = 'Marriage Proposal';
$message = 'Hi Jane, will you marry me?'; 
$from = 'hello@zeltatech.com';

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
            <title>Document</title>
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

echo '<script>alert("Email sent successfully to <?php $to ?> !")</script>';
echo '<script>window.location.href="index.php";</script>';