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
                        <h3 class="page-title">reset your password</h3>
                        
                        <!--End Title-->
                        <!--Form-->
                        <form action="auth_controller.php" method="POST" class="password-forms">
                            <p class="form-row">
                                <input type="email" name="email" class="input-text required" placeholder="email"/>
                            </p>
                            <p class="form-row">
                                <input name="btnForgotPassword" type="submit" class="button" value="Submit Email"/>
                            </p>
                            <p class="create-account">
                                <a href="login.php">back to login</a>
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