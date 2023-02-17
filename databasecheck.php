<?php

include 'databaseconnection/_database.php';

$sql = "SELECT * FROM `employeedetails` ";
$result = mysqli_query($conn,$sql);
$fetchname = mysqli_fetch_array($result , MYSQLI_ASSOC);
//$fetchname = mysqli_fetch_all($result , MYSQLI_ASSOC);
echo $fetchname['f_name'];


?> 