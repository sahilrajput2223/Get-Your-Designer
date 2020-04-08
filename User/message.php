<?php
    include_once("header.php");
?>

    <!--Passwprd Page-->
    <div class="site-main clearfix">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="wrap-paassword-forms other-page margin-top-150">
                        <!--Title-->
                        
                        <!--End Title-->
                        <!--Form-->
                        <form action="auth_controler.php" method="POST" class="password-forms">
                            <p class="form-row">
                               <center>
                                   <h3>
                                      <?php echo $_SESSION['error']; session_destroy();?>
                                   </h3>
                               </center>

                            </p>
                           
                            <p class="create-account">
                               <br>
                                <a href="login.php">back to login</a>
                            </p>
                            <p class="create-account">
                               <br> --- OR --- <br>
                            </p>
                            <p class="create-account">
                                <br><a href="registration.php">back to register</a>
                            </p>
                        </form>
                        <!--End Form-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include_once("footer.php");
?>