<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

    SendEmail();
    
 function SendEmail (){
    if(isset($_POST['nombre'])  &&  isset($_POST['emailForm']) &&   isset($_POST['commentForm']) ){

    $name       = $_POST['nombre'];
    $emailForm  = $_POST['emailForm'];
    $comment    = $_POST['commentForm'];  

    $mail = new PHPMailer(true);

try {

    $mail->SMTPDebug = 2;                      
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.office365.com';                    
    $mail->SMTPAuth   = true;                                  
    $mail->Username   = 'jorgemanitto@hotmail.com';                     
    $mail->Password   = 'jorgeoscar1';                               
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         
    $mail->Port       = 587;                                     

    
    $mail->setFrom('jorgemanitto@hotmail.com', 'Mi empresa');
    $mail->addAddress('jorgemanitto@hotmail.com');     
  
    $mail->isHTML(true);                                  
    $mail->Subject = $name;
    $mail->Body    = 'Nombre :  '. $name. '<br>Email : '. $emailForm. '<br>Comentario :  '.' '.$comment;


    $mail->send();
   
    header ('location:index.php');
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}
}

?>