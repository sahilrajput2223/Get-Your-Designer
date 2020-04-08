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
								<h3 class="page-title">Design</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Add New Design</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					<?php
                            $d = new DAO(); 
							$I = $_SESSION['designer'];
							$where = "email = '$I'";
							$data = $d->select_by_condition("register_designer", $where);
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
                                                <h4 class="card-title">Design Details</h4>
                                                <br>
                                            
												<div class="form-group">
                                                    <label>Design Name:</label>
                                                    <input type="hidden" name="email" value="<?php echo $_SESSION['designer']; ?>"> 
													<input type="text" required name="design_name" class="form-control">
                                                </div>
                                                
                                                <div class="form-group">
                                                    <br>
													<label>Design Description:</label>
													<textarea rows="9" name="desc" required class="form-control"></textarea>
												</div>
												
											</div>
											<div class="col-md-6">
												<h4 class="card-title"><br></h4>
												<div class="row">
													<div class="col-md-6">
                                                        <br>
                                                        <div class="form-group">
                                                        <label>Size Available:</label>
                                                            <br>
                                                            <input type="checkbox" name="size[]" value="S"> <label style="font-size:20px;">: S</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <input type="checkbox" name="size[]" value="M"> <label style="font-size:20px;">: M</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <input type="checkbox" name="size[]" value="L"> <label style="font-size:20px;">: L</label>&nbsp;&nbsp;&nbsp;<br>
                                                            <input type="checkbox" name="size[]" value="XL"> <label style="font-size:20px;">: XL</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <input type="checkbox" name="size[]" value="XXL"> <label style="font-size:20px;">: XXL</label>&nbsp;&nbsp;&nbsp;<br>
                                                            <input type="checkbox" name="size[]" value="3XL"> <label style="font-size:20px;">: 3XL</label>&nbsp;&nbsp;&nbsp;
                                                            <input type="checkbox" name="size[]" value="4XL"> <label style="font-size:20px;">: 4XL</label>&nbsp;&nbsp;&nbsp;
                                                		</div>
													</div>

													
                                
                                                    <div class="col-md-6">
                                                        <br>
														<div class="form-group">
															<label>Price: </label>
															<input type="text" required name="price" class="form-control" >
														</div>
													</div>
                                                
                                                    
                                                    <div class="col-md-6">
														
														<div  class="form-group">
															<label>Category: </label>
															<select required name="category" class="form-control">
                                                                <option value=""> -- Select --</option>
                                                                <option value="Traditional"> Traditional </option>
                                                                <option value="Formal"> Formal </option>
                                                                <option value="Casual"> Casual </option>
                                                                <option value="Ethnic"> Ethnic </option>
                                                                <option value="Sports"> Sports </option>
                                                                <option value="Western"> Western </option>
                                                                <option value="Jumpsuits"> Jumpsuits </option>
                                                                <option value="Denim"> Denim </option>
                                                                <option value="WinterWar">WinterWar</option>
                                                                <option value="Other">Other</option>
                                                            </select>
														</div>
                                                    </div>
                                                    
                                                    <div class="col-md-6">
														
														<div class="form-group">
															<label>Occasion: </label>
															<select required name="occasion" class="form-control">
                                                                <option value=""> -- Select --</option>
                                                                <option value="Wedding"> Wedding </option>
                                                                <option value="Sangeet"> Sangeet </option>
                                                                <option value="Party"> Party </option>
                                                                <option value="Everyday"> Everyday </option>
                                                                <option value="Interview"> Interview </option>
                                                                <option value="Gym"> Gym </option>
                                                                <option value="Outings"> Outings </option>
                                                                <option value="Raguler"> Raguler </option>
                                                                <option value="Other">Other</option>
                                                            </select>
														</div>
                                                    </div>
                                                    

                                                    <div class="col-md-12">
														
														<div class="form-group">
                                                            <br>
                                                            <label>Material: </label>
                                                            <input required type="text" name="material" class="form-control">
														</div>
                                                    </div>
                                                    

												</div>
											</div>
										</div>
									</div>
									


									<div class="container row">
											<div class="col-md-12">
												<h4 class="card-title" style="margin-left: 2%;">Design Images</h4>
											</div>
									</div>
										<div class="container"> 
										<div class="container row"> 
											<div class="col-md-6">
												<div class="form-group">
                                                        <label>Image1 *:</label>
														<input required type="file" name="img1"  class="form-control">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
                                                        <label>Image2 *:</label>
														<input required type="file" name="img2" class="form-control">
												</div>
												</div>
											<div class="col-md-6">
												<div class="form-group">
                                                        <label>Image3 :</label>
														<input type="file" name="img3"  class="form-control">
												</div>
												</div>
													<div class="col-md-6">
														<div class="form-group">
                                                        <label>Image4 :</label>
														<input type="file" name="img4"  class="form-control">
														</div>
                                                    </div>
                                                    
										</div>
											</div>
										
										
										
											<div class="text-right">
                                            <div class="row">
												<div class="col-md-12">
													<br>
												</div>
                                                <div class="col-md-2">

                                                </div>
                                                <div class="col-md-4">
                                                    <button type="submit" name="btnAddPost" style="width: 100%" class="btn btn-primary">Submit</button>
                                                </div>
                                                <div class="col-md-4">
                                                    <button type="reset" style="width: 100%" class="btn btn-danger">Reset</button>
                                                </div>
                                                <div class="col-md-2">
                                                    
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