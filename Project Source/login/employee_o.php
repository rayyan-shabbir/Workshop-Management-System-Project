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

$sql = "select * from employee";

$result = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Al-Rhombus Nuts & Bolts | Employee's Details</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@600&family=Bree+Serif&family=Merriweather:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style_employeee111.css">
</head>
<body>
    <section id="info">

    <h1 style="font-size: 4.6rem;">Our Employee's Details</h1>

    <!-- <div>  -->

    <div>
    <table align="center" border="1px" style="width: 1320px; line-height: 40px;">
        <tr>
            <th colspan="10"><h2 style="font-size: 2.8rem;">Employee's Information</h2></th>
        </tr>

        <tr>
            <th style="font-size: 1.2rem;">SNO.</th>
            <th style="font-size: 1.2rem;">NAME</th>
            <th style="font-size: 1.2rem;">CNIC</th>
            <th style="font-size: 1.2rem;">CONTACT</th>
            <th style="font-size: 1.2rem;">POST</th>
            <th style="font-size: 1.2rem;">QUALIFICATION</th>
            <th style="font-size: 1.2rem;">EXPERIENCE</th>
            <th style="font-size: 1.2rem;">HIRE DATE</th>
            <th colspan="2" style="font-size: 1.2rem;">OPERATIONS</th>
        </tr>

        <?php 
            while($rows = mysqli_fetch_assoc($result)) 
            {
        ?>
                <tr>
                    <td> <?php echo $rows['sno']?> </td>
                    <td> <?php echo $rows['name']?> </td>
                    <td><a href="#"> <?php echo $rows['cnic']?> </a></td>
                    <td> <?php echo $rows['contact']?> </td>
                    <td> <?php echo $rows['post']?> </td>
                    <td> <?php echo $rows['qualification']?> </td>
                    <td> <?php echo $rows['experience']?> </td>
                    <td> <?php echo $rows['dt']?> </td>

                    <td><a href= "edit_update_employee.php?cnic=<?php echo $rows['cnic'] ?>" class="operation1"> Edit/Update </td>

                    <td><a href= "delete_employee.php?cnic=<?php echo $rows['cnic']?>" class="operation2" onclick='return checkDelete()'> Delete </td>
                </tr>
        <?php        
            }
        ?>
    </table>

    </div>

    </section>

<script>
function checkDelete() {
    return confirm("Do you really want to delete this record?");
}
</script>
</body>
</html>
