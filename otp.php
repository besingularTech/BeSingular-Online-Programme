

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <script src="https://www.gstatic.com/firebasejs/ui/4.7.1/firebase-ui-auth.js"></script>
    <link type="text/css" rel="stylesheet" href="https://www.gstatic.com/firebasejs/ui/4.7.1/firebase-ui-auth.css" /> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
 
 <style>
<?php
$contact = $_GET['Contact'];

// $url = 'https://besingular.zohobookings.in/portal-embed#/customer/germanyworkspace?Name='.$name.'&Email='.$email."&Contact=".$contact;
?>
#codeBlock{
    display: none;
}
  </style>
  </head>

<body>

​<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
  <div class="container">
    <a class="navbar-brand" href="#">
          <img src="./logo2.png" alt="">
        </a>
    </div>
</nav>

<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content" id="numberBlock">
        <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-weight-bold">OTP Verification</h4>
          <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> -->
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body mx-3" >
          <div class="md-form mb-5">
            <i class="fas fa-envelope prefix grey-text"></i>
            <input type="text" id="phone" class="form-control validate" disabled="disabled" value="<?php echo $contact ?>">
            <label data-error="wrong" data-success="right" for="defaultForm-email">Your Number</label>
          </div>
  
       
          <div id="recaptcha-container"></div>
        </div>
        
        <div class="modal-footer d-flex justify-content-center">
          <button class="btn btn-primary" id="getCode">Send OTP</button>
          
        </div>
      </div>


      <div class="modal-content" id="codeBlock">
        <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-weight-bold">OTP Verification</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body mx-3" >
    
  
          <div class="md-form mb-4" >
            <i class="fas fa-lock prefix grey-text"></i>
            <input type="number" id="code" class="form-control validate" >
            <label data-error="wrong" data-success="right" for="defaultForm-pass">Enter Code</label>
          </div>
          <div id="otpError">
          </div>
        </div>
        
        <div class="modal-footer d-flex justify-content-center">
          <button class="btn btn-primary" id="signInWithPhone">Submit</button>
          
        </div>
    </div>
  </div>
  
    

  <script type="text/javascript">
    $(window).on('load',function(){
        $('#modalLoginForm').modal('show');
        $('#codeBlock').hide();
    });
    $('#modalLoginForm').modal({backdrop: 'static', keyboard: false})  
</script>
  <script src="https://www.gstatic.com/firebasejs/5.9.1/firebase-app.js"></script>
 
  <script src="https://www.gstatic.com/firebasejs/5.9.1/firebase-auth.js"></script>


  <script>
      var firebaseConfig = {
      apiKey: "AIzaSyAqRdPAmYj-f5roEUOZd8hAFz5DWVidRks",
      authDomain: "besingular-otp.firebaseapp.com",
      databaseURL: "https://besingular-otp.firebaseio.com",
      projectId: "besingular-otp",
      storageBucket: "besingular-otp.appspot.com",
      messagingSenderId: "1047656028640",
      appId: "1:1047656028640:web:1b77ba9d419b12a33bf385",
      measurementId: "G-T6ZNZF6DRV"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);

    const phoneNumberField = document.getElementById('phone');
    const codeField = document.getElementById('code');
    const getCodeButton = document.getElementById('getCode');
    const signInWithPhoneButton = document.getElementById('signInWithPhone');

      const auth = firebase.auth();

// Creates and render the captcha
      window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container');
      recaptchaVerifier.render().then(widgetId => {
      window.recaptchaWidgetId = widgetId;
    })

  const sendVerificationCode = () => {
  const phoneNumber = phoneNumberField.value;
  const appVerifier = window.recaptchaVerifier; 
  
  // Sends the 6 digit code to the user's phone
  auth.signInWithPhoneNumber(phoneNumber, appVerifier)
  .then(confirmationResult => {
    const sentCodeId = confirmationResult.verificationId;
    document.getElementById("codeBlock").style.display="block";
    document.getElementById("numberBlock").style.display="none";

    // Sign in if the verification code is set correctly
    signInWithPhoneButton.addEventListener('click', () => signInWithPhone(sentCodeId));
  })
}

const signInWithPhone = sentCodeId => {
  const code = codeField.value;
  // A credential object (contains user's data) is created after a comparison between the 6 digit code sent to the user's phone
  // and the code typed by the user in the code field on the html form.
  const credential = firebase.auth.PhoneAuthProvider.credential(sentCodeId, code);
  auth.signInWithCredential(credential)
  .then(() => {
  window.location.href="https://besingularonlineprograms.com/thankyou2.php"
  })
  .catch(error => {
    console.error(error);
  })
}

getCodeButton.addEventListener('click', sendVerificationCode);
  </script>
  

    </body>
</html>