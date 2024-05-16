<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

function send_verification($fullName, $email, $otp){
    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    try {
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'joshua.madrid.cics@ust.edu.ph';                 // SMTP username
        $mail->Password = 'kbjvjzsnbtbpeiha';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to
    
        //Recipients
        $mail->setFrom( 'joshua.madrid.cics@ust.edu.ph', 'Sample OTP');
        $mail->addAddress($email);     // Add a recipient
        //Content
        $mail->isHTML(true);  // Set email format to HTML
        $mail->Subject = "OTP Verification Code";
        $mail->Body    = "Hello, ".$fullName."<br> Your account verification code is: ".$otp;

        $mail->send();
        ?>
            <script>
                Swal.fire("An email containing your OTP has been sent!");
                //alert("Email Successfully Send!!")
            </script>
        <?php
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }

}




?>