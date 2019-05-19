<?php

$con = mysqli_connect("localhost","root","","magicservice");

//categories
function getCats(){
    global $con;
    $get_cats = "SELECT * FROM categories";
    $run_cats = mysqli_query($con, $get_cats);
    while ($row_cats=mysqli_fetch_array($run_cats)){
        
        $cat_id = $row_cats['cat_id'];
        $cat_title = $row_cats['cat_title'];
        
    echo "<div class=col-sm-3 style='  '><div style='text-transform: uppercase; color:#242424;  font-weight:bold; text-align: center; font-size:14px;' href='magazin.php?cat=$cat_id'>$cat_title</div></div>";
        
    }
    
    
}function getBrands(){
    global $con;
    $get_brands = "SELECT * FROM brands";
    $run_brands = mysqli_query($con, $get_brands);
    while ($row_brands=mysqli_fetch_array($run_brands)){
        
        $brand_id = $row_brands['brand_id'];
        $brand_title = $row_brands['brand_title'];
        
    echo "<div class=col-sm-3 style=' margin-bottom:25px;  '><div style='text-transform: uppercase; color:#242424; margin-left:10%; margin-right:10%; font-weight:bold; padding: 15px; border:2px solid #242424; text-align: center;' href='magazin.php?brand=$brand_id'>$brand_title</div></div>";
        
    }
    
    
}

function getPro(){
    
    if(isset($_GET['search'])){
        
        $search_query = $_GET['user_query'];
        $get_pro = "SELECT * FROM products WHERE product_keywords LIKE '%$search_query%'";
    
    
    
    $get_pro="SELECT * FROM products order by -product_id";
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
        }
    }    



function getCatPro(){
    
    if(isset($_GET['cat'])){
        $cat_id = $_GET['cat'];
    
    
    global $con;
    
    $cats_per_page=24;
    
    if(isset($_GET['cat_page'])){
        $cat_page=$_GET['cat_page'];
    }else{
        $cat_page=1;
    }
    
    $cats_start_from=($cat_page-1)*$cats_per_page;
    
    $get_cat_pro="SELECT * FROM products WHERE product_cat='$cat_id' LIMIT $cats_start_from,$cats_per_page";
    $run_cat_pro = mysqli_query($con, $get_cat_pro);
    
    $count_cats = mysqli_num_rows($run_cat_pro);
    

    while($row_cat_pro=mysqli_fetch_array($run_cat_pro)){
        
        $pro_id=$row_cat_pro['product_id'];
        $pro_cat=$row_cat_pro['product_cat'];
        $pro_brand=$row_cat_pro['product_brand'];
        $pro_title=$row_cat_pro['product_title'];
        $pro_price=$row_cat_pro['product_price'];
        $pro_image=$row_cat_pro['product_image'];
        
        
        
        echo " <div class='col-sm-4' style='margin-bottom: 5%;'>
                    <a href='details.php?pro_id=$pro_id'><img class='pro_img' src='admin_area/product_images/$pro_image' width='200px' height='200px' style='border:2px solid #242424;' /></a><br />
                    <h3>$pro_title</h3><br />
                    <b><span style='color:#af1111;'>$pro_price LEI</span></b><br /><br />
                    <a href='details.php?pro_id=$pro_id'><img src='admin_area/images/button.png' width='120px' /></a>

                </div> ";

            }
        $get_cat_pro="SELECT * FROM products WHERE product_cat='$cat_id'";
        $run_cat_pro = mysqli_query($con, $get_cat_pro);
        
        $total_cat_records = mysqli_num_rows($run_cat_pro);
        $total_cat_pages= ceil($total_cat_records/$cats_per_page);
        if($total_cat_records==0){
        
        echo"<a href='index.php'><img class='img-responsive' src='img/error.png' /></a>";
        
             }else{
        
        echo"<div class='col-sm-12 col-sm-push-4'><br /><br /><ul class='pagination'><li><a href='magazin.php?cat=$cat_id&amp;cat_page=1' style='color:#af1111;'>".'&laquo;'."</a></li>";
    
        for ($a=1; $a<=$total_cat_pages;$a++){
            echo "<li><a href ='magazin.php?cat=$cat_id&amp;cat_page=".$a."' style='color:#af1111;'>".$a."</a></li>";

        };

        echo "<li><a href='magazin.php?cat=$cat_id/cat=$cat_id&amp;cat_page=$total_cat_pages' style='color:#af1111;'>".'&raquo;'."</a></li></ul></div>";
             }
        
    }    
}

