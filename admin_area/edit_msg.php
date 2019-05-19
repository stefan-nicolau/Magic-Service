<?php 
include("includes/db_connect.php");

if(isset($_GET['edit_msg'])){
    $msg_id = $_GET['edit_msg'];
    $get_msg="select * from messages WHERE msg_id='$msg_id'";
    
    $run_msg = mysqli_query($con, $get_msg);
    $row_msg= mysqli_fetch_array($run_msg);
    $msg_id=$row_msg['msg_id'];
    $msg= $row_msg['msg'];
    $status= $row_msg['status'];
    
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
        

            
        
        
            
            <div class="col-sm-9 col-sm-8">
                <div class="col-sm-12"><br /><br /><br />
                    <form class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data">
                         <div class="form-group">
                             <label for="brand_title" class="col-sm-2 control-label">Numar Comanda: </label>
                             <div class="col-sm-8 col-sm-push-1">
                                 <span style="color:#af1111; font-size: 20px; display: block; padding-top:20px;"><?php echo $msg_id; ?></span>
                             </div>
                         </div><br /><div class="form-group">
                             <label for="brand_title" class="col-sm-2 control-label">Mesaj:</label><br />
                             <div class="col-sm-8 col-sm-push-1">
                                 <span><?php echo $msg; ?><span/>
                             </div>
                         </div><br /><br /><br />
                         
                         <div class="form-group">
                             <div class="col-sm-offset-2 col-sm-8">
                                 <button type="submit" name="update_msg" class="btn btn-primary" style="background: lightgray; color:#232323;">Marcheaza ca Citit</button>
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
                                             <a class="btn btn-primary" href="index.php?messages" >Da</a>
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
    if(isset($_POST['update_msg'])){
        //get data from fields
        $update_id = $msg_id;
        $status='Citit';
        
       
        
        $update_msg = "UPDATE messages set status='$status' where msg_id='$msg_id'";
        
        $insert_msg = mysqli_query($con, $update_msg);
        if($update_msg){
            echo"<script>alert('Mesajul a fost marcat ca citit!')</script>";
            echo"<script>window.open('index.php?messages','_self')</script>";
        }
    }


?>
