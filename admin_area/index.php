
<?php 
require_once("session.php");
require_once("class_user.php");
$auth_user = new USER();
$user_id = $_SESSION['user_session'];
$stmt = $auth_user->runQuery("SELECT * FROM tbl_admins WHERE user_id=:user_id");
$stmt->execute(array(":user_id"=>$user_id));
$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
include("includes/db_connect.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<html xmlns="http://www.w3.org/1999/xhtml">
    
    <head>
        <title>Magic Service - Admin Area</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="shortcut icon" href="img/favicon.ico"/>
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"></meta>
        
        <script src="https://code.jquery.com/jquery.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script type="text/javascript">
            var $ = jQuery.noConflict();
            $(document).ready(function() { 
                $('#myCarousel').carousel({ interval: 3000, cycle: true });
            }); 
        </script>
        <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
        <script>tinymce.init({ selector:'textarea' });</script>
        <style>
            @media (max-width: 315px) {
                h1{
                font-size:15px;
                }
            }
            @media (min-width: 300px) {
                h1{
                font-size:20px;
                }
            }
            
            @media (min-width: 400px) {
                h1{
                font-size:20px;
                }
            }

            @media (min-width: 481px) and (max-width: 767px) {
                h1{
                font-size: 35px;
                }
            }

            @media (min-width: 768px) and (max-width: 979px) {
                h1{
                font-size:35px;
                }
            }

            @media (min-width: 980px) {
              h1{
              font-size:35px;
              }
            }
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
        </style>
    </head>
    
    <body>
        <div class="container" style="background: whitesmoke;
             background: linear-gradient(grey, whitesmoke);
             background:-webkit-linear-gradient(grey, whitesmoke);
             background: -o-linear-gradient(grey, whitesmoke); 
             background: -moz-linear-gradient(grey, whitesmoke);
             border-radius: 0% 0% 5% 5%;
             box-shadow: 0px 7px 20px #c9c9c9;">
                
            <div class="row">
                <div class="col-lg-10 col-lg-push-1 col-md-10 col-md-push-1 col-sm-10 col-sm-push-1 col-xs-10 col-xs-push-1">
                    <div class="col-lg-4 col-lg-push-1 col-md-3 col-md-push-1 col-sm-push-2 col-xs-6">
                        <a href="index.php"><img src="../img/logo.png" class="img-responsive" /></a>
                    </div>
                    <div class="col-lg-4 col-lg-push-1 col-md-3 col-md-push-1 col-sm-push-2 col-xs-6" style="margin-top: 4%;">
                        <img src="images/admin.png" class="img-responsive" alt="Admin_Area" />
                    </div>
                </div>
                
                
            </div>

            
        </div><br />
        <div class="container" style="background: whitesmoke;
             background: linear-gradient(grey, whitesmoke);
             background:-webkit-linear-gradient(grey, whitesmoke);
             background: -o-linear-gradient(grey, whitesmoke); 
             background: -moz-linear-gradient(grey, whitesmoke);
             border-radius: 0% 0% 5% 5%;
                 box-shadow: 0px 7px 20px #c9c9c9;
                 padding-bottom:15%;">
            
            <div class="col-sm-3 col-xs-4" style="font-family:  'Lucida Grande', 'Lucida Sans', Tahoma, sans-serif; font-weight: bolder; padding-top: 10%;">
                <div class="col-xs-12" style="background:whitesmoke; margin-top: 2%; border-radius: 5% 5% 5% 5%; height: 600px;">
                               <h3 style="color:#232323; text-align:center; font-weight: bold;" >OPTIUNI</h3><br />
                               <span ><a href="index.php?admin" style="color:#af1111;"><img style="height: 40px;" src="images/gear.png" />Admin</a></span><br /><br/>
                               <span ><a href="index.php?products" style="color:#af1111;"><img style="height: 40px;" src="images/gear.png" />Vezi Produse</a></span><br /><br />
                               <span ><a href="index.php?add_product" style="color:#af1111;"><img style="height: 40px;" src="images/gear.png" />Adauga Produs</a></span><br /><br />
                               <span ><a href="index.php?cats" style="color:#af1111;"><img style="height: 40px;" src="images/gear.png" />Vezi Categorii</a></span><br /><br />
                               <span ><a href="index.php?add_cat" style="color:#af1111;"><img style="height: 40px;" src="images/gear.png" />Adauga Categorie</a></span><br /><br/>
                               <span ><a href="index.php?brands" style="color:#af1111;"><img style="height: 40px;" src="images/gear.png" />Vezi Marci</a></span><br /><br />
                               <span ><a href="index.php?add_brand" style="color:#af1111;"><img style="height: 40px;" src="images/gear.png" />Adauga Marca</a></span><br /><br />
                               <span ><a href="logout.php?logout=true" style="color:#af1111;"><img style="height: 40px;" src="images/gear.png" />Logout</a></span><br /><br />
                               
                               
                               
               </div> 
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-8">
                <div class="col-xs-12"><br /><br /><br />
                    
                     <?php
                    if(isset($_GET['messages'])){
                         include("messages.php");
                         
                     } 
                     if(isset($_GET['edit_msg'])){
                         include("edit_msg.php");
                         
                     } 
                    if(isset($_GET['add_admin'])){
                         include("add_admin.php");
                         
                     }
                     if(isset($_GET['edit_admin'])){
                         include("edit_admin.php");
                         
                     }
                     if(isset($_GET['info_admin'])){
                         include("info_admin.php");
                         
                     }
                     if(isset($_GET['admin'])){
                         include("admin.php");
                         
                     }
                     
                     if(isset($_GET['add_product'])){
                         include("add_product.php");
                         
                     }
                     if(isset($_GET['products'])){
                         include("products.php");
                         
                     }
                     if(isset($_GET['edit_pro'])){
                         include("edit_pro.php");
                         
                     }
                     if(isset($_GET['cats'])){
                         include("cats.php");
                         
                     }
                    
                     
                     if(isset($_GET['add_cat'])){
                         include("add_cat.php");
                         
                     }
                     
                     if(isset($_GET['edit_cat'])){
                         include("edit_cat.php");
                         
                     }
                     if(isset($_GET['brands'])){
                         include("brands.php");
                     }
                     
                     if(isset($_GET['add_brand'])){
                         include("add_brand.php");
                     }
                      if(isset($_GET['edit_brand'])){
                         include("edit_brand.php");
                     }
                     
                     ?>

                </div>
            </div>
        </div>     
        <br />
            <div class="container" style="background: whitesmoke;
             background: linear-gradient(#F2F2F2, whitesmoke);
             background:-webkit-linear-gradient(#F2F2F2, whitesmoke);
             background: -o-linear-gradient(#F2F2F2, whitesmoke); 
             background: -moz-linear-gradient(#F2F2F2, whitesmoke); 
             border-radius: 5% 5% 2% 2%;
             box-shadow: 0px 7px 20px #c9c9c9;"><br /><br />
                
                <div class="col-xs-10 col-xs-push-1" style="background:#232323; border-radius: 15% 15% 0% 0%; box-shadow: 0px -7px 10px #565656; ">
                    <div class="row">
                        <div style="text-align: center;">
                            <br /><h3 style="color:whitesmoke"> 2016 &copy; Magic Service </h3>
                        </div>
                      
                    </div>
                </div>
            </div>
        
    </body>
</html>

