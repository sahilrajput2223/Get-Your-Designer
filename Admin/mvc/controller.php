<?php
session_start();
	require 'DAO.php'; 
	require 'model.php';

	$d = new DAO();
	$m = new model();

	extract($_POST);

	if (isset($_POST) && !empty($_POST)) {

		if (isset($_POST['btnAddDesigner'])) {
			
			if( $_POST["passwd"] == $_POST["C_password"]){
				
				$email = $_POST['Email'];
				echo $email;
				
				$passwd = $_POST['passwd'];
				echo $passwd;
				
				$_SESSION['designer_user_eamil'] = $email;
				$_SESSION['designer_user_passwd'] = $passwd;
				echo "PASSWORD AND CONFIRM PASSWORD MATCH";
				$m->set_data("txtDname" , $D_name);
				$m->set_data("txtUname" , $U_name);
				$m->set_data("txtEmail" , $Email);
				$m->set_data("txtPasswd" , $passwd);
				$m->set_data("txtCPasswd" , $C_password);
				
	
				$a = array( 'name'=>$m->get_data(test_input('txtDname')) ,
							'username'=>$m->get_data(test_input('txtUname')) ,
							'email'=>$m->get_data(test_input('txtEmail')) ,
							'password'=>$m->get_data(test_input('txtPasswd')) ,
							'c_password'=>$m->get_data(test_input('txtCPasswd')) ,
							'profile_flag'=>$m->get_data(test_input(0)) ,
							);
	
					$q = $d->insert("register_designer",$a);
	
				if ($q > 0) {
					#echo "Designer Data Added";
					header("Location:profile_mail.php");
				}
				else{
					echo "something is wrong - Designer Data Not Added";
				}
	
			}
			else{
				echo "PASSWORD AND CONFIRM NOT MATCH";
			}

			
		}




		if (isset($_POST['btnDeleteDesigner'])) {
				$designer_id = $_POST['designer_id'];
				$condition = "id = $designer_id";
				$q = $d->delete_designer_by_id("register_designer", $condition);
	
				if ($q > 0) {
					header("Location:../all_designer.php");
				}
				else{
					echo "something is wrong - Designer Data Not Deleted";
				}

			
		}
		
	}

?>