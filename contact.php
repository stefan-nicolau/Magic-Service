
<?php 
include ("functions/functions.php");
ini_set('date.timezone', 'Europe/Berlin'); 
$title='Contact';
?>



<?php include('header.php');?>
             
                    <h2 style="border-bottom: 1px solid #242424; color:#af1111; padding-bottom: 2%; padding-left: 3%; margin-top: 3%;">SERVICE</h2>
                    <div class="col-sm-8" style="margin-top:5%;">
                        
                        
                        
                        <span style="font-weight:bolder;">Adresa: Str. Margaritarului, Nr.23, Ploiesti - Prahova </span><br /><br />
                        <span style="color:#af1111; font-weight:bolder;">Telefon: (+40) 723-540-720 </span><br /><br />
                        <span style="color:#af1111; font-weight:bolder;">Luni - Vineri:</span><span style="color:#AEAEAE;font-weight:bolder;"> 08:30 - 17:30</span><br /><br />
                        <span style="color:#af1111;font-weight:bolder;">Sambata:</span><span style="color:#AEAEAE;font-weight:bolder;"> Inchis</span><br /><br />
                        <span style="color:#af1111;font-weight:bolder;">Duminica:</span><span style="color:#AEAEAE;font-weight:bolder;"> Inchis</span><br /><br /><br />
                    </div>
        
                    <div class="col-sm-4" style="margin-top:5%; margin-bottom: 10%;"><!-- Google maps Service -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2823.8323403873637!2d26.04411399455904!3d44.94710805408601!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b24a19bea387c1%3A0x38ad4410496add71!2zU3RyYWRhIE3Eg3JnxINyaXRhcnVsdWkgMjMsIFBsb2llyJl0aQ!5e0!3m2!1sro!2sro!4v1478698338642" width="350" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
               
                
                <h2 style="border-bottom: 1px solid #242424; color:#af1111; padding-bottom: 2%; padding-left: 3%; padding-top: 5%; display: block;">MAGAZIN</h2>
                    <div class="col-sm-8" style="margin-top:5%;">
                        
                        
                        
                        <span style="font-weight:bolder;">Adresa: Str. Postei, Nr.57, Ploiesti - Prahova </span><br /><br />
                        <span style="color:#af1111; font-weight:bolder;">Telefon: (+40) 728-759-800 </span><br /><br />
                        <span style="color:#af1111; font-weight:bolder;">Luni - Vineri:</span><span style="color:#AEAEAE;font-weight:bolder;"> 08:00 - 18:00</span><br /><br />
                        <span style="color:#af1111;font-weight:bolder;">Sambata:</span><span style="color:#AEAEAE;font-weight:bolder;"> 09:00 - 14:00</span><br /><br />
                        <span style="color:#af1111;font-weight:bolder;">Duminica:</span><span style="color:#AEAEAE;font-weight:bolder;"> Inchis</span><br /><br /><br />
                    </div>
        
                    <div class="col-sm-4" style="margin-top:5%;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2823.9641679265947!2d26.031371315264682!3d44.94439467909821!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b24a21b168b2c3%3A0x5ed84c9aeb4c1d3d!2sStrada+Po%C8%99tei+57%2C+Ploie%C8%99ti!5e0!3m2!1sro!2sro!4v1478698986565" width="350" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                <div class="col-sm-8" style="margin-top:2%;">
                    <h2 style="border-bottom: 1px solid #242424; color:#af1111; padding-bottom: 3%;">CONTACT</h2>
                    <div id="review" class="col-sm-12 " style="margin-bottom: 5%; margin-top: 5%; "> <!-- de aici -->
                                
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
                                        <label for="mesage" class="col-sm-2 control-label">Mesaj:</label>
                                        <div class="col-sm-9">
                                              <textarea name="message" class="form-control" rows="8"></textarea>
                                        </div>
                                    </div>
                                    
                                    <input type="submit" name="submit" value="Trimite"/><br />

                                </form>
                                
                               
                                
                                <?php
                                if(isset($_POST['submit'])){
                                    
                                    $name=$_POST['name'];
                                    $last_name=$_POST['last_name'];
                                    $mail=$_POST['email'];
                                    $phone=$_POST['phone'];
                                   
                                    $message=$_POST['message'];
                                    
                                    require_once('phpmailer/class.phpmailer.php');
	
                                    $mail = new PHPMailer();
                                    $mail->CharSet =  "utf-8";
                                   // $mail->IsSMTP();
                                    $mail->SMTPAuth = true;
                                    $mail->Username = "auto.magicservice@gmail.com";
                                    $mail->Password = "Automobil1994";
                                        $mail->SMTPSecure = "ssl";  
                                    $mail->Host = "smtp.gmail.com";
                                    $mail->Port = "465";

                                    $mail->setFrom('auto.magicservice@gmail.com', 'MagicService');
                                    $mail->AddAddress($_POST['email'], $_POST['name']);

                                    $mail->Subject  =  'Contact Magic Service ';
                                    $mail->IsHTML(true);
                                    $mail->Body    = '<h3 style="color:#af1111;">Buna ziua '.$name.' '.$last_name.',</h3>
                                                          <br />
                                                          
                                    Am primit mesajul dumneavoastra! 
                                    <br />
                                    Veti fi contactat in cel mai scurt timp de echipa noastra.
                                    <br /> 
                                    Mai jos este atasat mesajul dumneavoastra:<br /><br />
                                    <div style="background: #ebebeb; margin-left:25px; margin-right:10px; margin-top:10px; margin-bottom:5px; width: 500px; padding-left:5px; padding-top:5px; padding-bottom:5px; color:#242424; border: 2px solid #af1111; ">
                                         <b> Nume: '.$name.' '.$last_name.'<br /><br /> Telefon: '.$phone.'<br /><br />'.$message.'</b>
                                    
                                    </div><br/>
                                    Va multumim!<br /><br />
                                    Echipa <b style="color:#af1111;"><a href="http://pieseautoturisme.ro/">Magic Service</a></b><br />
                                    <span style="color:#af1111;">Service Auto<br/>
                                    Str. Margaritarului, Nr.23<br />
                                    Ploiesti, Prahova<br/>
                                    Telefon: <b>0723540720</b><span>    
                                    
                                    
                                    ';
                                    $text = 'Contact Magic Service <br />Data: '.date('d-m-Y').'<br />Ora: '.date('H:i:s',gmdate('U')).'<br /> Nume: '.$name.' '.$last_name.'<br /> Telefon: '.$phone.'<br /><br /> Mesaj:<br /> '.$message.'';
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
                <div class="col-sm-4">
                            <h2 style="border-bottom: 1px solid #242424; color:#af1111; padding-bottom: 3%;">DESPRE SISTEMUL DE LIVRARI</h2>
                            <h3>Detalii in curand!</h3>
                            <p style="color:grey;">Va multumim pentru intelegere.</p>
                </div>
                    
                
            </div>
                    
            
                
                
                <br />
            
            <br />
            <?php include('footer.php'); ?>
