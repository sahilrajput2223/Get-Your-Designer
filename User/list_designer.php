<?php
if(empty($_SESSION['user'])){
    header("Location:login.php");
} 

    include_once("header.php");
    require_once('mvc/DAO.php');
    $d = new DAO(); 
    $I = 0;
    $data = $d->select_all("designer_profile");
    
    
?>

    <div class="site-main clearfix">
        <div class="shop-product-list shop-product-list-2-columns clearfix col-sm-12">
            <div class="row">
                <ul class="products clearfix">
                    <!--Product 1-->
                    
                    <div class="container">
                    <li class="col-sm-12 col-md-12 col-xs-12 product">
                        <h3 style="font-size: 30px; margin-top: -10%;">All Designers</h3>
                    </li>
                   
                   <?php  
                        while ($result = mysqli_fetch_array($data)) {
                            
                   ?>
                    <li class="col-sm-1 col-md-1 col-xs-1 product">
                    </li>
                                
                    <li class="col-sm-5 col-md-5 col-xs-5 product">
                        
                        <a href="design_by_designer.php?email=<?php echo $result['email']; ?>" >
                            <img style="width:100%; height:400px; border-radius:5px; box-shadow: 10px 10px 15px gray;" src="<?php echo "../Designer/".$result['profile_img'] ?>" alt="image"/>
                            <h3 style="font-size: 20px; "><?php echo $result['name'] ?></h3>
                        </a>
                    </li>
                    
                    
                    
                    
                    
                    <?php } ?>

                    
                    </div>

                </ul>
            </div>
        </div>
    </div>
</div>
<?php
    include_once("footer.php");
?>