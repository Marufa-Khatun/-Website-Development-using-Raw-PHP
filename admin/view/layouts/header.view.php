<?php

  if(!isset($_SESSION['auth'])){
    header('Location:login.php');
  }
  function adminUrl(){
  $serverProtocol = $_SERVER ['SERVER_PROTOCOL'];
  $serverName = $_SERVER ['SERVER_NAME'];
  $expProtocol = explode('/',  $serverProtocol);

 $url = strtolower($expProtocol[0]) ."://". $serverName. '/Raw_Project/moderna_dev/admin';
 return $url;
  }
  
 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Gentelella Alela!</title>

    <!-- Bootstrap -->
    <link href="<?=adminUrl()?>/css/bootstrap.min.css" rel="stylesheet">

    <link href="<?=adminUrl()?>/css/font-awesome.min.css" rel="stylesheet">

    <link href="<?=adminUrl()?>/css/nprogress.css" rel="stylesheet">
   
    <link href="<?=adminUrl()?>/css/green.css" rel="stylesheet">
	

    <link href="<?=adminUrl()?>/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">

    <!-- <link href="css/jqvmap.min.css" rel="stylesheet"/>

    <link href="css/daterangepicker.css" rel="stylesheet"> -->


    <link href="<?=adminUrl()?>/css/custom.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="<?=adminUrl()?>/index.php"><i class="fa fa-home"></i> Home </span></a>
                    
                  </li>
                  <li><a><i class="fa fa-edit"></i> Banners <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?=adminUrl()?>/banner/add_banner.php">Add Banner</a></li>
                      <li><a href="<?=adminUrl()?>/banner/all_banner.php">All Banners</a></li>
                      
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Services<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?=adminUrl()?>/service/add_service.php">Add Service</a></li>
                      <li><a href="<?=adminUrl()?>/service/all_service.php">All Services</a></li>
                      
                    </ul>
                  </li>

                  <li><a href="<?=adminUrl()?>/whyus/whyus.php"><i class="fa fa-edit"></i> Why Us  </a></li>
                  
                  <li><a><i class="fa fa-edit"></i> Features<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?=adminUrl()?>/feature/add_feature.php">Add Feature</a></li>
                      <li><a href="<?=adminUrl()?>/feature/all_feature.php">All Features</a></li>
                      
                    </ul>
                  </li>
                

                  <li><a><i class="fa fa-edit"></i> Testimonials <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                    <li><a href="<?=adminUrl()?>/testimonial/add_Testimonial.php">Add Testimonial</a></li>
                    <li><a href="<?=adminUrl()?>/testimonial/all_Testimonial.php">All Testimonial</a></li>
                      
                    </ul>
                  </li>

                  <li><a><i class="fa fa-edit"></i> Service Details <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                    <li><a href="<?=adminUrl()?>/service_details/add_serviceDetails.php">Add Service Details</a></li>
                    <li><a href="<?=adminUrl()?>/service_details/all_serviceDetails.php">All Service Details</a></li>
                      
                      
                    </ul>
                  </li>

                  <li><a><i class="fa fa-edit"></i> Settings <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?=adminUrl()?>/setting/headerFooter.php">Header/footer</a></li>
                      <li><a href="<?=adminUrl()?>/setting/setting_option.php">Section Options</a></li>
                      <li><a href="<?=adminUrl()?>/setting/skill.php">Skils</a></li>
                      
                    </ul>
                  </li>

                 
                 
              </div>
             

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">John Doe
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="javascript:;"> Profile</a>
                      <a class="dropdown-item"  href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                  <a class="dropdown-item"  href="javascript:;">Help</a>
                    <a class="dropdown-item"  href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </div>
                </li>

                <li role="presentation" class="nav-item dropdown open">
                  <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <div class="text-center">
                        <a class="dropdown-item">
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
       
        <div class="right_col" role="main">