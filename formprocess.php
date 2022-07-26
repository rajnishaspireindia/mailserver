 <?php 
 $movingType=$_POST['whichtype'];
 $movingFrom=$_POST['MovingFrom'];
 $movingTo=$_POST['MovingTo'];
 $movingDate=$_POST['MovingDate'];
 $movingDetail=$_POST['MovingDetails'];
 $name=$_POST['CostumerName'];
 $phone=$_POST['Costumerphone'];
 $email=$_POST['CostumerEmail'];
 $address=$_POST['address'];

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
$mail->Host     = 'mail.smtp2go.com';
$mail->SMTPAuth = true;
$mail->Username = 'RelocateSMTP';
$mail->Password = 'vmN2eDGeNEuufLhO';
$mail->SMTPSecure = 'tls';
$mail->Port     = 2525;

// Sender info 
$mail->setFrom($email, 'Movement details'); 
// Add a recipient - yaha per reciepient address dalo
$mail->addAddress('ankithkumarchat@gmail.com'); 
// Email subject 
$mail->Subject = 'Confirmation mail';
// Set email format to HTML 
$mail->isHTML(true); 
$mail->AddEmbeddedImage('logo/packers.png', 'logoimg', 'logo/packers.png');
// Email body content 
  
$mailContent = '<body style="background-color:grey; font-family: "Roboto", sans-serif;">
                <table align="center" border="0" cellpadding="0" cellspacing="0" width="550" bgcolor="white" style="border:2px solid whitesmoke;">
                <tbody style="border:2px solid whitesmoke;">
                <tr>
                <td align="center">
                <table align="center" border="0" cellpadding="0"cellspacing="0" class="col-550" width="550">
                <tbody>
                <tr>
                <td align="center" style="background-color:#ff735a;height: 50px;">
                <p style="color:white;font-weight:bold;">Relocation details for your movement</p>
                </td>
                </tr>
                </tbody>
                </table>
                </td>
                </tr>
                <tr style="height:100px;">
                <td align="center" style="border:none;padding-right: 20px;padding-left:20px padding-top:20px;">
                <img src="cid:logoimg" /></td>
                </tr>
                <tr style="height:150px;">
                <td align="left" style="border: none;padding-right: 20px;padding-left:20px">
                <p>Congratulations! Your movement has been confirmed </p>
                <p>We are pleased to connect with you. We will take care of your moving needs from here.</p>
                </td>
                </tr>
                <tr style="height:60px;">
                <td align="left" style="border: none;padding-right: 20px;padding-left:20px">
                <b>Movement Details:- </b>
                <p>Moving Type: '.$movingType.'</p>
                <p>Moving date: '.$movingDate.'</p>
                <p>Moving from: '.$movingFrom.'</p>
                <p>Moving to: '.$movingTo.'</p>
                <p>Details: '.$movingDetail.'</p>
                </td>
                </tr>
                <tr style="height:60px;">
                <td align="left" style="border: none;padding-right: 20px;padding-left:20px;padding-top:20px;">
                <b>Contact  Details:- </b>
                <p>Name:  '.$name.'</p>
                <p>Email: '.$email.'</p>
                <p>Phone: '.$phone.'</p>
                <p>Address: '.$address.'</p>
                </td>
                </tr>
                <tr>
                <td style="padding:20px; font-size:11px; line-height:18px;color:#999999;"valign="top" align="center"></td>
                </tr>
                </tbody>
                </table>
                </body>';
$mail->Body = $mailContent; 
 
    // Send email 
    if(!$mail->send()){ 
    echo 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo; 
    }else{ 
    echo '<body style="background-color:grey; font-family: "Roboto", sans-serif;">
                    <table align="center" border="0" cellpadding="0" cellspacing="0" width="550" bgcolor="white" style="border:2px solid whitesmoke;">
                    <tbody style="border:2px solid whitesmoke;">
                    <tr>
                    <td align="center">
                    <table align="center" border="0" cellpadding="0"cellspacing="0" class="col-550" width="550">
                    <tbody>
                    <tr>
                    <td align="center" style="background-color:#ff735a;height: 50px;">
                    <p style="color:white;font-weight:bold;">Relocation details for your movement</p>
                    </td>
                    </tr>
                    </tbody>
                    </table>
                    </td>
                    </tr>
                    <tr style="height:100px;">
                    <td align="center" style="border:none;padding-right: 20px;padding-left:20px padding-top:20px;">
                    <img src="logo/packers.png" /></td>
                    </tr>
                    <tr style="height:150px;">
                    <td align="left" style="border: none;padding-right: 20px;padding-left:20px">
                    <p>Congratulations! Your movement has been confirmed </p>
                    <p>We are pleased to connect with you. We will take care of your moving needs from here.</p>
                    </td>
                    </tr>
                    <tr style="height:60px;">
                    <td align="left" style="border: none;padding-right: 20px;padding-left:20px">
                    <b>Movement Details:- </b>
                    <p>Moving Type: '.$movingType.'</p>
                    <p>Moving date: '.$movingDate.'</p>
                    <p>Moving from: '.$movingFrom.'</p>
                    <p>Moving to: '.$movingTo.'</p>
                    <p>Details: '.$movingDetail.'</p>
                    </td>
                    </tr>
                    <tr style="height:60px;">
                    <td align="left" style="border: none;padding-right: 20px;padding-left:20px;padding-top:20px;">
                     <b>Contact  Details:- </b>
                     <p>Name:  '.$name.'</p>
                     <p>Email: '.$email.'</p>
                     <p>Phone: '.$phone.'</p>
                     <p>Address: '.$address.'</p>
                   </td>
                   </tr>
                   <tr>
                  <td style="padding:20px; font-size:11px; line-height:18px;color:#999999;"valign="top" align="center"></td>
                  </tr>
                 </tbody>
                 </table>
                </body>'; 
    }
    ?>