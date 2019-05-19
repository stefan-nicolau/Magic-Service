<?php 
include ("functions/functions.php");
$title="Magazin";

        ini_set('date.timezone', 'Europe/Berlin'); 
?>





<?php include('header.php');?>
               
                
                    
                    <br /><br />
                
                    <div class="col-sm-9 col-sm-offset-2"><br/>
                        <div class="col-xs-12">
                            <?php
                            if(isset($_GET['pro_id'])){
                                
                                $product_id = $_GET['pro_id'];
                                $get_pro="SELECT * FROM products WHERE product_id='$product_id'";
                                $run_pro = mysqli_query($con, $get_pro);

                                while($row_pro=mysqli_fetch_array($run_pro)){

                                    $pro_id=$row_pro['product_id'];
                                    $pro_cat=$row_pro['product_cat'];
                                    $pro_brand=$row_pro['product_brand'];
                                    $pro_title=$row_pro['product_title'];
                                    $pro_price=$row_pro['product_price'];
                                    $pro_image=$row_pro['product_image'];
                                    $pro_desc=$row_pro['product_desc'];


                                    echo " <div class='col-sm-7' style='margin-bottom: 5%;'>
                                                <a href='details.php?pro_id=$pro_id'><img class='img-responsive pro_img' src='admin_area/product_images/$pro_image' style='border:2px solid #242424;' /></a><br />
                                            </div>
                                            <div class='col-sm-5 '>
                                                <h3>$pro_title</h3>
                                                
                                                
                                                <b><h3 style='color:#af1111;'>$pro_price LEI</h3></b><br />
                                                <span><a href='#message' style='color:#242424;'><img src='img/info.png' width=30 height=30/>Afla daca este disponibil acest produs</a></span>
                                            </div>
                                            <div class='col-sm-12' style='border:1px solid grey; background:whitesmoke; padding-bottom: 10%; margin-bottom: 10%;'>
                                                <div class='col-sm-12' style='background:#af1111; margin-bottom:3%;'>
                                                <h3 style='color:whitesmoke;'>Descriere Produs</h3>
                                                </div>
                                                <span>$pro_desc</span>
                                            </div>
                                            
                                            
                                            
                                            ";






                                } 
                            }?>
                            
                            <div id="review" class="col-sm-12 " style="margin-bottom: 5%;"> <!-- de aici -->
                                <h3 id="message" style="border-bottom: 1px solid #242424; color:#af1111; padding-bottom: 3%;">AFLA DACA PRODUSUL ESTE DISPONIBIL</h3><br /><br />
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

                                </form>
                                
                               
                                
                                <?php
                                if(isset($_POST['submit'])){
                                    
                                    $name=$_POST['name'];
                                    $last_name=$_POST['last_name'];
                                    $mail=$_POST['email'];
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

                                    $mail->Subject  =  'Disponibilitate Produs '.$pro_title;
                                    $mail->IsHTML(true);
                                    $mail->Body    = '<h3 style="color:#af1111;">Buna ziua '.$name.' '.$last_name.',</h3>
                                                          <br />
                                                          
                                    Am primit solicitarea dumneavoastra pentru produsul '.$pro_title.' in valoare de '.$pro_price.' RON. 
                                    <br />
                                    Veti fi contactat in cel mai scurt timp de echipa noastra.
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
                                    $text = 'Disponibilitate Produs '.$pro_title.'<br />Data: '.date('d-m-Y').'<br />Ora: '.date('H:i:s',gmdate('U')).'<br /> Nume: '.$name.' '.$last_name.'<br /> Telefon: '.$phone.'<br /><br /> V.I.N.: '.$vin.'<br /><br />'.$message.'<br /> Produs: <a href="http://pieseautoturisme.ro/details.php?pro_id='.$pro_id.'">'.$pro_title.'</a>';
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
                    </div>
                    
                    
                   

                
               
            </div>
                
                
                <br />
            
            <br />
            <?php include('footer.php'); ?>