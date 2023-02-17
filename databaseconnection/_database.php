<?php 

$servername ="localhost";
$username = "root";
$password = "";
$db_name = "adminpanel";

//creation of connection

$conn = new mysqli($servername , $username , $password , $db_name);

//Check Connection

if($conn -> connect_error){
    die("Connection Failed:".$conn->connect_error);

}else{  
    
}




?>