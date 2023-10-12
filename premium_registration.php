<?php


if(isset($_GET['signup'])){

    $signup=$_GET['signup'];
if($signup=="rejected"){


    echo"<script>alert('Email already used') </script>";
}

}








?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">

    <!--====== Title ======-->
    <title>Prediction Website | Premium Registration</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   
    <!--====== Tiny Slider CSS ======-->
    <link rel="stylesheet" href="assets/css/tiny-slider.css">

    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="assets/css/LineIcons.css">

    <!--====== Material Design Icons CSS ======-->
    <link rel="stylesheet" href="assets/css/materialdesignicons.min.css">

    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!--====== gLightBox CSS ======-->
    <link rel="stylesheet" href="assets/css/glightbox.min.css">

    <!--====== nouiSlider CSS ======-->
    <link rel="stylesheet" href="assets/css/nouislider.min.css">

    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="assets/css/default.css">

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

    <!--====== Page Banner Part Start ======-->

    <section class="page-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-content text-center">
                        <h1 class="sub-title">Prediction Website</h1>
                        <h3 class="page-title">Registration</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== Navbar White Page Banner Part Ends ======-->

    <!--====== Login Part Start ======-->

    <section class="login-registration-wrapper pt-50 pb-100">
        <div class="container">
         
            
            <div class="row">
       <!--         <div class="col-lg-6">
                   <div class="login-registration-style-1 registration mt-50">
                       <h1 class="heading-4 font-weight-500 title">Create an Account with</h1>
                       <div class="login-registration-form pt-10">
                           <form action="reg.php" method="POST">
                               <div class="single-form form-default form-border">
                                    <label>Full Name</label>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-input">
                                                <input name="first_name"  required  type="text" 
                                                placeholder="First Name" maxlength="100">
                                                <i class="mdi mdi-account"></i>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-input form">
                                                <input name="last_name" type="text"
                                                maxlength="100" required placeholder="Last Name">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               <div class="single-form form-default form-border">
                                    <label>Email Address</label>
                                    <div class="form-input">
                                        <input name="email" type="email"
                                        maxlength="100" required placeholder="user@email.com">
                                        <i class="mdi mdi-email"></i>
                                    </div>
                                </div>
                                <div class="single-form form-default form-border">
                                    <label>Choose Password</label>
                                    <div class="form-input">
                                        <input name="password" required id="password-3" 
                                        maxlength="12" minlength="8" title="Your Password must 
                                        contain a number and must not be less than 8" type="password" placeholder="Password">
                                        <i class="mdi mdi-lock"></i>
                                        <span toggle="#password-3" class="mdi mdi-eye-outline toggle-password"></span>
                                    </div>
                                </div>
                                <div class="single-form form-default form-border">
                                   
                                    <div class="form-input">
                                        <input name="password2" required id="password-3" type="password"
                                        maxlength="12" minlength="8" title="Your Password must 
                                        contain a number and must not be less than 8" placeholder="Re-Enter Password">
                                        <i class="mdi mdi-lock"></i>
                                        <span toggle="#password-3" class="mdi mdi-eye-outline toggle-password"></span>
                                    </div>
                                </div>

                                <div class="single-checkbox checkbox-style-3">
                                    <input type="checkbox" required id="login-5">
                                    <label for="login-5"><span></span> </label>
                                    <p>I accept the Terrms of Use.</p>
                                </div>
                                <div class="single-form">
                                    <button name="signup_premium" type="submit" class="main-btn primary-btn">Signup</button>
                                </div>
                           </form>
                       </div>
                       <p class="login">Have an account? <a href="#0">Log in</a></p>
                   </div>
                </div>

-->

                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                   <div class="login-registration-style-1 login-registration-dark-style-1 
                   registration mt-50">
                       <h1 class="heading-4 font-weight-500 title">Create an Account with</h1>
                       <div class="login-registration-form pt-10">
                           <form action="reg.php" method="POST"  onsubmit="return validateForm()">
                               <div class="single-form form-white form-border">
                                    <label>Full Name</label>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-input">
                                                <input name="first_name"
                                                maxlength="100" required type="text" 
                                                placeholder="First Name">
                                                <i class="mdi mdi-account"></i>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-input form">
                                                <input name="last_name" type="text"
                                                maxlength="100"  required placeholder="Last Name">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               <div class="single-form form-white form-border">
                                    <label>Email Address</label>
                                    <div class="form-input">
                                        <input name="email" required type="email"maxlength="100"  
                                        placeholder="user@email.com">
                                        <i class="mdi mdi-email"></i>
                                    </div>
                                </div>
                                <div class="single-form form-white form-border">
                                    <label>Choose Password</label>
                                    <div class="form-input">
                                        <input  name="password" required maxlength="12" 
                                        minlength="8" title="Your Password must 
                                        contain a number and must not be less than 8"
                                        id="password-5" type="password" placeholder="Password">
                                        <i class="mdi mdi-lock"></i>
                                        <span toggle="#password-4" class="mdi mdi-eye-outline toggle-password"></span>
                                    </div>
                                </div>
                                <div class="single-form form-white form-border">
                                    
                                    <div class="form-input">
                                        <input  name="password2" required id="password-4" 
                                        maxlength="12" minlength="8" title="Your Password must 
                                        contain a number and must not be less than 8"

                                    
                                        type="password" placeholder="Re-Enter Password">
                                        <i class="mdi mdi-lock"></i>
                                        <span toggle="#password-4" 
                                        class="mdi mdi-eye-outline toggle-password"></span>
                                    </div>
                                </div>
                                <div class="single-checkbox checkbox-style-3">
                                    <input type="checkbox" required id="login-6">
                                    <label for="login-6"><span></span> </label>
                                    <p>I accept the Terrms of Use.</p>
                                </div>
                                <div class="single-form">
                                    <button name="signup_premium" type="submit" class="main-btn secondary-1-btn">Signup</button>
                                </div>
                                <script>  function validateForm(){

var pwd1=document.getElementById('password-4').value;
var pwd2=document.getElementById('password-5').value;
if(pwd1==pwd2){


   return true;
}
else
{

    alert("inconsistent password");
       return false;


}

}   


</script>
                           </form>
                       </div>
                       <p class="login">Have an account? <a href="#0">Log in</a></p>
                   </div>
                </div>

               
                <div class="col-lg-3"></div>
            </div>
            
          
        </div>
    </section>

    <!--====== Login Part Ends ======-->

    <!--====== Bootstrap js ======-->
    <script src="assets/js/bootstrap.min.js"></script>

    <!--====== Tiny Slider js ======-->
    <script src="assets/js/tiny-slider.js"></script>

    <!--====== nouiSlider js ======-->
    <script src="assets/js/nouislider.min.js"></script>

	<!--====== count up js ======-->
	<script src="assets/js/count-up.min.js"></script>

    <!--====== gLightBox js ======-->
    <script src="assets/js/glightbox.min.js"></script>

    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>

</body>

</html>
