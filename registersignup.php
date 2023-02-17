<?php

include 'databaseconnection/_database.php';

$f_name = $_REQUEST['f_name'];
$l_name = $_REQUEST['l_name'];
$email = $_REQUEST['email'];
$pass = $_REQUEST['password'];
$conf_pass = $_REQUEST['conf_password'];

$pass_hash = hash("sha256",$pass);
$conf_pass_hash = $pass_hash;


$sql = "INSERT INTO `signup`(`id`, `f_name`, `l_name`, `email`, `password`, `conf_password`) VALUES ('[value-1]','$f_name','$l_name','$email','$pass_hash','$conf_pass_hash')";

if(mysqli_query($conn , $sql)){
    
    header("location: login.php");
}



?>
