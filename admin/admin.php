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
                <div class="col-12 col-lg-3 col-md-6">
                  <h4 class="page-title">Table</h4>
                </div>
                <div class="col-12 col-lg-9 col-md-6">
                  <ol class="breadcrumb float-right">
                    <li><a href="#">Tables</a></li>
                    <li class="active"> / Basic Table</li>
                  </ol>
                </div>
              </div>
              <!-- Breadcrumb End -->
            </div>

            <div class="container-fluid">
              <div class="row">
                <div class="col-12 col-xl-6 m-b-10">
                  <div class="card">
                    <div class="card-header border-bottom">
                      <h4 class="card-title">Basic example</h4>
                    </div>
                    <div class="card-body">
                      <p class="text-muted m-b-20 box-content">
                        For basic styling—light padding and only horizontal dividers—use the class <code>table</code>.
                      </p>
                      <div class="table-responsive">
                        <table class="table mb-0">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>First Name</th>
                              <th>Last Name</th>
                              <th>Username</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td>Mark</td>
                              <td>Otto</td>
                              <td>@mdo</td>
                            </tr>
                            <tr>
                              <th scope="row">2</th>
                              <td>Jacob</td>
                              <td>Thornton</td>
                              <td>@fat</td>
                            </tr>
                            <tr>
                              <th scope="row">3</th>
                              <td>Larry</td>
                              <td>The Bird</td>
                              <td>@twitter</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-xl-6 m-b-10">
                  <div class="card">
                    <div class="card-header border-bottom">
                      <h4 class="card-title">Dark table</h4>
                    </div>
                    <div class="card-body">
                      <p class="text-muted m-b-20 box-content">
                        For dark styling use the classes <code>table</code> and <code>table-dark</code>.
                      </p>
                      <div class="table-responsive">
                        <table class="table table-dark mb-0">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>First Name</th>
                              <th>Last Name</th>
                              <th>Username</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td>Mark</td>
                              <td>Otto</td>
                              <td>@mdo</td>
                            </tr>
                            <tr>
                              <th scope="row">2</th>
                              <td>Jacob</td>
                              <td>Thornton</td>
                              <td>@fat</td>
                            </tr>
                            <tr>
                              <th scope="row">3</th>
                              <td>Larry</td>
                              <td>The Bird</td>
                              <td>@twitter</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12 col-xl-6 m-b-10">
                  <div class="card">
                    <div class="card-header border-bottom">
                      <h4 class="card-title">Table head options</h4>
                    </div>
                    <div class="card-body">
                      <p class="text-muted m-b-20 box-content">
                        Use one of two modifier classes <code>thead-default</code> or <code>thead-dark</code> to make <code>thead</code> appear light or dark.
                      </p>
                      <div class="table-responsive">
                        <table class="table mb-0">
                          <thead class="thead-default">
                            <tr>
                              <th>#</th>
                              <th>First Name</th>
                              <th>Last Name</th>
                              <th>Username</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td>Mark</td>
                              <td>Otto</td>
                              <td>@mdo</td>
                            </tr>
                            <tr>
                              <th scope="row">2</th>
                              <td>Jacob</td>
                              <td>Thornton</td>
                              <td>@fat</td>
                            </tr>
                            <tr>
                              <th scope="row">3</th>
                              <td>Larry</td>
                              <td>The Bird</td>
                              <td>@twitter</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-xl-6 m-b-10">
                  <div class="card">
                    <div class="card-header border-bottom">
                      <h4 class="card-title">Table head options</h4>
                    </div>
                    <div class="card-body">
                      <p class="text-muted m-b-20 box-content">
                        Use one of two modifier classes to make <code>thead</code> appear light or dark gray.
                      </p>
                      <div class="table-responsive">
                        <table class="table table-striped mb-0">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>First Name</th>
                              <th>Last Name</th>
                              <th>Username</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td>Mark</td>
                              <td>Otto</td>
                              <td>@mdo</td>
                            </tr>
                            <tr>
                              <th scope="row">2</th>
                              <td>Jacob</td>
                              <td>Thornton</td>
                              <td>@fat</td>
                            </tr>
                            <tr>
                              <th scope="row">3</th>
                              <td>Larry</td>
                              <td>The Bird</td>
                              <td>@twitter</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12 col-xl-6 m-b-10">
                  <div class="card">
                    <div class="card-header border-bottom">
                      <h4 class="card-title">Bordered table</h4>
                    </div>
                    <div class="card-body">
                      <h4 class="mt-0 box-title"></h4>
                      <p class="text-muted m-b-20 box-content">
                        Add the class <code>table-bordered</code> for borders on all sides of the table and cells
                      </p>
                      <div class="table-responsive">
                        <table class="table table-bordered mb-0">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>First Name</th>
                              <th>Last Name</th>
                              <th>Username</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td>Mark</td>
                              <td>Otto</td>
                              <td>@mdo</td>
                            </tr>
                            <tr>
                              <th scope="row">2</th>
                              <td>Jacob</td>
                              <td>Thornton</td>
                              <td>@fat</td>
                            </tr>
                            <tr>
                              <th scope="row">3</th>
                              <td>Larry</td>
                              <td>The Bird</td>
                              <td>@twitter</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-xl-6 m-b-10">
                  <div class="card">
                    <div class="card-header border-bottom">
                      <h4 class="card-title">Hoverable rows</h4>
                    </div>
                    <div class="card-body">
                      <h4 class="mt-0 box-title"></h4>
                      <p class="text-muted m-b-20 box-content">
                        Add <code>table-hover</code> to enable a hover state on table rows within a <code>tbody</code>.
                      </p>
                      <div class="table-responsive">
                        <table class="table table-hover mb-0">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>First Name</th>
                              <th>Last Name</th>
                              <th>Username</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td>Mark</td>
                              <td>Otto</td>
                              <td>@mdo</td>
                            </tr>
                            <tr>
                              <th scope="row">2</th>
                              <td>Jacob</td>
                              <td>Thornton</td>
                              <td>@fat</td>
                            </tr>
                            <tr>
                              <th scope="row">3</th>
                              <td>Larry</td>
                              <td>The Bird</td>
                              <td>@twitter</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12 col-xl-6 m-b-10">
                  <div class="card">
                    <div class="card-header border-bottom">
                      <h4 class="card-title">Small table</h4>
                    </div>
                    <div class="card-body">
                      <h4 class="mt-0 box-title"></h4>
                      <p class="text-muted m-b-20 box-content">
                        Add <code>table-sm</code> to make tables more compact by cutting cell padding in half.
                      </p>
                      <div class="table-responsive">
                        <table class="table table-sm mb-0">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>First Name</th>
                              <th>Last Name</th>
                              <th>Username</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td>Mark</td>
                              <td>Otto</td>
                              <td>@mdo</td>
                            </tr>
                            <tr>
                              <th scope="row">2</th>
                              <td>Jacob</td>
                              <td>Thornton</td>
                              <td>@fat</td>
                            </tr>
                            <tr>
                              <th scope="row">3</th>
                              <td colspan="2">Larry The Bird</td>
                              <td>@twitter</td>
                            </tr>
                            <tr>
                              <th scope="row">4</th>
                              <td>Ann</td>
                              <td>Nelson</td>
                              <td>@nel</td>
                            </tr>
                            <tr>
                              <th scope="row">5</th>
                              <td>Jonathan</td>
                              <td>Sevian</td>
                              <td>@sev</td>
                            </tr>
                            <tr>
                              <th scope="row">6</th>
                              <td>Richard </td>
                              <td>Anderson</td>
                              <td>@rich</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-xl-6 m-b-10">
                  <div class="card">
                    <div class="card-header border-bottom">
                      <h4 class="card-title">Responsive table</h4>
                    </div>
                    <div class="card-body">
                      <p class="text-muted m-b-20 box-content">
                        Create responsive tables by adding <code>table-responsive</code> to any <code>table</code> to make them scroll horizontally on small devices (under 768px). When viewing on anything larger than 768px wide, you will not see any difference in these tables.
                      </p>
                      <div class="table-responsive">
                        <table class="table mb-0">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">first name</th>
                              <th scope="col">last name</th>
                              <th scope="col">user name</th>
                              <th scope="col">email</th>
                              <th scope="col">office</th>
                              <th scope="col">age</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td>Mark</td>
                              <td>Otto</td>
                              <td>@mdo</td>
                              <td>user@gmail.com</td>
                              <td>Tokyo</td>
                              <td>21</td>
                            </tr>
                            <tr>
                              <th scope="row">2</th>
                              <td>Jacob</td>
                              <td>Thornton</td>
                              <td>@fat</td>
                              <td>user@gmail.com</td>
                              <td>London</td>
                              <td>18</td>
                            </tr>
                            <tr>
                              <th scope="row">3</th>
                              <td>Jonathan</td>
                              <td>Sevian</td>
                              <td>@twitter</td>
                              <td>user@gmail.com</td>
                              <td>San Francisco</td>
                              <td>22</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>  
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12 col-xl-6 m-b-10">
                  <div class="card">
                    <div class="card-header border-bottom">
                      <h4 class="card-title">Contextual tables</h4>
                    </div>
                    <div class="card-body">
                      <p class="text-muted m-b-20 box-content">
                        Use contextual classes to color table rows or individual cells.
                      </p>
                      <div class="table-responsive">
                        <table class="table mb-0">
                          <thead>
                            <tr>
                              <th>Type</th>
                              <th>Column heading</th>
                              <th>Column heading</th>
                              <th>Column heading</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr class="table-active">
                              <th scope="row">Active</th>
                              <td>Column content</td>
                              <td>Column content</td>
                              <td>Column content</td>
                            </tr>
                            <tr>
                              <th scope="row">Default</th>
                              <td>Column content</td>
                              <td>Column content</td>
                              <td>Column content</td>
                            </tr>
                            <tr class="table-primary">
                              <th scope="row">Primary</th>
                              <td>Column content</td>
                              <td>Column content</td>
                              <td>Column content</td>
                            </tr>
                            <tr class="table-secondary">
                              <th scope="row">Secondary</th>
                              <td>Column content</td>
                              <td>Column content</td>
                              <td>Column content</td>
                            </tr>
                            <tr class="table-success">
                              <th scope="row">Success</th>
                              <td>Column content</td>
                              <td>Column content</td>
                              <td>Column content</td>
                            </tr>
                            <tr class="table-danger">
                              <th scope="row">Danger</th>
                              <td>Column content</td>
                              <td>Column content</td>
                              <td>Column content</td>
                            </tr>
                            <tr class="table-warning">
                              <th scope="row">Warning</th>
                              <td>Column content</td>
                              <td>Column content</td>
                              <td>Column content</td>
                            </tr>
                            <tr class="table-info">
                              <th scope="row">Info</th>
                              <td>Column content</td>
                              <td>Column content</td>
                              <td>Column content</td>
                            </tr>
                            <tr class="table-light">
                              <th scope="row">Light</th>
                              <td>Column content</td>
                              <td>Column content</td>
                              <td>Column content</td>
                            </tr>
                            <tr class="table-dark">
                              <th scope="row">Dark</th>
                              <td>Column content</td>
                              <td>Column content</td>
                              <td>Column content</td>
                            </tr>
                          </tbody>
                        </table>
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