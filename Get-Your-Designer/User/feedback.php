<?php

include_once("header.php");
if(empty($_SESSION['user'])){
    header("Location:login.php");
} 
 ?>

    <!--Login Page-->
    <div class="site-main clearfix">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="wrap-login-forms other-page margin-top-140">
                        <!--Title-->
                 
                        <br><h3 class="page-title">Feedback</h3>
                        <!--End Title-->
                        <!--Form-->
                        
                        <form action="mvc/controller.php" method="POST" class="login-forms">
                            <p class="form-row">
                                <label>Email *</label>
                                <input type="email" name="email" value="<?php echo $_SESSION['user']?>" readonly class="input-text required"/>
                            </p>
                            <p >
                                <label>Feedback *</label>
                                <textarea name="feedback"> 

                                </textarea>    
                            </p>
                            <p class="form-row">
                                <input type="submit" name="btnSubmitFeedback" class="button" value="Submit Feedback"/>
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
