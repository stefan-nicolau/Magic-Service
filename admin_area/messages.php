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
       
                
            
        
            <h1 style="margin-left: 3%; color:#232323;  font-family:  'Lucida Grande', 'Lucida Sans', Tahoma, sans-serif; border-bottom:1px solid whitesmoke; padding-bottom: 3%;">VIZUALIZARE COMENZI</h1><br />
           
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-8">
                <div class="col-xs-12"><br /><br /><br />
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Numar Comanda</th>
                                <th>Status Comanda</th>
                                
                                <th>Optiuni</th>
                                
                            </tr>
                        </thead>
                        <?php
                                 include("includes/db_connect.php");
                            
                            $get_msg= "SELECT * FROM  messages order by -msg_id";
                            $run_msg= mysqli_query($con, $get_msg);
                            $i = 0;
                            while ($row_msg = mysqli_fetch_array($run_msg)){
                                $msg_id=$row_msg['msg_id'];
                                $status=$row_msg['status'];
                                $i++
                            
                            
                        
                        ?>
                        <tbody>
                           
                            
                            <th scope="row"><?php echo $i; ?></th>
                            <td><?php echo $msg_id; ?></td>
                            <td><?php echo $status; ?></td>
                           
                            <td>
                                <a href="index.php?edit_msg=<?php echo $msg_id;?>"><img src="images/msg_warn.png" /></a>&nbsp;&nbsp;&nbsp;
                                <a href="delete_msg.php?delete_msg=<?php echo $msg_id;?>"><img src="images/delete.png" /></a>
                            </td>
                            
                        </tbody>
                        <?php }; ?>
                    </table>    

                </div>
            </div>
            
        <br />
            
        
    </body>
</html>

