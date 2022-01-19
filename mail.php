
<?php

$to      = "onyambusamson@gmail.com";

$subject = "Test Mail";

$message = "This is a test email";

echo mail($to, $subject, $message);