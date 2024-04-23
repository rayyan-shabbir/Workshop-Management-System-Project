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

$sql = "select * from vehicle";

$result = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Al-Rhombus Nuts and Bolts | Customer's Vehicles Information</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@600&family=Bree+Serif&family=Merriweather:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style_cars_info1.css">
</head>
<body>
    <section id="info">

    <h1 style="font-size: 4.6rem;">Customer's Vehicles Details</h1>

    <div>
    <table align="center" border="1px" style="width: 1300px; line-height: 40px;">
        <tr>
            <th colspan="7"><h2 style="font-size: 3.2rem;">Vehicles Information</h2></th>
        </tr>

        <tr>
            <th style="font-size: 1.5rem;">NAME</th>
            <th style="font-size: 1.5rem;">EMAIL</th>
            <th style="font-size: 1.5rem;">VEHICLE TYPE</th>
            <th style="font-size: 1.5rem;">VEHICLE MODEL</th>
            <th style="font-size: 1.5rem;">ENGINE TYPE</th>
            <th style="font-size: 1.5rem;">BOOKING DATE</th>
        </tr>

        <?php 
            while($rows = mysqli_fetch_assoc($result)) 
            {
        ?>
                <tr>
                    <td> <?php echo $rows['name']?> </td>
                    <td><a href="#"> <?php echo $rows['email']?> </a></td>
                    <td> <?php echo $rows['vehicle_type']?> </td>
                    <td> <?php echo $rows['vehicle_model']?> </td>
                    <td> <?php echo $rows['engine_type']?> </td>
                    <td> <?php echo $rows['dt']?> </td>
                </tr>
        <?php        
            }
        ?>
    </table>

    </div>

    </section>
</body>
</html>