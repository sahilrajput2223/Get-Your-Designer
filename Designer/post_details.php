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
									<li class="breadcrumb-item active">Design Details</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
                    <?php
                                        $d = new DAO(); 
                                        $I = 0;
                                        $id = $_POST['id'];
                                    
                                        $where = "id = $id";
                                    
                                        $data = $d->select_by_condition("designer_post",$where);
                                        
                                        while ($result = mysqli_fetch_array($data)) {
					                       
							        ?>
				

                    <br>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-body">
									
										<div class="row">
											<div class="col-md-6">
                                                <h4 class="card-title">Design Details</h4>
                                                <br>
                                            
												<div class="form-group">
                                                    <label>Design Name:</label>
                                                   
													<input type="text" value="<?php echo $result['design_name'] ?>" readonly name="design_name" class="form-control">
                                                </div>
                                                
                                                <div class="form-group">
                                                    <br>
													<label>Design Description:</label>
													<textarea rows="9" name="desc" readonly class="form-control"> <?php echo $result['description'] ?> </textarea>
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
                                                           <input value="<?php echo $result['size']?> " class="form-control" readonly>
                                                		</div>
													</div>

													
                                
                                                    <div class="col-md-6">
                                                        <br>
														<div class="form-group">
															<label>Price: </label>
															<input type="text" value="<?php echo "$ ".$result['price']."/-" ?>" readonly name="price" class="form-control" >
														</div>
													</div>
                                                
                                                    
                                                    <div class="col-md-6">
														
														<div class="form-group">
															<label>Category: </label>
															<select disabled name="category" class="form-control">
                                                                <option> -- Select --</option>
                                                                <option <?php if($result['category'] == "Traditional" ){ echo 'selected';} ?> value="Traditional"> Traditional </option>
                                                                <option <?php if($result['category'] == "Formal" ){ echo 'selected';} ?> value="Formal"> Formal </option>
                                                                <option <?php if($result['category'] == "Casual" ){ echo 'selected';} ?> value="Casual"> Casual </option>
                                                                <option <?php if($result['category'] == "Ethnic" ){ echo 'selected';} ?> value="Ethnic"> Ethnic </option>
                                                                <option <?php if($result['category'] == "Sports" ){ echo 'selected';} ?> value="Sports"> Sports </option>
                                                                <option <?php if($result['category'] == "Western" ){ echo 'selected';} ?> value="Western"> Western </option>
                                                                <option <?php if($result['category'] == "Jumpsuits" ){ echo 'selected';} ?> value="Jumpsuits"> Jumpsuits </option>
                                                                <option <?php if($result['category'] == "Denim" ){ echo 'selected';} ?> value="Denim"> Denim </option>
                                                                <option <?php if($result['category'] == "WinterWar" ){ echo 'selected';} ?> value="WinterWar">WinterWar</option>
                                                                <option <?php if($result['category'] == "Other" ){ echo 'selected';} ?> value="Other">Other</option>
                                                            </select>
														</div>
                                                    </div>
                                                    
                                                    <div class="col-md-6">
														
														<div class="form-group">
															<label>Occasion: </label>
															<select disabled name="occasion" class="form-control">
                                                                <option> -- Select --</option>
                                                                <option <?php if($result['occasion'] == "Wedding" ){ echo 'selected';} ?> value="Wedding"> Wedding </option>
                                                                <option <?php if($result['occasion'] == "Sangeet" ){ echo 'selected';} ?> value="Sangeet"> Sangeet </option>
                                                                <option <?php if($result['occasion'] == "Party" ){ echo 'selected';} ?> value="Party"> Party </option>
                                                                <option <?php if($result['occasion'] == "Everyday" ){ echo 'selected';} ?>  value="Everyday"> Everyday </option>
                                                                <option <?php if($result['occasion'] == "Interview" ){ echo 'selected';} ?> value="Interview"> Interview </option>
                                                                <option <?php if($result['occasion'] == "Gym" ){ echo 'selected';} ?> value="Gym"> Gym </option>
                                                                <option <?php if($result['occasion'] == "Outings" ){ echo 'selected';} ?> value="Outings"> Outings </option>
                                                                <option <?php if($result['occasion'] == "Raguler" ){ echo 'selected';} ?> value="Raguler"> Raguler </option>
                                                                <option <?php if($result['occasion'] == "Other" ){ echo 'selected';} ?> value="Other">Other</option>
                                                            </select>
														</div>
                                                    </div>
                                                    

                                                    <div class="col-md-12">
														
														<div class="form-group">
                                                            <br>
                                                            <label>Material: </label>
                                                            <input type="text" value="<?php echo $result['material'] ?>" readonly name="material" class="form-control">
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
                                        <?php 
                                                            $imgs = explode(",", $result['images']);
                                                            $a = count($imgs);
                                                            $temp = 1;
                                                            for($i = 0; $i < $a; $i++ ){
                                                        ?>
                                                           
                                        <div class="col-md-6">
												<div class="form-group">
                                                       <br> <label><?php echo "Image" . " " . $temp . " :"?></label>
                                                        <img style="width:90%; height:90%; border-radius:10px; box-shadow: 10px 10px 20px;" src='<?php echo $imgs[$i] ?>' >
												</div>
											</div>                                          
											            <?php $temp++;} ?>
                                                    
										</div>
											</div>
										
										
										</div>
									
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