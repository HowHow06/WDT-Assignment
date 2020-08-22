<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Restaurant | Register</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="./fontawesome-free-5.14.0-web/css/all.css">
    <script src="./fontawesome-free-5.14.0-web/js/all.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/login.css">
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="img/res_logo.png" height=50>My Restaurant</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="login.php" class="nav-link active">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="register.php" class="nav-link">Sign Up</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Verification Message -->
    <div class="modal-dialog text-center">
        <div class="col-md-12 main-section">
            <div id="verify" class="modal-content">
                <div class="col-md-12 user-img">
                    <img src="img/res_logo.png" width="130" height="120">
                </div>
                <div id="verify-sub" class="col-md-12 text-center">
                    <h2>Please verify your email</h2>
                    <br>
                    <h5>You're almost there! We sent an email to</h5>
                    <!-- href="reset_password.php" -->
                    <!-- href="register_form.php" -->
                    <p><a href="register_form.php">Abcde12345@segment.com</a></p>
                    <h5>Just click on the link in that email to complete your sign up.
                        If you don’t see it, you may need to check your spam folder.</h5>
                    <!-- Just click on the link in that email to reset your password.
                    If you don’t see it, you may need to check your spam folder. -->
                    <br><br>
                    <h5>Still can’t find the email?</h5>
                    <button class="btn">Resend Email</button>
                </div>
                <br><br>


                <div class="row" id="verify-bottom">
                    <div class="col-md-6" style="text-align: right;">
                        <h5>Need help?</h5>
                    </div>
                    <div class="col-md-6" style="text-align: left; top: -3px; left: -18px;"><a href="#">Contact Us?</a></div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container-fluid padding">
            <div class="row text-center padding">
                <div class="col-12 social padding">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>

        <div class="container-fluid padding">
            <div class="row text-center">
                <div class="col-md-4">
                    <a id="logo_a" href="index.php"><img src="img/res_logo_invert.png" width="65">My Restaurant</a>
                    <hr class="light">
                    <a href="#">03-8869 9498</a><br><br>
                    <a href="#">myrestaurant@gmail.com</a><br><br>
                    <p>100 Bukit Jalil</p>
                    <p>Kuala Lumpur, Kuala Lumpur, 57000</p>
                </div>

                <div class="col-md-4">
                    <!DOCTYPE html>
                    <html lang="en">

                    <head>
                        <meta charset="UTF-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <title>My Restaurant | Register</title>
                        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
                        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
                        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
                        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
                        <link rel="stylesheet" href="./fontawesome-free-5.14.0-web/css/all.css">
                        <script src="./fontawesome-free-5.14.0-web/js/all.js"></script>
                        <link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2:wght@500&display=swap" rel="stylesheet">
                        <link rel="stylesheet" href="./css/login.css">
                    </head>

                    <body>
                        <!-- Navigation -->
                        <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
                            <div class="container-fluid">
                                <a class="navbar-brand" href="index.php"><img src="img/res_logo.png" height=50>My Restaurant</a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarResponsive">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item">
                                            <a href="login.php" class="nav-link active">Login</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="register.php" class="nav-link">Sign Up</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>

                        <!-- Verification Message -->
                        <div class="modal-dialog text-center">
                            <div class="col-md-12 main-section">
                                <div id="verify" class="modal-content">
                                    <div class="col-md-12 user-img">
                                        <img src="img/res_logo.png" width="130" height="120">
                                    </div>
                                    <div id="verify-sub" class="col-md-12 text-center">
                                        <h2>Please verify your email</h2>
                                        <br>
                                        <h5>You're almost there! We sent an email to</h5>
                                        <!-- href="reset_password.php" -->
                                        <!-- href="register_form.php" -->
                                        <p><a href="register_form.php">Abcde12345@segment.com</a></p>
                                        <h5>Just click on the link in that email to complete your sign up.
                                            If you don’t see it, you may need to check your spam folder.</h5>
                                        <!-- Just click on the link in that email to reset your password.
                    If you don’t see it, you may need to check your spam folder. -->
                                        <br><br>
                                        <h5>Still can’t find the email?</h5>
                                        <button class="btn">Resend Email</button>
                                    </div>
                                    <br><br>


                                    <div class="row" id="verify-bottom">
                                        <div class="col-md-6" style="text-align: right;">
                                            <h5>Need help?</h5>
                                        </div>
                                        <div class="col-md-6" style="text-align: left; top: -3px; left: -18px;"><a href="#">Contact Us?</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <footer>
                            <div class="container-fluid padding">
                                <div class="row text-center padding">
                                    <div class="col-12 social padding">
                                        <a href="#"><i class="fab fa-facebook"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="container-fluid padding">
                                <div class="row text-center">
                                    <div class="col-md-4">
                                        <a id="logo_a" href="index.php"><img src="img/res_logo_invert.png" width="65">My Restaurant</a>
                                        <hr class="light">
                                        <a href="#">03-8869 9498</a><br><br>
                                        <a href="#">myrestaurant@gmail.com</a><br><br>
                                        <p>100 Bukit Jalil</p>
                                        <p>Kuala Lumpur, Kuala Lumpur, 57000</p>
                                    </div>

                                    <div class="col-md-4">
                                        <hr class="light">
                                        <h5>Our Hours</h5>
                                        <hr class="light">
                                        <p>Monday: 9am - 5pm</p>
                                        <p>Saturday: 10am - 4pm</p>
                                        <p>Sunday: closed</p>
                                    </div>

                                    <div class="col-md-4">
                                        <hr class="light">
                                        <h5>Service Area</h5>
                                        <hr class="light">
                                        <p>Kuala Lumpur, 57000</p>
                                        <p>Shah Alam, 40000</p>
                                        <p>Subang Jaya, 47600</p>
                                        <p>Batu Caves, 68100</p>
                                    </div>

                                    <div class="col-12">
                                        <hr class="light">
                                        <a href="#">&copy; myrestaurant.com</a>
                                    </div>
                                </div>
                            </div>
                        </footer>
                    </body>

                    </html>
                    <hr class="light">
                    <h5>Our Hours</h5>
                    <hr class="light">
                    <p>Monday: 9am - 5pm</p>
                    <p>Saturday: 10am - 4pm</p>
                    <p>Sunday: closed</p>
                </div>

                <div class="col-md-4">
                    <hr class="light">
                    <h5>Service Area</h5>
                    <hr class="light">
                    <p>Kuala Lumpur, 57000</p>
                    <p>Shah Alam, 40000</p>
                    <p>Subang Jaya, 47600</p>
                    <p>Batu Caves, 68100</p>
                </div>

                <div class="col-12">
                    <hr class="light">
                    <a href="#">&copy; myrestaurant.com</a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>