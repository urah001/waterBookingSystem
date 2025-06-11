<!DOCTYPE html>
<html lang="en">

<?php
// Enable full error reporting for development (disable in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('html_errors', 1);

// Include database connection
require_once("connection/connect.php");

session_start();
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Online Water  ordering platform.">
    <meta name="author" content="Your Company">
    <link rel="icon" href="images/icn.png">
    <title>Home | Water Order System</title>

    <!-- External Stylesheets -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="home">

    <!-- Header Section -->
    <header id="header" class="header-scroll top-header headrom">
        <nav class="navbar navbar-dark">
            <div class="container">
                <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse"
                    data-target="#mainNavbarCollapse">
                    &#9776;
                </button>
                <a class="hero-text navbar-brand" style="font-family:oblique;" href="index.php">
                    VendorDrops
                    <!-- <img class="img-rounded" src="images/icn.png" alt="">  -->
                </a>
                <div class="collapse navbar-toggleable-md float-lg-right" id="mainNavbarCollapse">
                    <ul class="nav navbar-nav">
                        <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="vendors.php">Vendors</a></li>
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

    <!-- Hero Section -->
    <section class="hero bg-image" data-image-src="images/img/pimg.jpeg">
        <div class="hero-inner">
            <div class="container text-center hero-text font-white">
                <h1>Order Delivery & Take-Out</h1>
                <div class="banner-form">
                    <form class="form-inline">
                        <!-- Search form can be added here in future -->
                    </form>
                </div>
                <div class="steps">
                    <div class="step-item">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 483 483" width="64" height="64">
                            <path fill="#FFF" d="..."></path>
                        </svg>
                        <h4><span style="color:white;">1.</span> Choose Vendors</h4>
                    </div>

                    <div class="step-item">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 380.721 380.721" width="64" height="64">
                            <path fill="#FFF" d="..."></path>
                        </svg>
                        <h4><span style="color:white;">2.</span> Order</h4>
                    </div>

                    <div class="step-item">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 612.001 612" width="64" height="64">
                            <path fill="#FFF" d="..."></path>
                        </svg>
                        <h4><span style="color:white;">3.</span> Delivery</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Include Footer or other content here if needed -->

</body>

</html>