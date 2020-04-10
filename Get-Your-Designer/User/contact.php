<?php 
    
    include_once("header.php");
?>
    <!--Contact Page-->
    <div class="site-main clearfix">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="wrap-contact-forms other-page margin-top-140">
                        <!--Title-->
                        <h3 class="page-title">get in touch</h3>
                        <div class="link-email">
                            <a href="mailto:vlad@htmlbook.ru">contact@Get-Your_Designer.com</a>
                        </div>
                        <!--End Title-->
                        <!--Form-->
                        <form action="mvc/controller.php" method="POST" class="contact-forms">
                            <div class="field-text">
                                <input type="text" name="username" class="required" required placeholder="name"/>
                            </div>
                            <div class="field-text">
                                <input type="email" name="email" class="input required" required readonly value="<?php echo $_SESSION['user'] ?>"/>
                            </div>
                            <div class="field-textarea">
                                <textarea class="required" name="contact" required placeholder="message"></textarea>
                            </div>
                            <div class="field-submit">
                                <input type="submit" name="btnContact" class="submit btn btn-1" value="send"/>
                            </div>
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