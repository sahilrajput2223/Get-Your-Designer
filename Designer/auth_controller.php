<?php
    session_start();
    require("mvc/DAO.php");

    if(isset($_POST) && !empty($_POST)){
        
        
        if(isset($_POST['btnLogin'])){
            
            $email = $_POST["email"];
            $password = $_POST["password"];
            
            $condition = "email = '" . $email . "' AND password = '" . $password . "'";

            #echo $condition;
            $d = new dao();

            $data = $d->select_by_condition("register_designer", $condition);
            
            $result = mysqli_fetch_array($data);

            if($result['profile_flag'] == 1){
                $_SESSION['has_profile'] = "yes";
            }
            else{
                $_SESSION['has_profile'] = "false";
            }


            if ($result["email"] == $email){
                echo "Login Done (Designer)"; 
                $_SESSION['designer'] = $email; 
                header("Location:home.php");
            }
            else{
                echo "Login Fail (Designer)";
            }
            
        }


        if(isset($_POST['btnLogout'])){
            echo "btn logout";
            session_destroy();
            header("Location:login.php");
        }

        
    }


?>