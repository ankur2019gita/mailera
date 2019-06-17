
<!-- arcosadmin
Arcosadmin@2013 --> 

<!-- <?php
$to = 'niravashara1996@gmail.com';
$subject = 'Marriage Proposal';
$from = 'divyamshah29@gmail.com';
 
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
$message = '<html><body>';
$message .= '<h1 style="color:#f40;">Hi Jane!</h1>';
$message .= '<p style="color:#080;font-size:18px;">Will you marry me?</p>';
$message .= '</body></html>';
 
// Sending email
if(mail($to, $subject, $message, $headers)){
    echo 'Your mail has been sent successfully.';
} else{
    echo 'Unable to send email. Please try again.';
}
?> -->

<?php
require ('PHPMailer.php');

$mail = new PHPMailer;

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'divyamshah29@gmail.com';
$mail->Password = 'ipadipod1#';
$mail->SMTPSecure = 'tls';

$mail->From = 'divyamshah29@gmail.com';
$mail->FromName = 'Divyam Shah';
$mail->addAddress('niravashara1996@gmail.com', 'nirav');

$mail->addReplyTo('divyamshah29@gmail.com', 'divyam');

$mail->WordWrap = 50;
$mail->isHTML(true);

$mail->Subject = 'Using PHPMailer';
$mail->Body    = 'Hi Iam using PHPMailer library to sent SMTP mail from localhost';

if(!$mail->send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}

echo 'Message has been sent';