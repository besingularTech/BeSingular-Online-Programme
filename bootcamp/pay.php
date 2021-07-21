<?php

require('config.php');
require('razorpay-php/Razorpay.php');
session_start();
$multiCourseData = "Game Design,Insta Filter Design";
$singleCourseData = "Mobile App Development";
$multiCourse = $_GET['multiCourse'];
$singleCourse = $_GET['singleCourse'];
$name = $_GET['name'];
$phone = $_GET["phone"];
$email = $_GET['email'];


if($multiCourse==$multiCourseData)
{
    $price = 480000;
}
else if($singleCourse == $singleCourseData)
{
    $price = 240000; 
}
else{
    $price = 240000;
}



// Create the Razorpay Order

use Razorpay\Api\Api;

$api = new Api($keyId, $keySecret);

//
// We create an razorpay order using orders api
// Docs: https://docs.razorpay.com/docs/orders
//
$orderData = [
    'receipt'         => 3456,
    'amount'          => $price, // 2000 rupees in paise
    'currency'        => 'INR',
    'payment_capture' => 1 // auto capture
];

$razorpayOrder = $api->order->create($orderData);

$razorpayOrderId = $razorpayOrder['id'];

$_SESSION['razorpay_order_id'] = $razorpayOrderId;

$displayAmount = $amount = $orderData['amount'];

if ($displayCurrency !== 'INR')
{
    $url = "https://api.fixer.io/latest?symbols=$displayCurrency&base=INR";
    $exchange = json_decode(file_get_contents($url), true);

    $displayAmount = $exchange['rates'][$displayCurrency] * $amount / 100;
}

$checkout = 'automatic';

if (isset($_GET['checkout']) and in_array($_GET['checkout'], ['automatic', 'manual'], true))
{
    $checkout = $_GET['checkout'];
}

$data = [
    "key"               => $keyId,
    "amount"            => $amount,
    "name"              => $name,
    "description"       => "BeSingular Bootcamp ",
    "image"             => "https://cdn.razorpay.com/logos/FODiDnUgDLgZ2K_large.jpg",
    "prefill"           => [
    "name"              => $name,
    "email"             => $email,
    "contact"           => $phone,
    ],
    "notes"             => [
    "address"           => "",
    "merchant_order_id" => "",
    ],
    "theme"             => [
    "color"             => "#741b47"
    ],
    "order_id"          => $razorpayOrderId,
];

if ($displayCurrency !== 'INR')
{
    $data['display_currency']  = $displayCurrency;
    $data['display_amount']    = $displayAmount;
}

$json = json_encode($data);

require("checkout/{$checkout}.php");
?>

<!DOCTYPE html>
<html lang="en">
​
<head>
​


​<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KFJSZSF');</script>
<!-- End Google Tag Manager -->
​
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="robots" content="noindex, nofollow">
  <meta name="description" content="">
  <meta name="author" content="">
​
  <title>BeSingular</title>
​
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="shortcut icon" sizes="16x16 24x24 32x32 48x48 64x64" href="img/favicon.ico">
​
​
<!-- Custom Fonts -->
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Allura|Libre+Baskerville" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
​
<!-- Custom CSS -->
<link href="css/half-slider.css" rel="stylesheet">




<!-- Event snippet for Lead_BeSingular conversion page -->
<!-- <script>
  gtag('event', 'conversion', {'send_to': 'AW-740722454/zAgMCPH--6YBEJaOmuEC'});
</script> -->

<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '373414613109550');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=373414613109550&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
</head>
​
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
  <div class="container">
    <a class="navbar-brand" href="#">
          <img src="./logo2.png" alt="">
        </a>
    </div>
</nav>

<div class="row top-bar">

 <div class="container">

  
  

  <div class="col-md-9">

   <ul>

    <!-- <li><I class="fa fa-map-marker" style="margin-bottom:30px;"></i> BeSingular, <br>B–4/42, Safdarjung Enclave, <br>Delhi – 110029</a></li>

    <li><I class="fa fa-phone"></i><a href="tel:9910524422"> +91 9910524422</a><div style="clear:both; margin-bottom:5px;"></div>

  <I class="fa fa-envelope" style="background:#47489e;"></i><a href="mailto:contact@besingular.com"> contact@besingular.com</a></li> -->

  

   </ul>  

  </div>

  

 </div>

</div>

​

​



​

<div class="row contactbx">

  

   <div class="container text-center mt50">

         

          

          

           <h1 style="font-size:50px;"><strong>Thank You!</strong></h1>

           

           <h3 style="margin-top:0px;">Your query is received and we will contact you soon.</h3>

           

           <a href="http://www.besingular.com/" class="btn btnsubmit">GO TO HOMEPAGE</a>

          

         </div>

  

  </div>

​

 <script src="js/jquery.js"></script>
​
 <script src="js/bootstrap.min.js"></script>
    
​
</body>
​
</html>