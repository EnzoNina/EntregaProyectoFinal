<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


function enviar($titulo,$texto,$correo,$nombre)
{
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->SMTPDebug = 0;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'tucorreo';                     //SMTP username
        $mail->Password   = 'passCorreo';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients    
        $mail->setFrom('EmailFrom');
        $mail->addAddress($correo, $nombre);     //Add a recipient        
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $titulo;
        $mail->Body = $texto;
        $mail->send();
        ?>
            <script>
                alert("Mensaje enviado correctamente");                
            </script>
        <?php
    } catch (Exception $e) {
         echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}