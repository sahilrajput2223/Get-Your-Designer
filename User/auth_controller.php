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
                $_SESSION['error'] = "Email And Password Not Match !!!";
                header("Location:message.php");
            }
            
        }




        if(isset($_POST['btnRegisterUser'])){
            $username = $_POST['username'];
            $email = $_POST["email"];
            $passwd = $_POST["password"];
            $c_passwd = $_POST["c_password"];


            $condition = "email = '$email'";
            $b = $d->select_by_condition("user_register",$where);
            if(count(mysqli_fetch_assoc($b)) == 0){
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
                $_SESSION['error'] = "Password And Confirm Password Not Match";
                header("Location:message.php");
            }
            #echo $condition;
        }
        else{
            $_SESSION['error'] = "Email Already Exists, please Login ";
            header("Location:message.php");
        
        }
           
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


        if(isset($_POST['btnForgotPassword'])){
           
            $email = $_POST['email'];
            $where = "email = '$email'";
            $q = $d->select_by_condition("user_register",$where);
            
            if(count(mysqli_fetch_all($q)) != 0){
                   $_SESSION['f_key'] = $email;
                   header("Location:mvc/forgot_password_mail.php");
            }
            else{
                $_SESSION['error'] = "Email ID Not Match !!!"; 
                header("Location:message.php");
            }

        }


        if(isset($_POST['btnMatchOtp'])){
            $email = $_SESSION['f_key'];
            $system_otp = $_SESSION['OTP'];
            $user_otp = $_POST['otp'];
 
            if($system_otp == $user_otp){
               header("Location:add_new_password.php");
            }
            else{
               $_SESSION['error'] = "System OTP And User OTP Not Match !!!!";
               header("Location:message.php");
               
            }
         }


         if(isset($_POST['btnSetPassword'])){
            $email = $_SESSION['f_key'];
            $password = $_POST['password'];
            $c_password = $_POST['c_password'];
 
            if($password == $c_password){
                $m->set_data("txtPassword" , $password);
				$m->set_data("txtCpassword" , $c_password);
				
	
				$a = array( 'password'=>$m->get_data(test_input('txtPassword')) ,
							'c_password'=>$m->get_data(test_input('txtCpassword')) ,
                            );
                $where = "email = '$email'";      
                $q = $d->update("user_register",$a,$where);

                if($q > 0){
                    session_destroy();
                    header("Location:login.php");
                }
                else{
                    $_SESSION['error'] = "Password Not Updated";
                    header("Location.message.php");      
                }
            }
            else{
               $_SESSION['error'] = "System OTP And User OTP Not Match !!!!";
               header("Location:message.php");
               
            }
         }

        
    }


?>