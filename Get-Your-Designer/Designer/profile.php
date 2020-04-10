
<?php  

session_start();

if($_SESSION['designer'] == null){
	header("Location:login.php");
}

require("mvc/DAO.php");
require("header.php");

?>
<!DOCTYPE html>
<html lang="en">
<!-- Page Wrapper -->
<div class="page-wrapper">
			
			<div class="content container-fluid">
				
			<?php
                            $d = new DAO(); 
							$I = $_SESSION['designer'];
							$where = "email = '$I'";

							$data = $d->select_by_condition("designer_profile",$where);
							while ($result = mysqli_fetch_assoc($data)) 
							{
					?>
<!-- Page Wrapper -->
        <div class="container">
                <div class="content ">
					
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-md-6">
								<h3 class="page-title">Profile</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Profile</li>
								</ul>
							</div>
							
							<div class="col-md-4">
                                                  
							</div>
							
							<div class="col-md-2">
								<form action="edit_profile.php" method="POST"> 
									<input type="hidden" name='email' value="<?php echo $result['email'] ?>" >
								<button type="submit" style="width: 100%" class="btn btn-primary">Edit Profile</button>  
								</form>
								
                            </div>
                    	</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-md-12">
							<div class="profile-header">
								<div class="row align-items-center">
									<div class="col-md-2 profile-image">
											<img class="rounded-circle" style="height:120px; box-shadow: 5px 5px 15px;" alt="User Image" src="../Designer/images/<?php echo $result['profile_img']  ?>">
									</div>
									<div class="col-md-5 profile-user-info">
										<h4 class="user-name"><?php echo $result['name']; ?></h4>
										<h6 class="text-muted"><?php echo $result['email'] ?></h6>
										<h6 class="text-muted"><?php echo $result['phone'] ?></h6>
									</div>
									<div class="col-md-5">
									<h6 class="text-muted">Social Contact</h6>
									
									<?php 
										if($result["website"] != ""){
									?>
										<a href=<?php echo $result['website'] ?> > <img style='height:25px; width:25px;' src='assets/img/website.svg'></a>&nbsp;&nbsp;&nbsp;&nbsp;
									
									<?php
										} 
										if($result["instagram"] != ""){
									?>
										<a href='<?php echo $result['website'] ?>' ><img style='height:25px; width:25px;' src='assets/img/instagram.svg'></a></a>&nbsp;&nbsp;&nbsp;&nbsp;
									
									<?php
										} 
										if($result["twitter"] != ""){
									?>
										<a href=<?php echo $result['twitter'] ?> > <img style='height:25px; width:25px;' src='assets/img/twitter.svg'></a>&nbsp;&nbsp;&nbsp;&nbsp;
									<?php
										} 
										if($result["facebook"] != ""){
									?>
										<a href=<?php echo $result['facebook'] ?> > <img style='height:25px; width:25px;' src='assets/img/facebook.svg'></a>&nbsp;&nbsp;&nbsp;&nbsp;
										<?php
										} 
										if($result["blogger"] != ""){
									?>
										<a href=<?php echo $result['blogger'] ?> > <img style='height:25px; width:25px;' src='assets/img/blogger.svg'></a>&nbsp;&nbsp;&nbsp;&nbsp;
										<?php } ?>

									</div>
								 </div>
								 
									
							</div>
						</div>
                    </div>
                    

                    <br>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-body">
									<form action="mvc/controller.php" method="POST" enctype="multipart/form-data">
										<div class="row">
											<div class="col-md-6">
												<h4 class="card-title">Personal details</h4>
												<div class="form-group">
													<label>Name:</label>
													<input type="text" name="name" value="<?php echo $result['name'] ?>" readonly class="form-control">
												</div>
												<div class="form-group">
													<label>Email:</label>
													<input type="email" name="email" value="<?php echo $result['email'] ?>" readonly class="form-control">
												</div>
											
											</div>
											<div class="col-md-6">
												<h4 class="card-title"><br></h4>
												<div class="row">
                                                    <div class="col-md-11">
														<div class="form-group">
															<label>Username:</label>
															<input type="text" name="username" value="<?php echo $result['username'] ?>" readonly class="form-control">
														</div>
													</div>

													<div class="col-md-11">
														<div class="form-group">
														<label>Gender:</label>
															<select disabled name="gender" class="form-control">
																<option>Select Gender</option>
																<option <?php if($result['gender'] == "Male"){ echo "selected"; } ?> value="Male">Male</option>
																<option <?php if($result['gender'] == "Female"){ echo "selected"; } ?> value="Female">Female</option>
																<option <?php if($result['gender'] == "Other"){ echo "selected"; } ?> value="Other">Other</option>
															</select>
                                                		</div>
													</div>
													<div class="col-md-12">
														<br>
													</div>
													
												</div>
											</div>
										</div>
									</div>
									


									<div class="container row">
											<div class="col-md-12">
												<h4 class="card-title" style="margin-left: 2%;">Address</h4>
											</div>
									</div>
										<div class="container"> 
										<div class="container row"> 
											<div class="col-md-6">
												<div class="form-group">
														<label>Street:</label>
														<input type="text" value="<?php echo $result['street']; ?>" readonly name="street" class="form-control">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
														<label>Area:</label>
														<input type="text" value="<?php echo $result['area'] ?>" readonly name="area" class="form-control">
												</div>
												</div>
											<div class="col-md-6">
												<div class="form-group">
														<label>City:</label>
														<input type="text" value="<?php echo $result['city'] ?>" readonly name="city" class="form-control">
												</div>
												</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>State:</label>
															<input type="text" value="<?php echo $result['state'] ?>" readonly name="state" class="form-control">
														</div>
                                                    </div>
                                                    
													<div class="col-md-6">
														<div class="form-group">
															<label>Country:</label>
															<input type="text" name="country" value="<?php echo $result['country'] ?>" readonly class="form-control">
														</div>
													</div>

                                                    <div class="col-md-6">
														<div class="form-group">
															<label>Pin Code:</label>
															<input type="text" name="pinCode" value="<?php echo $result['pin_code'] ?>" readonly class="form-control">
														</div>
                                                    </div>
										</div>
											</div>
										
									
									</form>
								</div>
							</div>
						</div>
					</div>
					
				
				</div>			
			</div>
			<!-- /Page Wrapper -->
		</div>
</div>
<?php 
	} 
	require("footer.php")  
	?>