<?php
    error_reporting(0);
    session_start();

    if(!isset($_SESSION['usertype'])) {
        header("location:login.php");
    }

    if($_SESSION['usertype'] != "owner") {
        header("location:login.php");
    }
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Omnifood is a premium food delivery service with the mission to bring affordable and healty meals to as many people as possible.">
        
        <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/animate.css">
        <link rel="stylesheet" type="text/css" href="resources/css/style1.css">
        <link rel="stylesheet" type="text/css" href="resources/css/queries.css">
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,300italic' rel='stylesheet' type='text/css'>
        <title>Al-Rhombus Nuts & Bolts | Welcome to Owner Screen</title>
        
        <link rel="apple-touch-icon" sizes="57x57" href="/resources/favicons/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/resources/favicons/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/resources/favicons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/resources/favicons/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/resources/favicons/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/resources/favicons/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/resources/favicons/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/resources/favicons/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/resources/favicons/apple-touch-icon-180x180.png">
        <link rel="icon" type="image/png" href="/resources/favicons/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="/resources/favicons/favicon-194x194.png" sizes="194x194">
        <link rel="icon" type="image/png" href="/resources/favicons/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="/resources/favicons/android-chrome-192x192.png" sizes="192x192">
        <link rel="icon" type="image/png" href="/resources/favicons/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="/resources/favicons/manifest.json">
        <link rel="shortcut icon" href="/resources/favicons/favicon.ico">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-TileImage" content="/resources/favicons/mstile-144x144.png">
        <meta name="msapplication-config" content="/resources/favicons/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">
        
    </head>
    <body>
        <header id="home">
            <nav>
                <div class="row">
                    <img src="resources/img/new logo.png" alt="rhombus logo logo" class="logo">
                    <img src="resources/img/new logo.png" alt="rhombus logo" class="logo-black">
                    <ul class="main-nav js--main-nav">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#services">Members Info</a></li>
                        <li><a href="#contacts">Contact Info</a></li>
                        <li><a href="#employees">Employees info</a></li>
                    </ul>
                    <div id="login">
                        <li><a href="login.php"><strong>Log out</strong></a></li>
                        <!-- <li><a id="sign-up" href="#"><strong>SignUp</strong></a></li> -->
                    </div>
                    
                    <a class="mobile-nav-icon js--nav-icon"><i class="ion-navicon-round"></i></a>
                </div>
            </nav>
            <div class="project-title">
                <p><strong>Hey! <span id="owner-name">Owner</span> </strong></p>
            </div>
            <div class="project-name">
                <p><strong>Al-Rhombus <span style="color: white;">Nuts</span> and Bolts</strong></p>
            </div>
            <div class="hero-text-box">
                <h1><strong>Because good <span id="home-auto"><strong>Driving</strong></span>  is everything we need!</strong></h1>
            </div>
            
        </header>

        <section class="section-features js--section-features" id="services">
            <div class="row">
                <h2 id="service-heading">Our Members</h2>
            </div>
            
            <div class="whole-about">
                
                    
                <div class="row">
                    <div class="col span-1-of-2">
                        <div class="about-text-box">
                            <h3>About our members</h3>
                            <p class="about-para-1">
                                Making the customer the hero of our story.
                            </p>
                            <p class="about-para-2">
                               <strong>Al-Rhombus Nuts And Bolts</strong> has the Hallmark of being the first online automotive workshop of Pakistan. 
                            </p>
                            <p class="about-para-3">
                                Next up, we will look at the current number of website users using investor data on daily and monthly active accounts accessed via the website or a mobile device.  
                            </p>
            
                            <!-- <a class="btn btn-ghost" href="history.html">Details ></a> -->
                            <button class="btn btn-full js--scroll-to-plans" id="button"><a href="member_o.php" style="color:white;">Member Details > ></button>
                        </div>
                    </div> 
                    <div class="col span-1-of-2 "> 
                        <img class="about-img-1" src="resources/img/members.jpg" alt="about photo">
                        
                            
                        </div> -->
                    </div>
                </div>            
            
            </div>     
            
        </section>

        <section class="section-features js--section-features" id="contacts">   
            <div class="row">
                <h2>contacts info</h2>
            </div>
            <div class="whole-about">
                <div class="col span-1-of-2 "> 
                    <img class="contacts-img-1" src="resources/img/OIP.jpg" alt="about photo">
                
                </div>
                    
                <div class="row">
                    <div class="col span-1-of-2">
                        <div class="contacts-text-box">
                            <h3>About our contacts</h3>
                            <p class="about-para-1">
                                Making the customer the hero of our story.
                            </p>
                            <p class="about-para-2">
                                Al-Rhombus Nuts And Bolts is doing their best in communicating with people around the country.
                            </p>
                            <p class="about-para-3">
                                We can look at contact information data by clicking on the link below 👇 
                            </p>
            
                            <button class="btn btn-full js--scroll-to-plans" id="button"><a href="contact_o.php" style="color:white;">Contact Details > ></button>
                        </div>
                    </div> 
                </div>            
            </div>     
        </section>

        <section class="section-features js--section-features" id="employees">   
            <div class="row">
                <h2>Our Employees</h2>
            </div>
            <div class="whole-about">
                
                    
                <div class="row">
                    <div class="col span-1-of-2">
                        <div class="about-text-box">
                            <h3>About our employees</h3>
                            <p class="about-para-1">
                                Making the customer the hero of our story.
                            </p>
                            <p class="about-para-2">
                               <strong>Al-Rhombus Nuts And Bolts</strong> has strong and friendly relations with its employees. 
 
                            </p>
                            <p class="about-para-3">
                                Following, we can take a look at the employee data and their work progress.  
                            </p>
            
                            <!-- <a class="btn btn-ghost" href="history.html">Details ></a> -->
                            <button class="btn btn-full js--scroll-to-plans" id="button"><a href="employee_o.php" style="color:white;">Employee Details > ></button>
                        </div>
                    </div> 
                    <div class="col span-1-of-2 "> 
                        <img class="about-img-1" src="resources/img/employee.jpg" alt="about photo">
                    </div>
                </div>            
            
            </div>     
        </section>

        
        <footer>
            <div class="row">
                <div class="col span-1-of-2">
                    <ul class="footer-nav">
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Press</a></li>
                        <li><a href="#">iOS App</a></li>
                        <li><a href="#">Android App</a></li>
                    </ul>
                </div>
                <div class="col span-1-of-2">
                    <ul class="social-links">
                        <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                        <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                        <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                        <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <p>
                    <strong>Call us: </strong>(+92)313-4418405, <br> (+92)313-4418405

                </p>
            </div>

            <div class="row">
                <p>
                    Copyright &copy; 2022 by Al-Rhombus Nuts and Bolts. All rights reserved.
                </p>
            </div>
        </footer>
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
    <script src="//cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.jsdelivr.net/selectivizr/1.0.3b/selectivizr.min.js"></script>
    <script src="vendors/js/jquery.waypoints.min.js"></script>
    <script src="resources/js/script.js"></script>
    
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-61026110-2', 'auto');
      ga('send', 'pageview');

    </script>
    
    </body>  
    
</html>