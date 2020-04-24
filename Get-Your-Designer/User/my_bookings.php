<?php
  include_once("header.php");
  
  if(empty($_SESSION['user'])){
    header("Location:login.php");
} 

    require_once('mvc/DAO.php');
    $d = new DAO(); 
    $I = 0;
    $data = $d->select_all("designer_profile");
    
    
?>

    <div class="site-main clearfix">
        <div class="shop-product-list shop-product-list-2-columns clearfix col-sm-12">
            <div class="row">
                <ul class="products clearfix">
                    <!--Product 1-->
                    
                    <div class="container">
                    <li class="col-sm-12 col-md-12 col-xs-12 product">
                        <h3 style="font-size: 20px; margin-top: -5%;">My Bookings</h3>
                    </li>      
                    <li class="col-sm-12 col-md-12 col-xs-12 product">
                    <div class="table-responsive">
                                    <table class="table table-hover table-center mb-0">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Design Name</th>
                                                <th>Designer Email</th>
                                                <th>Size</th>
                                                <th>Price</th>
                                                <th>Booking Date</th>
                                                <th>Delete Booking</th>
                                            </tr>
                                        </thead>
                                        <tbody> 
                                    <?php
                                        $d = new DAO(); 
                                        $I = 0;
                                        $email = $_SESSION['user'];
                                        $where = "user_email = '$email' ORDER BY booking_date DESC";
                                        $data = $d->select_by_condition("booking_design", $where);
                                        
                                        while ($result = mysqli_fetch_array($data)) {
					                        $I++;
							        ?>
                                    <tr>
                                    <td><?php echo $I; ?></td>
			                        <td><?php echo $result['design_name']; ?></td>
			                        <td><?php echo $result['designer_email']; ?></td>
                        			<td><?php echo $result['size']; ?></td>
			                        <td><?php echo "$ ".$result['price']." /-"; ?></td>
			                        <td><?php echo $result['booking_date'] ?></td>
                                    <td> 
                                        <form method="POST" action="mvc/controller.php" style="width: 100%">
                                            <input type="hidden" name="design_id" value="<?php echo $result['id'] ?>" >
                                            <button name="btnDeleteBooking" style="width: 100%; border-radius: 5px;"  class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>    
                                    </tr>
                                        
                                        <?php  } ?>
                                        </tbody>
                                    </table>
                                </div>
                    </li>
                    
                    
                    
                    
                    
                    </div>

                </ul>
            </div>
        </div>
    </div>
</div>
<?php
    include_once("footer.php");
?>