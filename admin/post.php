<?php

session_start();
include("conn.php");

if(isset($_SESSION['Admin']))

{





}
else{


header("location:login.php");

}














?>





<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Inspire - Admin and Dashboard Template</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="assets/fonts/line-icons.css">
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

  </head>

  <body>
    <div class="app header-default side-nav-dark">
      <div class="layout">
        <!-- Header START -->
        <div class="header navbar">
          <div class="header-container">
            <div class="nav-logo">
              <a href="index.html">
                <b><img src="assets/img/logo.png" alt=""></b>
                <span class="logo">
                  <img src="assets/img/logo-text.png" alt="">
                </span>
              </a>
            </div>
            <ul class="nav-left">
              <li>
                <a class="sidenav-fold-toggler" href="javascript:void(0);">
                  <i class="lni-menu"></i>
                </a>
                <a class="sidenav-expand-toggler" href="javascript:void(0);">
                  <i class="lni-menu"></i>
                </a>
              </li>
            </ul>
            <ul class="nav-right">
              <li class="search-box">
                <input class="form-control" type="text" placeholder="Type to search...">
                <i class="lni-search"></i>
              </li>
              <li class="massages dropdown dropdown-animated scale-left">
              	<span class="counter">3</span>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="lni-envelope"></i>
                </a>
                <ul class="dropdown-menu dropdown-lg">
                  <li>
                    <div class="dropdown-item align-self-center">
                        <h5><span class="badge badge-primary float-right">745</span>Messages</h5>
                    </div>
                  </li>
                  <li>
                    <ul class="list-media">
                      <li class="list-item">
                        <a href="#" class="media-hover">
                          <div class="media-img">
                            <img src="assets/img/users/avatar-1.jpg" alt="">
                          </div>
                          <div class="info">
                            <span class="title">
                                Amanda Robertson
                            </span>
                            <span class="sub-title">Dummy text of the printing and typesetting industry.</span>
                          </div>
                        </a>
                      </li>
                      <li class="list-item">
                        <a href="#" class="media-hover">
                          <div class="media-img">
                            <img src="assets/img/users/avatar-2.jpg" alt="">
                          </div>
                          <div class="info">
                            <span class="title">
                              Danny Donovan
                            </span>
                            <span class="sub-title">It is a long established fact that a reader will</span>
                          </div>
                        </a>
                      </li>
                      <li class="list-item">
                        <a href="#" class="media-hover">
                          <div class="media-img">
                            <img src="assets/img/users/avatar-3.jpg" alt="">
                          </div>
                          <div class="info">
                            <span class="title">
                              Frank Handrics
                            </span>
                            <span class="sub-title">You have 87 unread messages</span>
                          </div>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="check-all text-center">
                    <span>
                      <a href="#" class="text-gray">View All</a>
                    </span>
                  </li>
                </ul>
              </li>
              <li class="notifications dropdown dropdown-animated scale-left">
                <span class="counter">2</span>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="lni-alarm"></i>
                </a>
                <ul class="dropdown-menu dropdown-lg">
                  <li>
                    <h5 class="n-title text-center">
                      <i class="lni-alarm"></i>
                      <span>Notifications</span>
                    </h5>
                  </li>
                  <li>
                    <ul class="list-media">
                      <li class="list-item">
                        <a href="#" class="media-hover">
                          <div class="media-img">
                            <div class="icon-avatar bg-primary">
                              <i class="lni-envelope"></i>
                            </div>
                          </div>
                          <div class="info">
                            <span class="title">
                              5 new messages
                            </span>
                            <span class="sub-title">4 min ago</span>
                          </div>
                        </a>
                      </li>
                      <li class="list-item">
                        <a href="#" class="media-hover">
                          <div class="media-img">
                            <div class="icon-avatar bg-success">
                              <i class="lni-comments-alt"></i>
                            </div>
                          </div>
                          <div class="info">
                            <span class="title">
                                4 new comments
                            </span>
                            <span class="sub-title">12 min ago</span>
                          </div>
                        </a>
                      </li>
                      <li class="list-item">
                        <a href="#" class="media-hover">
                          <div class="media-img">
                            <div class="icon-avatar bg-info">
                              <i class="lni-users"></i>
                            </div>
                          </div>
                          <div class="info">
                            <span class="title">
                              3 Friend Requests
                            </span>
                            <span class="sub-title">a day ago</span>
                          </div>
                        </a>
                      </li>
                      <li class="list-item">
                        <a href="#" class="media-hover">
                          <div class="media-img">
                            <div class="icon-avatar bg-purple">
                              <i class="lni-comments-alt"></i>
                            </div>
                          </div>
                          <div class="info">
                            <span class="title">
                              2 new messages
                            </span>
                            <span class="sub-title">12 min ago</span>
                          </div>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="check-all text-center">
                    <span>
                      <a href="#" class="text-gray">Check all notifications</a>
                    </span>
                  </li>
                </ul>
              </li>
              <li class="user-profile dropdown dropdown-animated scale-left">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img class="profile-img img-fluid" src="assets/img/avatar/avatar.jpg" alt=""> 
                </a>
                <ul class="dropdown-menu dropdown-md">
                  <li>
                    <ul class="list-media">
                      <li class="list-item avatar-info">
                        <div class="media-img">
                          <img src="assets/img/avatar/avatar.jpg" alt="">
                        </div>
                        <div class="info">
                          <span class="title text-semibold">Tomas Murray</span>
                          <span class="sub-title">UI/UX Desinger</span>
                        </div>
                      </li>
                    </ul>
                  </li>
                  <li role="separator" class="divider"></li>
                  <li>
                    <a href="">
                      <i class="lni-cog"></i>
                      <span>Setting</span>
                    </a>
                  </li>
                  <li>
                    <a href="">
                      <i class="lni-user"></i>
                      <span>Profile</span>
                    </a>
                  </li>
                  <li>
                    <a href="">
                      <i class="lni-envelope"></i>
                      <span>Inbox</span>
                      <span class="badge badge-pill badge-primary pull-right">2</span>
                    </a>
                  </li>
                  <li>
                    <a href="">
                      <i class="lni-lock"></i>
                      <span>Logout</span>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
        <!-- Header END -->

       <!-- Side Nav START -->
       <div class="side-nav expand-lg">
        <div class="side-nav-inner">
          <ul class="side-nav-menu">
            <li class="side-nav-header">
              <span>Navigation</span>
            </li>
            <li class="nav-item dropdown open">
              <a href="#" class="dropdown-toggle">
                <span class="icon-holder">
                  <i class="lni-dashboard"></i>
                </span>
                <span class="title">Dashboard</span>
                <span class="arrow">
                  <i class="lni-chevron-right"></i>
                </span>
              </a>
              <ul class="dropdown-menu sub-down">
                <li class="active">
                  <a href="index.html">Dashboard </a>
                </li>
               
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="dropdown-toggle" href="#">
                  <span class="icon-holder">
                    <i class="lni-cloud"></i>
                  </span>
                  <span class="title">Verify</span>
                  <span class="arrow">
                    <i class="lni-chevron-right"></i>
                  </span>
                </a>
              <ul class="dropdown-menu sub-down">
                <li>
                  <a href="email.html">User</a>
                </li>
                <li>
                  <a href="email.html">Admin</a>
                </li>
               
              
                
              </ul>
            </li>


            
            
            
            <li class="nav-item dropdown">
              <a class="dropdown-toggle" href="#">
                <span class="icon-holder">
                  <i class="lni-files"></i>
                </span>
                <span class="title">Forms</span>
                <span class="arrow">
                  <i class="lni-chevron-right"></i>
                </span>
              </a>
              <ul class="dropdown-menu sub-down">
                <li>
                  <a href="form-elements.html">Form Elements</a>
                </li>
               
              </ul>
            </li>


            <li class="nav-item dropdown">
              <a class="dropdown-toggle" href="#">
                <span class="icon-holder">
                  <i class="lni-control-panel"></i>
                </span>
                <span class="title">Logout</span>
                <span class="arrow">
                  <i class="lni-chevron-right"></i>
                </span>
              </a>
              <ul class="dropdown-menu sub-down">
                <li>
                  <a href="logout.php">logout</a>
                </li>
                
              </ul>
            </li>
           
          </ul>
        </div>
      </div>
      <!-- Side Nav END -->

        <!-- Page Container START -->
        <div class="page-container">
          <!-- Content Wrapper START -->
          <div class="main-content">
            <div class="container-fluid">
              <!-- Breadcrumb Start -->
              <div class="breadcrumb-wrapper row">
           

              <div class="col-lg-6 col-md-6 col-xs-12">
                  <div class="coming-event">
                    <div class="card">
                      <div class="card-header">
                        <h4 class="card-title">Basic Games</h4>
                        <div class="card-toolbar">
                          <ul>
                            <li>
                              <a class="text-gray" href="#">
                                <i class="lni-more-alt"></i>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <ul class="event-item">
                        
       <?php   
