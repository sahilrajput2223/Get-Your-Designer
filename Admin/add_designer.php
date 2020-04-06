<?php 
session_start();
if ($_SESSION['admin'] != 'Admin')
{
    header("Location:login.php");
}

    require("header.php");
?>	
        
        
	<!-- Page Wrapper -->
    <div class="page-wrapper">
			
            <div class="content container-fluid">

                <!-- Page Header -->
                <div class="page-header">
                    <div class="row">
                        <div class="col">
                            <h3 class="page-title">Designer</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                <li class="breadcrumb-item active">Add Designer</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->

                <div class="row">
                    <div class="col-md-3"> </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <form action="mvc/controller.php" method="POST">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="D_name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" name="U_name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <input type="email" name="Email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="passwd" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Confirm Password</label>
                                        <input type="password" name="C_password" class="form-control">
                                    </div>
                                    <div class="text-right">
                                        <center>
                                            <button type="submit" name="btnAddDesigner" class="btn btn-primary">Submit</button>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <button type="reset" class="btn btn-danger">Reset</button>
                                        </center>
                                        
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
    


<?php 

    require("footer.php");

?>