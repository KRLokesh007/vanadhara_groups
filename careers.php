<?php 


//include("PHPMailerAutoload.php");
//include("class.pop3.php");
?>


<?php

    
$mailsent='';
 if($_POST['email_id']){
     
     
     $csecret_key = "6LcXUrYUAAAAAHMIr4TuJERG1E5ok2ChXKb6FE-O";
     $cresponsekey = $_POST['g-recaptcha-response'];
     $userIP = $_SERVER['REMOTE_ADDR'];
     $capurl =  "https://www.google.com/recaptcha/api/siteverify?secret=$csecret_key&response=$cresponsekey&remoteip=$userIP";
     $response = file_get_contents($capurl);
     $jsondecoderesponse = json_decode($response);
     /*echo "<pre>";print_r($jsondecoderesponse->success);*/
     /*echo $jsondecoderesponse->success;
     $jsondecoderesponse->challenge_ts;
     $jsondecoderesponse->hostname;
     
     die('dasda');*/
     if($jsondecoderesponse->success == 1){
         
     
     
     
     
     
     /*error_reporting(E_ALL);
ini_set('display_errors', '1');*/
include("php-mailer.php");
include("autoload.php");
        $firstname=$_POST['first_name'];
        $phone=$_POST['phone_number'];
         $email=$_POST['email_id'];
         $subject=$_POST['suject'];
         /*$phone=$_POST['phone'];*/
         $message=$_POST['message'];
         
 $message ="Name: ".$firstname."<br>"."Phone No: ".$phone."<br>"."Email Id: ".$email."<br>"."Message: ".$message;
    
     $mail = new PHPMailer();

$mail->IsSMTP();                                      // set mailer to use SMTP
$mail->Host = "smtp.gmail.com";  // specify main and backup server

    // turn on SMTP authentication


$mail->SMTPAuth = true;
$mail->SMTPSecure = "tls";
$mail->Port = 587;

/*$mail->Username = "kasula.lalithkumar@gmail.com";
$mail->Password = "kasulalalith92";*/

$mail->Username = "emailaxia@gmail.com";
$mail->Password = "axia018#";
$mail->From = "emailaxia@gmail.com";
$mail->FromName = "Axiaproperties";               // name is optional
//$mail->AddReplyTo("emailaxiaproperties@gmail.com", "Information");

/*$mail->AddAddress("emailaxiaproperties@gmail.com", "Axia");*/
$mail->AddAddress("emailaxia@gmail.com", "Axia");
$mail->WordWrap = 50;   // optional name
                                // set email format to HTML

$mail->Subject = "From Axiaproperties";
$mail->Body = $message;

$mail->IsHTML(true);  
//die('test');
/*$mail->Body    = "This is the HTML message body in bold!";
$mail->AltBody = "This is the body in plain text for non-HTML mail clients";*/
  if($mail->Send())
{
   $mailsent = 1;
   //exit;
}else{
    $mailsent = 'failed';
   
   //echo "Mailer Error: " . $mail->ErrorInfo;
    
}
}//captcha
else{
    $mailsent = 3;
}
}
/*

    
    $to='kasula.lalithkumar@gmail.com';
    $subject='Form Submission';
    $message ="Name: ".$firstname."\n"."Phone No: ".$phone."\n"."Email Id: ".$email."\n"."Message: ".$message;
    $headers="From: ".$email;

    if(mail($to, $subject, $message, $headers)){
         $mailsent=1;$_POST['email']=''; }else{
             
             $mailsent = 'failed';
         }


    };*/
    include('header.php');
?>

<!-- Start Header -->
<div class="fables-header-career fables-after-overlay">
    <div class="container"> 
         <h2 class="fables-page-title fables-second-border-color">Career</h2>
    </div>
</div>  
<!-- /End Header -->
     
<!-- Start Breadcrumbs -->
<div class="fables-light-background-color">
    <div class="container"> 
        <nav aria-label="breadcrumb">
          <ol class="fables-breadcrumb breadcrumb px-0 py-3">
            <li class="breadcrumb-item"><a href="#" class="fables-second-text-color">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
          </ol>
        </nav> 
    </div>
