<?php 
session_start();
if ($_SESSION['admin'] != 'Admin')
{
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
                            <h3 class="page-title">User</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item active">Dashboard</li>
                                <li class="breadcrumb-item active">All User</li>
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
                                <h4 class="card-title">User List</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-center mb-0">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>Verified</th>
                                                <th>Joined On</th>
                                            </tr>
                                        </thead>
                                        <tbody> 
                                    <?php
                                        $d = new DAO(); 
                                        $I = 0;
                                        $data = $d->select_all("user_register");
                                        
                                        while ($result = mysqli_fetch_array($data)) {
					                        $I++;
							        ?>
                                    <tr>
                                    <td><?php echo $I; ?></td>
			                        <td><?php echo $result['username']; ?></td>
			                        <td><?php echo $result['email']; ?></td>
                                    <td>
                                        <?php 
                                            if($result['v_flag'] == "1"){
                                                echo "Yes";
                                            }
                                            else{
                                                echo "No";
                                            }
                                        ?>
                                     </td>
			                        <td><?php echo $result['created_on']; ?></td>
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