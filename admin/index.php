<?php
//any client that active == 3 means he is out



session_start();
include("conn.php");  

if(isset($_SESSION['Admin']))

{



if(isset($_POST['package'])){


  $email=$_POST['email'];
  $package=$_POST['package'];

  if($package=='basic') {

   
    $update="UPDATE client_basic SET active = '1' WHERE email='$email'";
    $run=mysqli_query($conn,$update);



    $sel="SELECT * FROM activating_table WHERE email='$email' AND package='basic' ";
    $run= mysqli_query($conn,$sel);
    $num_rows= mysqli_num_rows($run);
  
    if($num_rows<1){


    //  $date=new DateTime();

    $date = Date("M d,Y");
$date = strtotime($date);
$expiry_date = strtotime("+7 day", $date);
$expiry_date = date('M d, Y', $expiry_date);
$date = date('M d, Y', $date);





//$date = ;


   

    
    
    $ins="INSERT INTO activating_table(activating_Date,expiry_Date,email,package)
           VALUES ('$date','$expiry_date','$email','basic')";
           $run=mysqli_query($conn,$ins);
    }
    else{

      $date = Date("M d,Y");
      $date=strtotime($date);

      $expiry_date = strtotime("+7 day", $date);
      $expiry_date= date('M d, Y', $expiry_date);
      $date=date('M d, Y', $date);
$ins="UPDATE activating_table SET activating_Date='$date',expiry_Date='$expiry_date'
     WHERE email='$email' AND package='basic'  ";
           $run=mysqli_query($conn,$ins);




    }




  }
  else if($package=='premium')
  {

 
    
    $update="UPDATE client_premium SET active = '1' WHERE email='$email'";
    $run=mysqli_query($conn,$update);

    $sel="SELECT * FROM activating_table WHERE email='$email' AND package='premium' ";
    $run= mysqli_query($conn,$sel);
    $num_rows=mysqli_num_rows($run);
    if($num_rows<1){

      $date = Date("M d,Y");
      $date= strtotime($date);
      $expiry_date = strtotime("+7 day", $date);
      $expiry_date= date('M d, Y', $expiry_date);
      $date=date('M d, Y', $date);
          $ins="INSERT INTO activating_table(activating_Date,expiry_Date,email,package)
           VALUES ('$date','$expiry_date','$email','premium')";
           $run=mysqli_query($conn,$ins);
    }
    else{

      

      $date = Date("M d,Y");
      $date= strtotime($date);
      $expiry_date = strtotime("+7 day", $date);
      $expiry_date= date('M d, Y', $expiry_date);
      $date=date('M d, Y', $date);

$ins="UPDATE activating_table SET activating_Date='$date',expiry_Date='$expiry_date'
     WHERE email='$email' AND package='premium'  ";
           $run=mysqli_query($conn,$ins);




    }




  }
  




}

  
$sel="SELECT * FROM client_basic WHERE active='0' ";
$run= mysqli_query($conn,$sel);
$fetch_client_inactive_basic=$run;

$num_rows_client_basic_inactive=mysqli_num_rows($run);




$sel="SELECT * FROM client_basic WHERE active='1' ";
$run= mysqli_query($conn,$sel);
$fetch_client_active_basic=$run;
$num_rows_client_basic_active=mysqli_num_rows($run);


$sel="SELECT * FROM client_premium WHERE active='1' ";
$run= mysqli_query($conn,$sel);


$num_rows_client_premium_active=mysqli_num_rows($run);



$sel="SELECT * FROM client_premium WHERE active='0' ";
$run= mysqli_query($conn,$sel);

$fetch_client_inactive_premium=$run;
$num_rows_client_premium_inactive=mysqli_num_rows($run);







}
else{


header("location:login.php");

}







?>
<?php




if(isset($_POST['home_games']))

{
  $filename=$_POST['file_name'];
  $name=$_POST['name'];
  $date=$_POST['date'];

  $sel="SELECT * FROM home_games WHERE Name='$name' AND file_name='$filename'";
  $run=mysqli_query($conn,$sel);
$num_rows=mysqli_num_rows($run);

if($num_rows<1)
{

$ins="INSERT INTO home_games(file_name,_Date,Name) VALUES ('$filename','$date','$name')";
$run=mysqli_query($conn,$ins);


}
else{
  $upd="UPDATE home_games SET file_name='$filename',_Date='$date',Name='$name'";
  $run=mysqli_query($conn,$upd);
  


}





}