$sel="SELECT * FROM basic_post  ";
$run= mysqli_query($conn,$sel);
$fetch_post=$run;  

      while($row=mysqli_fetch_array($fetch_post))
      {
          $filename=$row['File_Name'];
          $name=$row['Name'];
          $date=$row['_Date'];
        echo"  <li class='' style='margin-left:20px;'>   <a href=''>
        <div class='media row'>
          <div class='img-thumb '>
            <img class='img-fluid rounded mx-auto d-block' src='uploads/$filename' alt=''>
          </div>
          <div class='text'>
            <h1 class='text-link' style=' text-transform: capitalize; '>$name</h1>
            <p class='day'>$date</p>
            <form action='delete.php' method='POST'  >
            <input value='$filename' name='filename' style='display:none' type='name' />
            
            <input value='basic' name='package' type='name' style='display:none' />

            <button type='submit' onclick='return myFunction()' name='delete' 
              class='btn btn-default'
             aria-label='Left Align'>
  <span class='glyphicon glyphicon-trash' 
  onclick='document.getElementById('id01').style.display='block'' aria-hidden='true'></span>

</button>
</form>


<p id='demo'></p>

<script>
function myFunction() {
  var txt;
  if (confirm('Are you sure you want to delete this')) {
  
return true;

  } else {
    return false;
  }
  
}
</script>

          </div>
        </div>
      </a>
    </li>  "



        ;


      }


