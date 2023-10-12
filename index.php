<?php
session_start();

if(isset($_SESSION['email_premium']) )

{    

header("location:premium.php");



}
else if( isset($_SESSION['email_basic']) )

{

  header("location:basic.php");


}


else{




}



?>




<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="shortcut icon" type="image/x-icon" href="local/images/favicon.svg">

<title>Prediction Website</title>

<link rel="shortcut icon" href="../local/images/favicon.svg" type="image/svg">

<link rel="stylesheet" href="local/css/bootstrap.min.css">

<link rel="stylesheet" href="local/css/lineicons.css">

<link rel="stylesheet" href="local/css/tiny-slider.css">

<link rel="stylesheet" href="local/css/glightbox.min.css">
<link rel="stylesheet" href="style.css">
</head>
<body>

<section class="navbar-area navbar-five">
<div class="container">
<div class="row">
<div class="col-lg-12">
<nav class="navbar navbar-expand-lg">
<a class="navbar-brand" href="index.htm">
<h3 style="color: rgb(255, 255, 255);">PRD</h3>
</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarFive" aria-controls="navbarFive" aria-expanded="false" aria-label="Toggle navigation">
<span class="toggler-icon"></span>
<span class="toggler-icon"></span>
<span class="toggler-icon"></span>
</button>
<div class="collapse navbar-collapse sub-menu-bar" id="navbarFive">
<ul class="navbar-nav ms-auto">
<li class="nav-item">
<a class="page-scroll active" href="#hero">Home</a>
</li>
<li class="nav-item">
<a class="page-scroll" href="#about">About</a>
</li>
<li class="nav-item">
<a class="page-scroll" href="#pricing">Pricing</a>
</li>
<li class="nav-item">
<a class="page-scroll" href="#contact">Contact</a>
</li>
<li class="nav-item">
  <a class="page-scroll" href="login.php">Login</a>
  </li>
  <li class="nav-item">
    <a class="page-scroll" href="#pricing">Sign up</a>
    </li>

    
</ul>
</div>
</nav>

</div>
</div>

</div>

</section>


<section id="hero" class="header-area header-eleven">
<img class="shape" src="local/images/header/img-wave.png" alt="#">

<div class="header-inner">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-6 co-12 " style="margin-top: 30px;">
<div class="home-slider">
<div class="header-text">
<h1>Prediction lorem ipsum is the best</h1>
<p>
Lorem Ipsum is simply dummy text of the printing and
typesetting industry. Lorem Ipsum has been the industry's
standard dummy text ever since.
</p>
<div class="button light-rounded-buttons">
<a href="registration.php" class="btn primary-btn"> Signup Now </a>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-12">
<div class="mobile-screen">
<img src="local/images/hero2.png" alt="#">
</div>
</div>
</div>
</div>
</div>

</section>




<section id="features" class="features-area features-twelve">

<div class="section-title-two">
<div class="container">
<div class="row">
<div class="col-12">
<div class="content">
<span>About</span>
<h2 class="fw-bold">lorem ipsum is the best way to type</h2>
<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do
eiusmod tempor incididunt ut labore aliqua.
</p>
</div>
</div>
</div>
</div>

</div>

<div class="container">
<div class="row"  id="about">
<div class="col-lg-4 col-md-6 col-12">

<div class="features-style-twelve">
<div class="feature-icon">
  <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-signpost" viewBox="0 0 16 16">
    <path d="M7 1.414V4H2a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h5v6h2v-6h3.532a1 1 0 0 0 .768-.36l1.933-2.32a.5.5 0 0 0 0-.64L13.3 4.36a1 1 0 0 0-.768-.36H9V1.414a1 1 0 0 0-2 0zM12.532 5l1.666 2-1.666 2H2V5h10.532z"/>
  </svg>

</div>
<h4>Sign Up</h4>
<p>
Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
labore et dolor
</p>
</div>

</div>

<div class="col-lg-4 col-md-6 col-12">