</div>
<!-- /End Breadcrumbs -->
<!-- Start page content --> 
    <div class="container"> 
        <div class="row my-4 my-md-5 overflow-hidden">
             <div class="col-12 col-sm-6 col-md-4 text-center mb-4 mb-md-0 wow zoomIn" data-wow-duration="1.5s" data-wow-delay=".4s"> 
                    <span class="fables-iconmap-icon fa-2x fables-second-background-color text-white rounded-circle d-inline-block p-4"></span> 
                    <h2 class="font-16 semi-font fables-second-text-color my-3">Address Information</h2>
                    <p class="font-14 fables-forth-text-color">
                    EVR Shraddha Enclave, Street Number 2, Kakateeya Nagar, Habsiguda, Hyderabad, Telangana 500007, India</p>        
                   
             </div>
             <div class="col-12 col-sm-6 col-md-4 text-center mb-4 mb-md-0 wow zoomIn" data-wow-duration="1.5s" data-wow-delay=".8s"> 
                    <span class="fables-iconphone fa-2x  fables-second-background-color text-white rounded-circle d-inline-block p-4"></span>
                    <h2 class="font-16 semi-font fables-second-text-color my-3">Mail & Phone number</h2>
                    <p class="font-14 fables-forth-text-color">demo@gmail.com</p>
                    <p class="font-14 fables-forth-text-color"> 70327-12464</p> 
             </div>
             <div class="col-12 col-sm-6 col-md-4 text-center mb-4 mb-md-0 wow zoomIn" data-wow-duration="1.5s" data-wow-delay="1.2s"> 
                    <span class="fables-iconshare-icon fa-2x fables-second-background-color text-white rounded-circle d-inline-block p-4"></span>
                    <h2 class="font-16 semi-font fables-second-text-color my-3">Stay In Touch</h2>
                    <ul class="nav fables-contact-social-links"> 
                        <li><a href="#" target="_blank"><i class="fab fa-facebook-f fables-forth-text-color fa-fw"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-instagram fables-forth-text-color  fa-fw"></i></a></li> 
                        <li><a href="#" target="_blank"><i class="fab fa-twitter fables-forth-text-color    fa-fw"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-linkedin fables-forth-text-color   fa-fw"></i></a></li>
                    </ul> 
             </div>
        </div>  
    </div>
    <div class="fables-contact-caption fables-after-overlay px-2 px-sm-5 text-left text-sm-center py-5 bg-rules">
           <div class="container">
               <div class="row">
                   <div class="col-12 col-lg-8 offset-lg-2"> 
                       <h3 class="font-25 font-weight-bold white-color position-relative z-index">We are the best Properties Firm</h3>  
                       <p class="font-weight-light fables-third-text-color my-3 position-relative z-index"> Axia is a value driven professional organization that primarily focuses on property development and management.</p>
                       <!--<a href="#" class="btn fables-second-background-color fables-rounded-btn white-color fables-btn-rounded font-19 px-5 mt-2 position-relative z-index">know more</a>-->
                   </div>
                    
               </div>
               
           </div>
    </div> 
    <div class="container">     
        <div class="row my-4 my-md-5">
             <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2"> 
                <h3 class="font-35 font-weight-bold fables-second-text-color text-center mb-3">Contact Us</h3>
                <p class="fables-forth-text-color text-center">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal </p>
                 
             </div>   
         </div>    
        <div class="row overflow-hidden">
            <div class="col-12 wow slideInLeft" data-wow-duration="1.5s">
           <?php 
                                     //if($_POST['email']){
                                    if($mailsent==1){ echo '<div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
  <strong>Success!</strong> <p>Thank you for contacting. We will get back to you soon. </p>
</div>';}elseif($mailsent == 'failed'){echo '<div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
  <strong>Error!</strong> <p>Something Went Wrong.</p>
</div>';} elseif($mailsent == 3){echo '<div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
  <strong>Error!</strong> <p>Captcha Time-Out Please Try Again .</p>
</div>';}
//}?>
                <form class="fables-contact-form" method="post">
                  <div class="form-row">
                      <div class="form-group col-md-6">
                          <input type="text" name="first_name" class="form-control p-3 rounded-0"  placeholder="Name">   
                      </div>
                      <div class="form-group col-md-6">
                          <input type="text" name="phone_number" class="form-control p-3 rounded-0"  placeholder="Phone">  
                      </div> 
                  </div>
                  <div class="form-row">
                      <div class="form-group col-md-6">
                          <input type="email" name="email_id" class="form-control p-3 rounded-0" placeholder="Email"> 
                      </div>
                      <div class="form-group col-md-6">
                          <input type="text" name="suject"class="form-control p-3 rounded-0" placeholder="Subject"> 
                      </div> 
                  </div> 
                  <div class="form-row"> 
                       <div class="form-group col-md-12">
                           <textarea name="message" class="form-control p-3 rounded-0" placeholder="Message" rows="4"></textarea>
                      </div> 
                  </div>
                   <!-- <div class="g-recaptcha" data-sitekey="6LcXUrYUAAAAANO5dxwscpqVQNwJhtTOYMC6H7WN"></div>-->
                  <div class="form-row">
                    <div class="form-group col-md-12 text-center">
                        <button type="submit" class="btn fables-second-background-color fables-btn-rounded white-color px-7 font-20 py-2">Send</button>
                    </div>
                  </div>
                </form>
                
                   
            </div>
                
        </div> 
    </div> 
        <h3 class="fables-second-text-color font-35 font-weight-bold text-center mt-0 mb-5 my-md-5">Our Location</h3>      
        <div ><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15227.871801626321!2d78.52676990599046!3d17.413325653836846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb99683f166807%3A0x58cc2e4af754a254!2sEVR+Shraddha+Enclave%2C+Street+Number+2%2C+Kakateeya+Nagar%2C+Habsiguda%2C+Hyderabad%2C+Telangana+500007%2C+India!5e0!3m2!1sen!2sus!4v1554907273494!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0;width:100%" allowfullscreen></iframe></div> 
 
<!-- /End page content -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
     <script>
         $(document).ready(function () {
    $('.nav li').removeClass('active');
    $('.career').addClass('active');
    $('.career a').css("color", "#e75b1e");
});
</script>
<?php include('footer.php')?>