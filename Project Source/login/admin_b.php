<?php

    if(isset($_POST['name'])) {

        $server = "localhost";
        $username = "root";
        $password = "";
        $db = "workshop";

        $con = mysqli_connect($server, $username, $password, $db);

        if(!$con) {
            die("connection to this database failed due to " . mysqli_connect_error());
        }

        // echo "Successfully connected to db";

        $name = $_POST['name'];
        $cnic = $_POST['cnic'];
        $contact = $_POST['contact'];
        $post = $_POST['post'];
        $qualification = $_POST['qualification'];
        $experience = $_POST['experience'];

        $sql = "INSERT INTO `workshop`.`employee` (`name`, `cnic`, `contact`, `post`, `qualification`, `experience`, `dt`) VALUES ('$name', '$cnic', '$contact', '$post', '$qualification', '$experience', current_timestamp());
        ";

        // echo "$sql";

        if($con->query($sql) == true) {
            // echo "Successfully inserted";
            header("location:admin.php");
        } else {
            echo "ERROR: $sql <br> $con->error";
        }

        $con->close();
    }
?>



