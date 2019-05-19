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
        <script>tinymce.init({ selector:'textarea',
                                oninit : "setPlainText",
                                plugins : "paste"});</script>
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

            <h1 style="margin-left: 3%; color:#232323;  font-family:  'Lucida Grande', 'Lucida Sans', Tahoma, sans-serif;">ADAUGA PRODUS</h1><br /><br />
            <div class="col-sm-12">
                <div class="col-sm-12">
                     <form class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data">
                         <div class="form-group">
                             <label for="descriere_produs" class="col-sm-2 control-label">Denumire Produs</label>
                             <div class="col-sm-8 col-sm-push-1">
                                 <input type="text" class="form-control" id="descriere_produs" name="product_title" placeholder="Introduceti denumire produs..." required />
                             </div>
                         </div>
                         <div class="form-group">
                             <label for="categorie_produs" class="col-sm-2 control-label">Alegeti Categoria</label>
                             <div class="col-sm-8 col-sm-push-1">
                                 <select class="form-control" name="product_cat" >
                                     <option>Categorie...</option>
                                     
                                     <?php
                                        $get_cats = "SELECT * FROM categories";
                                        $run_cats = mysqli_query($con, $get_cats);
                                        while ($row_cats=mysqli_fetch_array($run_cats)){

                                            $cat_id = $row_cats['cat_id'];
                                            $cat_title = $row_cats['cat_title'];

                                        echo "<option value='$cat_id'>$cat_title</option>";
        
                                        }
                                     ?>
                                     
                                     
                                 </select>
                             </div>        
                         </div>
                         <div class="form-group">
                             <label for="marca_produs" class="col-sm-2 control-label">Alegeti Marca</label>
                             <div class="col-sm-8 col-sm-push-1">
                                 <select class="form-control" name="product_brand" >
                                     <option>Marca...</option>
                                     
                                     <?php
                                       $get_brands = "SELECT * FROM brands";
                                        $run_brands = mysqli_query($con, $get_brands);
                                        while ($row_brands=mysqli_fetch_array($run_brands)){

                                            $brand_id = $row_brands['brand_id'];
                                            $brand_title = $row_brands['brand_title'];

                                        echo "<option value='$brand_id'>$brand_title</option>";

                                        }
                                     ?>
                                     
                                     
                                 </select>
                             </div>        
                         </div>
                         <div class="form-group">
                             <label for="input-file" class='col-sm-2 control-label'>Alege Imagine</label>
                             <div class="col-sm-8 col-sm-push-1">
                                <input type="file" name="product_image" />
                             </div>
                         </div>
                         <div class="form-group">
                             <label for="pret_produs" class="col-sm-2 control-label">Pret Produs</label>
                             <div class="col-sm-8 col-sm-push-1">
                                 <input type="text" class="form-control" id="pret_produs" name="product_price" placeholder="Introduceti suma dorita..." required/>
                             </div>
                         </div>
                         
                         <div class="form-group">
                             <label for="descriere_produs" class="col-sm-2 control-label">Descriere Produs</label>
                             <div class="col-sm-8 col-sm-push-1">
                                 <textarea name="product_desc" class="form-control" rows="8"></textarea>
                             </div>
                         </div>
                         <div class="form-group">
                             <label for="cuvinte_cheie" class="col-sm-2 control-label">Cuvinte Cheie</label>
                             <div class="col-sm-8 col-sm-push-1">
                                 <input type="text" class="form-control" id="cuvinte_cheie" name="product_keywords" placeholder="Introduceti cuvinte cheie..." required/>
                             </div>
                         </div><br/><br/><br/><br/>
                         <div class="form-group">
                             <div class="col-sm-offset-2 col-sm-8">
                                 <button type="submit" name="insert_post" class="btn btn-primary" style="background: lightgray; color:#232323;">Adauga Produsul</button>
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
                                             <a class="btn btn-primary" href="index.php?products" >Da</a>
                                             <button type="button" class="btn btn-default" data-dismiss="modal">Nu</button>
                                         </div>
                                     </div>
                                     
                                 </div>
                                 
                             </div> <br /><br /><br />
                             
                                 
                         </div>
    

                    </form>

                </div>
            </div>
            
        <br />
            
        
    </body>
</html>

<?php
    if(isset($_POST['insert_post'])){
        //get data from fields
        $product_title = $_POST['product_title'];
        $product_cat = $_POST['product_cat'];
        $product_brand = $_POST['product_brand'];
        $product_price = $_POST['product_price'];
        $product_desc = $_POST['product_desc'];
        $product_keywords = $_POST['product_keywords'];
        
        //get image from field
        $product_image = $_FILES['product_image']['name'];
        $product_image_tmp = $_FILES['product_image']['tmp_name'];
        
        move_uploaded_file($product_image_tmp,"product_images/$product_image");
        
        $insert_product = "insert into products (product_cat,product_brand,product_title,product_price,product_desc,product_image,product_keywords)"."values ('$product_cat','$product_brand','$product_title','$product_price','$product_desc','$product_image','$product_keywords')";
        
        $insert_pro = mysqli_query($con, $insert_product);
        if($insert_pro){
            echo "<script>alert('Produsul a fost adaugat cu succes!')</script>";
            echo "<script>window.open('index.php?add_product','_self')";
        }
    }



?>
