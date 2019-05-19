<?php 
include("includes/db_connect.php");

if(isset($_GET['edit_pro'])){
    $get_id= $_GET['edit_pro'];
    
 $get_pro = "SELECT * FROM  products WHERE product_id='$get_id'";
$run_pro = mysqli_query($con, $get_pro);

while ($row_pro = mysqli_fetch_array($run_pro)){
$pro_id=$row_pro['product_id'];
$pro_title=$row_pro['product_title'];
$pro_image=$row_pro['product_image'];
$pro_price=$row_pro['product_price'];
$pro_desc=$row_pro['product_desc'];
$pro_keywords=$row_pro['product_keywords'];
$pro_cat=$row_pro['product_cat'];
$pro_brand=$row_pro['product_brand'];

$get_cat ="SELECT * FROM categories WHERE cat_id='$pro_cat'";
$run_cat = mysqli_query($con, $get_cat);
$row_cat = mysqli_fetch_array($run_cat);
$category_title = $row_cat['cat_title'];

$get_brand ="SELECT * FROM brands WHERE brand_id='$pro_brand'";
$run_brand = mysqli_query($con, $get_brand);
$row_brand = mysqli_fetch_array($run_brand);
$brand_title = $row_brand['brand_title'];
}
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

            
        </div><br />
        
            <h1 style="margin-left: 3%; color:#232323;  font-family:  'Lucida Grande', 'Lucida Sans', Tahoma, sans-serif;">MODIFICARE PRODUS</h1><br /><br />
            <div class="col-sm-12">
                <div class="col-sm-12">
                     <form class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data">
                         <div class="form-group">
                             <label for="descriere_produs" class="col-sm-2 control-label" >Denumire Produs</label>
                             <div class="col-sm-8 col-sm-push-1">
                                 <input type="text" class="form-control" id="descriere_produs" name="product_title" placeholder="Introduceti denumire produs..." value="<?php echo $pro_title; ?>" />
                             </div>
                         </div>
                         <div class="form-group">
                             <label for="categorie_produs" class="col-sm-2 control-label">Alegeti Categoria</label>
                             <div class="col-sm-8 col-sm-push-1">
                                 <select class="form-control" name="product_cat" >
                                     <option value="<?php echo $pro_cat;?>"><?php echo $category_title; ?></option>
                                     
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
                                     <option value="<?php echo $pro_brand; ?>"><?php echo $brand_title; ?></option>
                                     
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
                             <label for="input-file" class='col-sm-2 control-label'>Alege Imagine <span style="color:red;">(Obligatoriu)</span></label>
                             <div class="col-sm-8 col-sm-push-1">
                                 <input type="file" name="product_image" required"/><br /><img src="product_images/<?php echo $pro_image ?>" style="width: 60px; height:60px;"/>
                             </div>
                         </div>
                         <div class="form-group">
                             <label for="pret_produs" class="col-sm-2 control-label">Pret Produs</label>
                             <div class="col-sm-8 col-sm-push-1">
                                 <input type="text" class="form-control" id="pret_produs" name="product_price" placeholder="Introduceti suma dorita..." value="<?php echo $pro_price; ?>"/>
                             </div>
                         </div>
                         
                         <div class="form-group">
                             <label for="descriere_produs" class="col-sm-2 control-label">Descriere Produs</label>
                             <div class="col-sm-8 col-sm-push-1">
                                 <textarea name="product_desc" class="form-control" rows="8" ><?php echo $pro_desc; ?></textarea>
                             </div>
                         </div>
                         <div class="form-group">
                             <label for="cuvinte_cheie" class="col-sm-2 control-label">Cuvinte Cheie</label>
                             <div class="col-sm-8 col-sm-push-1">
                                 <input type="text" class="form-control" id="cuvinte_cheie" name="product_keywords" placeholder="Introduceti cuvinte cheie..." value="<?php echo $pro_keywords; ?>"/>
                             </div>
                         </div><br/><br/><br/><br/>
                         <div class="form-group">
                             <div class="col-sm-offset-2 col-sm-8">
                                 <button type="submit" name="update_product" class="btn btn-primary" style="background: lightgray; color:#232323;">Modifica Produsul</button>
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
    if(isset($_POST['update_product'])){
        //get data from fields
        $update_id=$pro_id;
        
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
        
       $update_product = "UPDATE products SET product_cat='$product_cat',product_brand='$product_brand',product_title='$product_title',product_price='$product_price',product_desc='$product_desc',product_image='$product_image',product_keywords='$product_keywords' WHERE product_id='$update_id'";
        
        $run_product = mysqli_query($con, $update_product);
        if($run_product){
            echo "<script>alert('Produsul a fost modificat cu succes!')</script>";
            
            echo "<script>window.open('index.php?products','_self')</script>";
            
        }
    }



?>