?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Prediction wwebsite - Admin  Dashboard </title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="assets/fonts/line-icons.css">
    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="assets/plugins/morris/morris.css">
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  </head>

  <body>
    <div class="app header-default side-nav-dark">
      <div class="layout">
        <!-- Header START -->
        <div class="header navbar">
          <div class="header-container">
            <div class="nav-logo">
              <a href="index.php">
                <b><img src="assets/img/logo.png" alt=""></b>
                <span class="logo">
                  <img src="" alt="">
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
              <!--  <input class="form-control" type="text" placeholder="Type to search...">
                <i class="lni-search"></i>

-->
              </li>
              <li class="massages dropdown dropdown-animated scale-left">
              	<!-- <span class="counter">3</span> -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
               <!--   <i class="lni-envelope"></i>  -->
                </a>
                <ul class="dropdown-menu dropdown-lg">
                  <li>
                    <div class="dropdown-item align-self-center">
        <!--                <h5><span class="badge badge-primary badge-pro float-right">745</span>Messages</h5>
-->        </div>
                  </li>
                  <li>
              <!--      <ul class="list-media">
                      <li class="list-item">
                        <a href="#" class="media-hover">
                          <div class="media-img">
                            <img src="assets/img/users/avatar-1.jpg" alt="">
                          </div>
                          <div class="info">
                            <span class="title">
                                julie walker
                            </span>
                            <span class="sub-title">Lorem ipsum Dummy text of the printing and typesetting industry.</span>
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
                              3 user Requests
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

-->                  </li>
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
                          <span class="title text-semibold"></span>
                          <span class="sub-title">Admin</span>
                        </div>
                      </li>
                    </ul>
                  </li>
                  <li role="separator" class="divider"></li>
                <!--  <li>
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
-->
                  <li>
                  <!--  <a href="">
                      <i class="lni-envelope"></i>
                      <span>Inbox</span>
                      <span class="badge badge-pill badge-primary badge-pro pull-right">2</span>
                    </a>
-->
                  </li>
                  <li>
                    <a href="logout.php">
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
                    <a href="index.php">Dashboard </a>
                  </li>
                 
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="#">
                    <span class="icon-holder">
                      <i class="lni-cloud"></i>
                    </span>
                    <span class="title">Clients</span>
                    <span class="arrow">
                      <i class="lni-chevron-right"></i>
                    </span>
                  </a>
                <ul class="dropdown-menu sub-down">
                  <li>
                    <a href="index.php">Basic</a>
                  </li>
                  <li>
                    <a href="index_premuim.php">Premium</a>
                  </li>
                 
                
                  
                </ul>
              </li>


              
              
          <!--    
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
                    <a href="form-elements.php">Form Elements</a>
                  </li>
                 
                </ul>
              </li>

