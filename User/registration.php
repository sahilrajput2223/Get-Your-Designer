<?php 
    include_once("header.php");
 ?>

     <!--Create Account Page-->
    <div class="site-main clearfix">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="wrap-account-forms other-page margin-top-140">
                        <!--Title-->
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <h3 class="page-title">create account</h3>
                        <!--End Title-->
                        <!--Form-->
                        <form action="auth_controller.php" method="POST" class="account-forms">
                            <p class="form-row">
                                <input type="text" name="username" class="input-text required" placeholder="User Name"/>
                            </p>
                            <p class="form-row">
                                <input type="email" name="email" class="input-text required" placeholder="email"/>
                            </p>
                            <p class="form-row">
                                <input type="password" name="password" class="input-text required name" placeholder="password"/>
                            </p>
                            <p class="form-row">
                                <input type="password" name="c_password" class="input-text required last-name" placeholder="confirm password"/>    
                            </p>
                            <p class="form-row">
                                <input type="submit" name="btnRegisterUser" class="button" value="sign in"/>
                            </p>
                            <p class="create-account">
                                <a href="#">already a customer?</a>
                                <a href="login.php" class="create-account-login">log in</a>
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