?>
       
                     
  

                    <?php



    if(isset($_GET['upload']))
    {
      $content=$_GET['upload'];

      echo "<div class='card'>
      <div class='card-body text-danger'>
        $content
      </div>
    </div>";



    }
 

?>

                        <form action="upload.php" method="POST" enctype="multipart/form-data">



  <label     class="form-label" for="customFile"  >  Image to upload: </label>
<div class="form-input single-form" style="margin-bottom:6px;">
  <input type="text" name="name" required class="form-control" id="fileToUpload customFile" placeholder="Name of Image">
  </div>
  <input type="file" name="fileToUpload" class="form-control" style="margin-bottom:6px;" id="fileToUpload customFile">
  <input type="submit" class="btn btn-common btn-rounded " value="Upload Image" name="upload_basic">
</form>




                       <!-- <li>
                          <a href="">
                            <div class="media">
                              <div class="img-thumb">
                                <img class="img-fluid" src="assets/img/event/img-2.jpg" alt="">
                              </div>
                              <div class="text">
                                <h5 class="text-link">Marketing Products</h5>
                                <p class="day">MAY 18, 2020</p>
                                <p>Efficiently unleash information </p>
                              </div>
                            </div>
                          </a>
                        </li>
  -->
                      </ul>
                    </div>
                  </div>
                </div>





                <div class="col-lg-4 col-md-6 col-xs-12">
                  <div class="coming-event">
                    <div class="card">
                      <div class="card-header">
                        <h4 class="card-title">Premium Games</h4>
                        <div class="card-toolbar">
                          <ul>
                            <li>
                              <a class="text-gray" href="#">
                                <i class="lni-more-alt"></i>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <ul class="event-item">
                        
       <?php   
