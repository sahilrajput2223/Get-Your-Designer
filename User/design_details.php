<?php
    include_once("header.php");
    require_once('mvc/DAO.php');
    $d = new DAO(); 
    $id = $_GET['a'];
    $where = "id = '$id'";
    $data = $d->select_by_condition("designer_post", $where);

    while ($result = mysqli_fetch_array($data)) {
  
        $imgs = explode(",", $result['images']); 
        $size = explode(",",$result['size']);
   
?>




 <!--Shop Page-->
 <div class="site-main container clearfix">
        <div class="col-md-7">
            <div class="row">
                <div id="shop-product-slider" class=" shop-product-slider carousel slide">
                    <div class="carousel-inner" style="width:100%; height:600%; margin-top:5%;" role="listbox">
                        
                    <?php 
                       
                       for($i = 0 ; $i < count($imgs); $i++){
                       ?>
                      
                      <div  style="width:100%; height:600%;" class="item <?php if($i == 0){ echo "active";} ?>">
                           <img  src="<?php echo '../Designer/'.$imgs[$i] ?>" style="width: 100%; height:600px; margin-top:10%;" alt="Product details slide 1"/>
                       </div>
                        
                       <?php } ?>
                        
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#shop-product-slider" role="button" data-slide="prev">
                        <img src="images/Shop/shop-slider-arrow-left.png" alt="arrow-left"/>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#shop-product-slider" role="button" data-slide="next">
                        <img src="images/Shop/shop-slider-arrow-right.png" alt="arrow-right"/>
                        <span class="sr-only">Next</span>
                    </a>
                    <!-- Indicators -->
                    
                    
                    <ol class="carousel-indicators">
                          
                    <?php 
                       
                       for($i = 0 ; $i < count($imgs); $i++){
                       ?>
                      
                          <li data-target="#shop-product-slider" data-slide-to="<?php echo $i ?>" <?php if($i ==0){ echo "class='active'";} ?>></li>
                          
                       
                       <?php } ?>
                        
                    
                    
                    </ol>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="row">
                <div class="product">
                    <div class="itable">
                        <div class="icell">
                            <div class="entry-summary">
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <h1 class="product_title"><?php echo $result["design_name"] ?></h1>
                                <div class="total-price">
                                    <p class="price">
                                        <span class="Price-amount">
                                            <span class="Price-currencySymbol">$</span>
                                            <?php echo $result['price'] ?>
                                            <span class="Price-currencySymbol">/-</span>
                                        </span>
                                    </p>
                                </div>
                                <div class="description">
                                    <div class="panel-default">
                                        <div id="collapseOne" class="panel-collapse  " role="tabpanel" aria-labelledby="headingOne">
                                            <div class="panel-body">
                                                <?php echo "<b style='color:black;'>Designed By :</b> ".$result['designer_email'] ?>
                                            </div>
                                            <div class="panel-body">
                                                <br>
                                                <?php echo "<b style='color:black;'>Description :</b> ".$result['description'] ?>
                                            </div>

                                            <div class="panel-body">
                                                <br>
                                                <?php echo "<b style='color:black;'>Material :</b> ".$result['material'] ?>
                                            </div>
                                            <br>
                                            <div class="panel-body">
                                                <br>
                                                <?php echo "<b style='color:black;'>Category :</b> ".$result['category'] ?>
                                            </div>
                                            <br>
                                            <div class="panel-body">
                                                <br>
                                                <?php echo "<b style='color:black;'>Occasion :</b> ".$result['occasion'] ?>
                                            </div>

                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="wrap-select">
                                    <label style="font-size: 15px;">
                                    Size Available *
                                    </label>
                                    <select name="select-size" class="select-size form-control" id="select-size">
                                        <option> -- Select -- </option>
                                        <?php 
                                            for($i = 0 ; $i < count($size) ; $i++){
                                       
                                            echo "<option value='$size[i]'> ". $size[$i] ." </option>";
                                       } ?>
                                    </select>

                                </div>
                                <br>
                                <br>

                                <p class="button">
                                    <input type="submit" class="button" value="Book Order"/>
                                </p>
                                <p class="free-shipping">
                                    <a href="#">FREE SHIPPING ON ORDERS 70USD+</a>
                                </p>
                                <p class="link-for-size-guide">
                                    <a href="size-guide.html">size guide</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   












<?php
     } include_once("footer.php");
?>