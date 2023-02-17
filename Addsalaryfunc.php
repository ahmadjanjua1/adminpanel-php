<?php

include 'databaseconnection/_database.php';


$emp_name = $_REQUEST['emp_name'];
$emp_pkr = $_REQUEST['emp_pkr'];
$emp_month = $_REQUEST['emp_month'];

if($emp_name=='Username' || $emp_month=='Month'){

    header("location: addsalaray.php?usernotadded ");

}else{


$sql = "INSERT INTO `salarydetails`(`s_no`, `employee_name`, `salaray_pkr`, `salaray_month`) VALUES ('[value-1]','$emp_name','$emp_pkr','$emp_month')";
$row = mysqli_query($conn, $sql);

if($row == 1 ){
    header("location: addsalaray.php?$emp_name");
}else{
    echo"Something went Wrong! Please see some logic issue here";
}

}

?>
