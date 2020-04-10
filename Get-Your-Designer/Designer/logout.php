<?php 

session_start();

if($_SESSION['designer'] == null){
    header("Location:login.php");
}

    include_once("header.php");
?>	
			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
                <div class="content container-fluid">
					
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Logout</h3>
								<ul class="breadcrumb">
                                    <li class="breadcrumb-item active">Dashboard</li>
                                    <li class="breadcrumb-item active">All User</li>
								</ul>
							</div>
						</div>
					</div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
					<!-- /Page Header -->
                        <div class="container">
                            <div class="row">

                                <div class="col-md-4">
                                </div>
                                <div class="col-md-4" style="text-align: center;">
                                    <p>Are You Sure You Want To Logout ??</p>      
                                    <form method="POST" action="auth_controller.php">
                                        <button class="btn btn-primary" style="width:100%;" name="btnLogout"> Logout </button>                          
                                    </form>
                                    
                                </div>
                                <div class="col-md-4">
                                </div>
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

    include_once("footer.php");

?>