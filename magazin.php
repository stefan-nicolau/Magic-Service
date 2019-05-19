    <?php
$title="Magazin";
?>
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

<?php include ("header.php") ?>
                
                <div class="col-sm-8 col-sm-push-2">
                        <h3 id="message" style="border-bottom: 1px solid #242424; color:#af1111; padding-bottom: 3%; text-align:center;">CERERE OFERTA</h3><br /><br />
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

                                    </form>                                    
                                   
                                    
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

                    
                  
                
                <h3 id="message" style="border-bottom: 1px solid #242424; color:#af1111; padding-top:5%; padding-bottom: 3%; text-align:center;" class="col-sm-8 col-sm-push-2">CATEGORII</h3><br /><br />
                   <div class="col-sm-12" style="margin-bottom:10%; padding-top:2%;">
                    <?php
                        getCats();

                    ?>
                    </div>
                 

                 <h3 id="message" style="border-bottom: 1px solid #242424; color:#af1111; padding-top:5%; padding-bottom: 3%; text-align:center;" class="col-sm-8 col-sm-push-2">PRODUCATORI</h3><br /><br />
                   <div class="col-sm-12" style="margin-bottom:10%; padding-top:2%;">
                    <?php
                        getBrands();

                    ?>
                    </div><br /><br /><br />




                  


                    
                   
                </div>
                    
                    
                <br /> <br />
                <?php include("footer.php");?>
           
            
            
          
            
        </body>
        
        
    </html>
