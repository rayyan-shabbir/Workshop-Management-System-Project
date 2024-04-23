<?php
session_start();
error_reporting(0);

$server = "localhost";
$username = "root";
$password = "";
$db = "workshop";

$con = mysqli_connect($server, $username, $password, $db);

if(!$con) {
    die("Connection to db failed due to " . mysqli_connect_error());
}

// echo "Connection Successfull";


$email = $_SESSION['email'];
$password = $_GET['password'];
$cnfrm_password = $_GET['cnfrm_password'];

// echo $email;
// echo $password;
// echo $cnfrm_password;

if($password == $cnfrm_password) {
    $sql = "UPDATE login SET password = '".$password."' WHERE email = '".$email."' ";
        
    $result = mysqli_query($con, $sql);
    
        
    if($result) {
        echo "<script>alert('Your Password has been updated Successfully')</script>";
    } else {
        echo "Failed to Update";
    }
} else {
    echo "<script>alert('Failed to Update. Confirm Password does not match')</script>";
}
    


?>