function getBrandPro(){
    
    if(isset($_GET['brand'])){
        $brand_id = $_GET['brand'];
    
    
    global $con;
    
    $brands_per_page=15;
    
    if(isset($_GET['brand_page'])){
        $brand_page=$_GET['brand_page'];
    }else{
        $brand_page=15;
    }
    
    $brands_start_from=($brand_page-1)*$brands_per_page;
    
    $get_brand_pro="SELECT * FROM products WHERE product_brand='$brand_id' LIMIT $brands_start_from,$brands_per_page";
    $run_brand_pro = mysqli_query($con, $get_brand_pro);
    
    $count_brands = mysqli_num_rows($run_brand_pro);
    

    while($row_brand_pro=mysqli_fetch_array($run_brand_pro)){
        
        $pro_id=$row_brand_pro['product_id'];
        $pro_cat=$row_brand_pro['product_cat'];
        $pro_brand=$row_brand_pro['product_brand'];
        $pro_title=$row_brand_pro['product_title'];
        $pro_price=$row_brand_pro['product_price'];
        $pro_image=$row_brand_pro['product_image'];
        
        
        
        echo " <div class='col-sm-4' style='margin-bottom: 5%;'>
                    <a href='details.php?pro_id=$pro_id'><img class='pro_img' src='admin_area/product_images/$pro_image' width='200px' height='200px' style='border:2px solid #242424;' /></a><br />
                    <h3>$pro_title</h3><br />
                    <b><span style='color:#af1111;'>$pro_price LEI</span></b><br /><br />
                    <a href='details.php?pro_id=$pro_id'><img src='admin_area/images/button.png' width='120px' /></a>

                </div> ";

            }
        $get_brand_pro="SELECT * FROM products WHERE product_brand='$brand_id'";
        $run_brand_pro = mysqli_query($con, $get_brand_pro);
        
        $total_brand_records = mysqli_num_rows($run_brand_pro);
        $total_brand_pages= ceil($total_brand_records/$brands_per_page);
        if($total_brand_records==0){
        
        echo"<a href='index.php'><img class='img-responsive' src='img/error.png' /></a>";
        
             }else{
        
        echo"<div class='col-sm-12 col-sm-push-4'><br /><br /><ul class='pagination'><li><a href='magazin.php?brand=$brand_id&amp;brand_page=1' style='color:#af1111;'>".'&laquo;'."</a></li>";
    
        for ($a=1; $a<=$total_brand_pages;$a++){
            echo "<li><a href ='magazin.php?brand=$brand_id&amp;brand_page=".$a."' style='color:#af1111;'>".$a."</a></li>";

        };

        echo "<li><a href='magazin.php?brand=$brand_id/brand=$brand_id&amp;brand_page=$total_brand_pages' style='color:#af1111;'>".'&raquo;'."</a></li></ul></div>";
             }
        
    }    
}



function getPag(){
    if(!isset($_GET['cat'])){
        if(!isset($_GET['brand'])){
            
    global $con;
    
    $per_page= 24;
    
    if(isset($_GET['page'])){
        $page=$_GET['page'];
    }else{
        $page=1;

    }
            
    $start_from=($page-1)*$per_page;
    
    $query="SELECT * FROM products order by -product_id LIMIT $start_from,$per_page";
    $result=mysqli_query($con,$query);
    
    while($row_pag=mysqli_fetch_array($result)){
        
        $pro_id=$row_pag['product_id'];
        $pro_cat=$row_pag['product_cat'];
        $pro_brand=$row_pag['product_brand'];
        $pro_title=$row_pag['product_title'];
        $pro_price=$row_pag['product_price'];
        $pro_image=$row_pag['product_image'];   
        
        
        echo " <div class='col-sm-4' style='margin-bottom: 5%;'>
                    <a href='details.php?pro_id=$pro_id'><img class='pro_img' src='admin_area/product_images/$pro_image' width='100px' height='100px' style='border:2px solid #242424;' /></a><br />
                    <h3>$pro_title</h3><br />
                    <b><span style='color:#af1111;'>$pro_price LEI</span></b><br /><br />
                    <a href='details.php?pro_id=$pro_id'><img src='admin_area/images/button.png' width='120px' /></a>

                </div> ";

            }
    
    $query = "SELECT * FROM products";
    
    $result= mysqli_query($con,$query);
    
    $total_records= mysqli_num_rows($result);
    $total_pages=ceil($total_records/ $per_page);
    
    echo"<div class='col-sm-12 col-sm-push-4'><br /><br /><ul class='pagination '><li><a href='magazin.php?page=1' style='color:#af1111;'>".'&laquo;'."</a></li>";
    
    for ($i=1; $i<=$total_pages;$i++){
        echo "<li><a href ='magazin.php?page=".$i."' style='color:#af1111;'>".$i."</a></li>";
        
    };
    
    echo "<li><a href='magazin.php?page=$total_pages' style='color:#af1111;'>".'&raquo;'."</a></li></ul></div>";
            
            
            
            
            
            
            
        }
    }
    
    
    
    
    
}


    
    
    
    
    
    
    
    
    








?>