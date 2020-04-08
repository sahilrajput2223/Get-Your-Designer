<?php
    session_start();
    require("mvc/DAO.php");

    if(isset($_POST) && !empty($_POST)){
        
        
        if(isset($_POST['btnLogin'])){
            
            $email = $_POST["email"];
            $password = $_POST["password"];
            
            $condition = "email = '" . $email . "' AND password = '" . $password . "'";
            echo $condition;
            
            #echo $condition;
            $d = new dao();

            $data = $d->select_by_condition("register_designer", $condition);
            
            $result = mysqli_fetch_array($data);

            if(count($result) > 0){

            if($result['profile_flag'] == 1){
                $_SESSION['has_profile'] = "yes";
            }
            else{
                $_SESSION['has_profile'] = "false";
            }


            if ($result["email"] == $email){
                echo "Login Done (Designer)"; 
                $_SESSION['designer'] = $email; 
                if($_SESSION['has_profile'] == "yes"){
                    header("Location:profile.php");
                }
                else{
                    header("Location:add_profile.php");
                }
            }
            else{
                
            $_SESSION['error'] = "Email Id And Password Not Match !!";
            header("Location:message.php");
            }
        }
        else{
            $_SESSION['error'] = "Your Email Not Associated With Any User";
            header("Location:message.php");
        }
            
        }


        if(isset($_POST['btnLogout'])){
            echo "btn logout";
            session_destroy();
            header("Location:login.php");
        }

        
    }


?>