-->
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
                    <a href="logout.php">Log out</a>
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
                <div class="col-12 col-lg-3 col-md-6">
                  <h4 class="page-title">Dashboard</h4>
                </div>
                <div class="col-12 col-lg-9 col-md-6">
                  <ol class="breadcrumb float-right">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">/ Dashboard</li>
                  </ol>
                </div>
              </div>
              <!-- Breadcrumb End -->
            </div>

            <div class="container-fluid">
              <!-- Title Count Start -->
              <div class="card-group">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-12">
                        <div class="d-flex no-block align-items-center">
                          <div>
                            <div class="icon"><i class="lni-display"></i></div>
                             <p class="text-muted">Active Basic Clients</p>
                          </div>
                          <div class="ml-auto">
                             <h2 class="counter text-primary"><?php 
                             echo"$num_rows_client_basic_active"; ?> </h2>
                          </div>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="progress">
                           <div class="progress-bar bg-primary" role="progressbar" style="width: <?php 
                           $percentage= $num_rows_client_basic_active * 20;
                           $percentage1="$percentage". "%";
                           echo"$percentage1"; ?>; height: 20px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-12">
                        <div class="d-flex no-block align-items-center">
                          <div>
                             <div class="icon"><i class="lni-pencil-alt"></i></div>
                             <p class="text-muted">Inactive Basic Clients</p>
                          </div>
                          <div class="ml-auto">
                             <h2 class="counter text-success">
                               <?php echo"$num_rows_client_basic_inactive"; ?></h2>
                          </div>
                        </div>
                      </div>
                      <div class="col-12">
                      <div class="progress">
                          <div class="progress-bar bg-success" role="progressbar"
                           style="width: <?php 
                           $percentage= $num_rows_client_basic_inactive * 20;
                           $percentage1="$percentage". "%";
                           echo"$percentage1"; ?>; height: 20px;"aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-12">
                        <div class="d-flex no-block align-items-center">
                          <div>
                             <div class="icon"><i class="lni-empty-file"></i></div>
                             <p class="text-muted">Active Premium Clients</p>
                          </div>
                          <div class="ml-auto">
                             <h2 class="counter text-info">
                               <?php  echo" $num_rows_client_premium_active" ;  ?></h2>
                          </div>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="progress">
                           <div class="progress-bar bg-info" role="progressbar" style="width:<?php 
                           $percentage= $num_rows_client_premium_active * 20;
                           $percentage1="$percentage". "%";
                           echo"$percentage1"; ?>; height: 20px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-12">
                        <div class="d-flex no-block align-items-center">
                          <div>
                             <div class="icon"><i class="lni-cart"></i></div>
                             <p class="text-muted">Inactive Premium Clients</p>
                          </div>
                          <div class="ml-auto">
                             <h2 class="counter text-purple"><?php  echo" $num_rows_client_premium_inactive" ;  ?></h2>
                          </div>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="progress">
                           <div class="progress-bar bg-purple" role="progressbar" style="width:<?php 
                           $percentage= $num_rows_client_premium_inactive * 20;
                           $percentage1="$percentage". "%";
                           echo"$percentage1"; ?>; height: 20px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Title Count End -->
             

              
              <div class="row">

              <!--
                <div class="col-lg-4 col-md-6 col-xs-12">
                  <div class="card">
                    <div class="card-header">
                      <h4 class="card-title">To Do Task List</h4>
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
                    <ul class="list-task list-group">
                      <li class="list-group-item border-0" data-role="task">
                        <div class="d-flex w-100 justify-content-between align-items-center">
                          <div class="custom-control custom-checkbox material-checkbox">
                            <input type="checkbox" class="custom-control-input" id="followUp" checked="">
                            <label class="custom-control-label" for="followUp">Follow up clients</label>
                          </div><span class="badge badge-danger">Missed</span>
                        </div>
                      </li>
                      <li class="list-group-item border-0" data-role="task">
                        <div class="d-flex w-100 justify-content-between align-items-center">
                          <div class="custom-control custom-checkbox material-checkbox">
                            <input type="checkbox" class="custom-control-input" id="JoinMeeting" checked="">
                            <label class="custom-control-label" for="JoinMeeting">Join business meeting</label>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item border-0" data-role="task">
                        <div class="d-flex w-100 justify-content-between align-items-center">
                          <div class="custom-control custom-checkbox material-checkbox">
                            <input type="checkbox" class="custom-control-input" id="brainstorm" checked="">
                            <label class="custom-control-label" for="brainstorm">Discuss about new project</label>
                          </div>
                          <span class="badge badge-warning">Today</span>
                        </div>
                      </li>
                      <li class="list-group-item border-0" data-role="task">
                        <div class="d-flex w-100 justify-content-between align-items-center">
                          <div class="custom-control custom-checkbox material-checkbox">
                            <input type="checkbox" class="custom-control-input" id="newFunnel">
                            <label class="custom-control-label" for="newFunnel">Design a new funnel</label>
                          </div>
                        </div>
                      </li>
                      <li class="list-group-item border-0" data-role="task">
                        <div class="d-flex w-100 justify-content-between align-items-center">
                          <div class="custom-control custom-checkbox material-checkbox">
                            <input type="checkbox" class="custom-control-input" id="makeAnewOrder">
                            <label class="custom-control-label" for="makeAnewOrder">Make a new app</label>
                          </div>
                          <span class="badge badge-success">3 weeks</span>
                        </div>
                      </li>
                      <li class="list-group-item border-0" data-role="task">
                        <div class="d-flex w-100 justify-content-between align-items-center">
                          <div class="custom-control custom-checkbox material-checkbox">
                            <input type="checkbox" class="custom-control-input" id="generalThings">
                            <label class="custom-control-label" for="generalThings">Send materials</label>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
