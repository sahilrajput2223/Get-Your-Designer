<?php
   -
    require_once('mvc/DAO.php');
    $d = new DAO(); 
    
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

<!-- Mirrored from html.cubecreationthemes.com/lola/shop-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Mar 2020 14:59:25 GMT -->
<head>
    <title>Lola | HTML Themes</title>
    <meta charset="UTF-8">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Style CSS -->
    <link href="css/bootstrap.css" media="screen" rel="stylesheet">
    <link href="css/font-awesome.css" media="screen" rel="stylesheet">
    <!-- Selectize -->
    <link href="css/selectize.css" media="screen" rel="stylesheet">
    <!-- Style -->
    <link href="style.css" media="screen" rel="stylesheet">
</head>
<body class="shop-page shop-page-product-details">
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
                    <a href="#" class="menu-icon"></a>
                    <a href="index-2.html">HOME</a>
                    <ul class="sub-menu">
                        <li><a href="index-2.html">HOME SLIDER</a></li>
                        <li><a href="index-3.html">HOME VIDEO</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children active-item">
                    <a href="#" class="menu-icon"></a>
                    <a href="shop.html">SHOP</a>
                    <ul class="sub-menu">
                        <li><a href="shop.html">TWO COLUMNS</a></li>
                        <li><a href="shop-2.html">THREE COLUMNS </a></li>
                    </ul>
                </li>
                <li><a href="about.html">ABOUT</a></li>
                <li><a href="blog.html">BLOG</a></li>
                <li><a href="contact.html">CONTACT</a></li>
                <li class="menu-item-has-children">
                    <a href="#" class="menu-icon"></a>
                    <a href="size-guide.html">HELP</a>
                    <ul class="sub-menu">
                        <li><a href="size-guide.html">SIZE GUIDE</a></li>
                        <li><a href="returns-exchanges.html">RETURNS - EXCHANGES</a></li>
                        <li><a href="terms-of-services.html">TERMS OF SERVICES</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div class="menu-log-in"><a href="login.html">LOG IN</a></div>
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
            <a href="index-2.html" class="theme-logo">Get-Your_Designer</a>
        </div>
        <div class="header-cart">
            <a href="#" class="cart-link"></a>
        </div>
    </header>
    <!-- End Header -->
    <!--Shop Page-->
    <div class="site-main container clearfix">
        <div class="col-md-7">
            <div class="row">
                
                <div id="shop-product-slider" class=" shop-product-slider carousel slide">
                    <div class="carousel-inner" role="listbox">
                        
                    <?php 
                        $id = $_GET['a'];
                        $where = "id = '$id'";
                        $data = $d->select_by_condition("designer_post", $where);
                    
                        while ($result = mysqli_fetch_array($data)) {
                      
                            $imgs = explode(",", $result['images']); 
                            $size = explode(",",$result['size']);
                                          
                       for($i = 0 ; $i < count($imgs); $i++){
                       ?>
                        
                      <div  style="width:100%; height:600%;" class="item <?php if($i == 0){ echo "active";} ?>">
                           <img  src="<?php echo '../Designer/'.$imgs[$i] ?>" style="width: 100%; height:600px; margin-top:20%;" alt="Product details slide 1"/>
                       </div>
                        
                       <?php } ?>
                        
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#shop-product-slider" role="button" data-slide="prev">
                        <img src="images/Shop/shop-slider-arrow-left.png" alt="arrow-left"/>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#shop-product-slider" role="button" data-slide="next">
                        <img src="images/Shop/shop-slider-arrow-right.png" alt="arrow-right"/>
                        <span class="sr-only">Next</span>
                    </a>
                    <!-- Indicators -->
                    
                    
                    <ol class="carousel-indicators">
                          
                    <?php 
                       
                       for($i = 0 ; $i < count($imgs); $i++){
                       ?>
                      
                          <li data-target="#shop-product-slider" data-slide-to="<?php echo $i ?>" <?php if($i ==0){ echo "class='active'";} ?>></li>
                          
                       
                       <?php } ?>
                        
                    
                    
                    </ol>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="row">
                <div class="product">
                    <div class="itable">
                        <div class="icell">
                            <div class="entry-summary">
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <h1 class="product_title"><?php echo $result["design_name"] ?></h1>
                                <div class="total-price">
                                    <p class="price">
                                        <span class="Price-amount">
                                            <span class="Price-currencySymbol">$</span>
                                            <?php echo $result['price'] ?>
                                            <span class="Price-currencySymbol">/-</span>
                                        </span>
                                    </p>
                                </div>
                                <div class="description">
                                    <div class="panel-default">
                                        <div id="collapseOne" class="panel-collapse  " role="tabpanel" aria-labelledby="headingOne">
                                            <div class="panel-body">
                                                <?php echo "<b style='color:black;'>Designed By :</b> ".$result['designer_email'] ?>
                                            </div>
                                            <div class="panel-body">
                                                <br>
                                                <?php echo "<b style='color:black;'>Description :</b> ".$result['description'] ?>
                                            </div>
                                            <br>
                                            <div class="panel-body">
                                                <br>
                                                <?php echo "<b style='color:black;'>Material :</b> ".$result['material'] ?>
                                            </div>
                                            <br>
                                            <div class="panel-body">
                                                <br>
                                                <?php echo "<b style='color:black;'>Category :</b> ".$result['category'] ?>
                                            </div>
                                            <br>
                                            <div class="panel-body">
                                                <br>
                                                <?php echo "<b style='color:black;'>Occasion :</b> ".$result['occasion'] ?>
                                            </div>

                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="wrap-select">
                                    <label style="font-size: 15px;">
                                    Size Available *
                                    </label>
                                   <form method="POST" action="mvc/controller.php">
                                    <input type="hidden" name="price" value="<?php echo $result['price']?>">
                                    <input type="hidden" name="design_id" value="<?php echo $result['id']?>">
                                    <input type="hidden" name="design_name" value="<?php echo $result['design_name']?>">
                                    <input type="hidden" name="designer_email" value="<?php echo $result['designer_email']?>">
                                    <select  name="size" required class="select-size form-control" id="select-size">
                                    <option value=""> -- Select -- </option>
                                        <?php 
                                            for($i = 0 ; $i < count($size) ; $i++){
                                       
                                            echo "<option value='$size[$i]'> ". $size[$i] ." </option>";
                                       } ?>
                                    </select>

                                </div>
                                <br>
                                <br>
                                
                                <p class="button">
                                    <input type="submit" name="btnBookDesign" class="button" value="Book Order"/>
                                </p>
                                
                                </form>
                               
                           <p class="button">
                                   
                                    <a href="mailto:<?php echo $result['designer_email']?>?subject=Query For <?php echo $result['design_name'] ?>">
                                    <input type="submit" name="btnBookDesign" class="button" value="Contact Designer For Query"/>
                                    </a>
                                </p>
                               
                                <p class="free-shipping">
                                    <a href="#">FREE SHIPPING ON ORDERS 70USD+</a>
                                </p>
                                <p class="link-for-size-guide">
                                    <a href="size-guide.php">size guide</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   












<?php
     } include_once("footer.php");
?>