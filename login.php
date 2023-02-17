<?php
//echo $_SERVER['REQUEST_TIME'];
session_start();

include 'databaseconnection/_database.php';



if($_SERVER["REQUEST_METHOD"] == 'POST'){

$user = $_POST[ 'email'];
$password = $_POST['pass']; //variable containing password

$user = stripcslashes($user);
$password = stripcslashes($password);

$user = mysqli_real_escape_string($conn , $user);

$password = mysqli_real_escape_string($conn , $password); //final variable with password

$pass_hash = hash("sha256",$password);

$sql = "SELECT * from signup where email = '$user' and password = '$pass_hash'";  


$result = mysqli_query($conn , $sql);
$fetch = mysqli_fetch_array($result);

$row = mysqli_fetch_array($result , MYSQLI_ASSOC);

$count = mysqli_num_rows($result);



if($count==1 ){
    
    $_SESSION['id'] = $fetch['id'];
    
    header("Location: index.php?".$_SESSION['id']);
    
    exit();

}else{
    
    echo $alert = '<div class="alert alert-danger" role="alert">
    <b>Invalid Cradentials!</b> Please Enter Your Username and Password Again
    </div>';
    
}


}








?>



<!DOCTYPE html>
<html lang="en">
<?php // print_r($_SESSION); ?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">


</head>


<body class="bg-gradient-danger">



    <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                </div>
                                <form class="user" action="login.php" method="POST">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="user" name="email" placeholder="Enter Email Here">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="pass" name="pass" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" id="customCheck">
                                            <label class="custom-control-label" for="customCheck">Remember
                                                Me</label>
                                        </div>
                                    </div>
                                    <input type="submit" value="login" class="btn btn-danger btn-user btn-block">


                                    </input>
                                </form>
                               

                                <hr>
                                <div class="text-center">
                                    <a class="small" href="login.php">Forgot Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="register.php">Create an Account!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
    
    

  

</body>

</html>