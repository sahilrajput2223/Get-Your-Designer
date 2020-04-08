<?php
    session_start();
    require("mvc/DAO.php");
    require 'mvc/model.php';

    
	$d = new DAO();
	$m = new model();

    extract($_POST);
    
    if(isset($_POST) && !empty($_POST)){
        
        
         
        if(isset($_POST['btnLoginUser'])){
            
            $email = $_POST["email"];
            $password = $_POST["password"];
            
            $condition = "email = '" . $email . "' AND password = '" . $password . "'";
            echo $condition;
            
            #echo $condition;
            $d = new dao();

            $data = $d->select_by_condition("user_register", $condition);
            
            $result = mysqli_fetch_array($data);

            if ($result["email"] == $email && $result['password'] == $password){
                echo "Login Done (Designer)"; 
                $_SESSION['user'] = $email; 
                header("Location:home.php");
            }
            else{
                echo "Login Fail (Designer)";
            }
            
        }




        if(isset($_POST['btnRegisterUser'])){
            $username = $_POST['username'];
            $email = $_POST["email"];
            $passwd = $_POST["password"];
            $c_passwd = $_POST["c_password"];

            if($passwd == $c_passwd){

                
                $m->set_data("txtUname" , $username);
				$m->set_data("txtEmail" , $email);
				$m->set_data("txtPasswd" , $password);
				$m->set_data("txtCPasswd" , $c_password);
				
	
				$a = array( 'username'=>$m->get_data(test_input('txtUname')) ,
							'email'=>$m->get_data(test_input('txtEmail')) ,
							'password'=>$m->get_data(test_input('txtPasswd')) ,
							'c_password'=>$m->get_data(test_input('txtCPasswd')) ,
                            'v_flag'=>$m->get_data(test_input(0)) ,
							);
                $q = $d->insert("user_register",$a);
    
                if($q > 0){
                    $_SESSION['user'] = $email;
                    header("Location:mvc/register_otp_mail.php");
                }
                else{
                    echo "User Data Not Inserted";
                }
    
            }
            else{
                echo "password not match";
                header("Location:registration.php");
            }
                      
            
            #echo $condition;
           
        }




        if(isset($_POST['btnOtp'])){
           $email = $_SESSION['user'];
           $system_otp = $_SESSION['OTP'];
           $user_otp = $_POST['otp'];

           if($system_otp == $user_otp){
              $c = array('v_flag'=>1,);
              $where = "email = '$email'";
              $f = $d->update("user_register",$c, $where);

              if($f > 0){
                echo "verification flag updated";
                unset($_SESSION['OTP']);
                header("Location:home.php");
              }
              else{
                  echo "Verification Flag Not Updated";
              }
           }
           else{
               echo "OTP Not match";
              
           }
        }



        if(isset($_POST['btnLogoutUser'])){
            echo "btn logout";
            session_destroy();
            header("Location:login.php");
        }

        
    }


?>