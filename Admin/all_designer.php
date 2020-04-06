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
                            <h3 class="page-title">Welcome Admin!</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item active">Dashboard</li>
                                <li class="breadcrumb-item active">All Designer</li>
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
                                <h4 class="card-title">Designer List</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-center mb-0">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Name</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>Profile <br> Completed</th>
                                                <th>Details</th>
                                                <th>Profile <br>Reminder</th>
                                                <th>Profile <br>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody> 
                                    <?php
                                        $d = new DAO(); 
                                        $I = 0;
                                        $data = $d->select_all("register_designer");
                                        
                                        while ($result = mysqli_fetch_array($data)) {
					                        $I++;
							        ?>
                                    <tr>
                                    <td><?php echo $I; ?></td>
			                        <td><?php echo $result['name']; ?></td>
			                        <td><?php echo $result['username']; ?></td>
                        			<td><?php echo $result['email']; ?></td>
			                        <td><?php if($result['profile_flag'] == 0){ echo "No"; } else { echo "Yes";} ?></td>
			                        <td><?php echo "Details" ?></td>
                                    <td><form method="POST" action="mvc/profile_mail.php"> 
                                            <input type="hidden" name="email" value="<?php echo $result['email']; ?>">
                                            <button name="Email" class="btn btn-primary" style="width:90%; color:white">Send Mail</button>
                                        </form>
                                    </td>	
                                    <td><form method="POST" action="mvc/controller.php"> 
                                            <input type="hidden" name="designer_id" value="<?php echo $result['id']; ?>">
                                            <button name="btnDeleteDesigner" class="btn btn-danger" style="width: 100%;color:white;">Delete</button>
                                        </form>
                                    </td>	
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