<?php

error_reporting(0);
session_start();

$server = "localhost";
$username = "root";
$password = "";
$db = "workshop";

$con = mysqli_connect($server, $username, $password, $db);

if(!$con) {
    die("Connection to db failed due to " . mysqli_connect_error());
}

// echo "Connection Successfull";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "select * from login where username = '".$username."' AND password = '".$password."'";
    
    $result = mysqli_query($con, $sql);

    $row = mysqli_fetch_array($result);

    if($row["usertype"] == "admin") {
        $_SESSION['username'] = $name;

        $_SESSION['usertype'] = "admin";

        header("location:admin.php");
    } 
    else if($row["usertype"] == "user") {
        $_SESSION['username'] = $name;

        $_SESSION['usertype'] = "user";

        $_SESSION['email'] = $row['email'];

        echo $_SESSION['email'];

        header("location:user.php");
    } 
    else if($row["usertype"] == "owner"){
        $_SESSION['username'] = $name;

        $_SESSION['usertype'] = "owner";

        header("location:owner.php");
    }
    else {
        $message = "Username or password does not match";

        $_SESSION['loginMessage'] = $message;

        header("location:login.php");
    }

}

?>