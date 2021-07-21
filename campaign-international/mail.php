<?php
require 'PHPMailerAutoload.php';


    
    
    $parentName = $_POST['parentsName'];
    $email = $_POST['email'];
    $kidname = $_POST['kidsName'];
    $phone= $_POST['phone'];
    $kidage = $_POST['age'];
    $date = $_POST['date'];
    $time = $_POST['timing'];
    $url = $_POST['url'];

    $htmlContent = '
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:v="urn:schemas-microsoft-com:vml">
<head>
<!--[if gte mso 9]><xml><o:OfficeDocumentSettings><o:AllowPNG/><o:PixelsPerInch>96</o:PixelsPerInch></o:OfficeDocumentSettings></xml><![endif]-->
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<meta content="width=device-width" name="viewport"/>
<!--[if !mso]><!-->
<meta content="IE=edge" http-equiv="X-UA-Compatible"/>
<!--<![endif]-->
<title></title>
<!--[if !mso]><!-->
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css"/>
<!--<![endif]-->
<style type="text/css">
		body {
			margin: 0;
			padding: 0;
		}

		table,
		td,
		tr {
			vertical-align: top;
			border-collapse: collapse;
		}

		* {
			line-height: inherit;
		}

		a[x-apple-data-detectors=true] {
			color: inherit !important;
			text-decoration: none !important;
		}
	</style>
<style id="media-query" type="text/css">
		@media (max-width: 720px) {

			.block-grid,
			.col {
				min-width: 320px !important;
				max-width: 100% !important;
				display: block !important;
			}

			.block-grid {
				width: 100% !important;
			}

			.col {
				width: 100% !important;
			}

			.col_cont {
				margin: 0 auto;
			}

			img.fullwidth,
			img.fullwidthOnMobile {
				max-width: 100% !important;
			}

			.no-stack .col {
				min-width: 0 !important;
				display: table-cell !important;
			}

			.no-stack.two-up .col {
				width: 50% !important;
			}

			.no-stack .col.num2 {
				width: 16.6% !important;
			}

			.no-stack .col.num3 {
				width: 25% !important;
			}

			.no-stack .col.num4 {
				width: 33% !important;
			}

			.no-stack .col.num5 {
				width: 41.6% !important;
			}

			.no-stack .col.num6 {
				width: 50% !important;
			}

			.no-stack .col.num7 {
				width: 58.3% !important;
			}

			.no-stack .col.num8 {
				width: 66.6% !important;
			}

			.no-stack .col.num9 {
				width: 75% !important;
			}

			.no-stack .col.num10 {
				width: 83.3% !important;
			}

			.video-block {
				max-width: none !important;
			}

			.mobile_hide {
				min-height: 0px;
				max-height: 0px;
				max-width: 0px;
				display: none;
				overflow: hidden;
				font-size: 0px;
			}

			.desktop_hide {
				display: block !important;
				max-height: none !important;
			}
		}
	</style>
<style id="icon-media-query" type="text/css">
		@media (max-width: 720px) {
			.icons-inner {
				text-align: center;
			}

			.icons-inner td {
				margin: 0 auto;
			}
		}
	</style>
