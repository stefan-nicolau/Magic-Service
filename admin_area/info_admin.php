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
        <br /><br /><br />
       <h1 style="margin-left: 3%; color:#232323;  font-family:  'Lucida Grande', 'Lucida Sans', Tahoma, sans-serif; border-bottom:1px solid whitesmoke; padding-bottom: 3%;">VIZUALIZARE ADMINISTRATORI</h1><br />
           
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-8">
                <div class="col-xs-12"><br /><br /><br />
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nume Administrator</th>
                                <th>E-mail</th>
                                <th>Optiuni</th>
                                
                            </tr>
                        </thead>
                        <?php
                                 include("includes/db_connect.php");
                            
                            $get_admin= "SELECT * FROM  tbl_admins";
                            $run_admin= mysqli_query($con, $get_admin);
                            $i = 0;
                            while ($row_admin = mysqli_fetch_array($run_admin)){
                                $user_id=$row_admin['user_id'];
                                $user_name=$row_admin['user_name'];
                                $user_email=$row_admin['user_email'];
                                $i++
                            
                            
                        
                        ?>
                        <tbody>
                           
                            
                            <th scope="row"><?php echo $i; ?></th>
                            <td><?php echo $user_name; ?></td>
                            <td><?php echo $user_email; ?></td>
                           
                            <td>
                                <a href="index.php?edit_admin=<?php echo $user_id;?>"><img src="images/update.png" /></a>&nbsp;&nbsp;&nbsp;
                                <a href="delete_admin.php?delete_admin=<?php echo $user_id;?>"><img src="images/delete.png" /></a>
                            </td>
                            
                        </tbody>
                        <?php }; ?>
                    </table>    

                </div>
            </div>
        
        
        
            
            
        
            
        
    </body>
</html>


