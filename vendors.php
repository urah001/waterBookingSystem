<!DOCTYPE html>
<html lang="en">
<?php
require_once("connection/connect.php");
error_reporting(E_ALL); // Enable for dev only
session_start();
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Browse water vendors and order clean water easily.">
    <meta name="author" content="YourCompany">
    <link rel="icon" href="images/icn.png">
    <title>Water Vendors</title>

    <!-- CSS Files -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <header id="header" class="header-scroll top-header headrom">
        <nav class="navbar navbar-dark">
            <div class="container">
                <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse"
                    data-target="#mainNavbarCollapse">&#9776;</button>
                <a class="hero-text navbar-brand" style="font-family:oblique;" href="index.php">
                    VendorDrops
                    <!-- <img class="img-rounded" src="images/icn.png" alt="">  -->
                </a>
                <div class="collapse navbar-toggleable-md float-lg-right" id="mainNavbarCollapse">
                    <ul class="nav navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link active" href="vendors.php">Water Vendors</a></li>
                        <?php if (empty($_SESSION["user_id"])): ?>
                            <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
                            <li class="nav-item"><a href="registration.php" class="nav-link">Register</a></li>
                        <?php else: ?>
                            <li class="nav-item"><a href="your_orders.php" class="nav-link">My Orders</a></li>
                            <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="page-wrapper">
        <!-- Top Steps -->
        <div class="top-links">
            <div class="container">
                <ul class="row links">
                    <li class="col-xs-12 col-sm-4 link-item active"><span>1</span><a href="#">Choose Vendor</a></li>
                    <li class="col-xs-12 col-sm-4 link-item"><span>2</span><a href="#">Select Water Type</a></li>
                    <li class="col-xs-12 col-sm-4 link-item"><span>3</span><a href="#">Book & Pay</a></li>
                </ul>
            </div>
        </div>

        <!-- Banner Image -->
        <div class="inner-page-hero bg-image" data-image-src="images/img/water-bg.jpg">
            <div class="container"></div>
        </div>

        <!-- Water Vendors -->
        <section class="restaurants-page">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="bg-gray restaurant-entry">
                            <div class="row">
                                <?php
                                $query = mysqli_query($db, "SELECT * FROM vendors");
                                while ($vendor = mysqli_fetch_array($query)) {
                                    echo '
                                <div class="col-sm-12 col-md-8 text-center text-sm-left">
                                    <div class="entry-logo">
                                        <a class="img-fluid" href="services.php?res_id=' . $vendor['rs_id'] . '">
                                            <img src="admin/Res_img/' . $vendor['image'] . '" alt="Vendor Logo">
                                        </a>
                                    </div>
                                    <div class="entry-dscr">
                                        <h5><a href="services.php?res_id=' . $vendor['rs_id'] . '">' . $vendor['title'] . '</a></h5>
                                        <span>' . $vendor['address'] . '</span>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4 text-center">
                                    <div class="right-content bg-white">
                                        <div class="right-review">
                                            <a href="services.php?res_id=' . $vendor['rs_id'] . '" class="btn btn-purple">View Services</a>
                                        </div>
                                    </div>
                                </div>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="bottom-footer">
                <div class="row">
                    <div class="col-xs-12 col-sm-3 payment-options color-gray">
                        <h5>Payment Options</h5>
                        <ul>
                            <li>
                                <a href="#"> <img src="images/paypal.png" alt="Paypal"> </a>
                            </li>
                            <li>
                                <a href="#"> <img src="images/mastercard.png" alt="Mastercard"> </a>
                            </li>
                            <li>
                                <a href="#"> transfer </a>
                            </li>
                            <li>
                                <a href="#"> <img src="images/maestro.png" alt="Maestro"> </a>
                            </li>
                            <li>
                                <a href="#"> POS </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-4 address color-gray">
                        <h5>Address</h5>
                        <p>1086 Water Lane, Okene, Kogi State</p>
                        <h5>Phone: +234 812 345 6789</h5>
                    </div>
                    <div class="col-xs-12 col-sm-5 additional-info color-gray">
                        <h5>Why Choose Us</h5>
                        <p>Trusted by thousands for quick and clean water delivery services. Book anytime from nearby
                            vendors.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/foodpicky.min.js"></script>
</body>

</html>