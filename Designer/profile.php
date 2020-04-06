
<?php  

session_start();

if($_SESSION['designer'] == null){
	header("Location:login.php");
}

require("header.php") ?>
<!-- Page Wrapper -->
        <div class="page-wrapper">
                <div class="content container-fluid">
					
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
					
					<div class="row">
						<div class="col-md-12">
							<div class="profile-header">
								<div class="row align-items-center">
									<div class="col ml-md-n2 profile-user-info">
										<h4 class="user-name mb-0">Ryan Taylor</h4>
                                        <br>
                                        <h6 class="text-muted">ryantaylor@admin.com</h6>
										
                                    </div>
                                    <div class="col-auto profile-image">
										<a href="#">
											<img class="rounded-circle" alt="User Image" src="assets/img/profiles/avatar-01.jpg">
										</a>
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
									<form action="#">
										<div class="row">
											<div class="col-md-6">
												<h4 class="card-title">Personal details</h4>
												<div class="form-group">
													<label>Name:</label>
													<input type="text" class="form-control">
												</div>
												<div class="form-group">
													<label>Email:</label>
													<input type="email" class="form-control">
												</div>
                                                <div class="form-group">
													<label>Phone:</label>
													<input type="phone" class="form-control">
												</div>
											
                                                <div class="form-group">
													<label>Gender:</label>
													<select class="form-control">
														<option>Select Gender</option>
														<option value="male">Male</option>
														<option value="female">Female</option>
														<option value="other">Other</option>
													</select>
                                                </div>
                                                
                                                <div class="form-group">
													<label>Profile Image: (look above to live preview)</label>
													<input type="file" class="form-control">
												</div>
											
											</div>
											<div class="col-md-6">
												<h4 class="card-title"><br></h4>
												<div class="row">
                                                    <div class="col-md-12">
														<div class="form-group">
															<label>Birth Date:</label>
															<input type="date" class="form-control">
														</div>
													</div>
											
                                                    <div class="col-md-6">
														<div class="form-group">
															<label>Street:</label>
															<input type="text" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>Area:</label>
															<input type="text" class="form-control">
														</div>
                                                    </div>
                                                    <div class="col-md-6">
														<div class="form-group">
															<label>City:</label>
															<input type="text" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>State:</label>
															<input type="text" class="form-control">
														</div>
                                                    </div>
                                                    
													<div class="col-md-6">
														<div class="form-group">
															<label>Country:</label>
															<input type="text" class="form-control">
														</div>
													</div>

                                                    <div class="col-md-6">
														<div class="form-group">
															<label>Pin Code:</label>
															<input type="text" class="form-control">
														</div>
                                                    </div>
                                                    
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label>Email:</label>
															<input type="text" class="form-control">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>Phone:</label>
															<input type="text" class="form-control">
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="text-right">
											<button type="submit" class="btn btn-primary">Edit</button>
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
		<!-- /Main Wrapper -->
    
        <?php  require("footer.php")  ?>