</head>
<body class="clean-body" style="margin: 0; padding: 0; -webkit-text-size-adjust: 100%; background-color: #ffffff;">
<!--[if IE]><div class="ie-browser"><![endif]-->
<table bgcolor="#ffffff" cellpadding="0" cellspacing="0" class="nl-container" role="presentation" style="table-layout: fixed; vertical-align: top; min-width: 320px; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; width: 100%;" valign="top" width="100%">
<tbody>
<tr style="vertical-align: top;" valign="top">
<td style="word-break: break-word; vertical-align: top;" valign="top">
<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td align="center" style="background-color:#ffffff"><![endif]-->
<div style="background-color:transparent;">
<div class="block-grid" style="min-width: 320px; max-width: 700px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; Margin: 0 auto; background-color: transparent;">
<div style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;">
<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:700px"><tr class="layout-full-width" style="background-color:transparent"><![endif]-->
<!--[if (mso)|(IE)]><td align="center" width="700" style="background-color:transparent;width:700px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:30px; padding-bottom:55px;"><![endif]-->
<div class="col num12" style="min-width: 320px; max-width: 700px; display: table-cell; vertical-align: top; width: 700px;">
<div class="col_cont" style="width:100% !important;">
<!--[if (!mso)&(!IE)]><!-->
<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:30px; padding-bottom:55px; padding-right: 0px; padding-left: 0px;">
<!--<![endif]-->
<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 30px; padding-left: 30px; padding-top: 10px; padding-bottom: 10px; font-family:  Tahoma, sans-serif"><![endif]-->
<div style="color:#555555;font-family:"Montserrat",  Tahoma, sans-serif;line-height:1.8;padding-top:10px;padding-right:30px;padding-bottom:10px;padding-left:30px;">
<div class="txtTinyMce-wrapper" style="font-size: 14px; line-height: 1.8; font-family: "Montserrat" , Tahoma, sans-serif; color: #555555; mso-line-height-alt: 25px;">
<p style="text-align: left; line-height: 1.8; word-break: break-word; font-family: Montserrat, Tahoma, sans-serif; font-size: 18px; mso-line-height-alt: 32px; margin: 0;"><span style="font-size: 18px;">Hallo <strong>'.$parentName.'</strong>,</span></p>
<p style="text-align: left; line-height: 1.8; word-break: break-word; font-family: Montserrat, Tahoma, sans-serif; mso-line-height-alt: 25px; margin: 0;"><strong><span style="font-size: 18px; color: #993366;">vielen Dank fuer Ihr Interesse und Ihre Buchung eines Schnupperkurses!</span></strong></p>
<p style="text-align: left; line-height: 1.8; word-break: break-word; font-family: Montserrat, Tahoma, sans-serif; font-size: 18px; mso-line-height-alt: 32px; margin: 0;"><span style="font-size: 18px;">Bitte finden Sie im Folgenden die notwendigen Informationen zum Kurs:</span></p>

<p style="text-align: left; line-height: 1.8; word-break: break-word; font-family: Montserrat, Tahoma, sans-serif; mso-line-height-alt: 25px; margin: 0;"><strong><span style="font-size: 18px;">Datum und Uhrzeit - '.'<span style="color:#993366">'.$date.' um '.$time.'</span>'.'<br/>Link zum Kurs - <span style="color: #993366;"><a href="https://bit.ly/2NaXJUO" rel="noopener" style="text-decoration: underline; color: #993366;" target="_blank">Klicken Sie hier</a></span><br/>Passwort- <span style="color: #993366;">BeSingular</span><br/>Anforderungen- <span style="color: #993366;">Internetfaehiger Computer/Laptop oder Smartphone (moeglichst mit Webcam + Headset) & eine stabile DSL-Verbindung</span></span></strong></p><br>

<p style="font-size: 20px; line-height: 1.8; font-family: Montserrat,  Tahoma, sans-serif; word-break: break-word; mso-line-height-alt: 36px; margin: 0;"><span style="color: #333333; font-size: 20px;"><strong>Ueber uns</strong></span></p>
<p style="font-size: 14px; line-height: 1.8; font-family: Montserrat,  Tahoma, sans-serif; word-break: break-word; mso-line-height-alt: 25px; margin: 0;"><br/><span style="font-size: 18px;">BeSingular ist ein fuehrendes EdTech-Unternehmen, das jungen Menschen Moonshot-Denken vermittelt, indem sie wegweisende Technologien und grundlegende Werte vermittelt bekommen, die sie mit Leichtigkeit erlernen.</span><br/><span style="font-size: 18px;">Angebotene Lernreihen von BeSingular umfassen: <strong><span style="color: #993366;">Kuenstliche Intelligenz, Robotik, Spiele-Entwicklung, Industrie 4.0, 3D-Druck, iOS-App-Entwicklung und Augmented & Virtual Reality (AR / VR).</span></strong>.</span></p>
<p style="font-size: 18px; line-height: 1.8; font-family: Montserrat,  Tahoma, sans-serif; word-break: break-word; mso-line-height-alt: 32px; margin: 0;"><span style="font-size: 18px;">Wir freuen uns auf unser erstes gemeinsames Online-Treffen zum Schnuppern!</span></p>
<p style="line-height: 1.8; font-family: Montserrat,  Tahoma, sans-serif; word-break: break-word; font-size: 18px; mso-line-height-alt: 32px; margin: 0;"><span style="font-size: 18px;">Beste Gruesse,</span><br/><strong><span style="font-size: 18px; color: #993366;">Ihr BeSingular Team</span></strong></p>

