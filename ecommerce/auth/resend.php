<?php 

include "../connect.php" ;
include '../mail.php';

$email = filterRequest("email");

$verfiycode     = rand(10000 , 99999); 

$data = array(
    "users_verfiycode" => $verfiycode
);

updateData("users",  $data , "users_email = '$email' ");

sendEmail($email,"Verfiy Code Your Email","Verfiy Code $verfiycode");

?>
