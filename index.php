<?php
$title="Acasa";
?>


<?php 
include ("functions/functions.php");

?>
<?php include ("header.php"); ?>



               
                
               
                <br />
                <!--carousel -->
                <div id="myCarousel" class="carousel slide" style="margin-top:1%;">
                         <!-- Carousel indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                                <li data-target="#myCarousel" data-slide-to="3"></li>
                                <li data-target="#myCarousel" data-slide-to="4"></li>
                            </ol>
                            <!-- Carousel items -->
                            <div class="carousel-inner" style="max-height:350px;">
                                <div class="item active">
                                    <img src="img/carousel_1.jpg" alt="First slide" /> <!--picture by Chris Phutully (license Creative Commons Attribution 2.0 - https://creativecommons.org/licenses/by/2.0/) -->
                                </div>
                                <div class="item">
                                    <img src="img/carousel_2.jpg" alt="Second slide"  /><!--picture by Armyman (license Creative Commons Attribution 2.0 - https://creativecommons.org/licenses/by/2.0/) -->
                                </div>
                                <div class="item">
                                    <img src="img/carousel_3.jpg" alt="Third slide"  /><!-- picture taken from https://stocksnap.io/ (license Creative Commons CC0 - https://creativecommons.org/publicdomain/zero/1.0/) -->
                                </div>
                                <div class="item"><!-- -->
                                    <img src="img/carousel_4.jpg" alt="Forth slide"  /><!-- picture taken from https://stocksnap.io/ (license Creative Commons CC0 - https://creativecommons.org/publicdomain/zero/1.0/) -->
                                </div>
                                <div class="item">
                                    <img src="img/carousel_5.jpg" alt="Fifth slide"  /><!-- picture taken from https://stocksnap.io/ (license Creative Commons CC0 - https://creativecommons.org/publicdomain/zero/1.0/) -->
                                </div>
                            </div>
                            <!-- Carousel nav -->
                            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                               <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                               <span class="sr-only">Previous</span>
                             </a>
                             <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                 <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                               <span class="sr-only">Next</span>
                             </a>
                            
                        </div>

                    <!-- Stop Carousel -->    
               
                
                   <?php include("sidebar.php");?>  


                <div class="panel">
                    <div class="panel-body">
                        
                        <h4 style=" color: gray; line-height: 200%;">Bun venit la <b>Magic Service</b>, un service complet atat pentru intretinere preventiva cat si pentru reparatii auto. Oferim servicii de inalta calitate garantat, la preturi avantajoase. Reparam atat automobile autohtone cat si straine, si suntem cea mai buna alegere pentru intretinerea masinii tale.</h4>
                        
                
                    
                
                    <div style="margin-bottom: 10%;"><br/>
                        
                            <?php 
                            if(!isset($_GET['cat'])){
                                if(!isset($_GET['brand'])){


                            global $con;

                            $get_pro="SELECT * FROM products order by RAND() LIMIT 0,6";
                            $run_pro = mysqli_query($con, $get_pro);

                            while($row_pro=mysqli_fetch_array($run_pro)){

                                $pro_id=$row_pro['product_id'];
                                $pro_cat=$row_pro['product_cat'];
                                $pro_brand=$row_pro['product_brand'];
                                $pro_title=$row_pro['product_title'];
                                $pro_price=$row_pro['product_price'];
                                $pro_image=$row_pro['product_image'];


                                echo " <div class='col-sm-3' style='margin-bottom: 5%;'>
                                            <a href='details.php?pro_id=$pro_id'><img class='pro_img' src='admin_area/product_images/$pro_image' width='200px' height='200px' style='border:2px solid #242424;' /></a><br />
                                            <h3>$pro_title</h3><br />
                                            <b><span style='color:#af1111;'>$pro_price LEI</span></b><br /><br />
                                            <a href='details.php?pro_id=$pro_id'><img src='admin_area/images/button.png' width='120px' /></a>

                                        </div> ";

                                    }
                                }
                            }
                            
                            ?>
                            
                        
                    </div>
                </div> 

               </div>
                   

                
               
            </div>
                
                
            <br /> <br />
            
<?php include("footer.php"); ?>