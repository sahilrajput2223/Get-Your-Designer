<?php
	session_start();
	require 'DAO.php'; 
	require 'model.php';
	date_default_timezone_set("Asia/kolkata");
	$d = new DAO();
	$m = new model();

	extract($_POST);

	if (isset($_POST) && !empty($_POST)) {

		

	


		if (isset($_POST['btnBookDesign'])) {

			$email = $_SESSION['user'];
			
			
			$m->set_data("txtPrice" , $price);
			$m->set_data("txtEmail" , $email);
			$m->set_data("txtDesign_id" , $design_id);
			$m->set_data("txtDesignName" , $design_name);
			$m->set_data("txtDesingerEmail" , $designer_email);
			$m->set_data("txtSize" , $size);


			$a = array( 'user_email'=>$m->get_data(test_input('txtEmail')) ,
						'design_id'=>$m->get_data(test_input('txtDesign_id')) ,
						'design_name'=>$m->get_data(test_input('txtDesignName')) ,
						'price'=>$m->get_data(test_input('txtPrice')) ,
						'designer_email'=>$m->get_data(test_input('txtDesingerEmail')) ,
						'size'=>$m->get_data(test_input('txtSize')) ,
						);
				
				$where = "email = '$email'";
				$q = $d->insert("booking_design",$a);

			if ($q > 0) {
				echo "All Booking";
				header("Location:../my_bookings.php");
			}
			else{
				echo "something is wrong - Design Booking Not Working";
			}
		
		}

}

?>