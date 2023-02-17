<?php 

include '../databaseconnection/_database.php';
session_start();


$f_name = $_REQUEST['first_name'];
$l_name = $_REQUEST['last_name'];
$email = $_REQUEST['email'];
$company_post = $_REQUEST['company_post'];
$address_emp = $_REQUEST['address_emp'];
$age_emp = $_REQUEST['age_emp'];
$city_emp = $_REQUEST['city_emp'];
$status_emp = $_REQUEST['status_emp'];
$zip_emp = $_REQUEST['zip_emp'];
$dateofjoin_emp = $_REQUEST['dateofjoin_emp'];
// || empty($l_name) ||empty($email) || empty($company_post) || empty($address_emp) || empty($age_emp) || empty($city_emp) || empty($zip_emp) || empty($dateofjoin_emp) || $status_emp=="Status Not Selected"

 if(empty($f_name || empty($l_name) ||empty($email) || empty($company_post) || empty($address_emp) || empty($age_emp) || empty($city_emp) || empty($zip_emp) || empty($dateofjoin_emp) || $status_emp=="Status Not Selected")){

     header("location: ../personalinfo.php?usernotadded");

 }else{


$sql = "INSERT INTO `employeedetails`(`s_no`, `f_name`, `l_name`, `email_emp`, `company_post`, `address_emp`, `age_emp`, `city_emp`, `status_emp`, `zip_emp`, `dateofjoin_emp`) VALUES ('[value-1]','$f_name','$l_name','$email','$company_post','$address_emp','$age_emp','$city_emp','$status_emp','$zip_emp','$dateofjoin_emp')";
$check=mysqli_query($conn,"SELECT * FROM employeedetails WHERE `f_name`='$f_name' && `l_name`='$l_name' ");
$checkrows=mysqli_num_rows($check);
if($checkrows>0) {
    //echo "customer exists";
    header("location: ../personalinfo.php?employeealreadyexist");
 } else {  


if(mysqli_query($conn, $sql)){
   $message = 'employeeadded';
   header("location: ../personalinfo.php?m=$message");
} else{
    echo "ERROR: Hush! Sorry Something Went Wrong. "
        . mysqli_error($conn);
}

  

 }
}

// if(isset($_POST['submit'])){
//     $f_name = $_POST['first_name'];


 //}



//}
// Close connection
mysqli_close($conn);


?>