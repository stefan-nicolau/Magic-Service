<?php
require_once('class_user.php');
$user = new USER();

if(isset($_POST['btn-signup']))
{
	$uname = strip_tags($_POST['txt_uname']);
	$umail = strip_tags($_POST['txt_umail']);
	$upass = strip_tags($_POST['txt_upass']);	
	
	if($uname=="")	{
		$error[] = "provide username !";	
	}
	else if($umail=="")	{
		$error[] = "provide email id !";	
	}
	else if(!filter_var($umail, FILTER_VALIDATE_EMAIL))	{
	    $error[] = 'Please enter a valid email address !';
	}
	else if($upass=="")	{
		$error[] = "provide password !";
	}
	else if(strlen($upass) < 6){
		$error[] = "Password must be atleast 6 characters";	
	}
	else
	{
		try
		{
			$stmt = $user->runQuery("SELECT user_name, user_email FROM tbl_admins WHERE user_name=:uname OR user_email=:umail");
			$stmt->execute(array(':uname'=>$uname, ':umail'=>$umail));
			$row=$stmt->fetch(PDO::FETCH_ASSOC);
				
			if($row['user_name']==$uname) {
				$error[] = "sorry username already taken !";
			}
			else if($row['user_email']==$umail) {
				$error[] = "sorry email id already taken !";
			}
			else
			{
				if($user->register($uname,$umail,$upass)){	
					$user->redirect('index.php?admin');
				}
			}
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}	
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
        <br /><br /><br /><br />
        <div class="col-sm-8">
            <div class="signin-form">
    	
        <form method="post" class="form-signin">
            <h2 class="form-signin-heading">Sign up.</h2><hr />
            <?php
			if(isset($error))
			{
			 	foreach($error as $error)
			 	{
					 ?>
                     <div class="alert alert-danger">
                        <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?>
                     </div>
                     <?php
				}
			}
			else if(isset($_GET['joined']))
			{
				 ?>
                 <div class="alert alert-info">
                      <i class="glyphicon glyphicon-log-in"></i> &nbsp; Successfully registered <a href='index.php'>login</a> here
                 </div>
                 <?php
			}
			?>
            <div class="form-group">
            <input type="text" class="form-control" name="txt_uname" placeholder="Introduceti nume utilizator" value="<?php if(isset($error)){echo $uname;}?>" />
            </div>
            <div class="form-group">
            <input type="text" class="form-control" name="txt_umail" placeholder="Introduceti adresa de e-mail" value="<?php if(isset($error)){echo $umail;}?>" />
            </div>
            <div class="form-group">
            	<input type="password" class="form-control" name="txt_upass" placeholder="Introduceti parola" />
            </div>
            <div class="clearfix"></div><hr />
            <div class="form-group">
            	<button type="submit" class="btn btn-primary" name="btn-signup">
                	<i class="glyphicon glyphicon-open-file"></i>&nbsp;INREGISTRARE
                </button>
            </div>
            <br />
            
        </form>
</div>

</div>
        </div>

        
        
        
            
            
        
            
        
    </body>
</html>


