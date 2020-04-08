<?php
  include_once("header.php");
   
if(empty($_SESSION['user'])){
    header("Location:login.php");
} 
?>  


    <!-- HomePage Slider -->
    <section class="home-slider">
        <div id="home-slider" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <!-- Slider 1 -->
            <div class="carousel-inner" role="listbox">
                <div class="item active" style="background-image: url('images/Home-Slider/slide-1.jpg')">
                    <div class="itable">
                        <div class="icell">
                            <div class="slider-content">
                                <h2 class="slider-title-before">HANDMADE BASICS WITH STYLE AND QUALITY</h2>
                                <h1 class="slider-title">Back to Black</h1>
                                <a href="list_designer.php" class="btn btn-1"><span>start shopping now</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slider 2 -->
                <div class="item" style="background-image: url('images/Home-Slider/slide-2.jpg')">
                    <div class="itable">
                        <div class="icell">
                            <div class="slider-content">
                                <h2 class="slider-title-before">HANDMADE BASICS WITH STYLE AND QUALITY</h2>
                                <h1 class="slider-title">Modern & Edgy</h1>
                                <a href="list_designer.php" class="btn btn-1"><span>start shopping now</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slider 3 -->
                <div class="item" style="background-image: url('images/Home-Slider/slide-3.jpg')">
                    <div class="itable">
                        <div class="icell">
                            <div class="slider-content">
                                <h2 class="slider-title-before">HANDMADE BASICS WITH STYLE AND QUALITY</h2>
                                <h1 class="slider-title">Major Comeback</h1>
                                <a href="list_designer.php" class="btn btn-1"><span>start shopping now</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#home-slider" data-slide-to="0" class="active"></li>
                <li data-target="#home-slider" data-slide-to="1"></li>
                <li data-target="#home-slider" data-slide-to="2"></li>
            </ol>
        </div>
    </section>
    <!-- End HomePage Slider -->
</div>

<?php
    include_once("footer.php");
?>