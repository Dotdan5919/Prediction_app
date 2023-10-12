<?php
session_start();
include('conn.php');



$sel= "SELECT * FROM activating_table ";
$run=mysqli_query($conn,$sel);
if(empty($run)){
  while($fetch=mysqli_fetch_array($run))
  {
    $email=$fetch['email'];
    $package=$fetch['package'];
  /*  $ac_date=$fetch['activating_Date'];
  $e_date=$fetch['expiry_Date'];
  $old=strtotime('$ac_date');
  $new=strtotime('$e_date');
  */
  $ac_date=$fetch['activating_Date'];
  $old=strtotime('$ac_date');
  $to_date=time();
  //$from_date= strtotime("2022-01-31");
  $day_diff=$to_date - $old;
  $difference=floor($day_diff/(60*60*24));
  
  if($difference>7){
   $del=" DELETE FROM activating_table WHERE email='$email'";
  $run=mysqli_query($conn,$del);
  
  if($package=='basic'){
  
  $upd= "UPDATE client_basic SET active='0' WHERE email='$email' ";
  $run=mysqli_query($conn,$upd);
    
  
  }
  else if($package=='premium'
    
  )
  {
    $upd= "UPDATE client_premium SET active='0' WHERE email='$email' ";
    $run=mysqli_query($conn,$upd);
  
  
  }
  
  
  
  }
  
  
  }
  
  

}








if((isset($_SESSION['email_basic']))  )
{


if(isset($_GET['welcome']))
{
  $welcome=$_GET['welcome'];

  if($welcome=="inactive")
  {

echo"<script>  </script>";

  }
  else{
   $fullname= $_SESSION['full_name'];
    $email_basic=$_SESSION['email_basic'];
    $active=$_SESSION['active'];
    echo"<script> alert('welcome ')</script>";

    $date=Date("M d, Y");

    
    $sel="SELECT * FROM activating_table WHERE email='$email_basic' ";
    //echo"I dey here";
    $run=mysqli_query($conn,$sel);
    $fetch=mysqli_fetch_array($run);
    
    $expiry_date=$fetch['expiry_Date'];
    
    
    if($date==$expiry_date)
    {
    
      $sel="UPDATE client_basic SET active='0' WHERE email='$email_basic'";
      $run=mysqli_query($conn,$sel);
      //echo"I dey here 2";
      $_SESSION['active']= "0";


    }
    else{}






  }

}
else{}


}


else if(isset($_SESSION['Admin']))
{


  $fullname= "XXXX";
    $email_basic="XXXX";
    $_SESSION['active']=1;
 



}

else{

  header("location:index.php");
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
<style>
#overlay {
  position: fixed;
  display: none;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0,0,0,0.5);
  z-index: 2;
  cursor: pointer;
}

#text{
  position: absolute;
  top: 50%;
  left: 50%;
  font-size: 50px;
  color: white;
  transform: translate(-50%,-50%);
  -ms-transform: translate(-50%,-50%);
}
</style>
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
<!--<li class="nav-item">
<a class="page-scroll" href="#pricing">Pricing</a>
</li> -->
<li class="nav-item">
<a class="page-scroll" href="#contact">Contact</a>
</li>
<li class="nav-item">
  <a class="page-scroll" href="logout.php">Logout</a>
  </li>
<!--  <li class="nav-item">
    <a class="page-scroll" href="registration.html">Sign up</a>
    </li> -->

  <!--  <li class="nav-item">
      <a class="page-scroll" href="admin/index.html"> admin</a>
      </li> -->
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
<a href="#games" class="btn primary-btn"> Get started </a>
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


<section class="row">
<div class="col-lg-3"></div>
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


<div class="col-lg-3"></div>


</section>





<section class="slider-seven">

<div class="section-title-two">
<div class="container">
<div class="row">
<div class="col-12">
<div class="content">

<div id="overlay" onclick="">
  <div id="text" href="logout.php" >  Inactive Account please Subscribe

  <form action="logout.php" method="POST">
  <button  class="btn primary-btn"  href="logout.php"  >Logout</button>
  </form>
  </div>

  


</div>
<!--
<div style="padding:20px">
  <h2>Overlay with Text</h2>
  <button onclick="on()">Turn on overlay effect</button>
</div>
-->
<script>
function on() {
  document.getElementById("overlay").style.display = "block";
}

function off() {
  document.getElementById("overlay").style.display = "none";
}






</script>

<?php 

$active=$_SESSION['active'];
if($active==0){echo"<script>  on(); </script>"; }

    else{

      echo"<script>  off(); </script>";

    }
?>
   





<span>Basic Games</span>
<h2 id="games" class="fw-bold">Play now </h2>
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


$sel="SELECT * FROM basic_post ";
$run= mysqli_query($conn,$sel);
$fetch_client_inactive_basic=$run;

while($row=mysqli_fetch_array($run))
{

if($active==1)
{

$date=$row['_Date'];
$name=$row['Name'];
$filename=$row['File_Name'];

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

else{

}

}




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

<?php include('close_conn.php');