<?php
include("includes/db_connect.php");
if(isset($_GET['delete_pro'])){
    
    $delete_id = $_GET['delete_pro'];
    $delete_pro="DELETE FROM products WHERE product_id='$delete_id'";
    $run_delete= mysqli_query($con, $delete_pro);
    if($run_delete){
        echo"<script>alert('Un produs a fost sters!')</script>";
        echo"<script>window.open('index.php?products','_self')</script>";
    }
}




?>

