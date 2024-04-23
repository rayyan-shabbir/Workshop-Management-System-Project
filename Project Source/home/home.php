<?php

$server = "localhost";
$username = "root";
$passsword = "";
$db = "workshop";

$con = mysqli_connect($server, $username, $passsword, $db);

if(!$con) {
    die("Connection to db failed due to " . mysqli_connect_error());
}

// echo "Successfully Connected to db";

$name = $_POST['name'];
$email = $_POST['email'];
$find = $_POST['find'];
$newsletter = $_POST['newsletter'];
$message = $_POST['message'];

$sql = "INSERT INTO `workshop`.`contact` (`name`, `email`, `find`, `newsletter`, `message`, `dt`) VALUES ('$name', '$email', '$find', '$newsletter', '$message', current_timestamp());";

if($con->query($sql) == true) {
    // echo "Successfully inserted";
    header("location:home.html");
} else {
    echo "ERROR: $sql <br> $con->error";
}

$con->close();
?>

<!-- INSERT INTO `home` (`sno`, `name`, `email`, `find`, `newsletter`, `line`, `dt`) VALUES (NULL, 'testname', 'this@this.com', 'Friends', 'yes', 'This is a good website', '2022-07-31 16:07:06.000000');-->

