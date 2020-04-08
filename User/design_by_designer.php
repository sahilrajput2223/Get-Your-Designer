<?php
    if(empty($_SESSION['user'])){
        header("Location:login.php");
    } 
    include_once("header.php");
    require_once('mvc/DAO.php');
    $I = 0;
    $d = new DAO(); 
    $email = $_GET['email'];
    $where = "designer_email = '$email' ORDER BY created_on DESC";
    $data = $d->select_by_condition("designer_post", $where);
    $where2 = "email = '$email'";
    $data2 = $d->select_by_condition("designer_profile", $where2);
    
?>

    <div class="site-main clearfix">
        <div class="shop-product-list shop-product-list-2-columns clearfix col-sm-12">
            <div class="row">
                <ul class="products clearfix">
                    <!--Product 1-->
                    <div class="container">
                    <li class="col-sm-12 col-md-12 col-xs-12 product">
                    <?php     while ($result2 = mysqli_fetch_array($data2)) {
                    ?>    
                    <h3 style="font-size: 15px; margin-top: -10%;">Design By: <?php echo $result2['name'] ?> </h3>
                        <h3 style="font-size: 15px;">Social Media: 
                       <?php 
                        if($result2['website'] != ""){
                       ?>
                        <a href="<?php echo $result2['website']?>"><img style="width:20px; height: 20px;" src="images/website.svg" ></a>&nbsp;&nbsp;&nbsp;
                        <?php } ?>

                        <?php 
                        if($result2['instagram'] != ""){
                       ?>
                        <a href="<?php echo $result2['instagram']?>"><img style="width:20px; height: 20px;" src="images/instagram.svg" ></a> &nbsp;&nbsp;&nbsp;
                        <?php } ?>

                        <?php 
                        if($result2['twitter'] != ""){
                       ?>
                        <a href="<?php echo $result2['twitter']?>"><img style="width:20px; height: 20px;" src="images/twitter.svg" ></a>&nbsp;&nbsp;&nbsp;
                        <?php } ?>

                        <?php 
                        if($result2['blogger'] != ""){
                       ?>
                        <a href="<?php echo $result2['blogger']?>"><img style="width:20px; height: 20px;" src="images/blogger.svg" ></a>&nbsp;&nbsp;&nbsp;
                        <?php } ?>

                        <?php 
                        if($result2['facebook'] != ""){
                       ?>
                        <a href="<?php echo $result2['facebook']?>"><img style="width:20px; height: 20px;" src="images/facebook.svg" ></a>&nbsp;&nbsp;&nbsp;
                        <?php } ?>
                    </h3> 
                        <?php } ?>
                    </li>
                   <?php  
                        while ($result = mysqli_fetch_array($data)) {
                           $I++;
                            $imgs = explode(",", $result['images']); 
                            if($I == 1){
                   ?>
                    <li class="col-sm-12 col-md-12 col-xs-12 product">   
                    </li>
                    <?php }?>
                    <li class="col-sm-1 col-md-1 col-xs-1 product">
                    </li>
                                
                    <li class="col-sm-5 col-md-5 col-xs-5 product">
                        
                        <a href="design_details.php?a=<?php echo $result['id']?>" class="loop-product-link">
                            <img style="width:100%; height:400px; border-radius:5px; box-shadow: 10px 10px 15px gray;" src="<?php echo "../Designer/".$imgs[0] ?>" alt="image"/>
                            <img style="width:100%; height:400px; border-radius:5px; box-shadow: 10px 10px 15px gray;" class="image-hover" src="<?php echo "../Designer/".$imgs[1] ?>" alt="image"/>
                            <h3 style="font-size: 20px; "><?php echo $result['design_name'] ?></h3>
                        </a>
                    </li>
                    
                    
                    
                    <?php } if($I == 0)  { ?>

                            
                        <li class="col-sm-12 col-md-12 col-xs-12 product">
                        
                        
                            <h3 style="font-size: 20px;"> There Is No Any Submited Designs or This User .. </h3>
                            <h3 style="font-size: 20px;"> Please Go Back & Find Another Designer .. </h3>
                            
                        
                    </li>


                    
                    <?php 
                    }
                    
                    
                    ?>
                    

                    
                    </div>

                </ul>
            </div>
        </div>
    </div>
</div>
<?php
    include_once("footer.php");
?>