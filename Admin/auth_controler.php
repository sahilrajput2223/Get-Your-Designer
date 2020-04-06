<?php

    session_start();
    if(isset($_POST) && !empty($_POST)){
        
        
        if(isset($_POST['btnLogin'])){
            
            $username = $_POST["username"];
            $password = $_POST["password"];

            if($username == "Admin" && $password == "Admin"){
                echo "password match";
                $_SESSION['admin'] = "Admin";
                header("Location:home.php");
            }
            else{
                echo "password not match";
            }
        }


        if(isset($_POST['btnLogout'])){
            echo "btn logout";
            session_destroy();
            header("Location:login.php");
        }

        
    }


?>