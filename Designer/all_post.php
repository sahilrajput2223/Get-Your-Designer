<?php 

session_start();

if($_SESSION['designer'] == null){
    header("Location:login.php");
}

    require("mvc/DAO.php");
    require("header.php");
?>


<!-- Page Wrapper -->
<div class="page-wrapper">
			
            <div class="content container-fluid">
                
                <!-- Page Header -->
                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="page-title">Design</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item">Dashboard</li>
                                <li class="breadcrumb-item">All Designs</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->

                <div class="row">
                    <div class="col-md-12">
                    
                        <!-- Recent Orders -->
                        <div class="card card-table">
                            
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-center mb-0">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Design Name</th>
                                                <th>Material</th>
                                                <th>Price</th>
                                                <th>Category</th>
                                                <th>Occasion</th>
                                                <th>Details</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody> 
                                    <?php
                                        $d = new DAO(); 
                                        $I = 0;
                                        $email = $_SESSION['designer'];
                                    
                                        $where = "designer_email = '$email'";
                                    
                                        $data = $d->select_by_condition("designer_post",$where);
                                        
                                        while ($result = mysqli_fetch_array($data)) {
					                        $I++;
							        ?>
                                    <tr>
                                    <td><?php echo $I; ?></td>
			                        <td><?php echo $result['design_name']; ?></td>
			                        <td><?php echo $result['material']; ?></td>
                        			<td><?php echo $result['price']; ?></td>
			                        <td><?php echo $result['category'] ?></td>
			                        <td><?php echo $result['occasion'] ?></td>
                                    <td>
                                        <form method="POST" action="post_details.php"> 
                                            <input type="hidden" name="id" value="<?php echo $result['id']; ?>">
                                            <button class="btn btn-primary"> Details </button>
                                        </form>
                                    </td>	
                                    <td><?php echo "delete" ?></td>	
                                    </tr>
                                        <?php  } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /Recent Orders -->
                        
                    </div>
                </div>
                
            </div>			
        </div>
        <!-- /Page Wrapper -->
    
    </div>
    <!-- /Main Wrapper -->
    


<?php 
    require("footer.php")    
?>