</div>
</div>
<!--[if mso]></td></tr></table><![endif]-->
<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 30px; padding-left: 30px; padding-top: 20px; padding-bottom: 10px; font-family: Tahoma, Verdana, sans-serif"><![endif]-->
<!--[if mso]></td></tr></table><![endif]-->
<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 30px; padding-left: 30px; padding-top: 10px; padding-bottom: 10px; font-family: Tahoma, Verdana, sans-serif"><![endif]-->
<!--[if mso]></td></tr></table><![endif]-->
<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 30px; padding-left: 30px; padding-top: 20px; padding-bottom: 10px; font-family: Tahoma, Verdana, sans-serif"><![endif]-->
<div style="color:#555555;font-family:Roboto, Tahoma, Verdana, Segoe, sans-serif;line-height:1.8;padding-top:20px;padding-right:30px;padding-bottom:10px;padding-left:30px;">
<div class="txtTinyMce-wrapper" style="font-size: 14px; line-height: 1.8; color: #555555; font-family: Roboto, Tahoma, Verdana, Segoe, sans-serif; mso-line-height-alt: 25px;">

</div>
</div>
<!--[if mso]></td></tr></table><![endif]-->
<!--[if (!mso)&(!IE)]><!-->
</div>
<!--<![endif]-->
</div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
</div>
</div>
</div>
<div style="background-color:transparent;">
<div class="block-grid" style="min-width: 320px; max-width: 700px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; Margin: 0 auto; background-color: transparent;">
<div style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;">
<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:700px"><tr class="layout-full-width" style="background-color:transparent"><![endif]-->
<!--[if (mso)|(IE)]><td align="center" width="700" style="background-color:transparent;width:700px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;"><![endif]-->
<div class="col num12" style="min-width: 320px; max-width: 700px; display: table-cell; vertical-align: top; width: 700px;">
<div class="col_cont" style="width:100% !important;">
<!--[if (!mso)&(!IE)]><!-->
<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
<!--<![endif]-->
<table cellpadding="0" cellspacing="0" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" valign="top" width="100%">
<tr style="vertical-align: top;" valign="top">
<td align="center" style="word-break: break-word; vertical-align: top; padding-top: 5px; padding-right: 0px; padding-bottom: 5px; padding-left: 0px; text-align: center;" valign="top">
<!--[if vml]><table align="left" cellpadding="0" cellspacing="0" role="presentation" style="display:inline-block;padding-left:0px;padding-right:0px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;"><![endif]-->
<!--[if !vml]><!-->
<table cellpadding="0" cellspacing="0" class="icons-inner" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; display: inline-block; margin-right: -4px; padding-left: 0px; padding-right: 0px;" valign="top">
<!--<![endif]-->

</table>
</td>
</tr>
</table>
<!--[if (!mso)&(!IE)]><!-->
</div>
<!--<![endif]-->
</div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
</div>
</div>
</div>
<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
</td>
</tr>
</tbody>
</table>
<!--[if (IE)]></div><![endif]-->
</body>
</html>
    ';
    echo $parentName;
  
$mail = new PHPMailer();
$mail->CharSet = "utf-8";
$mail->SMTPDebug = 1;                               // Enable verbose debug output
echo "test1";
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.zoho.in';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'contact@besingular.de';                 // SMTP username
$mail->Password = 'BeSingular@test';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to
$mail->setFrom('contact@besingular.de');
$mail->addAddress('info@besingular.com');     // Add a recipient

$mail->addCC('rishabh.maheshwari@besingular.com');
 $mail->addCC('kapil.sethi@bestgroup.co.in');
 $mail->addCC('salesteam@besingular.com');

// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Email From Contact Page';
$mail->Body = '<html><body>';
 $mail->Body .= '<h1> NEW QUERY </h1>'.'<br>Parent Name :'.$parentName .'<br>Email:'.$email.'<br>Phone: '.$phone.'<br>Kids Name:'.$kidname.'<br>Age:  '.$kidage.'<br> Time :'.$time.'<br>Date:'.$date.'<br>Url:'.$url;;
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
$mail->SMTPDebug = 0 ;                               // Enable verbose debug output
$mail->CharSet = "utf-8";
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.zoho.in';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'contact@besingular.de';                 // SMTP username
$mail->Password = 'BeSingular@test';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to
$mail->setFrom('contact@besingular.de', "BeSingular");
$mail->addAddress($_POST['email']);     // Add a recipient
$mail->addReplyTo('contact@besingular.com', 'Information');
// $mail->addBCC('bcc@example.com');

// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Vereinbaren Sie einen Termin mit BeSingular';
$mail->Body = $htmlContent;


if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}

}


?>