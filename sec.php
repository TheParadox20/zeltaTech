<?php
require_once "books.php";
$link = new mysqli($Hn , $User , $Pass , $Db );

// Check if the form is submitted
if ( isset( $_POST['submit'] ) ) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $query = $_POST['message'];
    $submit = "INSERT INTO `client` (`name` , `email` ,`query`,`timestamp`) VALUES ('$name' , '$email' , '$query','timeStamp(date)')";
    //$link->query($submit);
} else{
    echo "message NOT detected";
}
$link->close();
include 'mail.php';
include 'index.php';
?>