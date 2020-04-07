<?php
	session_start();
	require 'DAO.php'; 
	require 'model.php';
	date_default_timezone_set("Asia/kolkata");
	$d = new DAO();
	$m = new model();

	extract($_POST);

	if (isset($_POST) && !empty($_POST)) {

		if (isset($_POST['btnAddProfile'])  && isset($_FILES['image'])) {

				$errors= array();
				$email = $_POST['email'];
				$file_name = $_FILES['image']['name'];
				$file_size =$_FILES['image']['size'];
				$file_tmp =$_FILES['image']['tmp_name'];
				$file_type=$_FILES['image']['type'];
				$file_ext=strtolower(end(explode('.',$file_name)));
				$extensions= array("jpeg","jpg","png");

				$file_path = "images/".$file_name;
				if(in_array($file_ext,$extensions)=== true){
					move_uploaded_file($file_tmp,$file_path);
					echo "Success";
				 } 
				else{
					echo "File Type Error";
				}

				$m->set_data("txtName" , $name);
				$m->set_data("txtEmail" , $email);
				$m->set_data("txtUsername" , $username);
				$m->set_data("txtGender" , $gender);
				$m->set_data("txtImg" , $file_path);
				$m->set_data("txtStreet" , $street);
				$m->set_data("txtArea" , $area);
				$m->set_data("txtCity" , $city);
				$m->set_data("txtState" , $state);
				$m->set_data("txtCountry" , $country);
				$m->set_data("txtPincode" , $pinCode);
				$m->set_data("txtPhone" , $phone);
				$m->set_data("txtWebsite" , $website);
				$m->set_data("txtInstagram" , $instagram);
				$m->set_data("txtFacebook" , $facebook);
				$m->set_data("txtTwitter" , $twitter);
				$m->set_data("txtBlogger" , $blogger);
				$m->set_data("txtDate" , date("Y-m-d"). " " .date("h:i:s"));
	
	
				$a = array( 'name'=>$m->get_data(test_input('txtName')) ,
							'username'=>$m->get_data(test_input('txtUsername')) ,
							'email'=>$m->get_data(test_input('txtEmail')) ,
							'phone'=>$m->get_data(test_input('txtPhone')) ,
							'gender'=>$m->get_data(test_input('txtGender')) ,
							'profile_img'=>$m->get_data(test_input('txtImg')) ,
							'street'=>$m->get_data(test_input('txtStreet')) ,
							'area'=>$m->get_data(test_input('txtArea')) ,
							'city'=>$m->get_data(test_input('txtCity')) ,
							'state'=>$m->get_data(test_input('txtState')) ,
							'country'=>$m->get_data(test_input('txtCountry')) ,
							'pin_code'=>$m->get_data(test_input('txtPincode')) ,
							'website'=>$m->get_data(test_input('txtWebsite')) ,
							'instagram'=>$m->get_data(test_input('txtInstagram')) ,
							'facebook'=>$m->get_data(test_input('txtFacebook')) ,
							'twitter'=>$m->get_data(test_input('txtTwitter')) ,
							'blogger'=>$m->get_data(test_input('txtBlogger')) ,
							'updated_on'=>$m->get_data(test_input('txtDate')) ,
							);
	
					$q = $d->insert("designer_profile",$a);
	
				if ($q > 0) {
					
					$m->set_data("txtProfile" , '1');
					$a = array( 'profile_flag'=>$m->get_data(test_input('txtProfile')) ,);
					$where = "email = '$email'";
					$d->update("register_designer", $a ,$where);
					$_SESSION['has_profile'] = "yes";
					header("Location:home.php");
				}
				else{
					echo "something is wrong - Designer Data Not Added";
				}			
		}




		if (isset($_POST['btnEditDesigner'])) {

			$email = $_POST['email'];
		
			$m->set_data("txtGender" , $gender);
			$m->set_data("txtStreet" , $street);
			$m->set_data("txtArea" , $area);
			$m->set_data("txtCity" , $city);
			$m->set_data("txtState" , $state);
			$m->set_data("txtCountry" , $country);
			$m->set_data("txtPincode" , $pinCode);
			$m->set_data("txtPhone" , $phone);
			$m->set_data("txtWebsite" , $website);
			$m->set_data("txtInstagram" , $instagram);
			$m->set_data("txtFacebook" , $facebook);
			$m->set_data("txtTwitter" , $twitter);
			$m->set_data("txtBlogger" , $blogger);
			$m->set_data("txtDate" , date("Y-m-d"). " " .date("h:i:s"));


			$a = array( 'phone'=>$m->get_data(test_input('txtPhone')) ,
						'gender'=>$m->get_data(test_input('txtGender')) ,
						'street'=>$m->get_data(test_input('txtStreet')) ,
						'area'=>$m->get_data(test_input('txtArea')) ,
						'city'=>$m->get_data(test_input('txtCity')) ,
						'state'=>$m->get_data(test_input('txtState')) ,
						'country'=>$m->get_data(test_input('txtCountry')) ,
						'pin_code'=>$m->get_data(test_input('txtPincode')) ,
						'website'=>$m->get_data(test_input('txtWebsite')) ,
						'instagram'=>$m->get_data(test_input('txtInstagram')) ,
						'facebook'=>$m->get_data(test_input('txtFacebook')) ,
						'twitter'=>$m->get_data(test_input('txtTwitter')) ,
						'blogger'=>$m->get_data(test_input('txtBlogger')) ,
						'updated_on'=>$m->get_data(test_input('txtDate')) ,
						);
				
				$where = "email = '$email'";
				$q = $d->update("designer_profile",$a,$where);

			if ($q > 0) {
				
				header("Location:../profile.php");
			}
			else{
				echo "something is wrong - Designer Data Not updated";
			}			
	}
		
	}

?>