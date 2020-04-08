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
                        <h3 class="page-title">Enter OTP</h3>
                        
                        <!--End Title-->
                        <!--Form-->
                        <form action="auth_controller.php" method="POST" class="password-forms">
                            <p class="form-row">
                                <br>
                                <input type="text" name="otp" class="input-text required" placeholder="Check Your Email !!"/>
                            </p>
                            <p class="form-row">
                                <input name="btnMatchOtp" type="submit" class="button" value="Submit OTP"/>
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