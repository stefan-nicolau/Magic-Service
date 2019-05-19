

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
        <label class="h3" style="color:#af1111">Bun venit <?php print($userRow['user_name']); ?></label><br/>
        <label class="h4" style="color:blue"><?php print($userRow['user_email']); ?></label>
        <br /><br />
        <div class="col-sm-3">
            <a href="index.php?add_admin"><img src="images/add_user.png" class="img-responsive"/></a><br />
            <a href="index.php?add_admin" style="color:#af1111; display:block; text-align: center; margin-top:-5%; font-size: 16px;">Adauga Administrator</a>
        </div>
        <div class="col-sm-3">
            <a href="index.php?info_admin"><img src="images/info_admin.png" class="img-responsive"/></a><br />
            <a href="index.php?info_admin" style="color:#af1111; display:block; text-align: center; margin-top:-5%; font-size: 16px;">Vezi Administratori</a>
        </div>
        <div class="col-sm-3">
            <a href="index.php?messages"><img src="images/message.png" class="img-responsive"/></a><br />
            <a href="index.php?messages" style="color:#af1111; display:block; text-align: center; margin-top:-5%; font-size: 16px;">Vezi Comenzi</a>
        </div>

        
        
        
            
            
        
            
        
    </body>
</html>