<div class="features-style-twelve">
<div class="feature-icon"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-door-open" viewBox="0 0 16 16">
  <path d="M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
  <path d="M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117zM11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5zM4 1.934V15h6V1.077l-6 .857z"/>
</svg>
</div>
<h4>Login</h4>
<p>
Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
labore et dolor
</p>
</div>

</div>

<div class="col-lg-4 col-md-6 col-12">

<div class="features-style-twelve">
<div class="feature-icon">
<i class="lni lni-layers"></i>
</div>
<h4>Get Code</h4>
<p>
Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
labore et dolor
</p>
</div>

</div>


</div>
</div>
</section>




<section id="pricing" class="pricing-area pricing-thirteen">

<div class="section-title-two">
<div class="container">
<div class="row">
<div class="col-12">
<div class="content">
<span>Our Plan</span>
<h2 class="fw-bold">Our Simple Plan</h2>
<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do
eiusmod tempor incididunt ut labore aliqua.
</p>
</div>
</div>
</div>
</div>

</div>

<div class="container">
<div class="row g-0 justify-content-center">




<div class="col-lg-4 col-md-7 col-sm-9">
<div class="pricing-style-thirteen text-center pricing-active pricing-color-2">
<div class="pricing-price">
<h3 class="price">9K<span>/Week</span></h3>
</div>
<div class="pricing-title">
<span class="badge">Special</span>
<h4 class="title">Standard</h4>
</div>
<div class="pricing-list">
<ul>
<li>Basic Access</li>
<li>5 - 8 odds daily
</li>
<li>One game ticket daily</li>
<li>Average 4 winnings weekly</li> 

</ul>
</div>
<div class="pricing-btn rounded-buttons">
<a class="btn primary-btn rounded-full" href="registration.php">
Sign Up Now !
</a>
</div>
</div>

</div>


<div class="col-lg-4 col-md-7 col-sm-9">
<div class="pricing-style-thirteen text-center pricing-color-3">
<div class="pricing-price">
<h3 class="price">20k<span>/Week</span></h3>
</div>
<div class="pricing-title">
<span class="badge">New</span>
<h4 class="title">Premium</h4>
</div>
<div class="pricing-list">
<ul>
<li>Full Access</li>
<li>10+ odds daily
</li>
<li>2 game tickets daily</li>
<li>Average 4 winnings weekly</li>

</ul>
</div>
<div class="pricing-btn rounded-buttons">
<a class="btn primary-btn-outline rounded-full" href="premium_registration.php">
Sign Up Now !
</a>
</div>
</div>

</div>


</div>

</div>

</section>


<section class="slider-seven">

<div class="section-title-two">
<div class="container">
<div class="row">
<div class="col-12">
<div class="content">
<span>Screenshorts</span>
<h2 class="fw-bold">Previous games won Screenshorts</h2>
<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do
eiusmod tempor incididunt ut labore aliqua.
</p>
</div>
</div>
</div>
</div>

</div>

<div class="container">
<div class="slider-items-three-wrapper">
<div class="row slider-items-three-active">


<?php  

include('conn.php');

$sel="SELECT * FROM home_games ";
$run= mysqli_query($conn,$sel);
$fetch_client_inactive_basic=$run;

while($row=mysqli_fetch_array($run))
{



$date=$row['_Date'];
$name=$row['Name'];
$filename=$row['file_name'];

echo"  <div class='col-lg-4'>
  <div class='single-items-three'>
  <div class='items-image'>
  <img src='  admin/uploads/$filename' alt='Image'>

  <div class='text'>
  <h1 class='text-link' style=' text-transform: capitalize; '>$name</h1>
  <p class='day'>$date</p>
  <p> </p>
</div>


  </div>
  </div>
  
  </div>
  ";





}

include_once('close_conn.php');

?>


<!--


<div class="col-lg-4">
<div class="single-items-three">
<div class="items-image">
<img src="local/images/screenshorts/image1.png" alt="Image">
</div>
</div>

