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

$cnic = $_GET['cnic'];

$sql = "select * from employee where cnic = '".$cnic."' ";

$result = mysqli_query($con, $sql);

$row = mysqli_fetch_array($result);

// echo $result;

// echo $row['name'];
// echo $cnic;


$name = $row['name'];
$contact = $row['contact'];
$post = $row['post'];
$qual = $row['qualification'];
$exp = $row['experience'];

// echo $name;
// echo $cnic;
// echo $contact;
// echo $post;
// echo $qual;
// echo $exp;

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width", initial-scale="1.0">
        <title>Edit Update</title>
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="edit_update1.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    </head>
        <body>
            <header>
                <div class="logo">
                    <img src="images/lo.png" height="150" width="200">
                </div>
            </header>
           <div id="container">
            <div class="loginbox">
                    <form action="edit_update_employee_b.php" method="get">
                        <h1>Update Details</h1><br>
                        <p>Enter Name</p>
                        <input type="text" name="name" value="<?php echo $name ?>" required="required"><br>
                        <p>Enter Cnic</p>
                        <input type="text" name="cnic" value="<?php echo $cnic ?>" required="required"><br>
                        <p>Enter Contact</p>
                        <input type="phone" name="contact" value="<?php echo $contact ?>" required="required"><br>
                        <p>Enter Post</p>
                        <input type="text" name="post" value="<?php echo $post ?>" required="required"><br>
                        <p>Enter Qualification</p>
                        <input type="text" name="qual" value="<?php echo $qual ?>" required="required"><br>
                        <p>Enter Experience</p>
                        <input type="text" name="exp" value="<?php echo $exp ?>" required="required"><br>
                        <!-- <button type="button">Reset</button> -->
                        <!-- <input type="button" name="reset" value="Reset"> -->
                        <button class="btn" name="update">Update Details</button>
                        <br><br>
                    </form>
            </div>
           </div>

        </body>  
</html>
