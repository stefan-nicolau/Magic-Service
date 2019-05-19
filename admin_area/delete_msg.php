<?php
include("includes/db_connect.php");
if(isset($_GET['delete_msg'])){
    
    $delete_id = $_GET['delete_msg'];
    $delete_msg="DELETE FROM messages WHERE msg_id='$delete_id'";
    $run_delete= mysqli_query($con, $delete_msg);
    if($run_delete){
        echo"<script>alert('Mesajul a fost sters!')</script>";
        echo"<script>window.open('index.php?messages','_self')</script>";
    }
}




?>