</div>
<div class="col-lg-4">
<div class="single-items-three">
<div class="items-image">
<img src="local/images/screenshorts/image2.png" alt="Image">
</div>
</div>

</div>
<div class="col-lg-4">
<div class="single-items-three">
<div class="items-image">
<img src="local/images/screenshorts/image3.png" alt="Image">
</div>
</div>

</div>
<div class="col-lg-4">
<div class="single-items-three">
<div class="items-image">
<img src="local/images/screenshorts/image4.png" alt="Image">
</div>
</div>

</div>
<div class="col-lg-4">
<div class="single-items-three">
<div class="items-image">
<img src="local/images/screenshorts/image5.png" alt="Image">
</div>
</div>

</div>
<div class="col-lg-4">
<div class="single-items-three">
<div class="items-image">
<img src="local/images/screenshorts/image6.png" alt="Image">
</div>
</div>

</div>
<div class="col-lg-4">
<div class="single-items-three">
<div class="items-image">
<img src="local/images/screenshorts/image7.png" alt="Image">
</div>
</div>

</div>
<div class="col-lg-4">
<div class="single-items-three">
<div class="items-image">
<img src="local/images/screenshorts/image3.png" alt="Image">
</div>
</div>

</div>
<div class="col-lg-4">
<div class="single-items-three">
<div class="items-image">
<img src="local/images/screenshorts/image4.png" alt="Image">
</div>
</div>


-->
</div>
</div>

</div>
</div>

</section>


<section class="call-action-area call-action-three">
<div class="container">
<div class="row align-items-center">
<div class="col-xl-5 col-lg-6">
<div class="call-action-content">
<h2 class="action-title">
sign up and start using our games to win more.
</h2>
<p class="text">There are many variations of passages of Lorem Ipsum available, but the majority have
alteration. </p>
<div class="action-btn rounded-buttons">
<a href="registration.html" class="btn primary-btn rounded-full">
Signup Now
</a>
</div>
</div>

</div>
<div class="col-xl-5 col-lg-6 offset-xl-2">
<div class="call-action-content">
<img src="local/images/call-action/cta-03.svg" alt="call to action">
</div>

</div>
</div>

</div>

</section>






<section id="contact" class="contact-us">

<div class="section-title-two">
<div class="container">
<div class="row">
<div class="col-12">
<div class="content">
<span>Contact Us</span>
<h2 class="fw-bold">Need Any Help?</h2>
<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do
eiusmod tempor incididunt ut labore aliqua.
</p>
</div>
</div>
</div>
</div>

</div>

