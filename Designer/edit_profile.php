<!DOCTYPE html>
<html lang="en">
	<?php  
		 require("mvc/DAO.php");
		 require("header.php");
	?>


<!-- Page Wrapper -->
<div class="page-wrapper">
			
			<div class="content container-fluid">
				
		
<!-- Page Wrapper -->
        <div class="container">
                <div class="content ">
					
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col">
								<h3 class="page-title">Profile</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Profile</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					<?php
                            $d = new DAO(); 
							$I = $_POST['email'];
							$where = "email = '$I'";
							$data = $d->select_by_condition("designer_profile", $where);
							while ( $result = mysqli_fetch_assoc($data))
							{
					?>
					<div class="row">
						<div class="col-md-12">
							<div class="profile-header">
								<div class="row align-items-center">
									<div class="col ml-md-n2 profile-user-info">
										<h4 class="user-name mb-0"> <?php echo $result['name'] ?> </h4>
                                        <br>
                                        <h6 class="text-muted"><?php echo $result['email'] ?></h6>
										
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
                                                        <select name="gender" class="form-control">
																<option>Select Gender</option>
																<option <?php if($result['gender'] == 'Male'){ echo "selected";} ?> value="Male">Male</option>
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
														<input type="text" value="<?php echo $result['street']; ?>"  name="street" class="form-control">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
														<label>Area:</label>
														<input type="text" value="<?php echo $result['area'] ?>"  name="area" class="form-control">
												</div>
												</div>
											<div class="col-md-6">
												<div class="form-group">
														<label>City:</label>
														<input type="text" value="<?php echo $result['city'] ?>"  name="city" class="form-control">
												</div>
												</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>State:</label>
															<input type="text" value="<?php echo $result['state'] ?>"  name="state" class="form-control">
														</div>
                                                    </div>
                                                    
													<div class="col-md-6">
														<div class="form-group">
															<label>Country:</label>
															<input type="text" name="country" value="<?php echo $result['country'] ?>"  class="form-control">
														</div>
													</div>

                                                    <div class="col-md-6">
														<div class="form-group">
															<label>Pin Code:</label>
															<input type="text" name="pinCode" value="<?php echo $result['pin_code'] ?>"  class="form-control">
														</div>
                                                    </div>
										</div>
											</div>
										
                                        
                                            
                                            
									<div class="container row">
											<div class="col-md-12">
												<br><h4 class="card-title" style="margin-left: 2%;">Social Contacts</h4>
											</div>
									</div>
										<div class="container"> 
										<div class="container row"> 
											<div class="col-md-6">
												<div class="form-group">
														<label>Phone:</label>
														<input type="text" name="phone" value="<?php echo $result['phone'] ?>" class="form-control">
												</div>
											</div>
											
											<div class="col-md-6">
												<div class="form-group">
														<label>Website:</label>
														<input type="text" name="website" value="<?php echo $result['website'] ?>" class="form-control">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
														<label>Instagram:</label>
														<input type="text" name="instagram" value="<?php echo $result['instagram'] ?>" class="form-control">
												</div>
												</div>
											<div class="col-md-6">
												<div class="form-group">
														<label>Facebook:</label>
														<input type="text" name="facebook" value="<?php echo $result['facebook'] ?>" class="form-control">
												</div>
												</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>Twitter:</label>
															<input type="text" name="twitter" value="<?php echo $result['twitter'] ?>" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
												<div class="form-group">
														<label>blogger:</label>
														<input type="text" name="blogger" value="<?php echo $result['blogger'] ?>" class="form-control">
												</div>
												</div>
											
										</div>
                                            </div>
                                            


											<div class="row">
                                                <div class="col-md-12"><br></div>
                                                <div class="col-md-3"> </div>
												<div class="col-md-3"> <button type="submit" name="btnEditDesigner" class="btn btn-primary" style="width:100%"> Update </button> </div>
												<div class="col-md-3"> <button type="reset" class="btn btn-danger" style="width: 100%"> Reset </button> </div>
                                                <div class="col-md-3"> </div>
                                                
                                                <div class="col-md-12"><br></div>
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