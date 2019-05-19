    <?php 
    include ("functions/functions.php");

        if(isset($_GET['search'])){
            
            $search_query = $_GET['user_query'];
            $get_pro = "select * from products where product_keywords like '%$search_query%' or product_title like '%$search_query%' or product_desc like '%$search_query%' ";
        
        
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

    ?>




    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


    <html xmlns="http://www.w3.org/1999/xhtml">
        
        
        <head>
            <title>Magic Service - Magazin</title>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <link rel="shortcut icon" href="img/favicon.ico"/>
            <link href="css/index.css" rel="stylesheet" type="text/css" />
            <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"></meta>
            
            <script src="https://code.jquery.com/jquery.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script type="text/javascript">
                var $ = jQuery.noConflict();
                $(document).ready(function() { 
                    $('#myCarousel').carousel({ interval: 3000, cycle: true });
                }); 
            </script>
            <!-- Bootsrap -->
            <link href="css/bootstrap.min.css" rel="stylesheet" />
            <!-- inside css -->
            <style>
               
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
                /*  Produc Image media */
                 @media (max-width: 315px) {
                    .pro_img{
                    height: 120px;
                    width: 120px;
                    
                    }
                }
                @media (min-width: 300px) {
                    .pro_img{
                    height: 120px;
                    width: 120px;
                    }
                }
                
                @media (min-width: 400px) {
                    .pro_img{
                    height: 120px;
                    width: 120px;
                    }
                }

                @media (min-width: 481px) and (max-width: 767px) {
                    .pro_img{
                    height: 120px;
                    width: 120px;
                    }
                }

                @media (min-width: 768px) and (max-width: 979px) {
                    .pro_img{
                    height: 120px;
                    width: 120px;
                    }
                }

                @media (min-width: 980px) {
                  .pro_img{
                  height: 200px;
                  width: 200px;
                  }
                }
                /*end media */
                .hovereffect {
                  width: 100%;
                  height: 100%;
                  float: left;
                  overflow: hidden;
                  position: relative;
                  text-align: center;
                  cursor: default;
                  background: #af1111;
                  border-radius: 10%;              
                }
                .hovereffect .overlay {
                  width: 100%;
                  height: 100%;
                  position: absolute;
                  overflow: hidden;
                  top: 0;
                  left: 0;
                  padding: 25% 10%;              
                }
                .hovereffect img {
                  display: block;
                  position: relative;
                  max-width: none;
                  width: 100%;
                  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
                  transition: opacity 0.35s, transform 0.35s;
                  -webkit-transform: translate3d(-25%,0,0);
                  transform: translate3d(-25%,0,0);
                  -webkit-backface-visibility: hidden;
                  backface-visibility: hidden;
                  box-shadow: 4px 2px 10px #232323;
                }
                .hovereffect:hover img {
                  
                  -webkit-transform: translate3d(0,0,0);
                  transform: translate3d(0,0,0);
                }            
                
                
                #custom-bootstrap-menu.navbar-default .navbar-brand {
                    color: rgba(119, 119, 119, 1);
                }
                #custom-bootstrap-menu.navbar-default {
                    font-size: 18px;
                    font-family:"Lucida Grande", "Lucida Sans", Tahoma, sans-serif;
                    font-weight: bolder;
                    
                    background-color: rgba(248, 248, 248, 0);
                    border-width: 0px;
                    border-radius: 0px;
                }
                #custom-bootstrap-menu.navbar-default .navbar-nav>li>a {
                    color: rgba(35, 35, 35, 1);
                    background-color: rgba(248, 248, 248, 0);
                }
                #custom-bootstrap-menu.navbar-default .navbar-nav>li>a:hover,
                #custom-bootstrap-menu.navbar-default .navbar-nav>li>a:focus {
                    color: rgba(250, 250, 250, 1);
                    background-color: rgba(175, 17, 17, 1);
                }
                #custom-bootstrap-menu.navbar-default .navbar-nav>.active>a,
                #custom-bootstrap-menu.navbar-default .navbar-nav>.active>a:hover,
                #custom-bootstrap-menu.navbar-default .navbar-nav>.active>a:focus {
                    color: rgba(250, 250, 250, 1);
                    background-color: rgba(175, 17, 17, 1);
                    
                }
                #custom-bootstrap-menu.navbar-default .navbar-toggle {
                    border-color: #424242;
                }
                #custom-bootstrap-menu.navbar-default .navbar-toggle:hover,
                #custom-bootstrap-menu.navbar-default .navbar-toggle:focus {
                    background-color: #424242;
                }
                #custom-bootstrap-menu.navbar-default .navbar-toggle .icon-bar {
                    background-color: #424242;
                }
                #custom-bootstrap-menu.navbar-default .navbar-toggle:hover .icon-bar,
                #custom-bootstrap-menu.navbar-default .navbar-toggle:focus .icon-bar {
                    background-color: #f8f8f8;
                }
                
                #custom-search-input {
                margin:0;
                margin-top: 10px;
                padding: 0;
            }

            #custom-search-input .search-query {
                padding-right: 3px;
                padding-right: 4px \9;
                padding-left: 3px;
                padding-left: 4px \9;
                /* IE7-8 doesn't have border-radius, so don't indent the padding */

                margin-bottom: 0;
                -webkit-border-radius: 3px;
                -moz-border-radius: 3px;
                border-radius: 3px;
            }
                
                #custom-search-input button {
                    border: 0;
                    background: none;
                    /** belows styles are working good */
                    padding: 2px 5px;
                    margin-top: 2px;
                    position: relative;
                    left: -28px;
                    /* IE7-8 doesn't have border-radius, so don't indent the padding */
                    margin-bottom: 0;
                    -webkit-border-radius: 3px;
                    -moz-border-radius: 3px;
                    border-radius: 3px;
                    color:#D9230F;
                }

                .search-query:focus + button {
                    z-index: 3;   
                }
                
                .dropdown-menu{
                    columns: 2;
                    -webkit-columns: 2;
                    -moz-columns: 2;
                }
                
            </style> 
        </head>
        
        
        <body >
        
            <!-- Header -->
            <div class="container" style="background: whitesmoke;
                 background: linear-gradient(grey, whitesmoke);
                 background:-webkit-linear-gradient(grey, whitesmoke);
                 background: -o-linear-gradient(grey, whitesmoke); 
                 background: -moz-linear-gradient(grey, whitesmoke);
                 border-radius: 0% 0% 5% 5%;
                 box-shadow: 0px 7px 20px #c9c9c9;">
                <div class="row">
                
                    <div class="col-xs-10 col-xs-push-1" style="background:#242424; border-radius: 0% 0% 15% 15%; box-shadow: 0px 7px 10px #565656;">
                        <div class="col-lg-4 col-md-8 col-sm-6 col-xs-8">
                            <img src="img/contact.png" class="img-responsive" alt="Contact" />
                        </div>
                        
                        <div class="col-lg-1 col-lg-push-5 col-md-1 col-md-push-1 col-sm-1 col-sm-push-4 col-xs-2" style="margin-top: 8px; margin-bottom: 8px">
                            <div class="hovereffect">
                                    <img src="img/facebook_g.png" class="img-responsive" alt="Contact" />
                                    <a target="_blank" href="http://www.facebook.com">
                                        <div class="overlay"></div>
                                    </a>
                            </div>    
                        </div>  
                        <div class="col-lg-1 col-lg-push-5 col-md-1 col-md-push-1 col-sm-1 col-sm-push-4 col-xs-2" style="margin-top: 8px; margin-bottom: 8px">
                            <div class="hovereffect">
                                    <img src="img/google_g.png" class="img-responsive" alt="Contact" />
                                    <a target="_blank" href="http://www.facebook.com">
                                        <div class="overlay"></div>
                                    </a>
                            </div>                
                        </div>
                    </div>
                </div>
                
                
                <div class="row">
                    <div class="col-lg-4 col-lg-push-1 col-md-3 col-md-push-1 col-sm-push-2 col-xs-7 col-xs-push-1">
                            <a href="index.php"><img src="img/logo.png" class="img-responsive" /></a>

                    </div>
                    
                        <!-- Star navbar -->
                        <div id="custom-bootstrap-menu" class="navbar navbar-default col-lg-push-1 col-md-push-1 col-sm-pull-1  col-xs-offset-2 col-xs-pull-1" role="navigation" style="margin-top: 5%;">
                            <div class="container-fluid">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="collapse navbar-collapse navbar-menubuilder">
                                    <ul class="nav navbar-nav navbar-left">
                                        <li><a href="index.php">ACASA</a>
                                        </li>
                                        <li class="active"><a href="magazin.php">MAGAZIN</a>
                                        </li>
                                        <li><a href="service.php">SERVICE</a>
                                        </li>
                                        <li><a href="about.php">DESPRE NOI</a>
                                        </li>
                                        <li><a href="contact.php">CONTACT</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>            
                        <!--stop navbar-->
                </div>        
            </div>
            <br />
            <!-- Header -->
                <div class="container" style="background: whitesmoke;
                 background: linear-gradient(#F2F2F2, whitesmoke);
                 background:-webkit-linear-gradient(#F2F2F2, whitesmoke);
                 background: -o-linear-gradient(#F2F2F2, whitesmoke); 
                 background: -moz-linear-gradient(#F2F2F2, whitesmoke); 
                 border-radius: 2% 2% 2% 2%;
                 box-shadow: 0px 7px 20px #c9c9c9;">
                 
                  
                
                <h3 id="message" style="border-bottom: 1px solid #242424; color:#af1111; padding-top:5%; padding-bottom: 3%; text-align:center;" class="col-sm-8 col-sm-push-2">CATEGORII</h3><br /><br />
                   <div class="col-sm-12" style="margin-bottom:10%; padding-top:2%;">
                    <?php
                    	getCats();

                    ?>
                    </div>
                 

                 <h3 id="message" style="border-bottom: 1px solid #242424; color:#af1111; padding-top:5%; padding-bottom: 3%; text-align:center;" class="col-sm-8 col-sm-push-2">CATEGORII</h3><br /><br />
                   <div class="col-sm-12" style="margin-bottom:10%; padding-top:2%;">
                    <?php
                        getBrands();

                    ?>
                    </div>




                  <div class="col-sm-8 col-sm-push-2">
                        <h3 id="message" style="border-bottom: 1px solid #242424; color:#af1111; padding-bottom: 3%; text-align:center;">COMANDA UN PRODUS</h3><br /><br />
                </div>
                <div id="review" class="col-sm-8 col-sm-push-2 " style="margin-bottom: 5%;"> <!-- de aici -->
                                   
                                    <form class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="name" class="col-sm-2 control-label">Nume:</label>
                                            <div class="col-sm-9 ">
                                                <input type="text" class="form-control" id="name" name="name" placeholder="Introduceti numele dumneavoastra..." required />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="name" class="col-sm-2 control-label">Prenume:</label>
                                            <div class="col-sm-9 ">
                                                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Introduceti prenumele dumneavoastra..." required />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="surname" class="col-sm-2 control-label">Email:</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="email" name="email" placeholder="Introduceti adresa dumneavoastra de e-mail..." required />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="phone" class="col-sm-2 control-label">Telefon:</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Introduceti numarul dumneavoastra de telefon..." required />
                                            </div>
                                        </div>
                                        
                                        
                                        
                                        <div class="form-group">
                                            <label for="phone" class="col-sm-2 control-label"><span data-toggle="modal" data-target="#history">Serie Şasiu (V.I.N) <img src="img/help.png" width="30" height="30"/></span>:</label>
                                            <!-- MODAL VIN -->
                                                <div class="modal fade" id="history" tabindex="-1" role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                                                                <h4>Ce este Seria de sasiu sau V.I.N </h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                Numarul de identificare (VIN - Vehicle Identification Number) sau seria de sasiu, 
                                                                este un identificator unic pentru fiecare autovehicul. VIN-ul este format din 17 caractere,
                                                                 cifre si litere, si nu contine literele: Q, I sau O. VIN-ul sau seria de sasiu, poate fi gasit 
                                                                in cartea masinii, pe talon la litera E sau in partea stanga jos a parbrizului.
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Inchide</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <!-- END MODAL VIN -->
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="vin" name="vin" placeholder="Introduceti Seriea de Şasiu ..." required style="margin-top:2%;"/>
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                            <label for="mesage" class="col-sm-2 control-label">Mesaj:</label>
                                            <div class="col-sm-9">
                                                  <textarea name="message" class="form-control" rows="8"></textarea>
                                            </div>
                                        </div>
                                        
                                        <input type="submit" name="submit" value="Trimite"/><br />

                                    </form><br /><br /><br /><br /><br /><br /><br /><br />
                                    
                                   
                                    
                                    <?php
                                    if(isset($_POST['submit'])){
                                        
                                        $name=$_POST['name'];
                                        $last_name=$_POST['last_name'];
                                        $email=$_POST['email'];
                                        $phone=$_POST['phone'];
                                        $vin=$_POST['vin'];
                                        $message=$_POST['message'];
                                        
                                        require_once('phpmailer/class.phpmailer.php');
        
                                        $mail = new PHPMailer();
                                        $mail->CharSet =  "utf-8";
                                        $mail->IsSMTP();
                                        $mail->SMTPAuth = true;
                                        $mail->Username = "auto.magicservice@gmail.com";
                                        $mail->Password = "Automobil1994";
                                            $mail->SMTPSecure = "ssl";  
                                        $mail->Host = "smtp.gmail.com";
                                        $mail->Port = "465";

                                        $mail->setFrom('auto.magicservice@gmail.com', 'MagicService');
                                        $mail->AddAddress($_POST['email'], $_POST['name']);

                                        $mail->Subject  =  'Contact Magic Service';
                                        $mail->IsHTML(true);
                                        $mail->Body    = '<h3 style="color:#af1111;">Buna ziua '.$name.' '.$last_name.',</h3>
                                                              <br />
                                                              
                                        Am primit solicitarea dumneavoastra si veti fi contactat in cel mai scurt timp de echipa noastra.
                                       
                                        
                                        <br /> 
                                        Mai jos este atasat mesajul dumneavoastra:<br /><br />
                                        <div style="background: #ebebeb; margin-left:25px; margin-right:10px; margin-top:10px; margin-bottom:5px; width: 500px; padding-left:5px; padding-top:5px; padding-bottom:5px; color:#242424; border: 2px solid #af1111; ">
                                             <b> Nume: '.$name.' '.$last_name.'<br /><br /> Telefon: '.$phone.'<br /><br /> V.I.N.: '.$vin.'<br /><br />'.$message.'</b>
                                        
                                        </div><br/>
                                        Va multumim!<br /><br />
                                        Echipa <b style="color:#af1111;"><a href="http://pieseautoturisme.ro/">Magic Service</a></b><br />
                                        <span style="color:#af1111;">Service Auto<br/>
                                        Str. Margaritarului, Nr.23<br />
                                        Ploiesti, Prahova<br/>
                                        Telefon: <b>0723540720</b><span>    
                                        
                                        
                                        ';
                                        $text = 'Comanda '.$name.'<br />Data: '.date('d-m-Y').'<br />Ora: '.date('H:i:s',gmdate('U')).'<br /> Nume: '.$name.' '.$last_name.'<br /> Telefon: '.$phone.'<br /><br />E-mail:'.$email.'<br /><br /> V.I.N.: '.$vin.'<br /><br />'.$message.'<br /> ';
                                        $status = 'Necitit';
                                            if($mail->Send())
                                            {
                                                    echo "<script>alert('Mesajul a fost trimis cu succes!')</script>";
                                                    $insert_msg = "insert into messages (msg,status)"."values ('$text','$status')";
            
                                                    $insert_msg= mysqli_query($con, $insert_msg);
                                            }
                                            else
                                            {
                                                    echo "<script>alert('Eroare! Mesajul nu a fost trimis.')</script>";
                                                    
                                            }
                                                
                                        
                                        
                                        
                                    }
                                    
                                    
                                    ?>
                                    
                                </div>  


                    
                   
                </div>
                    
                    
                    <br />
                
                <br />
                <div class="container" style="background: whitesmoke;
                 background: linear-gradient(#F2F2F2, whitesmoke);
                 background:-webkit-linear-gradient(#F2F2F2, whitesmoke);
                 background: -o-linear-gradient(#F2F2F2, whitesmoke); 
                 background: -moz-linear-gradient(#F2F2F2, whitesmoke); 
                 border-radius: 5% 5% 2% 2%;
                 box-shadow: 0px 7px 20px #c9c9c9;">
                    <br /> 
                    <div class="col-xs-10 col-xs-push-1" style="background:#232323; border-radius: 15% 15% 0% 0%; box-shadow: 0px -7px 10px #565656;">
                        <div class="row">
                            <div style="text-align: center;">
                                <br /><h3 style="color:whitesmoke"> 2016 &copy; Magic Service </h3>
                            </div>
                            
                            <div style="color:whitesmoke; text-align: center;">
                                <span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" style="color:whitesmoke;">ACASA</a>&nbsp;&diams;&nbsp;<a href="#" style="color:whitesmoke;">MAGAZIN</a>&nbsp;&diams;&nbsp;<a href="/contact" style="color:whitesmoke;">SERVICE</a>&nbsp;&diams;&nbsp;<a href="/contact" style="color:whitesmoke;">CONTACT</a></span>
                            </div>
                        </div>
                    </div>
                </div>
           
            
            
          
            
        </body>
        
        
    </html>
