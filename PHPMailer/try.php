<?php

// Import PHPMailer classes into the global namespace 
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer library files 
require 'PHPMailer/src/Exception.php'; 
require 'PHPMailer/src/PHPMailer.php'; 
require 'PHPMailer/src/SMTP.php'; 
 

// Create an instance of PHPMailer class 
$mail = new PHPMailer;

// SMTP configuration
$mail->isSMTP();
$mail->Host     = 'smtp.googlemail.com';
$mail->SMTPAuth = true;
$mail->Username = 'golu1008kumar98@gmail.com';
$mail->Password = 'Rajnish@3175';
$mail->SMTPSecure = 'tls';
$mail->Port     = 465;

// Sender info 
$mail->setFrom('rajnish.aspire@gmail.com', 'New Enquiry'); 

// Add a recipient 
$mail->addAddress('rajnish@aspireindia.com'); 

// Email subject 
$mail->Subject = 'Send Email via SMTP using PHPMailer';

// Set email format to HTML 
$mail->isHTML(true); 
 
// Email body content 
$mailContent = ' 
    <h2>New Enquiry</h2> 
    <table>
        <tr>
            <th>Name</th>
                <td>"'.$_POST['name'].'"</td>
                
        </tr>
         <tr>
            <th>Email</th>
                <td>"'.$_POST['email'].'"</td>
         </tr>
         <tr>
            <th>Phone Number</th>
                <td>"'.$_POST['phone_number'].'"</td>
          </tr> 
         <tr>
            <th colspan="2">"'.$_POST['msg_subject'].'"</th>
         </tr>
         <tr>
            <td colspan="2">"'.$_POST['message'].'"</td>
        </tr>
    </table>'; 
$mail->Body = $mailContent; 
 
// Send email 
if(!$mail->send()){ 
    echo 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo; 
}else{ 
    echo 'Message has been sent.'; 
}

?>