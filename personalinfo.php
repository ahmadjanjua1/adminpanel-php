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
    <h1 class="h3 mb-5 text-gray-900 m-5">Add Personal Information Of Employees</h1>
    <div class="container">
        <form action="/adminpanel/program_process/insertinfo.php" method ='POST'>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">First Name</label>
                    <input type="text" class="form-control" name="first_name" id="f_name" placeholder="First Name" >
                </div>
                <div class="form-group col-md-6">
                    <label for="inputLname">Last Name</label>
                    <input type="text" class="form-control" name="last_name" id="l_name" placeholder="Last Name">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputpost">Post in Company</label>
                    <input type="text" class="form-control" name="company_post" id="company_post" placeholder="Post">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputpost">Date of Join</label>
                    <input type="date" class="form-control" name="dateofjoin_emp"  id="dateofjoin_emp" placeholder="Post">
                </div>
            </div>
            <div class="form-row">
            <div class="form-group col-md-10">
                    <label for="inputAddress">Address</label>
                <input type="text" class="form-control" name="address_emp" id="address_emp" placeholder="Type Address Here">
                
            </div>
            <div class="form-group col-md-1">
                    <label for="inputCity">Age</label>
                    <input type="text" class="form-control" name="age_emp" id="age_emp"  placeholder="Age">
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">City</label>
                    <input type="text" class="form-control" name="city_emp" id="city_emp"  placeholder="City">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">Status</label>
                    <select name="status_emp" id="status_emp" class="form-control" required>
                        <option value="Status Not Selected">Select Status</option>
                        <option value='Permanent'>Permanent</option>
                        <option value='Temporary'>Temporary</option>
                    </select>
                </div>

                <div class="form-group col-md-2">
                    <label for="inputZip">Zip</label>
                    <input type="text" class="form-control" name="zip_emp" id="zip_emp">
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12 bg-light text-right">
            <button type="submit" class="btn btn-danger ">Submit</button>
       
    </div>
    </div>
    </div>
   
    </form>

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