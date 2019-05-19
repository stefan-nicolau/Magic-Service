<?php 
include("includes/db_connect.php");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<html xmlns="http://www.w3.org/1999/xhtml">
    
    <head>
        <title>Magic Service - Home</title>
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
        

            
        
        
            
            <div class="col-sm-9 col-sm-8">
                <div class="col-sm-12"><br /><br /><br />
                    <form class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data">
                         <div class="form-group">
                             <label for="cat_title" class="col-sm-2 control-label">Categorie</label>
                             <div class="col-sm-8 col-sm-push-1">
                                 <input type="text" class="form-control" id="cat_title" name="cat_title" placeholder="Introduceti denumirea categoriei..." required/>
                             </div>
                         </div><br /><br /><br />
                         
                         <div class="form-group">
                             <div class="col-sm-offset-2 col-sm-8">
                                 <button type="submit" name="insert_cat" class="btn btn-primary" style="background: lightgray; color:#232323;">Adauga Categorie</button>
                                 <button type="button" data-toggle="modal" data-target="#cancel_modal" class="btn btn-primary" style="background: lightgray; color:#232323; margin-left: 10%;">Anuleaza</button>
                                 
                                 <div class="modal fade" id="cancel_modal" tabindex="-1" role="dialog" aria-labelledby="Anuleaza" aria-hidden="true">
                                     <div class="modal-dialog">
                                         <div class="modal-content">
                                             <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                             <h4 class="modal-title" id="Anuleaza">Sunteti sigur ca doriti sa anulati intrarea?</h4>
                                         </div>
                                         <div class="modal-body" style="background: whitesmoke;">
                                             Toate modificarile vor fi sterse. Anulati intrarea?
                                         </div>
                                         <div class="modal-footer">
                                             <a class="btn btn-primary" href="index.php" >Da</a>
                                             <button type="button" class="btn btn-default" data-dismiss="modal">Nu</button>
                                         </div>
                                     </div>
                                     
                                 </div>
                                 
                             </div> <br /><br /><br />
                             
                                 
                         </div>    
                                 
                        
    

                    </form>

                </div>
            </div>
            
        
            
        
    </body>
</html>

<?php
    if(isset($_POST['insert_cat'])){
        //get data from fields
        $cat_title = $_POST['cat_title'];
       
        
        $insert_cat = "insert into categories (cat_title)"."values ('$cat_title')";
        
        $insert_cat = mysqli_query($con, $insert_cat);
        if($insert_cat){
            echo"<script>alert('Categoria a fost adaugata cu succes!')</script>";
            echo"<script>window.open('index.php?cats','_self')";
        }
    }



?>
