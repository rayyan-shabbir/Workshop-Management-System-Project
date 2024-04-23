<!-- INSERT INTO `inventories` (`sno`, `name`, `quantity`) VALUES (NULL, 'Wrench Screw Tools', '37'); -->

<?php
session_start();
$sno = $_SESSION['sno'];

$server = "localhost";
$username = "root";
$password = "";
$db = "workshop";

$con = mysqli_connect($server, $username, $password, $db);

if(!$con) {
    die("Connection to db failed due to " . mysqli_connect_error());
}

// echo "Connection Successfull";

$quantity = $_GET['quantity'];

// echo $quantity;
// echo $_SESSION['sno'];


$sql = "update inventories set quantity = '".$quantity."' where sno = 4";

$result = mysqli_query($con, $sql);

if($result) {
    // echo "Inside If";
    header("location:admin.php");
} else {
    echo "Inventory Failed to Update";
}

?>
