<?php
include("includes/db_connect.php");
if(isset($_GET['delete_admin'])){
    
    $delete_id = $_GET['delete_admin'];
    $delete_admin="DELETE FROM tbl_admins WHERE user_id='$delete_id'";
    $run_delete= mysqli_query($con, $delete_admin);
    if($run_delete){
        echo"<script>alert('Utilizatorul a fost stears!')</script>";
        echo"<script>window.open('index.php?admin','_self')</script>";
    }
}




?>
