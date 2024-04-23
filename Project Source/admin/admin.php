<?php

    if(isset($_POST['name'])) {

        $server = "localhost";
        $username = "root";
        $password = "";

        $con = mysqli_connect($server, $username, $password);

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

        $sql = "INSERT INTO `workshop`.`admin` (`name`, `cnic`, `contact`, `post`, `qualification`, `experience`, `dt`) VALUES ('$name', '$cnic', '$contact', '$post', '$qualification', '$experience', current_timestamp());
        ";

        // echo "$sql";

        if($con->query($sql) == true) {
            echo "Successfully inserted";
        } else {
            echo "ERROR: $sql <br> $con->error";
        }

        $con->close();
    }
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Al-Rhombus Nuts and Bolts | Warsha Al-Haizum لسيلنة السيارات</title>

    <link rel="stylesheet" href="./css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@600&family=Bree+Serif&family=Merriweather:wght@300&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/7edfeceb41.js" crossorigin="anonymous"></script>


    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

</head>
<body>
    <nav id="navBar">
        <div id="logo">
            <img src="./img/logo2.png" alt="Logo.com" id="logo">
        </div>

        <ul id="navigation">
            <li><a href="#home">Home</a></li>
            <li><a href="#inventory">Inventory</a></li>
            <li><a href="#staff">Staff</a></li>
            <li><a href="#report">Reports</a></li>
            <li><a href="#admin-form">Admin Form</a></li>
        </ul>

        <div id="logOut">
            <button class="btn">Log out</button>
        </div>
    </nav>

    <section id="home">
        <div id="welcome">
            <h1 class="h1-primary">Welcome <span>Admin</span></h1>
        </div>

        <div id="title">
            <h2 class="h2-primary">Al-Rhombus <span>Nuts</span> and Bolts</h1>
        </div>

        <div id="caption">
            <p class="p1-primary">Because good <span><b><u>Driving</u></b></span> is everything we need...</p>
        </div>
    </section>

    <section id="inventory">
        <div class="h2-primary">
            <h2><span><u>Inventory</u></span> Materials</h2>
        </div>
        <div class="item">   
            <div id="item1" class="box">
                <img src="./img/inventory1.jpg" alt="">
                <h3>Wrench Screw Tools</h3>
                <span><b>Available quantity: 37 pcs</b></span>
            </div>
    
            <div id="item2" class="box">
                <img src="./img/inventory2.jpg" alt="">
                <h3>Migatronic Welding</h3>
                <span><b>Available quantity: 11 pcs</b></span>
            </div>
    
            <div id="item3" class="box">
                <img src="./img/inventory3.jpg" alt="">
                <h3>Gas radiator</h3>
                <span><b>Available quantity: 04 pcs</b></span>
            </div>
    
            <div id="item4" class="box">
                <img src="./img/inventory4.jpg" alt="">
                <h3>Cutters Millings</h3>
                <span><b>Available quantity: 09 pcs</b></span>
            </div>
    
            <div id="item5" class="box">
                <img src="./img/inventory5.jpg" alt="">
                <h3>Painting Stuffs</h3>
                <span><b>Available quantity: 211 pcs</b></span>
            </div>
    
            <div id="item6" class="box">
                <img src="./img/inventory6.jpg" alt="">
                <h3>Engine Compartment</h3>
                <span><b>Available quantity: 05 pcs</b></span>
            </div>
    
            <div id="item7" class="box">
                <img src="./img/inventory7.jpg" alt="">
                <h3>Motor Ingage</h3>
                <span><b>Available quantity: 03 pcs</b></span>
            </div>
    
            <div id="item8" class="box">
                <img src="./img/inventory8.jpg" alt="">
                <h3>Drills Equipments</h3>
                <span><b>Available quantity: 21 pcs</b></span>
            </div>
        </div>
        
    </section>

    <section id="staff">
        <h1>Our Loveable Staff</h1>
        <div class="rect">
            <div class="img">
                <img src="./img/staff1.jpg" alt="Staff1">
                <h2>Supervisor</h2>
            </div>
            <p>"I'm Shehyar Mehmood from Gujranwala. I am a Supervisor. I assign jobs to employees, and montor the results. I also conduct training workshops for employees."</p>
        </div>

        <div class="rect">
            <div class="img">
                <img src="./img/staff14.jpg" alt="Staff2">
                <h2>Accountant</h2>
            </div>
            <p>"I'm Suhana Khan from Azad Kashmir. I am an Accountant and I handle all the financial transactions and their records."</p>
        </div>

        <div class="rect">
            <div class="img">
                <img src="./img/staff10.jpg" alt="Staff3">
                <h2>Service manager</h2>
            </div>
            <p>"I'm Gulzar Nawaz from Multan. I am a Service manager. My job is to maintain records of the services provided to customers."</p>
        </div>

        <div class="rect">
            <div class="img">
                <img src="./img/staff12.jpg" alt="Staff4">
                <h2>Human Resources (HR) </h2>
            </div>
            <p>"I'm Feroze Ahmad from Gujrat. I work in the Human Resources (HR) department and my duty is to manage the employee life cycle (i.e., recruiting, training, and firing employees) and administering employee benefits."</p>
        </div>

        <div class="rect">
            <div class="img">
                <img src="./img/staff18.jpg" alt="Staff5">
                <h2>Clients manager</h2>
            </div>
            <p>"I'm Faraz from Islamabad. I am a Clients manager and my job is to deal with clients and customers, and to make them satisfy with their needs."</p>
        </div>

        <div class="rect">
            <div class="img">
                <img src="./img/staff11.jpg" alt="Staff6">
                <h2>Server Controller </h2>
            </div>
            <p>"I am Tabeer Ali from Lahore. I am a Server Administrator and I am responsible for the computer servers of our company."</p>
        </div>

        <div class="rect">
            <div class="img">
                <img src="./img/staff16.jpg" alt="Staff7">
                <h2>General automotive mechanic</h2>
            </div>
            <p>"I'm Ashiq Hussain from Toba Tek Singh. I am a General Automotive mechanic. I am an all-rounder in the field of mechanics and can deal with various issues of automobiles."</p>
        </div>

        <div class="rect">
            <div class="img">
                <img src="./img/staff13.jpg" alt="Staff8">
                <h2>General automotive mechanic</h2>
            </div>
            <p>"I'm Maqsood from Bahawalpur. I am a General Automotive mechanic and I can handle issues of every kind in any automobile."</p>
        </div>

        <div class="rect">
            <div class="img">
                <img src="./img/staff17.jpg" alt="Staff9">
                <h2>General automotive mechanic</h2>
            </div>
            <p>"I'm Qaleem Jutt from Sahiwal. I am also a General Automotive mechanic. I am well aware of variety of automobiles' complications."</p>
        </div>

        <div class="rect">
            <div class="img">
                <img src="./img/staff6.jpg" alt="Staff10">
                <h2>Tire Mechanic</h2>
            </div>
            <p>"I’m Intezar Murad from Mianwali. I am a Tire mechanic. I deal with the issues related to tires and rims."</p>
        </div>

        <div class="rect">
            <div class="img">
                <img src="./img/staff7.jpg" alt="Staff11">
                <h2>Small engine mechanic</h2>
            </div>
            <p>"I’m Lashaari from Korangi, Karachi. I am a Small Engine mechanic. I work to maintain small machineries, such as motorcycles."</p>
        </div>

        <div class="rect">
            <div class="img">
                <img src="./img/staff8.jpg" alt="Staff12">
                <h2>Heavy Equipment mechanic</h2>
            </div>
            <p>"I’m Robert D’souza from Lahore. I am a Heavy Equipment mechanic. I work to maintain heavy engines and repair them."</p>
        </div>

        <div class="rect">
            <div class="img">
                <img src="./img/staff3.jpg" alt="Staff13">
                <h2>Auto glass mechanic</h2>
            </div>
            <p>"I’m Shehzad Zubair. I am an Auto glass mechanic. I remove, repair or install glass on vehicles. Also, install windshields."</p>
        </div>

        <div class="rect">
            <div class="img">
                <img src="./img/staff15.jpg" alt="Staff14">
                <h2>Service technician</h2>
            </div>
            <p>"I’m Farhad Mudassar from Hyderabad. I am a Service Technician.I provide service to vehicles and also assess levels of oils and fluids in vehicle’s engine."</p>
        </div>

        <div class="rect">
            <div class="img">
                <img src="./img/staff9.jpg" alt="Staff15">
                <h2>Service technicians</h2>
            </div>
            <p>"I’m Rashid from Faislabaad. I am a Service Technician. I diagnose and repair operational issues."</p>
        </div>

        <div class="rect">
            <div class="img">
                <img src="./img/staff2.jpg" alt="Staff16">
                <h2>Auto body mechanic</h2>
            </div>
            <p>"I’m Bilawal from Jehlum. I am an Auto body mechanic and I help in replacing or restoring old or damaged parts of an automobile, including headlights, bumper or panels."</p>
        </div>

        <div class="rect">
            <div class="img">
                <img src="./img/staff4.jpg" alt="Staff17">
                <h2>Brake and transmission technician</h2>
            </div>
            <p>"I’m Sarfaraz Hussain from Kot Addu. I am a Brake and Transmission Technician. I can identify and fix complications with braking system, and maintain steering components."</p>
        </div>

        <div class="rect">
            <div class="img">
                <img src="./img/staff5.jpg" alt="Staff18">
                <h2>Diesel mechanic</h2>
            </div>
            <p>"I’m Hanan Zafar from Rahim Yar Khan. I’m a Diesel Mechanic and I work to maintain a variety of diesel engines, including cars, trucks and generators."</p>
        </div>

    </section>

    <section id="report">
        <div></div>
    </section>

    <section id="admin-form">
        <h1>Form</h1>
        <h2 class="h2-primary">Hire Form</h2>

        <div>
            <form action="admin.php" method="POST">
                Name: <label for="name"></label>
                <input type="text" name="name" id="name" placeholder="Name" required="required">

                CNIC: <label for="cnic"></label>
                <input type="text" name="cnic" id="cnic" placeholder="CNIC" required="required">

                Contact: <label for="contact"></label>
                <input type="text" name="contact" id="contact" placeholder="Contact" required="required">
                

                Post: <label for="post"></label>
                <select name="post" id="post">
                    <option value="default" selected>---</option>
                    <option value="manager">Supervisor</option>
                    <option value="accountant">Manager</option>
                    <option value="dealer">Server Controller</option>
                    <option value="mechanic">Accountant</option>
                    <option value="mechanic">Mechanics</option>
                </select>

                Qualification: <label for="qualification" required="required"></label>
                <input type="text" name="qualification" id="contact" placeholder="Qualification">

                Experience: <label for="experience"></label>
                <input type="text" name="experience" id="contact" placeholder="Experience">

                <button class="btn">Appoint</button>
            </form>

            <div id="img">
                <img src="./img/join.png" alt="">
            </div>
        </div>
    </section>

    <section id="end-section">
        <div id="end">
            <div class="item">
                <h2>About Us</h2>
                <p>Vehicle repairing shouldn’t be a stressful experience, and it doesn’t have to be. When consumers come to Al-Rhombus nuts and bolts, they’re met with an experienced sales staff ready to serve. We’re committed to consumer satisfaction and will always look for ways to ensure our consumers turn into happy drivers. We provide best service to our customers.</p>
            </div>
            <div class="item">
                <h2>Newsletter</h2>
                <p>Stay update with our latest</p>
                <input type="text" id="regards" placeholder="Share your thoughts">
            </div>
            <div class="item">
                <h2>Follow Us</h2>
                <p>Let us be Special</p>
                <div class="icon">
                    <a href="https://facebook.com" target="_blank">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                    <a href="https://instagram.com" target="_blank">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="https://twitter.com" target="_blank">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                    <a href="https://linkedin.com" target="_blank">
                        <i class="fa-brands fa-linkedin"></i>
                    </a>
                </div>
                <p id="login">@al-rhombus_nuts_bolts.com.au</p>
            </div>
        </div>
        <hr>
        <p>Copyright &copy; 2022 by Rhombus Nuts & Bolts | All rights reserved </p>
    </section>

    <!-- 
        INSERT INTO `admin` (`sno`, `name`, `cnic`, `contact`, `post`, `qualification`, `experience`, `dt`) VALUES ('1', 'testname', '3420187269801', '9999999999', 'Mechanics', 'matric', '1 year', '2022-07-29 17:05:10.000000');

     -->
    
</body>

</html>