<?php
include("includes/db_connect.php");
if(isset($_GET['delete_brand'])){
    
    $delete_id = $_GET['delete_brand'];
    $delete_brand="DELETE FROM brands WHERE brand_id='$delete_id'";
    $run_delete= mysqli_query($con, $delete_brand);
    if($run_delete){
        echo"<script>alert('O marca a fost stearsa!')</script>";
        echo"<script>window.open('index.php?brands','_self')</script>";
    }
}




?>
