

<!DOCTYPE html>

<html lang="en">

​

<head>

​

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



<!-- Global site tag (gtag.js) - Google Ads: 740722454 -->

<script async src="https://www.googletagmanager.com/gtag/js?id=AW-740722454"></script>

<script>

  window.dataLayer = window.dataLayer || [];

  function gtag(){dataLayer.push(arguments);}

  gtag('js', new Date());



  gtag('config', 'AW-740722454');

</script>

​

<!-- Event snippet for Lead BeSingular Campaign conversion page -->

<script>

  gtag('event', 'conversion', {'send_to': 'AW-740722454/0gLSCN_5ot4BEJaOmuEC'});

</script>



<script async src="https://www.googletagmanager.com/gtag/js?id=UA-143002579-1"></script>

<script>

  window.dataLayer = window.dataLayer || [];

  function gtag(){dataLayer.push(arguments);}

  gtag('js', new Date());

​

  gtag('config', 'UA-143002579-1');

</script>





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

​<?php
$price = "";
$multiCourseData = "Spieldesign,Insta Filter Design";
$singleCourseData = "Mobile App Development";
if(isset($_GET['singleCourse'])){
  $singleCourse = $_GET['singleCourse'];
  if($singleCourse == $singleCourseData)
{
    $price = "59"; 
}
}

if(isset($_GET['multiCourse'])){
  $multiCourse = $_GET['multiCourse'];
  if($multiCourse==$multiCourseData)
{
    $price = "118";
}
else{
  $price = "59";
}
}

?>

<body>

​

​

​<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
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

         

          

          
            <?php
            if($price == ""){
              echo '<h1 style="font-size:50px;"><strong>Oops!</strong></h1>';
            }
            else {
              echo '<h1 style="font-size:50px;"><strong>Thank You!</strong></h1>';
         
            }
           
            ?>
           

           

           
           <h3 style="margin-top:0px;"> <?php echo ($price=="")?
             "<a href='https://besingularonlineprograms.com/bootcamp-de/'>Register your slot here</a>": "<h3 style='margin-top:0px;'>Pay via Paypal to enroll in BeSingular Bootcamp </h3><h3 style='margin-top:0px;'>Proceed to Pay €".$price." </h3>";
             ?> </h3><br>

           

           <script
    src="https://www.paypal.com/sdk/js?client-id=AZ6EqEy75HI4UPbqhuO09OlvRoAR8H0NMseobXm0Fw8r4LkMO-P2PVNjD98CxVWnqXSY5PsJqnav3hUf&currency=EUR"> // Required. Replace SB_CLIENT_ID with your sandbox client ID.
  </script>

  <div id="paypal-button-container"></div>

  <!-- <script>
    paypal.Buttons().render('#paypal-button-container');
    // This function displays Smart Payment Buttons on your web page.
  </script> -->
  <script>
    paypal.Buttons({
      createOrder: function(data, actions) {
        // This function sets up the details of the transaction, including the amount and line item details.
        return actions.order.create({
          purchase_units: [{
            amount: {
              value: <?php echo $price; ?>
            }
          }]
        });
      }
    }).render('#paypal-button-container');
  </script>

          

         </div>

  

  </div>

​

 

​

 <script src="js/jquery.js"></script>

​

 <script src="js/bootstrap.min.js"></script>

    

​

</body>

​

</html>