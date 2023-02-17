<?php

include 'databaseconnection/_database.php';

$sql = "SELECT * FROM `employeedetails`";
$connection = mysqli_query($conn, $sql);
$fetchdata = mysqli_fetch_all($connection, MYSQLI_ASSOC);
//$s_no   =$option['s_no']
//echo $fetch['f_name'];

?>






<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Tables</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <?php include 'Navbar.php'; ?>
    <?php include 'HorizontalNavbar.php'; ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Employee Details</h1>
        <p class="mb-4">This table contains all the information about employee that are working for the organization
           </p>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-8">
                <h6 class="m-1 font-weight-bold text-danger">DataTable</h6>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Position</th>
                                <th>Status</th>
                                <th>Email</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Edit/See Details</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tbody>
                                <?php foreach ($fetchdata as $option) { ?>
                                    <tr> <?php echo '
                                        <td> '.$option["f_name"].'
                                            </td>
                                        <td> '.$option["l_name"].'
                                           </td>
                                           <td> '.$option["company_post"].'
                                           </td>
                                           <td> '.$option["status_emp"].'
                                           </td>
                                        <td>'.$option["email_emp"].'
                                            </td>
                                        <td> '. $option["age_emp"].'
                                            </td>
                                        <td>  '.$option["dateofjoin_emp"].'
                                            </td>
                                            
                                        <td> 
                                   
                                        <a href="empdetails_edit.php?s_no='.$option['s_no'].'&f_name='.$option["f_name"].'&l_name='.$option["l_name"].'&company_post='.$option["company_post"].'&email_emp='.$option["email_emp"].'&age_emp='.$option["age_emp"].'&dateofjoin_emp='.$option["dateofjoin_emp"].'&address_emp='.$option["address_emp"].'"
                                        
                                        type="submit" class="btn btn-success" > Update</a>
                                        <a href="empdetails_delete.php?s_no='.$option['s_no'].'"
                                        
                                        type="submit" class="btn btn-danger" > Delete</a>
                                            
                                        </td>
                                     

                                    </tr>
                                    '; ?>
                                <?php  } // &f_name =$option["f_name"] &  company_post = $option["company_post"] & email_option = $option["email_emp"] & age_emp = $option["age_emp"] & dateofjoin_emp = $option["dateofjoin_emp"]"?>

                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

  




    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Your Website 2020</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-danger" href="login.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>