$sel="SELECT * FROM premium_post  ";
$run= mysqli_query($conn,$sel);
$fetch_post=$run;  

      while($row=mysqli_fetch_array($fetch_post))
      {
          $filename=$row['File_Name'];
          $name=$row['Name'];
          $date=$row['_Date'];
        echo"  <li class='' style='margin-left:20px;'>   <a href=''>
        <div class='media row'>
          <div class='img-thumb '>
            <img class='img-fluid' src='uploads/$filename' alt=''>
          </div>
          <div class='text'>
            <h1 class='text-link' style=' text-transform: capitalize; '>$name</h1>
            <p class='day'>$date</p>
            <form action='delete.php' method='POST'  >
            <input value='$filename' name='filename' style='display:none' type='name' />
            
            <input value='premium' name='package' type='name' style='display:none' />

            <button type='submit' onclick='return myFunction()' name='delete' 
              class='btn btn-default'
             aria-label='Left Align'>
  <span class='glyphicon glyphicon-trash' 
  onclick='document.getElementById('id01').style.display='block'' aria-hidden='true'></span>

</button>
</form>


<p id='demo'></p>

<script>
function myFunction() {
  var txt;
  if (confirm('Are you sure you want to delete this')) {
  
return true;

  } else {
    return false;
  }
  
}
</script>
            
            
            
            
            <p> </p>
          </div>
        </div>
      </a>
    </li>  "



        ;


      }


?>
       
                     
  

                    <?php



    if(isset($_GET['upload']))
    {
      $content=$_GET['upload'];

      echo "<div class='card'>
      <div class='card-body text-danger'>
        $content
      </div>
    </div>";



    }
 

?>

                        <form action="upload.php" method="POST" enctype="multipart/form-data">



  <label     class="form-label" for="customFile"  >  Image to upload: </label>
<div class="form-input single-form" style="margin-bottom:6px;">
  <input type="text" name="name" required class="form-control" id="fileToUpload customFile" placeholder="Name of Image">
  </div>
  <input type="file" name="fileToUpload" class="form-control" style="margin-bottom:6px;" 
  id="fileToUpload customFile">
  <input type="submit" class="btn btn-common btn-rounded " value="Upload Image" name="upload_premium">
</form>




                       <!-- <li>
                          <a href="">
                            <div class="media">
                              <div class="img-thumb">
                                <img class="img-fluid" src="assets/img/event/img-2.jpg" alt="">
                              </div>
                              <div class="text">
                                <h5 class="text-link">Marketing Products</h5>
                                <p class="day">MAY 18, 2020</p>
                                <p>Efficiently unleash information </p>
                              </div>
                            </div>
                          </a>
                        </li>
  -->
                      </ul>
                    </div>
                  </div>
                </div>
              
















              </div>
            </div>
          </div>








           
              </div>
              </div>
            </div>
              </div>
            </div>
          </div>
          <!-- Content Wrapper END -->

          <!-- Footer START -->
          <footer class="content-footer">
            <div class="footer">
              <div class="copyright">
                <span>Copyright © 2021 <b class="text-dark">weware</b>. All Right Reserved</span>
                <span class="go-right">
                  <a href="" class="text-gray">Term &amp; Conditions</a>
                  <a href="" class="text-gray">Privacy &amp; Policy</a>
                </span>
              </div>
            </div>
          </footer>
          <!-- Footer END -->
        </div>
        <!-- Page Container END -->
      </div>
    </div>

    <!-- Preloader -->
    <div id="preloader">
      <div class="loader" id="loader-1"></div>
    </div>
    <!-- End Preloader -->

     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.app.js"></script>
    <script src="assets/js/main.js"></script>

  </body>
</html>