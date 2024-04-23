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

$name = $_GET['name'];
$cnic = $_GET['cnic'];
$contact = $_GET['contact'];
$post = $_GET['post'];
$qual = $_GET['qual'];
$exp = $_GET['exp'];

// echo $cnic;

$sql = "update employee set name = '".$name."', cnic = '".$cnic."', contact = '".$contact."', post = '".$post."', qualification = '".$qual."', experience = '".$exp."' where cnic = '".$cnic."'";

$result = mysqli_query($con, $sql);

if($result) {
    echo "<font color='green'> Record Updated Successfully";

?>

<META HTTP-EQUIV="Refresh" CONTENT="4; URL=http://localhost/workshop/ws/login/employee_o.php">

<?php

} else {
    echo "Failed to update";

?>

<META HTTP-EQUIV="Refresh" CONTENT="4; URL=http://localhost/workshop/ws/login/employee_o.php">

<?php
}

?>