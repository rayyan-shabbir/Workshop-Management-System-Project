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

$sql = "select username, phone, email, usertype from login";

$result = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Al-Rhombus Nuts & Bolts | Member's Details</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@600&family=Bree+Serif&family=Merriweather:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style_memberR.css">
</head>
<body>
    <section id="info">

    <h1 style="font-size: 4.6rem;">Our Member's Details</h1>

    <div>
    <table align="center" border="1px" style="width: 1300px; line-height: 45px;">
        <tr>
            <th colspan="5"><h2 style="font-size: 3.2rem;">Member's Information</h2></th>
        </tr>

        <tr>
            <th style="font-size: 1.7rem; ">USERNAME</th>
            <th style="font-size: 1.7rem;">PHONE</th>
            <th style="font-size: 1.7rem;">EMAIL</th>
            <th style="font-size: 1.7rem;">USERTYPE</th>
            <th colspan="1" style="font-size: 1.7rem;">OPERATIONS</th>
        </tr>

        <?php 
            while($rows = mysqli_fetch_assoc($result)) 
            {
        ?>
                <tr>
                    <td> <?php echo $rows['username']?> </td>
                    <td> <?php echo $rows['phone']?> </td>
                    <td> <a href="#"> <?php echo $rows['email']; ?> </a></td>
                    <td> <?php echo $rows['usertype']?> </td>

                    <td><a href="delete_member.php?em=<?php echo $rows['email'] ?>" class="operation2" onclick=' return checkDelete()'> Delete </a></td>

                    <!-- <td><a href='delete.php?em='.$rows['email']  class="operation2"> Delete </a></td> -->
                </tr>
        <?php        
            } 
        ?>
    </table>

    </div>

    </section>

<script>
function checkDelete() {
    return confirm('Do you really want to delete this record');
}
</script>
</body>
</html>