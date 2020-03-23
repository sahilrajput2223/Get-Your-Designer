<?php


    if(isset($_POST) && !empty($_POST)){
        
        
        if(isset($_POST['btnLogin'])){
            
            $username = $_POST["username"];
            $password = $_POST["password"];

            if($username == "Admin" && $password == "Admin"){
                echo "password match";
                header("Location:home.php");
            }
            else{
                echo "password not match";
            }
        }


        if(isset($_POST['btnLogout'])){
            echo "btn logout";
            header("Location:login.php");
        }

        
    }


?>