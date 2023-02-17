<?php

include 'databaseconnection/_database.php';
$s_no = $_GET['s_no'];
$sql = "DELETE FROM `employeedetails` WHERE s_no=$s_no";
$employee_delete = mysqli_query($conn , $sql);
header('location: empdetails_tables.php?employeedeleted');

?>