-->
                <div class="col-lg-4 col-md-6 col-xs-12">
                  <div class="follow">
                    <div class="card">
                      <div class="card-header">
                        <h4 class="card-title">New Clients (Basic)</h4>
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
                      <ul class="list-media">

        <?php



    while( $row=mysqli_fetch_array($fetch_client_inactive_basic))
      {
        $name= $row['first_Name']." ". $row['last_Name']; 
        $package=$row['package'];
        $email= $row['email'];
        
echo"


<li class='list-item'>
<div class='client-item'>
 



  <div class='info'>
    <span class='title text-semibold'>$name</span>
    <p>$email</p>
    <div class='float-item'>
    <form action='index.php' method='POST'>
    
<input name='email' type='text' placeholder='Your Name' style='display:none;' value='$email' >

      <button class='btn btn-success btn-rounded' name='package' value='$package' >Activate </button>
      </form>
    </div>
  </div>
</div>
</li>


"  ;







      }

   /*   
    while( $row=mysqli_fetch_array($fetch_client_inactive_basic))
    {
      $name= $row['first_Name']." ". $row['last_Name']; 
      $package=$row['package'];
      $email= $row['email'];
      
echo"


<li class='list-item'>
<div class='client-item'>


<form action='index.php' method='POST'>

<div class='info'>
  <span class='title text-semibold'>$name</span>

  <p>$email</p>
  <div class='float-item'>
  

  
<input name='email' type='text' placeholder='Your Name' style='display:none;' value='$email' >
    <button class='btn btn-common btn-rounded' name='package' value='$package' >Activate $package </button>
  </div>
</div>

</form>
</div>
</li>


"  ;







    }
    

*/

?>
<!--
                        <li class="list-item">
                          <div class="client-item">
                           



                            <div class="info">
                              <span class="title text-semibold">Johny Vinno</span>
                              <div class="float-item">
                                <button class="btn btn-common btn-rounded">Follow</button>
                              </div>
                            </div>
                          </div>
                        </li>
  -->
                  <!--    <li class="list-item">
                          <div class="client-item">
                            <div class="media-img">
                              <img src="assets/img/avatar/user2.png" alt="">
                            </div>
                            <div class="info">
                              <span class="title text-semibold">Robinson</span>
                              <div class="float-item">
                                <button class="btn btn-common btn-rounded">Follow</button>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="list-item">
                          <div class="client-item">
                            <div class="media-img">
                              <img src="assets/img/avatar/user3.png" alt="">
                            </div>
                            <div class="info">
                              <span class="title text-semibold">Chris Anderson</span>
                              <div class="float-item">
                                <button class="btn btn-common btn-rounded">Follow</button>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="list-item">
                          <div class="client-item">
                            <div class="media-img">
                              <img src="assets/img/avatar/user4.png" alt="">
                            </div>
                            <div class="info">
                              <span class="title text-semibold">Kornelia Sturb</span>
                              <div class="float-item">
                                <button class="btn btn-common btn-rounded">Follow</button>
                              </div>
                            </div>
                          </div>
                        </li>
-->
                      </ul>
                    </div>
                  </div>
                  <div class="">
                  <div class="follow">
                    <div class="card">
                      <div class="card-header">
                        <h4 class="card-title">Activated Clients</h4>
                        <div class="card-toolbar">
                          <ul>
                            <li>
                              <a class="text-gray" href="#">
                                <i class="lni-more-alt"></i>
                              </a>
                            </li>
                          </ul>
                        </div>
                        <p style="float:right;padding-top: 20px;">expiry date</p>
                      </div>
                      <ul class="list-media">

        <?php



    while( $row=mysqli_fetch_array($fetch_client_active_basic))
      {
        $name= $row['first_Name']." ". $row['last_Name']; 
        $package=$row['package'];
        $email= $row['email'];
        
$sel="SELECT * FROM activating_table WHERE package='basic' AND email='$email' ";
$run= mysqli_query($conn,$sel);
while($row2=mysqli_fetch_array( $run )){

  $expiry_date=$row2['expiry_Date'];
}
        
echo"


<li class='list-item'>
<div class='client-item'>
 



  <div class='info'>
    <span class='title text-semibold'>$name</span>
    <p>$email</p>
    <div class='float-item'>
    <form action='index.php' method='POST'>
    
<input name='email' type='text' placeholder='Your Name' style='display:none;' value='$email' >
<p class='btn-danger btn'>$expiry_date</p>

       </form>
    </div>
  </div>
</div>
</li>


"  ;







      }

      
    while( $row=mysqli_fetch_array($fetch_client_inactive_basic))
    {
      $name= $row['first_Name']." ". $row['last_Name']; 
      $package=$row['package'];
      $email= $row['email'];
      
echo"


<li class='list-item'>
<div class='client-item'>


<form action='index.php' method='POST'>

<div class='info'>
  <span class='title text-semibold'>$name</span>

  <p>$email</p>
  <div class='float-item'>
  

  
<input name='email' type='text' placeholder='Your Name' style='display:none;' value='$email' >
    <button class='btn btn-common btn-rounded' name='package' value='$package' >Activate $package </button>
  </div>
</div>

</form>
</div>
</li>


"  ;







    }
    



