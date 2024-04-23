<?php
    error_reporting(0);
    session_start();

    if(!isset($_SESSION['usertype'])) {
        header("location:login.php");
    }

    if($_SESSION['usertype'] != "user") {
        header("location:login.php");
    }

    // echo $_SESSION['email'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/grid.css">
    <link rel="stylesheet" type="text/css" href="style/start_project.css">
    <!-- <link rel="stylesheet" type="text/css" href="C:/Users/DELL/hamaad's pogram/.vscode/userpage/ionicons.min.css"> -->
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <title>Al-Rhombus Nuts & Bolts | Warsha Al-Haizum لسيلنة السيارات | Welcome to User Screen</title>
</head>

<body>
    <section id=" start">

        <nav>
            <img src="pic/new-logo.png" alt="">
            <button><a href="login.php">LOG OUT</a></button>
            <!-- </label> -->
            <!-- <img src="logo.jpg" alt="logo" style="height: 65px; width: 200px; padding-left: 50px;  padding-top: 10px;"> -->
            <!-- <label class="logo"><img src="logo.jpg" alt="logo" style="height: 50px; width: 150px;"></label> -->
            <ul>
                <li><a href=""> Home</a></li>
                <li><a href="#PAKAGES-INFO"> Packages</a></li>
                <li><a href="#service-form"> Vehicle Info </a></li>
                <li><a href="#booking-form"> Get Service</a></li>
                <li><a href="#services-info"> Services</a></li>
                <li><a href="#information-about">Info </a></li>
            </ul>
        </nav>
    </section>
        <section id="page">
        <div class="text">
            <h3 style="color: white; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Welcome <strong><span style="color: orangered;"> User </span></strong></h3>
            <h1 style=" font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: 58px; margin-left: 20px;">  <strong><span style="color:red"> AL-Rhombus</span> <span style="color: white;">Nuts </span>  <span style="color:red">and Bolts</span> </strong></h1>
            <p><strong>Because good <span style="color:red; font-weight:bold; text-decoration: underline;">Driving</span> is everything we need...</strong></p>
        </div>
    </section>

    <div class="pakages">
        <h1>Packages</h1>
        <p>GET THE BEST DISCOUNT NOW</p>
    </div>
    <section id="PAKAGES-INFO">
        <div class=" container">

            <div class="con" id="item-1">Combo Offer!<div class="into" id="in-1"> RS.42000/-
                    <div class="type">
                        <p>Basic</p>
                    </div>
                </div>

                <div class="list">
                    <ul>
                        <li>Computerized scanning</li>
                        <li>Throttle body service</li>
                        <li> Injector cleaning</li>
                        <li> Spark plugs cleaning and gapping</li>
                        <li>All filters, oil, coil & leakage inspection</li>
                        <li> MAP, MAF, O2 or IAT Sensor cleaning</li>
                        <li>Brakes service</li>
                        <li style="background :rgb(138, 21, 21); color: white;">LIMITED OFFER</li>
                        <li class="free">GET FREE APPOINTMENT NOW !!!</li>


                    </ul>
                </div>
            </div>
            <div class="con" id="item-2">Combo Offer!<div class="into" id="in-2"> RS.65000/-
                    <div class="type">
                        <p>Advanced</p>
                    </div>
                </div>
                <div class="list">

                    <ul>
                        <li> Computerized scanning</li>
                        <li>Throttle body service</li>
                        <li> Spark plugs cleaning and gapping</li>
                        <li>All filters, oil, coil & leakage inspection</li>
                        <li> MAP, MAF, O2 or IAT Sensor cleaning</li>
                        <li>Catalytic converter cleaning</li>
                        <li>Engine decarbonizing or intake valve cleaning</li>
                        <li style="background :rgba(17, 49, 145, 0.661); color: white;">LIMITED OFFER</li>
                        <li class="free">GET FREE APPOINTMENT NOW !!!</li>

                    </ul>
                </div>
            </div>
            <div class="con" id="item-3">Combo Offer!<div class="into" id="in-3"> RS.80000/-
                    <div class="type">
                        <p>Premium</p>
                    </div>
                </div>
                <div class="list">

                    <ul>

                        <li>Throttle body service</li>
                        <li>All filters, oil, coil & leakage inspection</li>
                        <li> MAP, MAF, O2 or IAT Sensor cleaning</li>
                        <li>Catalytic converter cleaning</li>
                        <li>ERG Cleaning</li>
                        <li>Battery test and diagnosis</li>
                        <li>Battery pack volt correction</li>
                        <li style="background:rgba(30, 96, 121, 0.99); color: white;">LIMITED OFFER</li>
                        <li class="free">GET FREE APPOINTMENT NOW !!!</li>
                    </ul>
                </div>
            </div>



            <!-- <br><br><br> -->
            <div class="pkg_pic">
                <div class="pic" id="pic-1">  Engine Overhaul 
                   
                    <div class="add">
                        <img src="pic/engine_overhaul.jpg" alt="engine_overhaul">
                    </div>
                    <din id="para-1">
                        <p>Car engine overhaul and  maintenance on
                            regular basis will prevent you from
                            critical issues and increase the lifespan
                            of automobile parts. Car engines are not
                            built to  give high performance forever.
                            Engine lifespan can decrease if you don't 
                            provide regular engine performance checkups.
                            However, you can increase the lifespan of  your
                            car by performing regularengine overhaul and 
                            engine maintenance.
                        </p>
                    </din>
                </div>
                <div class="pic" id="pic-2">Oil Change <div class="add">
                        <img src="pic/oil change.jpg" alt="oil change">
                    </div>
                    <div id="para-2">
                        <p>
                            Regular Oil Change & Oil Filter Replacement
                            help protect yourengine and keep your car
                            running smoothly. Oil changes and filter replacement
                            help to promote maximum vehicle performance
                            and extending the life of your car. Oil is
                            liable for lubricating the operating parts
                            within your vehicle's engine whereas reducing
                            the number of friction between them.
                        </p>
                    </div>
                </div>
                <div class="pic" id="pic-3">Engine Replacement<div class="add">
                        <img src="pic/engine replacement.jpg" alt="engine_replacement">
                    </div>
                    <div id="para-3">
                        <p> AL-Rhombus Nuts and Bolts Workshop provide
                            a range of engine replacement services to
                            suit combination of your needs.We take nice
                            pride in guaranteeing <br> that each client, 
                            professionals to customers, will realize not only a
                            from proper automobile engine replacement choice
                            for them but getting help with selecting the  <br>
                            ideal engine for your vehicle.</p>
                    </div>
                </div>
                <div class="pic" id="pic-4">Car diagnosis<div class="add">
                        <img src="pic/car_diagonasis.jpg" alt="car_diagonasis">
                    </div>
                    <div id="para-4">
                        <p> AL-Rhombus Nuts and Bolts Workshop contains a
                            massive range of kit and experience to find out
                            advanced diagnostics on your car.Almost all new
                            automobiles have computers which are connected to
                            the car engines that monitor and control functions
                            like emission levels and engine temperatures. Once
                            components of the engine fail,these computers show
                            error codes which might only scan with advanced car
                             diagnostics tools.
                        </p>
                    </div>
                </div>
                <div class="pic" id="pic-5">Accident Repair<div class="add">
                        <img src="pic/repair.jpg" alt="repair">
                    </div>
                    <div id="para-5">
                        <p> We provide car accident repair services which
                            include repair of the majority components of 
                            your vehicle to confirm <br> the longevity of 
                            your automobile.Once an accident occurs your 
                            vehicle might have substantial work,rather than
                            taking it to multiple specialists you can trust <br>
                            our mechanics at AL-Rhombus Nuts and Bolts 
                            Workshop to treat your automobile <br> as it was there own.
                             </p>
                    </div>
                </div>
            </div>
    </section>
  
    </section>
    <section id="service-form">
        <h1 class="heading_1">Add Vehicle Info</h1>
        <div class="book-now">
            
            <form action="user_vehicle_b.php" method="post" class="book">
                
                <label for="Name" class="book-1">Name</label>
                <input type="text" name="name" required placeholder=" Enter your name">
                <label for="Email" class="book-1">Email</label>
                <input type="email" name="email" required placeholder=" Enter your email">
                <label for="Vehicle Type" class="book-1">Vehicle Type:</label>
                <input type="text" name="vehicle_type" required placeholder=" Enter Vehicle type">
                <label  for="Vehicle Model" class="book-1">Vehicle Model:</label>
                <input type="text" name="vehicle_model" required placeholder=" Enter Vehicle Model">
                <label for="Engine Type" class="book-1">Engine Type:</label>
                <input type="text" name="engine_type" required placeholder=" Enter Engine Type">               
                <div id="book-5">
                    <!-- <input type="submit" value="Get Service" required> -->
                    <button id="Btn-form">Enter Details</button>
                </div>
            </form>
        </div>
    </section>

    <section id="services-details">
        <h1 class="vehicles-heading">Vehicle & Engine Information</h1>
        <div class="show_details">
            <a href="vehicle.php">Show Vehicle Details</a>
         </div>
    </section>
    <section id="booking-form">
        <h1 class="heading_1">Take Appointment</h1>
        <div class="book-now">
            
            <form action="user_service_b.php" method="post" class="book">
                
                <label for="Name" class="book-1">Name:</label>
                <input type="text" name="name" required placeholder=" Enter Name">
                <label  for="Email" class="book-1">Email:</label>
                <input type="email" name="email" required placeholder=" Enter Email">
                <label for="Phone" class="book-1">Phone:</label>
                <input type="number" name="phone" required placeholder=" Enter Phone">
                <label for="Address" class="book-1" id="book-adress" >Address:</label>
                <input type="text" name="address" required placeholder=" Enter Address">
                <label for="Services" class="book-1">Services:</label>
                <input type="text" name="services" required placeholder=" Enter Service">
                </p>
                <div id="book-5">
                    <!-- <input type="submit" value="Get Booking" required> -->
                    <button id="Btn-form">Get Booking</button>
                </div>
            </form>
        </div>
    </section>
    <section id="booking-details">
        <h1 class="vehicles-heading">Services & Booking Information</h1>
        <div class="show_details">
            <a href="booking.php">Show Booking details</a>
         </div>
    </section>
  
    <section id="services-info">
        <h2 id="head">OUR SERVICES</h2>
    </section>
    <section class="section-features js--section-features" id="services">
        <!-- <div class="row">
            <h2 id="service-heading">Our Services</h2>
        </div> -->

        <div class="row js--wp-1">
            <div class="col span-1-of-4 box">
                <i class="ion-model-s icon-big"></i>
                <h3 id="service-heading">Car diagnostic</h3>
                <p id="service-para">
                    Once your automobile running unhealthy or stall, you've got a check engine light flashing,
                     you're experiencing automobile driving problems or the reduced fuel economy. <br> <br>
                    <span style="color:yellow; font-weight: 800; font-size: 24px;"> Price:<u>RS.10000/-</u></span>
                </p>
            </div>
            <div class="col span-1-of-4 box">
                <i class="ion-settings icon-big"></i>
                <h3 id="service-heading">Engine Analysis</h3>
                <p id="service-para">
                    This service monitors engine and lubricant conditions to detect premature wear. and contamination.
                     Monitoring engine and lubricant conditions helps you detect problems. <br>  <br>
                    <span style="color:yellow; font-weight: 800; font-size: 24px;"> Price:<u>RS.8500/-</u></span>
                </p>
            </div>
            <div class="col span-1-of-4 box">
                <i class="ion-wrench icon-big"></i>
                <h3 id="service-heading">Engine overhaul</h3>
                <p id="service-para">
                    During an overhaul, your mechanic disassembles the engine and then evaluates the
                     condition of the internal components to identify the source of the problems and fix them. <br>  <br>
                    <span style="color:yellow; font-weight: 800; font-size: 24px;"> Price:<u>RS.12000/-</u></span>
                </p>
            </div>
            <div class="col span-1-of-4 box">
                <i class="ion-gear-a icon-big"></i>
                <h3 id="service-heading">Oil change</h3>
                <p id="service-para">
                    The process of draining old and then replacing it with clean and a fresh oil filter.
                     Like most lubricating and cooling fluids that help vehicles run, engine oil eventually needs to be changed. <br> <br>
                    <span style="color:yellow; font-weight: 800; font-size: 24px;"> Price:<u>RS.2000/-</u></span>
                </p>
            </div>


        </div>

        <div class="row js--wp-1">
            <div class="col span-1-of-4 box">
                <i class="ion-android-sync icon-big"></i>
                <h3 id="service-heading">Engine replacement</h3>
                <p id="service-para">
                    An engine or a major part of one that is sold individually without any other parts
                     required to make a functional car. These engines are produced as aftermarket parts or as reproductions of an engine.. <br> <br>
                    <span style="color:yellow; font-weight: 800; font-size: 24px;"> Price:<u>RS.27000/-</u></span>
                </p>
            </div>
            <div class="col span-1-of-4 box">
                <i class="ion-android-done-all icon-big"></i>
                <h3 id="service-heading">Tune up</h3>
                <p id="service-para">
                    It includes cleaning or replacing the spark plugs and, on older cars, the distributor cap and rotor. Tune-ups may also 
                    include replacement of the fuel filter, oxygen sensor and spark plug wires. <br> <br>
                    <span style="color:yellow; font-weight: 800; font-size: 24px;"> Price:<u>RS.7000/-</u></span>
                </p>
            </div>
            <div class="col span-1-of-4 box">
                <i class="ion-ios-toggle icon-big"></i>
                <h3 id="service-heading">Belt replacement</h3>
                <p id="service-para">
                    A serpentine belt is not the same thing as a timing belt. The serpentine belt and timing belt have 
                    very different functions in your vehicle. <br> <br>
                    <span style="color:yellow; font-weight: 800; font-size: 24px;"> Price:<u>RS.5400/-</u></span>
                </p>
            </div>
            <div class="col span-1-of-4 box">
                <i class="ion-ios-book icon-big"></i>
                <h3 id="service-heading">schedule service</h3>
                <p id="service-para">
                    It will allow you to make an appointment with your desired
                     mechanic for a specific service they need. <br> <br>
                    <span style="color:yellow; font-weight: 800; font-size: 24px;"> Price:<u>RS.8000/-</u></span>
                </p>
            </div>
        </div>

        <div class="row js--wp-1">
            <div class="col span-1-of-4 box">
                <i class="ion-waterdrop icon-big"></i>
                <h3 id="service-heading">Fluid services</h3>
                <p id="service-para">
                    It is the application of a piping system, considering the combination of fluid properties
                     (the fluid nature such as flammability, toxicity, etc.), operating condition, and other factors. <br> <br>
                    <span style="color:yellow; font-weight: 800; font-size: 24px;"> Price:<u>RS.6500/-</u></span>
                </p>
            </div>
            <div class="col span-1-of-4 box">
                <i class="ion-power icon-big"></i>
                <h3 id="service-heading">Trip Inspections</h3>
                <p id="service-para">
                    It includes inspection and examination of your vehicle's major systems and parts,
                     in order to reduce road accidents' risks. <br>  <br>
                    <span style="color:yellow; font-weight: 800; font-size: 24px;"> Price:<u>RS.5500/-</u></span>
                </p>
            </div>
            <div class="col span-1-of-4 box">
                <i class="ion-steam icon-big"></i>
                <h3 id="service-heading">Hose replacement</h3>
                <p id="service-para">
                    It involves to analysis of the hose and identify the situation 
                    by disconnecting the power supply of that system. <br>  <br>
                    <span style="color:yellow; font-weight: 800; font-size: 24px;"> Price:<u>RS.11000/-</u></span>
                </p>
            </div>
            <div class="col span-1-of-4 box">
                <i class="ion-ios-color-filter icon-big"></i>
                <h3 id="service-heading">Air filter change</h3>
                <p id="service-para">
                    This is generally every 12,000 to 15,000 miles, depending on your vehicle. If you have driven more than that since the last time you replaced the air filter, 
                    it's probably time to get it changed. <br>  <br>
                    <span style="color:yellow; font-weight: 800; font-size: 24px;"> Price:<u>RS.9000/-</u></span>
                </p>
            </div>
        </div>
    </section>
    <section id="information-about">
        <div class="foot">
            <h2 class=" footer-heading2">FOR MORE INFORMATION</h2>
            <!-- <img src="pic/new-logo.png" alt="logo"> -->
            <h3 class="footer-heading3">AL-Rhombus Nuts and Bolts</h3>
            <div class="image">
                <a href="https://en.wikipedia.org/wiki/Automobile_repair_shop" target="_blank"
                    rel="noopener noreferrer"><i class="ion-social-google social"></i></a>

                <a href="http://www.facebook.com" target="_blank" rel="noopener noreferrer"><i
                        class="ion-social-facebook social"></i></a>

                <a href="http://www.twitter.com" target="_blank" rel="noopener noreferrer"> <i
                        class="ion-social-twitter social"></i></a>

                <a href="http://www.instagram.com" target="_blank" rel="noopener noreferrer"> <i
                        class="ion-social-instagram-outline  social"></i></a>
            </div>
            <div class="info">
                <p>
                    Visit our website and Enjoy life.
                </p>
            </div>
        </div>


        <footer>
            <a href="#page">&copy; &nbsp; copyright 2022| AL-Rhombus Nuts and Bolts | All rights reserved</a>

        </footer>
    </section>

</body>

</html>