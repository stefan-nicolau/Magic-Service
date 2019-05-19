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
        
        
            <h1 style="margin-left: 3%; color:#232323;  font-family:  'Lucida Grande', 'Lucida Sans', Tahoma, sans-serif;">VIZUALIZARE PRODUSE</h1><br /><br />
            <div class="col-sm-12">
                <div class="col-sm-12">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nume Produs</th>
                                <th>Imagine</th>
                                <th>Pret</th>
                                <th>Categorie</th>
                                <th>Marca</th>
                                <th>Optiuni</th>
                            </tr>
                        </thead>
                        <?php
                            include("includes/db_connect.php");
                            
                            $get_pro = "SELECT * FROM  products";
                            $run_pro = mysqli_query($con, $get_pro);
                            $i = 0;
                            while ($row_pro = mysqli_fetch_array($run_pro)){
                                $pro_id=$row_pro['product_id'];
                                $pro_title=$row_pro['product_title'];
                                $pro_image=$row_pro['product_image'];
                                $pro_price=$row_pro['product_price'];
                                $i++;
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
                                
                            
                            
                        
                        ?>
                        <tbody>
                            <th scope="row"><?php echo $i; ?></th>
                            <td><?php echo $pro_title; ?></td>
                            <td><img src="product_images/<?php echo $pro_image;?>" style="height: 40px; width: 40px;" /></td>
                            <td><?php echo $pro_price; ?></td>
                            <td><?php echo $category_title; ?></td>
                            <td><?php echo $brand_title; ?></td>
                            <td>
                                <a href="index.php?edit_pro=<?php echo $pro_id;?>"><img src="images/update.png" /></a>&nbsp;&nbsp;&nbsp;
                                <a href="delete_pro.php?delete_pro=<?php echo $pro_id;?>"><img src="images/delete.png" /></a>
                            </td>
                            
                        </tbody>
                            <?php }?>
                    </table>    

                </div>
            </div>
           
        
        
    </body>
</html>

