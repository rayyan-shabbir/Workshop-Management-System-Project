<?php

$server = "localhost";
$username = "root";
$password = "";
$db = "workshop";

$con = mysqli_connect($server, $username, $password, $db);

if(!$con) {
    die("Connection to db failed due to " . mysqli_connect_error());
}

// echo "Connection Successfull";

$email = $_GET['em'];

// echo $email;


$sql = "DELETE FROM login WHERE email = '".$email."'";

$result = mysqli_query($con, $sql);

if($result) {
    echo "<font color='green'> Record Deleted from Database";

?>

<META HTTP-EQUIV="Refresh" CONTENT="4; URL=http://localhost/workshop/ws/login/member_o.php">

<?php

} else {
    echo "<font color='green'> Failed to Delete Record from Database";
}


?>