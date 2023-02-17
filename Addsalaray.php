<?php

include 'databaseconnection/_database.php';

$sql = "SELECT * FROM `employeedetails` ";
$result = mysqli_query($conn, $sql);
$fetchname = mysqli_fetch_all($result, MYSQLI_ASSOC);
//echo $fetchname['f_name'];


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

    <?php include 'Navbar.php'; ?>
    <!-- Horizontal NavBar -->
    <?php include 'HorizontalNavbar.php'; ?>


    <!-- Forum Start -->
    <h1 class="h3 mb-5 text-gray-900 m-5">Add Salary Of Employees</h1>
    <div class="container">
        <form action="Addsalaryfunc.php" method="POST">

            <div class="form-row">


                <div class="form-group col-md-3">
                    <label for="inputState">Employee Name</label>
                    <select name="emp_name" id="inputState" class="form-control" required>
                        <option value="Username">Choose here</option>
                        <?php foreach ($fetchname as $option) { ?>
                            <option><?php echo $option['f_name']; echo '&nbsp'; echo $option['l_name'];?></option>
                        <?php }
                        ?>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="inputpost">Salary of month</label>

                    <input type="text" class="form-control" name="emp_pkr" id="emp_pkr" placeholder="Pkr">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputState">Month</label>
                    <select name="emp_month" id="emp_month" class="form-control" required>
                        <option value="Month">Choose Month</option>
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
    <?php include 'logoutModel.php' ?>
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

</body>

</html>