<?php 
    session_start();
    
?>
<!DOCTYPE html>
<!--[if lt IE 8 ]>
<html lang="en" class="ie7">
<![endif]-->
<!--[if IE 8 ]>
<html lang="en" class="ie8">
<![endif]-->
<!--[if IE 9 ]>
<html lang="en" class="ie9">
<![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Mirrored from html.cubecreationthemes.com/lola/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Mar 2020 14:58:36 GMT -->
<head>
<title>Get-Your-Designer</title>
    <meta charset="UTF-8">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Style CSS -->
    <link href="css/bootstrap.css" media="screen" rel="stylesheet">
    <link href="css/font-awesome.css" media="screen" rel="stylesheet">
    <!-- Selectize -->
    <link href="css/selectize.css" media="screen" rel="stylesheet">
    <!-- Style -->
    <link href="style.css" media="screen" rel="stylesheet">
</head>
<body>
<!-- Spinner -->
<div class="spinner-container">
    <div class="spinner-dot"></div>
    <div class="spinner-dot"></div>
    <div class="spinner-dot"></div>
</div>
<!-- /Spinner -->
<!-- Theme Menu -->
<div class="theme-menu">
    <a href="#" class="menu-header-close-button-mobile"></a>
    <div class="menu-header">
        <h3 class="menu-title">MENU</h3>
        <nav class="menu">
            <ul>
                <li class="menu-item-has-children">
                  
                    <a href="home.php">HOME</a>
                    
                </li>
                <li class="menu-item-has-children">
                    <a href="#" class="menu-icon"></a>
                    <a href="#">Design</a>
                    <ul class="sub-menu">
                        <li><a href="list_designer.php">All Designer</a></li>
                        <li><a href="list_design.php">All Design</a></li>
                    </ul>
                </li>
                <li><a href="my_bookings.php">MY BOOKINGS</a></li>
                <li><a href="about.php">ABOUT</a></li>
                <li><a href="feedback.php">FEEDBACK</a></li>
                <li><a href="contact.php">CONTACT</a></li>
                <li class="menu-item-has-children">
                    <a href="#" class="menu-icon"></a>
                    <a href="#">HELP</a>
                    <ul class="sub-menu">
                        <li><a href="size-guide.php">SIZE GUIDE</a></li>
                        <li><a href="returns-exchanges.php">RETURNS - EXCHANGES</a></li>
                        <li><a href="terms-of-services.php">TERMS OF SERVICES</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <?php 
            if(!empty($_SESSION)){
        ?>
        <div class="menu-log-in">
            <form method="POST" action="auth_controller.php">
                <input style="width:30%; border-radius: 10px;" class="btn btn-danger" type="submit" name="btnLogoutUser" value="Log-out">
            </form>
            </div>

            <?php } else { ?>
                
        <div class="menu-log-in"><a href="login.php">LOG IN</a></div>
            <?php } ?>


    </div>
    <div class="menu-footer">
        <ul class="menu-social">
            <li class="social-icon">
                <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
            </li>
            <li class="social-icon">
                <a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a>
            </li>
            <li class="social-icon">
                <a href="https://www.pinterest.com/" target="_blank"><i class="fa fa-pinterest"></i></a>
            <li class="social-icon">
                <a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a>
            </li>
        </ul>
    </div>
</div>
<!-- End Theme Menu -->
<div id="page" class="site invisible">
    <!-- Header -->
    <header class="header">
        <div class="menu-link-wrap">
            <a href="#" class="menu-link">
                <span></span>
            </a>
        </div>
        <div class="logo-wrap">
            <a href="home.php" class="theme-logo">Get-Your-Designer</a>
        </div>
        <div class="header-cart">
            <a href="#" class="cart-link">
         </a>
        </div>
    </header>
    <!-- End Header -->

    <!--Passwprd Page-->
    <div class="site-main clearfix">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="wrap-paassword-forms other-page margin-top-150">
                        <!--Title-->
                        <h3 class="page-title">Add New Password</h3>
                        
                        <!--End Title-->
                        <!--Form-->
                        <form action="auth_controller.php" method="POST" class="password-forms">
                            <p class="form-row">
                                <br>
                                <input type="password" name="password" class="input-text required" placeholder="password"/>
                            </p>

                            <p class="form-row">
                                <br>
                                <input type="password" name="c_password" class="input-text required" placeholder="confirm password"/>
                            </p>

                            <p class="form-row">
                                <input name="btnSetPassword" type="submit" class="button" value="Submit OTP"/>
                            </p>
                            
                        </form>
                        <!--End Form-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include_once("footer.php");
?>