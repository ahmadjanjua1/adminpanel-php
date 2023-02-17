 <?php



include 'databaseconnection/_database.php';
include 'alert.php';




$username = $_POST[ 'user'];
$passwords = $_POST['pass'];

//For preventing from SQL Injection we will use this to inbuild functions

$username = stripcslashes($username);
$passwords = stripcslashes($passwords);

$username = mysqli_real_escape_string($conn , $username);

$passwords = mysqli_real_escape_string($conn , $passwords);


$sql = "select *from signin where user_name = '$username' and password = '$passwords'";  


$result = mysqli_query($conn , $sql);

$row = mysqli_fetch_array($result , MYSQLI_ASSOC);

$count = mysqli_num_rows($result);

if($count==1 ){
    
    session_start();
    $_SESSION['username'] = $username;
    header("Location: index.php?$username");
    exit();

}else{
   
   header('Location: wrongpasslogin.php');
    

    
}




?> 