<?php 
	session_start();
	
?>
<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Feb 2020 10:57:14 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Doccure - Dashboard</title>
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="assets/css/feathericon.min.css">
		
		<link rel="stylesheet" href="assets/plugins/morris/morris.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
		
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>
	
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<!-- Header -->
            <div class="header">
			
				<!-- Logo -->
                <div class="header-left">
                    <a href="index.html"  class="logo">
						<img src="assets/img/logo.png" style="width: 100%;"  alt="Logo">
					</a>
					<a href="index.html"  class="logo logo-small">
						<img src="assets/img/logo-small.png"  alt="Logo" width="30" height="30">
					</a>
                </div>
				<!-- /Logo -->
				
				<a href="javascript:void(0);" id="toggle_btn">
					<i class="fe fe-text-align-left"></i>
				</a>
				
				<!-- Mobile Menu Toggle -->
				<a class="mobile_btn" id="mobile_btn">
					<i class="fa fa-bars"></i>
				</a>
				<!-- /Mobile Menu Toggle -->
				<!-- Header Right Menu -->
				<ul class="nav user-menu">
	
					<!-- User Menu -->
					<li class="nav-item dropdown has-arrow">
				
				
					</li>
					<!-- /User Menu -->
					
				</ul>
				<!-- /Header Right Menu -->
				
            </div>
			<!-- /Header -->
			
			<!-- Sidebar -->
            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li> 
								<a href="home.php"><i class="fa fa-home"></i> <span>Dashboard</span></a>
							</li>

							<?php 
								if($_SESSION['has_profile'] == "yes"){
							?>
							<li> 
								<a href="profile.php"><i class="fa fa-user-circle"></i> <span>Profile</span></a>
							</li>					
							<?php 
								}
								else{
							?>
							<li> 
								<a href="add_profile.php"><i class="fa fa-user-circle"></i> <span>Add Profile</span></a>
							</li>					
							<?php } ?>
							<li> 
								<a href="add_post.php"><i class="fa fa-plus"></i> <span>Add Post</span></a>
							</li>					
							<li> 
								<a href="all_post.php"><i class="fa fa-clipboard"></i> <span>All Post</span></a>
							</li>
							<li> 
								<a href="feedback.php"><i class="fa fa-comments"></i> <span>Feedback</span></a>
							</li>
							<li> 
								<a href="contact.php"><i class="fa fa-envelope"></i> <span>contact</span></a>
							</li>
							<li> 
								<a href="logout.php"><i class="fa fa-sign-out"></i> <span>Logout</span></a>
							</li>
						</ul>
					</div>
                </div>
            </div>
			<!-- /Sidebar -->
        
		