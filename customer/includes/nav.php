<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <!-- <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> -->
        <!-- <link rel="stylesheet" href="assests/css/font-awesome.min.css">
        <link rel="stylesheet" href="assests/css/swipper-bundle.min.css"> -->
        <link rel="stylesheet" href="./css/def.css">
    </head>
    <body>
        <div id="loader">
            <img src="../../images/logo.png">
        </div>
        <div id="show">
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a class="brand waves-effect" href="" disabled>
                    <span class="fa fa-shopping-basket text-primary"></span>
                    Bentil<b class = "text-primary ml-1">Zone</b>
                </a>
                <a href="index.php">Home</a>
                <a href="#">Shop by Store</a>
                <a href="#">Shop by category</a><hr/>
                <a href="#">Your Orders</a>
                <a href="#">Your Wish List</a>
                <a href="#">Your Account</a>
                <a href="#">Sell on Bentilzone</a>
                <a href="#">Programs and Features</a><hr/>
                <a href="#">Customer Service</a>
                <a href="index.php?logout">Logout</a>
            </div>

            <div class="container1">
                <div class=" display-flex">
                    <div onclick="openNav()"><div class="menu"><i class="fa fa-bars"></i></div></div>
                </div>
                <div class="navbar-icon">
                    <a class="brand waves-effect" href="index.php">
                        <span class="fa fa-shopping-basket"></span>
                        Bentil<b>Zone</b>
                    </a>
                </div>
                <form class="search" method = "post" autocomplete = "off">
                    <input type="text" name="search" placeholder="Search">
                    <i class="fa fa-search"></i>
                </form>
                <div class = "acs">
                    <a href="index.php?wishlist" class="text-white p-2 font-weight-bold">
                        <i class="fa fa-heart"></i><span class="badge badge-primary"><?php cartCount("wishlist"); ?></span>
                    </a>
                    <a href="index.php?showcart" class="text-white p-2 font-weight-bold">
                        <i class="fa fa-shopping-cart"></i><span class="badge badge-danger"><?php cartCount("cart"); ?></span>
                    </a>
                </div>
            </div>