?>
<!--
                        <li class="list-item">
                          <div class="client-item">
                           



                            <div class="info">
                              <span class="title text-semibold">Johny Vinno</span>
                              <div class="float-item">
                                <button class="btn btn-common btn-rounded">Follow</button>
                              </div>
                            </div>
                          </div>
                        </li>
  -->
                  <!--    <li class="list-item">
                          <div class="client-item">
                            <div class="media-img">
                              <img src="assets/img/avatar/user2.png" alt="">
                            </div>
                            <div class="info">
                              <span class="title text-semibold">Robinson</span>
                              <div class="float-item">
                                <button class="btn btn-common btn-rounded">Follow</button>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="list-item">
                          <div class="client-item">
                            <div class="media-img">
                              <img src="assets/img/avatar/user3.png" alt="">
                            </div>
                            <div class="info">
                              <span class="title text-semibold">Chris Anderson</span>
                              <div class="float-item">
                                <button class="btn btn-common btn-rounded">Follow</button>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="list-item">
                          <div class="client-item">
                            <div class="media-img">
                              <img src="assets/img/avatar/user4.png" alt="">
                            </div>
                            <div class="info">
                              <span class="title text-semibold">Kornelia Sturb</span>
                              <div class="float-item">
                                <button class="btn btn-common btn-rounded">Follow</button>
                              </div>
                            </div>
                          </div>
                        </li>
-->
                      </ul>
                    </div>
                  </div>
                </div>
                </div>

                <div class="col-lg-4 col-md-6 col-xs-12">
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


"



        ;

        $sel="SELECT * FROM home_games WHERE Name='$name' AND file_name='$filename'";
        $run=mysqli_query($conn,$sel);
      $num_rows=mysqli_num_rows($run);
if($num_rows<1){


echo"
  <form action='index.php' method='POST'>
  <input value='$filename' name='file_name' style='display:none' type='name' />
  <input value='$name' name='name' style='display:none' type='name' />
  <input value='$date' name='date' style='display:none' type='name' />
              
  <button type='submit'  name='home_games' 
  class='btn btn-default'
  aria-label='Left Align' style='padding-top:12px' >
  Send to home page
 
  </button>
  </form>
  </div>
  </div>
</a>
</li>  
  "
;

}      
else{


  echo"
  <form action='delete.php' method='POST'>
  <input value='$filename' name='file_name' style='display:none' type='name' />
  <input value='$name' name='name' style='display:none' type='name' />
  <input value='$date' name='date' style='display:none' type='name' />
              
  <button type='submit'  name='delete_home_games' 
  class='btn btn-default'
  aria-label='Left Align' style='padding-top:12px' >
 Remove from home page
 
 </button>
 </form>
 </div>
 </div>
</a>
</li>   
 "
;

}


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
                        <h4 class="card-title">Previous Games</h4>
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
$sel="SELECT * FROM previous_post  ";
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
            
            <input value='previous' name='package' type='name' style='display:none' />

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


"



        ;

        $sel="SELECT * FROM home_games WHERE Name='$name' AND file_name='$filename'";
        $run=mysqli_query($conn,$sel);
      $num_rows=mysqli_num_rows($run);
if($num_rows<1){


echo"
  <form action='index.php' method='POST'>
  <input value='$filename' name='file_name' style='display:none' type='name' />
  <input value='$name' name='name' style='display:none' type='name' />
  <input value='$date' name='date' style='display:none' type='name' />
              
  <button type='submit'  name='home_games' 
  class='btn btn-default'
  aria-label='Left Align' style='padding-top:12px' >
  Send to home page
 
  </button>
  </form>
  </div>
  </div>
</a>
</li>  
  "
;

}      
else{


  echo"
  <form action='delete.php' method='POST'>
  <input value='$filename' name='file_name' style='display:none' type='name' />
  <input value='$name' name='name' style='display:none' type='name' />
  <input value='$date' name='date' style='display:none' type='name' />
              
  <button type='submit'  name='delete_home_games' 
  class='btn btn-default'
  aria-label='Left Align' style='padding-top:12px' >
 Remove from home page
 
 </button>
 </form>
 </div>
 </div>
</a>
</li>   
 "
;

}


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
  <input type="submit" class="btn btn-common btn-rounded " value="Upload Image" name="upload_previous">
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

    <!--Morris Chart-->
    <script src="assets/plugins/morris/morris.min.js"></script>
    <script src="assets/plugins/raphael/raphael-min.js"></script>
    <script src="assets/js/dashborad1.js"></script>

  </body>
</html>