<?php

// include 'databaseconnection/_database.php';

// $s_no = $_GET['s_no'];

// $sql = "SELECT `s_no`, `employee_name`, `salaray_pkr`, `salaray_month` FROM `salarydetails` WHERE s_no=48";
// $update_salary = mysqli_query($conn, $sql);
// $fetch = mysqli_fetch_array($update_salary);


// echo $fetch['salaray_pkr'];

?>





<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Add Personal Info</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
    
    <!-- Side NavBar -->

   <?php include "Navbar.php";?>
    <!-- Horizontal NavBar -->
    <?php include "HorizontalNavbar.php"; ?>


    <?php

include 'databaseconnection/_database.php';

$s_no = $_GET['s_no'];


if(count($_POST)>0){

 $sql_salaray_update = "UPDATE `salarydetails` SET `salaray_pkr`='".$_POST['salaray_pkr_input']."',`salaray_month`='".$_POST['emp_month_input']."' WHERE `s_no` = '".$s_no."'";

 $update_salaray = mysqli_query($conn , $sql_salaray_update);

// $sql = "SELECT `s_no`, `employee_name`=".$_POST['employee_name_input'].", `salaray_pkr`=".$_POST['salaray_pkr_input'].", `salaray_month`=".$_POST['emp_month_input']." FROM `salarydetails` WHERE s_no=$s_no";
// $update_salary = mysqli_query($conn, $sql);
// $fetch = mysqli_fetch_array($update_salary);

$message = '<div class="alert alert-success" role="alert">
<b>Record Updated!</b> New Record has been Updated  
</div>';

}

$sql = "SELECT `s_no`, `employee_name`, `salaray_pkr`, `salaray_month` FROM `salarydetails` WHERE s_no= $s_no";
$update_salary = mysqli_query($conn, $sql);
$fetch = mysqli_fetch_array($update_salary);



echo '

    <!-- Forum Start -->
    <h1 class="h3 mb-5 text-gray-900 m-5">Add Salary Of Employees</h1>
    <div class="container">
    ';  if(isset($message)){
       echo $message;
    } echo '
        <form action="" method="POST">

            <div class="form-row">


                <div class="form-group col-md-3">
                    <label for="inputState">Employee Name</label>
                   
                    
                        <input disabled type="text" class="form-control" name="employee_name_input" id="employee_name_input" value="'.$fetch['employee_name'].'">
                       
                   
                </div>
                <div class="form-group col-md-3">
                    <label for="inputpost">Salary of month</label>

                    <input type="text" class="form-control" name="salaray_pkr_input" id="salaray_pkr_input" value="'.$fetch['salaray_pkr'].'" name="emp_pkr" id="emp_pkr" placeholder="Pkr">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputState">Month</label>
                    <select name="emp_month_input" id="emp_month_input" class="form-control" required>
                        <option value="'.$fetch['salaray_month'].'">Choose Month</option>
                        <option>January</option>
                        <option>Feburary</option>
                        <option>March</option>
                        <option>Apirl</option>
                        <option>May</option>
                        <option>June</option>
                        <option>July</option>
                        <option>August</option>
                        <option>September</option>
                        <option>Octuber</option>
                        <option>November</option>
                        <option>December</option>
                    </select>
                </div>

            </div>



            <button type="submit" class="btn btn-danger">Submit</button>
        </form>
    </div>

    <!-- Forum Ends -->




    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <? include "logoutModel.php"; ?>
    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Employeeportal.com</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    ';
    ?>

</body>

</html>


