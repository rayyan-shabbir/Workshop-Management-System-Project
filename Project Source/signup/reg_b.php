<?php

session_start();

$server = "localhost";
$username = "root";
$passsword = "";
$db = "workshop";

$con = mysqli_connect($server, $username, $passsword, $db);

if(!$con) {
    die("Connection to db failed due to " . mysqli_connect_error());
}

// echo "Connection Successfull";

$username = $_POST['username'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$usertype = 'user';
$passsword = $_POST['password'];

$sql = "INSERT INTO `workshop`.`login` (`username`, `phone`, `email`, `usertype`, `password`) VALUES ('$username', '$phone', '$email', '$usertype', '$passsword');";

if($con->query($sql) == true) {
    $message = "Successfully Signed Up";

    $_SESSION['loginMessage'] = $message;

    header("location:reg.php");
} else {
    echo "ERROR: $sql <br> $con->error";
}

$con->close();

?>