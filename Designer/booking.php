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
                            <h3 class="page-title">Booking</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item active">Dashboard</li>
                                <li class="breadcrumb-item active">All Bookings</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->

                <div class="row">
                    <div class="col-md-12">
                    
                        <!-- Recent Orders -->
                        <div class="card card-table">
                            <div class="card-header">
                                <h4 class="card-title">Booking List</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-center mb-0">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>User</th>
                                                <th>Design Name</th>
                                                <th>Size</th>
                                                <th>Price</th>
                                                <th>Booking Date</th>                                                
                                            </tr>
                                        </thead>
                                        <tbody> 
                                    <?php
                                        $d = new DAO(); 
                                        $I = 0;
                                        $email = $_SESSION['designer'];
                                        $where = "designer_email = '$email'";
                                        $data = $d->select_by_condition("booking_design", $where);
                                        
                                        while ($result = mysqli_fetch_assoc($data)) {
					                        $I++;
							        ?>
                                    <tr>
                                    <td><?php echo $I; ?></td>
			                        <td><?php echo $result['user_email']; ?></td>
			                        <td><?php echo $result['design_name']; ?></td>
                        			<td><?php echo $result['size']; ?></td>
			                        <td><?php echo $result['price']; ?></td>
			                        <td><?php echo $result['booking_date']; ?></td>
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