<div class="container">
<div class="contact-head">
<div class="inner-content">
<div class="row">
<div class="col-lg-8 col-12">
<div class="form-main">
<form class="form" method="post" action="#">
<div class="row">
<div class="col-lg-6 col-md-6 col-12">
<div class="form-group">
<input name="name" type="text" placeholder="Your Name" required="required">
</div>
</div>
<div class="col-lg-6 col-md-6 col-12">
<div class="form-group">
<input name="subject" type="text" placeholder="Your Subject" required="required">
</div>
</div>
<div class="col-lg-6 col-md-6 col-12">
<div class="form-group">
<input name="email" type="email" placeholder="Your Email" required="required">
</div>
</div>
<div class="col-lg-6 col-md-6 col-12">
<div class="form-group">
<input name="phone" type="text" placeholder="Your Phone" required="required">
</div>
</div>
<div class="col-12">
<div class="form-group message">
<textarea name="message" placeholder="Your Message"></textarea>
</div>
</div>
<div class="col-12">
<div class="form-group light-rounded-buttons">
<button type="submit" class="btn primary-btn">
Send Message
</button>
</div>
</div>
</div>
</form>
</div>
</div>
<div class="col-lg-4 col-12">
<div class="contact-info">
<div class="single-head">
<div class="single-info">
<i class="lni lni-map-marker"></i>
<ul>
<li><span>Location</span></li>
<li>No 12 okoloko road, sapele <br>Nigeria</li>
</ul>
</div>
<div class="single-info">
<i class="lni lni-phone"></i>
<ul>
<li><span>Call Us</span></li>
<li><a href="javascript:void(0)">08030985678</a></li>
<li><a href="javascript:void(0)">08030985678</a></li>
</ul>
</div>
<div class="single-info">
<i class="lni lni-envelope"></i>
<ul>
<li><span>Mail Us</span></li>
<li>
<a href="javascript:void(0)"> <span class="__cf_email__" data-cfemail="81f2f4f1f1eef3f5c1f8eef4f3ece0e8edafe2eeec">[email&#160;protected]</span> </a>
</li>
<li>
<a href="javascript:void(0)"> <span class="__cf_email__" data-cfemail="5734383923363423172e3822253a363e3b7934383a">[email&#160;protected]</span> </a>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<footer class="footer-area footer-six">
<div class="footer-widget">
<div class="container">

<div class="row">
<div class="col-xl-4 col-lg-4 col-sm-12">
<div class="f-about">
<div class="footer-logo">
<a href="index.htm">
<img src="local/images/white-logo.svg" alt="Logo">
</a>
</div>
<p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
<div class="footer-support">
<span class="number"><i class="lni lni-phone-set"></i> 08030985678</span>
<span class="mail"><i class="lni lni-envelope"></i> <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="82f1f7f2f2edf0f6c2f7ebe6e7e1e9ace1edef">[email&#160;protected]</a></span>
</div>
</div>
</div>
<div class="col-xl-2 col-lg-2 col-sm-4">
<div class="footer-link">
<h6 class="footer-title">Company</h6>
<ul>
<li><a href="javascript:void(0)">About</a></li>
<li><a href="javascript:void(0)">Prices</a></li>
<li><a href="javascript:void(0)">Contact</a></li>
</ul>
</div>

</div>
<div class="col-xl-2 col-lg-3 col-sm-4">
<div class="footer-link">
<h6 class="footer-title">Services</h6>
<ul>
<li><a href="javascript:void(0)">Products</a></li>
<li><a href="javascript:void(0)">Business</a></li>
<li><a href="javascript:void(0)">Developer</a></li>
<li><a href="javascript:void(0)">Insights</a></li>
</ul>
</div>

</div>
<div class="col-xl-2 col-lg-3 col-sm-4">
<div class="footer-link">
<h6 class="footer-title">Help & Suuport</h6>
<ul>
<li><a href="javascript:void(0)">Support Center</a></li>
<li><a href="javascript:void(0)">FAQ</a></li>
<li><a href="javascript:void(0)">Terms & Conditions</a></li>
<li><a href="javascript:void(0)">Privacy Policy</a></li>
 </ul>
</div>

</div>

</div>

</div>

</div>

<div class="footer-copyright">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="copyright text-center d-md-flex justify-content-between align-items-center">
<p class="text">Copyright © 2021 weware. All Rights Reserved</p>
<ul class="social">
<li>
<a href="javascript:void(0)"> <i class="lni lni-facebook-filled"></i> </a>
</li>
<li>
<a href="javascript:void(0)"> <i class="lni lni-twitter-original"></i> </a>
</li>
<li>
<a href="javascript:void(0)"> <i class="lni lni-instagram-filled"></i> </a>
</li>
<li>
<a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a>
</li>
</ul>
</div>

</div>
</div>

</div>

</div>

</footer>


<a href="#" class="scroll-top btn-hover">
<i class="lni lni-chevron-up"></i>
</a>

<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="local/js/bootstrap.bundle.min.js" type="50bd6c826429133e1482157a-text/javascript"></script>
<script src="local/js/glightbox.min.js" type="50bd6c826429133e1482157a-text/javascript"></script>
<script src="local/js/tiny-slider.js" type="50bd6c826429133e1482157a-text/javascript"></script>
<script src="local/js/main.js" type="50bd6c826429133e1482157a-text/javascript"></script>
<script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="50bd6c826429133e1482157a-|49" defer=""></script></body>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous">
</script>

</html>