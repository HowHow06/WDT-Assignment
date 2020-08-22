<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Restaurant | Enter User Details</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="./fontawesome-free-5.14.0-web/css/all.css">
    <script src="./fontawesome-free-5.14.0-web/js/all.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/register.css">
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

    <!-- Register Form -->
    <div class="modal-dialog text-center">
        <div class="col-md-12 main-section">
            <div id="user_info" class="modal-content">
                <div class="col-md-12 user-img">
                    <img src="img/res_logo.png" width="130" height="120">
                </div>
                <hr class="light">

                <div class="row">
                    <div class="col-md-12">
                        <h2>User Infomation</h2>
                    </div>
                </div>
                <form action="" class="col-md-12">
                    <div class="form-group" id="email">
                        <input type="text" class="form-control" placeholder="Email Address (Auto Fill)" disabled>
                    </div>
                    <div class="form-group" id="userid">
                        <input type="text" class="form-control" placeholder="Username">
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4 form-group" id="tel">
                            <select class="form-control">
                                <option value="malaysia">+60</option>
                                <option value="brunei">+080</option>
                                <option value="china">+181</option>
                                <option value="canada">+8</option>
                            </select>
                        </div>
                        <div class="col-md-8 form-group" id="contact"><input type="text" class="form-control" placeholder="Contact No."></div>
                    </div>
                    <br>
                    <div class="form-group" id="password">
                        <input type="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group" id="re-password">
                        <input type="password" class="form-control" placeholder="Re-Enter Password">
                    </div>
                    <div class="col-md-12 checkbox">
                        <input type="checkbox">
                        <label>Show Password</label>
                    </div>
                    <button class="btn col-md-12" type="button" onclick="location.href='login.php';">Create New Account</button>
                </form>

                <p>By clicking Create new account, you agree our <a href="#"> Terms and Conditions.</a></p>
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