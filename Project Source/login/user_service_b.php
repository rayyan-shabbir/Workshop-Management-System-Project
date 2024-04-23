<?php
$server = "localhost";
$username = "root";
$paassword = "";
$db = "workshop";

$con = mysqli_connect($server, $username, $paassword, $db);

if(!$con) {
    die("Connection failed due to " . mysqli_connect_error());
}

// echo "Connection Successfull";

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$services = $_POST['services'];

$sql = "INSERT INTO `workshop`.`service` (`name`, `email`, `phone`, `adress`, `services`, `dt`) VALUES ('$name', '$email', '$phone', '$address', '$services', current_timestamp());";

if($con->query($sql)) {
    echo "Sucessfully inserted";
} else {
    echo "ERROR: $sql <br> $con->error";
}

$con->close();



?>

<!-- INSERT INTO `user` (`sno`, `name`, `email`, `phone`, `adress`, `services`, `dt`) VALUES (NULL, 'testname', 'this@this.com', '9999999999', 'sima wali chowk, ABC', 'Tune up', '2022-08-01 13:45:52.000000'); -->