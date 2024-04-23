<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Al-Rhombus Nuts & Bolts | Warsha Al-Haizum لسيلنة السيارات | Sign Up</title>
        <link rel="stylesheet" type="text/css" href="regg1.css">
        <body>
            <section>
            <button id="btn" class="btn btn-full"><a href="../home/home.html"> <<< Back To Home Page</a></button>
                <div class="image">
                    <img src="images/lo.png" height="150" width="200">
                </div>
                <div class="content">
                    <h1>Welcome to <br><span>Al-Rhombus Nuts & Bolts</span></h1>
                <p class="par">
                    Because good <span>Driving </span>is everything we need!
                </p>
                <h2>Sign Up Yourself Now!</h2>
                </div>
            </section>
                
            <div class="loginbox">
                <img src="images/avatar.jpg" class="logo">
                    <form action="reg_b.php", method="post">
                    <h3>
                       <?php
                            session_start();
                            session_destroy();
                            error_reporting(0);

                            echo $_SESSION['loginMessage'];
                       ?>
                    </h3>
                        <p>Username</p>
                        <input type="text" name="username" placeholder="Enter full name" required="required"><br>
                        <br>
                        <p>Mobile Number</p>
                        <input type="tel" name="phone" placeholder="Enter mobile number" required="required"><br>
                        <br>
                        <p>Email Address</p>
                        <input type="email" name="email" placeholder="Enter email address" required="required"><br>
                        <br>
                        <!-- <p>UserType</p>
                        <input type="text" name="usertype" placeholder="Enter User-type"><br>
                        <br> -->
                        <p>Password</p>
                        <input type="password" name="password" placeholder="Password" required="required"><br>
                        <br>
                        <input type="checkbox" id="terms" required="required">
                        <label for="terms">I agree to all <a href="./terms/terms.html">terms and conditions</a></label>
                        <br>
                        <br>
                        <button class="btn">Register</button>
                        <br>
                        <br>
                        <br>
                        <div class="social">
                            <p><span>Or sign up with</span></p>
                                <a href="http::facebook.com" class="fa fa-facebook"></a>
                                <a href="http::twitter.com" class="fa fa-twitter"></a>
                                <a href="http::google.com" class="fa fa-google"></a>
                        </div>
                        <br>
                        <p><span>Already have an account?</span></p><a href="../login/login.php" class="t-login">Login here</a><br>
                    </form>
            </div>
            <footer>
                <p>
                    Depending on the consent that you give us, this information may or may not be associated with you. If you have consented to receive email newsletters from us, we will also record information regarding your interaction with it (such as whether you open, click on a link or forward the email message)
 
                </p>
            </footer>
        </body>
    </head>
</html>