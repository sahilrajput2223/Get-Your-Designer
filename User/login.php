<?php 
    include_once("header.php");
 ?>

    <!--Login Page-->
    <div class="site-main clearfix">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="wrap-login-forms other-page margin-top-140">
                        <!--Title-->
                 
                        <br><h3 class="page-title">login</h3>
                        <!--End Title-->
                        <!--Form-->
                        
                        <form action="auth_controller.php" method="POST" class="login-forms">
                            <p class="form-row">
                                <input type="email" name="email" class="input-text required" placeholder="Email"/>
                            </p>
                            <p class="form-row">
                                <input type="password" name="password" class="input-text required" placeholder="Password"/>
                            </p>
                            <p class="form-row">
                                <input type="submit" name="btnLoginUser" class="button" value="sign in"/>
                            </p>
                            <p class="lost_password">
                                <a href="forgot_password.php">forgot your password?</a>
                            </p>
                            <p class="create-account">
                                <a href="registration.php">create account</a>
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
