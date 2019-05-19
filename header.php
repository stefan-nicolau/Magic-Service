<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<html xmlns="http://www.w3.org/1999/xhtml">
    
    
    <head>
        <title>Magic Service - <?php echo $title;?></title>
        <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="icon" sizes="16x16 32x32 64x64" href="/favicon.ico">
    <link rel="icon" type="image/png" sizes="196x196" href="img/favicon-192.png">
    <link rel="icon" type="image/png" sizes="160x160" href="img/favicon-160.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicon-96.png">
    <link rel="icon" type="image/png" sizes="64x64" href="img/favicon-64.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16.png">
    <link rel="apple-touch-icon" href="img/favicon-57.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon-114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon-72.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/favicon-144.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/favicon-60.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/favicon-120.png">
    

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
           
            
            /*  Produc Image media */
           
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


            

            
        </style> 
    </head>
    
    
    <body>
    
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
                                <a target="_blank" href="https://www.facebook.com/auto.magicservice/?fref=ts">
                                    <div class="overlay"></div>
                                </a>
                        </div>    
                    </div>  
                    <div class="col-lg-1 col-lg-push-5 col-md-1 col-md-push-1 col-sm-1 col-sm-push-4 col-xs-2" style="margin-top: 8px; margin-bottom: 8px">
                        <div class="hovereffect">
                                <img src="img/google_g.png" class="img-responsive" alt="Contact" />
                                <a target="_blank" href="https://www.facebook.com/auto.magicservice/?fref=ts">
                                    <div class="overlay"></div>
                                </a>
                        </div>                
                    </div>
                </div>
            </div>
            
            
            <div class="row">
                <a href="index.php"><div class="col-lg-4 col-lg-push-1 col-md-3 col-md-push-1 col-sm-push-2 col-xs-7 col-xs-push-1">
                        <img src="img/logo.png" class="img-responsive" />

                    </div></a>
                
                    <!-- Star navbar -->
                    <div id="custom-bootstrap-menu" class="navbar navbar-default col-lg-push-1 col-md-push-1 col-sm-pull-1  col-xs-offset-2 col-xs-pull-1" role="navigation" style="margin-top: 5%;">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="collapse navbar-collapse navbar-menubuilder">
                                <ul class="nav navbar-nav navbar-left">
                                    <li <?php if ($title=='Acasa'){echo "class='active'";}?>><a href="index.php">ACASA</a>
                                    </li>
                                    <li <?php if ($title=='Magazin'){echo "class='active'";}?>><a href="magazin.php">MAGAZIN</a>
                                    </li>
                                    <li <?php if ($title=='Service'){echo "class='active'";}?>><a href="service.php">SERVICE</a>
                                    </li>
                                    <li <?php if ($title=='Despre'){echo "class='active'";}?>><a href="about.php">DESPRE NOI</a>
                                    </li>
                                    <li <?php if ($title=='Contact'){echo "class='active'";}?>><a href="contact.php">CONTACT</a>
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