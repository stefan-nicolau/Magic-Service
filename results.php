<?php 
include ("functions/functions.php");

    

?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<html xmlns="http://www.w3.org/1999/xhtml">
    
    
    <head>
        <title>Magic Service - Magazin</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="shortcut icon" href="img/favicon.ico"/>
        <link href="css/index.css" rel="stylesheet" type="text/css" />
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"></meta>
        
        <script src="https://code.jquery.com/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script type="text/javascript">
            var $ = jQuery.noConflict();
            $(document).ready(function() { 
                $('#myCarousel').carousel({ interval: 3000, cycle: true });
            }); 
        </script>
        <!-- Bootsrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet" />
        <!-- inside css -->
        <style>
           
            @media (max-width: 315px) {
                span{
                font-size:8px;
                }
            }
            @media (min-width: 300px) {
                span{
                font-size:8px;
                }
            }
            
            @media (min-width: 400px) {
                span{
                font-size:8px;
                }
            }

            @media (min-width: 481px) and (max-width: 767px) {
                span{
                font-size: 14px;
                }
            }

            @media (min-width: 768px) and (max-width: 979px) {
                span{
                font-size:14px;
                }
            }

            @media (min-width: 980px) {
              span{
              font-size:14px;
              }
            }
            /* cls */
            @media (max-width: 315px) {
                h3{
                font-size:8px;
                }
            }
            
            @media (min-width: 300px) {
                h3{
                font-size:8px;
                }
            }
            
            @media (min-width: 400px) {
                h3{
                font-size:8px;
                }
            }

            @media (min-width: 481px) and (max-width: 767px) {
                h3{
                font-size:16px;
                }
            }

            @media (min-width: 768px) and (max-width: 979px) {
                h3{
                font-size:18px;
                }
            }

            @media (min-width: 980px) {
              h3{
              font-size:18px;
              }
            }
            /*  Produc Image media */
             @media (max-width: 315px) {
                .pro_img{
                height: 120px;
                width: 120px;
                
                }
            }
            @media (min-width: 300px) {
                .pro_img{
                height: 120px;
                width: 120px;
                }
            }
            
            @media (min-width: 400px) {
                .pro_img{
                height: 120px;
                width: 120px;
                }
            }

            @media (min-width: 481px) and (max-width: 767px) {
                .pro_img{
                height: 120px;
                width: 120px;
                }
            }

            @media (min-width: 768px) and (max-width: 979px) {
                .pro_img{
                height: 120px;
                width: 120px;
                }
            }

            @media (min-width: 980px) {
              .pro_img{
              height: 200px;
              width: 200px;
              }
            }
            /*end media */
            .hovereffect {
              width: 100%;
              height: 100%;
              float: left;
              overflow: hidden;
              position: relative;
              text-align: center;
              cursor: default;
              background: #af1111;
              border-radius: 10%;              
            }
            .hovereffect .overlay {
              width: 100%;
              height: 100%;
              position: absolute;
              overflow: hidden;
              top: 0;
              left: 0;
              padding: 25% 10%;              
            }
            .hovereffect img {
              display: block;
              position: relative;
              max-width: none;
              width: 100%;
              -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
              transition: opacity 0.35s, transform 0.35s;
              -webkit-transform: translate3d(-25%,0,0);
              transform: translate3d(-25%,0,0);
              -webkit-backface-visibility: hidden;
              backface-visibility: hidden;
              box-shadow: 4px 2px 10px #232323;
            }
            .hovereffect:hover img {
              
              -webkit-transform: translate3d(0,0,0);
              transform: translate3d(0,0,0);
            }            
            
            
            #custom-bootstrap-menu.navbar-default .navbar-brand {
                color: rgba(119, 119, 119, 1);
            }
            #custom-bootstrap-menu.navbar-default {
                font-size: 18px;
                font-family:"Lucida Grande", "Lucida Sans", Tahoma, sans-serif;
                font-weight: bolder;
                
                background-color: rgba(248, 248, 248, 0);
                border-width: 0px;
                border-radius: 0px;
            }
            #custom-bootstrap-menu.navbar-default .navbar-nav>li>a {
                color: rgba(35, 35, 35, 1);
                background-color: rgba(248, 248, 248, 0);
            }
            #custom-bootstrap-menu.navbar-default .navbar-nav>li>a:hover,
            #custom-bootstrap-menu.navbar-default .navbar-nav>li>a:focus {
                color: rgba(250, 250, 250, 1);
                background-color: rgba(175, 17, 17, 1);
            }
            #custom-bootstrap-menu.navbar-default .navbar-nav>.active>a,
            #custom-bootstrap-menu.navbar-default .navbar-nav>.active>a:hover,
            #custom-bootstrap-menu.navbar-default .navbar-nav>.active>a:focus {
                color: rgba(250, 250, 250, 1);
                background-color: rgba(175, 17, 17, 1);
                
            }
            #custom-bootstrap-menu.navbar-default .navbar-toggle {
                border-color: #424242;
            }
            #custom-bootstrap-menu.navbar-default .navbar-toggle:hover,
            #custom-bootstrap-menu.navbar-default .navbar-toggle:focus {
                background-color: #424242;
            }
            #custom-bootstrap-menu.navbar-default .navbar-toggle .icon-bar {
                background-color: #424242;
            }
            #custom-bootstrap-menu.navbar-default .navbar-toggle:hover .icon-bar,
            #custom-bootstrap-menu.navbar-default .navbar-toggle:focus .icon-bar {
                background-color: #f8f8f8;
            }
            
            #custom-search-input {
            margin:0;
            margin-top: 10px;
            padding: 0;
        }

        #custom-search-input .search-query {
            padding-right: 3px;
            padding-right: 4px \9;
            padding-left: 3px;
            padding-left: 4px \9;
            /* IE7-8 doesn't have border-radius, so don't indent the padding */

            margin-bottom: 0;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
        }
            
            #custom-search-input button {
                border: 0;
                background: none;
                /** belows styles are working good */
                padding: 2px 5px;
                margin-top: 2px;
                position: relative;
                left: -28px;
                /* IE7-8 doesn't have border-radius, so don't indent the padding */
                margin-bottom: 0;
                -webkit-border-radius: 3px;
                -moz-border-radius: 3px;
                border-radius: 3px;
                color:#D9230F;
            }

            .search-query:focus + button {
                z-index: 3;   
            }
            
        </style> 
    </head>
    
    
    <body>
    
        <!-- Header -->
        <div class="container" style="background: whitesmoke;
             background: linear-gradient(grey, whitesmoke);
             background:-webkit-linear-gradient(grey, whitesmoke);
             background: -o-linear-gradient(grey, whitesmoke); 
             background: -moz-linear-gradient(grey, whitesmoke);
             border-radius: 0% 0% 5% 5%;
             box-shadow: 0px 7px 20px #c9c9c9;">
            <div class="row">
            
                <div class="col-xs-10 col-xs-push-1" style="background:#242424; border-radius: 0% 0% 15% 15%; box-shadow: 0px 7px 10px #565656;">
                    <div class="col-lg-4 col-md-8 col-sm-6 col-xs-8">
                        <img src="img/contact.png" class="img-responsive" alt="Contact" />
                    </div>
                    
                    <div class="col-lg-1 col-lg-push-5 col-md-1 col-md-push-1 col-sm-1 col-sm-push-4 col-xs-2" style="margin-top: 8px; margin-bottom: 8px">
                        <div class="hovereffect">
                                <img src="img/facebook_g.png" class="img-responsive" alt="Contact" />
                                <a target="_blank" href="http://www.facebook.com">
                                    <div class="overlay"></div>
                                </a>
                        </div>    
                    </div>  
                    <div class="col-lg-1 col-lg-push-5 col-md-1 col-md-push-1 col-sm-1 col-sm-push-4 col-xs-2" style="margin-top: 8px; margin-bottom: 8px">
                        <div class="hovereffect">
                                <img src="img/google_g.png" class="img-responsive" alt="Contact" />
                                <a target="_blank" href="http://www.facebook.com">
                                    <div class="overlay"></div>
                                </a>
                        </div>                
                    </div>
                </div>
            </div>
            
            
            <div class="row">
                <div class="col-lg-4 col-lg-push-1 col-md-3 col-md-push-1 col-sm-push-2 col-xs-7 col-xs-push-1">
                        <a href="index.php"><img src="img/logo.png" class="img-responsive" /></a>

                </div>
                
                    <!-- Star navbar -->
                    <div id="custom-bootstrap-menu" class="navbar navbar-default col-lg-push-1 col-md-push-1 col-sm-pull-1  col-xs-offset-2 col-xs-pull-1" role="navigation" style="margin-top: 5%;">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="collapse navbar-collapse navbar-menubuilder">
                                <ul class="nav navbar-nav navbar-left">
                                    <li><a href="index.php">ACASA</a>
                                    </li>
                                    <li class="active"><a href="magazin.php">MAGAZIN</a>
                                    </li>
                                    <li><a href="service.php">SERVICE</a>
                                    </li>
                                    <li><a href="about.php">DESPRE NOI</a>
                                    </li>
                                    <li><a href="contact.php">CONTACT</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>            
                    <!--stop navbar-->
            </div>        
        </div>
        <br />
        <!-- Header -->
            <div class="container" style="background: whitesmoke;
             background: linear-gradient(#F2F2F2, whitesmoke);
             background:-webkit-linear-gradient(#F2F2F2, whitesmoke);
             background: -o-linear-gradient(#F2F2F2, whitesmoke); 
             background: -moz-linear-gradient(#F2F2F2, whitesmoke); 
             border-radius: 2% 2% 2% 2%;
             box-shadow: 0px 7px 20px #c9c9c9;">
               
                <!-- Side Bars -->
             
                    <div class="col-sm-3 col-xs-4" style="font-family:  'Lucida Grande', 'Lucida Sans', Tahoma, sans-serif; font-weight: bolder;"><br />
                        <div class="col-xs-12" style="background:#232323; margin-top: 2%; border-radius: 5% 5% 5% 5%;">
                            
                            <div id="custom-search-input" style="padding-top: 10%; margin-bottom: -10%;"><!-- Search product -->
                            <form method="get" action="results.php" enctype="multipart/form-data">
                               
                                <div class="input-group col-md-12">

                                        <input type="text" name="user_query" class="search-query form-control" placeholder="Cauta produs..." />
                                        <span class="input-group-btn">
                                            <button class="btn btn-danger" name="search" type="submit" value="search">
                                                <span class="glyphicon glyphicon-search"></span>
                                            </button>
                                        </span>

                                </div>
                            </form>
                            </div>
                            <br /><br />
                            <br />
                        </div>
                        <div class="col-xs-12" style="background:#232323; margin-top: 2%; border-radius: 5% 5% 5% 5%;">
                            <h3 style="color:#af1111; text-align:center;border-bottom: 1px solid grey; padding-bottom: 25px;" >Categorii</h3><br/>
                            <span><?php getCats(); ?></span><br /><br />
                            <br />
                        </div> 
                        <div class="col-xs-12" style="background:#232323; margin-top: 2%; border-radius: 5% 5% 5% 5%;">
                            <h3 style="color:#af1111; text-align:center;border-bottom: 1px solid grey; padding-bottom: 25px;" >Producator</h3><br />
                            <span ><?php getBrands(); ?></span><br /><br />
                  
                        </div> 
                        <div class="col-xs-12" style="height: 500px;">
                           
                        </div> 
                    </div>
                <!-- side bars -->
                
                    
                    <br /><br />
                
                    <div class="col-sm-9  col-xs-8"><br/>
                        <div class="col-xs-12">
                            <?php if(isset($_GET['search'])){
        
                                $search_query = $_GET['user_query'];
                                $get_pro = "select * from products where product_keywords like '%$search_query%' or product_title like '%$search_query%' or product_desc like '%$search_query%' ";


                                 $run_pro = mysqli_query($con, $get_pro);

                            while($row_pro=mysqli_fetch_array($run_pro)){

                                $pro_id=$row_pro['product_id'];
                                $pro_cat=$row_pro['product_cat'];
                                $pro_brand=$row_pro['product_brand'];
                                $pro_title=$row_pro['product_title'];
                                $pro_price=$row_pro['product_price'];
                                $pro_image=$row_pro['product_image'];
                                $pro_keywords=$row_pro['product_keywords'];



                                echo " <div class='col-sm-4' style='margin-bottom: 5%;'>
                                            <a href='details.php?pro_id=$pro_id'><img class='pro_img' src='admin_area/product_images/$pro_image' width='200px' height='200px' style='border:2px solid #242424;' /></a><br />
                                            <h3>$pro_title</h3><br />
                                            <b><span style='color:#af1111;'>$pro_price LEI</span></b><br /><br />
                                            <a href='details.php?pro_id=$pro_id'><img src='admin_area/images/button.png' width='120px' /></a>

                                        </div> ";

                                    }
                                } ?>
                            <?php getCatPro(); ?>
                            <?php getBrandPro(); ?>
                            
                        </div>
                    </div>
                    
                    
                   

                
               
            </div>
                
                
                <br />
            
            <br />
            <div class="container" style="background: whitesmoke;
             background: linear-gradient(#F2F2F2, whitesmoke);
             background:-webkit-linear-gradient(#F2F2F2, whitesmoke);
             background: -o-linear-gradient(#F2F2F2, whitesmoke); 
             background: -moz-linear-gradient(#F2F2F2, whitesmoke); 
             border-radius: 5% 5% 2% 2%;
             box-shadow: 0px 7px 20px #c9c9c9;">
                <br /> 
                <div class="col-xs-10 col-xs-push-1" style="background:#232323; border-radius: 15% 15% 0% 0%; box-shadow: 0px -7px 10px #565656;">
                    <div class="row">
                        <div style="text-align: center;">
                            <br /><h3 style="color:whitesmoke"> 2016 &copy; Magic Service </h3>
                        </div>
                        
                        <div style="color:whitesmoke; text-align: center;">
                            <span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" style="color:whitesmoke;">ACASA</a>&nbsp;&diams;&nbsp;<a href="#" style="color:whitesmoke;">MAGAZIN</a>&nbsp;&diams;&nbsp;<a href="/contact" style="color:whitesmoke;">SERVICE</a>&nbsp;&diams;&nbsp;<a href="/contact" style="color:whitesmoke;">CONTACT</a></span>
                        </div>
                    </div>
                </div>
            </div>
       
        
        
      
        
    </body>
    
    
</html>
