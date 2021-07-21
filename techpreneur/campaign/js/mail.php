<?php
require 'PHPMailerAutoload.php';

   
    $parentName = $_POST['parentName'];
    $email = $_POST['email'];
    $kidname = $_POST['kidName'];
    $phone= $_POST['phone'];
    $kidage = $_POST['kidAge'];
    $url = $_POST['url'];
   

$mail = new PHPMailer();
$mail->SMTPDebug = 0;                               // Enable verbose debug output
echo "test1";
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'mail.besingular.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'malaysia@besingular.com';                 // SMTP username
$mail->Password = 'nmFE@N_(VTO-';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to
$mail->setFrom('malaysia@besingular.com');
$mail->addAddress('rishabh.maheshwari@besingular.com');     // Add a recipient
$mail->addReplyTo('rishabh.maheshwari@besingular.com', 'Information');
 $mail->addCC('rishabh.maheshwari@besingular.com');
// $mail->addBCC('bcc@example.com');

// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Email From Contact Page';
$mail->Body = '<html><body>';
$mail->Body .= '<h1> NEW QUERY </h1>'.'<br>Parent Name :<br>Email:'.$email.'<br>Phone: '.$phone.'<br>Slot Booked:'.$kidname.'<br>Gender:'.$parentName.'<br>Query:  '.$kidage.'<br>'.$url;
$mail->Body .= '</body></html>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
     echo "mail sent";
    // echo '<script src="https://www.paypalobjects.com/api/checkout.js"></script>';
    // echo '<script type="text/javascript">alert("We Have Received Your Message, We Get Back To You as soon as possible");</script>';
    // echo "<script src='./script.js'></script>";


}

if($email){
    $mail = new PHPMailer();
$mail->SMTPDebug = 0;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'mail.besingular.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'malaysia@besingular.com';                 // SMTP username
$mail->Password = 'nmFE@N_(VTO-';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to
$mail->setFrom('malaysia@besingular.com', "BeSingular");
$mail->addAddress("rishabh.maheshwari@besingular.com");     // Add a recipient
$mail->addReplyTo('malaysia@besingular.com', 'Information');
// $mail->addBCC('bcc@example.com');

// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Besingular Malaysia';
$mail->Body = '<html><body><h2>Dear'." ".$parentName."</h2>";
$mail->Body .= '<h3>Thank You for showing your interest in <b style="color:#663477"> BeSingular Malaysia </b></h6><p> We have recevied your query, Our counselor will get back to you shortly regarding your interest. </p>';
$mail->Body .= '</body></html>';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}

}


?>