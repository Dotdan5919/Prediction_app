<?php



if(isset($_GET['login']))
{


$login=$_GET['login'];
if($login=="incorrect details")
{


echo"<script>alert('Incorrect details') </script>";

}






}


elseif(isset($_GET['reg'])){


$reg=$_GET['reg'];




echo"<script>alert('Succesfully registered') </script>";








}






?>


<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">

    <!--====== Title ======-->
    <title>Prediction Website| Login</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    
    <!--====== Tiny Slider CSS ======-->
    <link rel="stylesheet" href="assets/css/tiny-slider-1.css">

    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="assets/css/LineIcons-1.css">

    <!--====== Material Design Icons CSS ======-->
    <link rel="stylesheet" href="assets/css/materialdesignicons.min-1.css">

    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min-1.css">

    <!--====== gLightBox CSS ======-->
    <link rel="stylesheet" href="assets/css/glightbox.min-1.css">

    <!--====== nouiSlider CSS ======-->
    <link rel="stylesheet" href="assets/css/nouislider.min-1.css">

    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="assets/css/default-1.css">

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="assets/css/style-1.css">
    

</head>

<body>

    <!--====== Page Banner Part Start ======-->

   

    <!--====== Navbar White Page Banner Part Ends ======-->

    <!--====== Login Part Start ======-->

    <section class="login-registration-wrapper pt-50 pb-100">
        <div class="container">
            
          
            
            <div class="row">
            <!--   <div class="col-lg-6">
                   <div class="login-registration-style-1 mt-50">
                       <h1 class="heading-4 font-weight-500 title">Login to your account</h1>
                       <div class="login-registration-form pt-10">
                           <form action="#">
                               <div class="single-form form-default form-border">
                                    <label>Email Address</label>
                                    <div class="form-input">
                                        <input type="email" placeholder="user@email.com">
                                        <i class="mdi mdi-email"></i>
                                    </div>
                                </div>
                                <div class="single-form form-default form-border">
                                    <label>Choose Password</label>
                                    <a class="forget" href="#0">Forget Password?</a>
                                    <div class="form-input">
                                        <input id="password-3" type="password" placeholder="Password">
                                        <i class="mdi mdi-lock"></i>
                                        <span toggle="#password-3" class="mdi mdi-eye-outline toggle-password"></span>
                                    </div>
                                </div>
                                <div class="single-checkbox checkbox-style-3">
                                    <input type="checkbox" id="login-3">
                                    <label for="login-3"><span></span> </label>
                                    <p>Remember Me</p>
                                </div>
                                <div class="single-form">
                                    <button class="main-btn primary-btn">Sign in</button>
                                </div>
                           </form>
                       </div>
                       <p class="login">Don’t have an account? <a href="#0">Sign up</a></p>
                   </div>
                </div>

-->


                <div class="col-lg-6">
                   <div class="login-registration-style-1 login-registration-dark-style-1 mt-50">
                       <h1 class="heading-4 font-weight-500 title">Login to your account</h1>
                       <div class="login-registration-form pt-10" >
                           <form action="login_users.php" method="POST">
                               <div class="single-form form-white form-border">
                                    <label>Email Address</label>
                                    <div class="form-input">
                                        <input type="email" name="email" required 
                                        maxlength="100" placeholder="user@email.com">
                                        <i class="mdi mdi-email"></i>
                                    </div>
                                </div>
                                <div class="single-form form-white form-border">
                                    <label>Choose Password</label>
                                    <a class="forget" href="#0">Forget Password?</a>
                                    <div class="form-input">
                                        <input id="password-4" name="password" type="password" 
                                        required maxlength="15" placeholder="Password">
                                        <i class="mdi mdi-lock"></i>
                                        <span toggle="#password-4" 
                                        class="mdi mdi-eye-outline toggle-password"></span>
                                    </div>
                                </div>
                                <div class="single-form form-white form-border">
                                   
                                   
                                    <div class="form-input">
                                       
                                    <label for="package">Package type</label>
    
    <select name="package" required class="form-control single-form form-white form-border" 
     id="package">
      <option value="basic" >Basic</option>
      <option value="premium" >Premium</option>
     
    </select>
  

                                    </div>
                                </div>
                                <div class="single-checkbox checkbox-style-3">
                                    <input type="checkbox" id="login-4">
                                    <label for="login-4"><span></span> </label>
                                    <p>Remember Me</p>
                                </div>
                                <div class="single-form">
                                    <button name="login" type="submit"
                                     class="main-btn secondary-1-btn">Sign in</button>
                                </div>
                           </form>
                       </div>
                       <p class="login">Don’t have an account? <a href="index.php#pricing">Sign up</a></p>
                   </div>
                </div>

                <div class="col-lg-6"> 
                   <h2 class=" btn-sucess">Previous games </h2>
                   <?php
                   include('conn.php');
$sel="SELECT File_Name FROM previous_post LIMIT 1";
$run= mysqli_query($conn,$sel);


while($fetch=mysqli_fetch_array($run)){

$filename=$fetch['File_Name'];


}







?>
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" 
    data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators"
     data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" 
    data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" 
    data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" 
    data-bs-slide-to="4" aria-label="Slide 5"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" 
    data-bs-slide-to="5" aria-label="Slide 5"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" 
    data-bs-slide-to="6" aria-label="Slide 6"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" 
    data-bs-slide-to="7" aria-label="Slide 7"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" 
    data-bs-slide-to="7" aria-label="Slide 7"></button>
</div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="admin/uploads/<?php echo $filename ?>" style="
      	" class="d-block w-100" alt="...">
    </div>
    <?php 
                   include('conn.php');
                   $sel="SELECT File_Name FROM previous_post";
                   $run= mysqli_query($conn,$sel);
                   
                   while($fetch=mysqli_fetch_array($run)){
                   
                   $filename=$fetch['File_Name'];
                   echo"
                   <div class='carousel-item'>
                   <img src='admin/uploads/$filename'
                    class='d-block w-100' alt='...'>
                 </div>
                   
                   ";
                   
                   }
                   
                    
    ?>


<!--  <div class="carousel-item">
      <img src="admin/uploads/osun picture.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="admin/uploads/osun picture.jpg" class="d-block w-100" alt="...">
    </div>
-->

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" 
  data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>










            </div>
    


<?php

include('conn.php');
function  loop(){
$sel="SELECT * FROM previous_post";
$run=mysqli_query($conn,$sel);

while($fetch=mysqli_fetch_array($run)){

$x=0;
$filename= $fetch['File_Name'];
$name=$fetch['Name'];

return  ;
         

}


}






?>
 
 
  
        </div>
    </section>

    <!--====== Login Part Ends ======-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!--====== Bootstrap js ======-->
    <script src="assets/js/bootstrap.min-1.js"></script>

    <!--====== Tiny Slider js ======-->
    <script src="assets/js/tiny-slider-1.js"></script>

    <!--====== nouiSlider js ======-->
    <script src="assets/js/nouislider.min-1.js"></script>

    <!--====== count up js ======-->
    <script src="assets/js/count-up.min-1.js"></script>

    <!--====== gLightBox js ======-->
    <script src="assets/js/glightbox.min-1.js"></script>

    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>
    

</body>

</html>
