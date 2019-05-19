<?php
include("includes/db_connect.php");
if(isset($_GET['delete_cat'])){
    
    $delete_id = $_GET['delete_cat'];
    $delete_pro="DELETE FROM categories WHERE cat_id='$delete_id'";
    $run_delete= mysqli_query($con, $delete_pro);
    if($run_delete){
        echo"<script>alert('O categorie a fost stearsa!')</script>";
        echo"<script>window.open('index.php?cats','_self')</script>";
    }
}




?>
