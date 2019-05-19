<?php 
include("includes/db_connect.php");

if(isset($_GET['edit_cat'])){
    $cat_id = $_GET['edit_cat'];
    $get_cat="select * from categories WHERE cat_id='$cat_id'";
    
    $run_cat = mysqli_query($con, $get_cat);
    $row_cat= mysqli_fetch_array($run_cat);
    $cat_id=$row_cat['cat_id'];
    $cat_title= $row_cat['cat_title'];
    
}

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
        

            
        
        
            <h1 style="margin-left: 3%; color:#232323;  font-family:  'Lucida Grande', 'Lucida Sans', Tahoma, sans-serif;">MODIFICARE CATEGORIE</h1><br /><br />
            <div class="col-sm-9 col-sm-8">
                <div class="col-sm-12"><br /><br /><br />
                    <form class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data">
                         <div class="form-group">
                             <label for="cat_title" class="col-sm-2 control-label">Categorie</label>
                             <div class="col-sm-8 col-sm-push-1">
                                 <input type="text" class="form-control" id="cat_title" name="cat_title" value="<?php echo $cat_title?>" />
                             </div>
                         </div><br /><br /><br />
                         
                         <div class="form-group">
                             <div class="col-sm-offset-2 col-sm-8">
                                 <button type="submit" name="update_cat" class="btn btn-primary" style="background: lightgray; color:#232323;">Modifica Categorie</button>
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
                                             <a class="btn btn-primary" href="index.php?cats" >Da</a>
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
    if(isset($_POST['update_cat'])){
        //get data from fields
        $update_id = $cat_id;
        $cat_title = $_POST['cat_title'];
       
        
        $update_cat = "UPDATE categories set cat_title='$cat_title' where cat_id='$update_id'";
        
        $insert_cat = mysqli_query($con, $update_cat);
        if($update_cat){
            echo"<script>alert('Categoria a fost modificata cu succes!')</script>";
            echo"<script>window.open('index.php?cats','_self')</script>";
        }
    }



?>
