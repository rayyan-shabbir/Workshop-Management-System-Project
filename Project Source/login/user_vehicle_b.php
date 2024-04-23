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
$vehicle_type = $_POST['vehicle_type'];
$vehicle_model = $_POST['vehicle_model'];
$engine_type = $_POST['engine_type'];

$sql = "INSERT INTO `workshop`.`vehicle` (`name`, `email`, `vehicle_type`, `vehicle_model`, `engine_type`, `dt`) VALUES ('$name', '$email', '$vehicle_type', '$vehicle_model', '$engine_type', current_timestamp());";

if($con->query($sql)) {
    echo "Sucessfully inserted";
} else {
    echo "ERROR: $sql <br> $con->error";
}

$con->close();

?>

<!-- INSERT INTO `user` (`sno`, `name`, `email`, `phone`, `adress`, `services`, `dt`) VALUES (NULL, 'testname', 'this@this.com', '9999999999', 'sima wali chowk, ABC', 'Tune up', '2022-08-01 13:45:52.000000'); -->