<!DOCTYPE html>

<html lang="en">

<head>

    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />    
    <meta name="description" content="" />
    
    <!-- FAVICONS ICON -->
    <link rel="icon" href="<?php echo base_url(); ?>assets/images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/images/favicon.png" />
    
    <!-- PAGE TITLE HERE -->
    <title>jobzilla Template | dashboard</title>
    
    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css"><!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css"><!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/feather.css"><!-- FEATHER ICON SHEET -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/owl.carousel.min.css"><!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/magnific-popup.min.css"><!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/lc_lightbox.css"><!-- Lc light box popup -->     
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap-select.min.css"><!-- BOOTSTRAP SLECT BOX STYLE SHEET  -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/dataTables.bootstrap5.min.css"><!-- DATA table STYLE SHEET  -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/select.bootstrap5.min.css"><!-- DASHBOARD select bootstrap  STYLE SHEET  -->     
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/dropzone.css"><!-- DROPZONE STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/scrollbar.css"><!-- CUSTOM SCROLL BAR STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/datepicker.css"><!-- DATEPICKER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/flaticon.css"> <!-- Flaticon -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/swiper-bundle.min.css"><!-- Swiper Slider -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css"><!-- MAIN STYLE SHEET -->   
        

 
</head>

<body>

   

	<div class="page-wraper">
    
        <header id="header-admin-wrap" class="header-admin-fixed">
        
            <!-- Header Start -->
            <div id="header-admin">
                <div class="container">
                    
                    <!-- Left Side Content -->
                    <div class="header-left">
                        <div class="nav-btn-wrap">
                            <a class="nav-btn-admin" id="sidebarCollapse">
                                <span class="fa fa-angle-left"></span>
                            </a>                           
                        </div>
                    </div>
                    <!-- Left Side Content End -->
                    
                    <!-- Right Side Content -->
                    <div class="header-right">
                        <ul class="header-widget-wrap">
                            <!--Message-->
                            <li class="header-widget dashboard-message-dropdown">

                                <div class="dropdown">
                                    <a href="javascript:;" class="dropdown-toggle jobzilla-admin-messange" id="ID-MSG_dropdown" data-bs-toggle="dropdown">
                                        <i class="far fa-envelope"></i>
                                        <span class="notification-animate">4</span>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="ID-MSG_dropdown">
                                        <div class="message-list dashboard-widget-scroll">
                                            <ul>
                                                <li class="clearfix">
                                                    <span class="msg-avtar">
                                                        <img src="images/user-avtar/pic1.jpg" alt="">
                                                    </span>
                                        
                                                    <div class="msg-texting">
                                                        <strong>Alexa Johnson</strong> 
                                                        <small class="msg-time">
                                                            <span class="far fa-clock p-r-5"></span>12 mins ago
                                                        </small>
                                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                                    </div>
                                                </li>
                                                <li class="clearfix">
                                                    <span class="msg-avtar">
                                                        <img src="images/user-avtar/pic2.jpg" alt="">
                                                    </span>
                                        
                                                    <div class="msg-texting">
                                                        <strong>Johan Smith</strong> 
                                                        <small class="msg-time">
                                                            <span class="far fa-clock p-r-5"></span>2 hours ago
                                                        </small>
                                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                                    </div>
                                                </li>
                                                <li class="clearfix">
                                                    <span class="msg-avtar">
                                                        <img src="images/user-avtar/pic3.jpg" alt="">
                                                    </span>
                                        
                                                    <div class="msg-texting">
                                                        <strong>Bobby Brown</strong> 
                                                        <small class="msg-time">
                                                            <span class="far fa-clock p-r-5"></span>3 hours ago
                                                        </small>
                                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                                    </div>
                                                </li>
                                                <li class="clearfix">
                                                    <span class="msg-avtar">
                                                        <img src="images/user-avtar/pic4.jpg" alt="">
                                                    </span>
                                        
                                                    <div class="msg-texting">
                                                        <strong>David Deo</strong> 
                                                        <small class="msg-time">
                                                            <span class="far fa-clock p-r-5"></span>4 hours ago
                                                        </small>
                                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                                    </div>
                                                </li>                                                                              
                                            </ul>
                                            <div class="message-view-all">
                                                <a href="javascript:;">View All</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </li>

                            <!--Notification-->
                            <li class="header-widget dashboard-noti-dropdown">

                                <div class="dropdown">
                                    <a  href="javascript:;" class="dropdown-toggle jobzilla-admin-notification" id="ID-NOTI_dropdown" data-bs-toggle="dropdown">
                                        <i class="far fa-bell"></i>
                                        <span class="notification-animate">8</span>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="ID-NOTI_dropdown">
                                        <div class="dashboard-widgets-header">You have 7 notifications</div>
                                        <div class="noti-list dashboard-widget-scroll">
                                            <ul>
                                                    
                                                <li>
                                                    <a href="#">
                                                        <span class="noti-icon"><i class="far fa-bell"></i></span>
                                                        <span class="noti-texting">Devid applied for <b>Webdesigner.</b> </span> 
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="noti-icon"><i class="far fa-bell"></i></span>
                                                        <span class="noti-texting">Nikol sent you a message. </span> 
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="noti-icon"><i class="far fa-bell"></i></span>
                                                        <span class="noti-texting">lucy bookmarked your <b>SEO Expert</b> Job! </span> 
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="noti-icon"><i class="far fa-bell"></i></span>
                                                        <span class="noti-texting">Your job for <b>teacher</b> has been approved! </span> 
                                                    </a>
                                                </li> 
                                                <li>
                                                    <a href="#">
                                                        <span class="noti-icon"><i class="far fa-bell"></i></span>
                                                        <span class="noti-texting">Thor applied for <b>Team Leader</b>. </span> 
                                                    </a>
                                                </li>
                                                                                                                                                                                                                                                                
                                            </ul>

                                            <div class="noti-view-all">
                                                    <a href="javascript:;">View All</a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>



                            </li>

                            <!--Account-->
                            <li class="header-widget">
								<div class="dashboard-user-section">
                                	<div class="listing-user">
                                        <div class="dropdown">
                                            <a href="javascript:;" class="dropdown-toggle" id="ID-ACCOUNT_dropdown" data-bs-toggle="dropdown">
                                                <div class="user-name text-black">
                                                    <span>
                                                        <img src="<?php echo base_url(); ?>assets/images/user-avtar/pic4.jpg" alt="">
                                                    </span><?php echo $this->session->userdata('company_name'); ?>
                                                </div> 
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="ID-ACCOUNT_dropdown">
                                                  
                                                <ul>
                                                    <li><a href=""><i class="fa fa-home"></i>Dashboard</a></li>
                                                    <li><a href=""><i class="fa fa-envelope"></i> Messages</a></li>
                                                    <li><a href=""><i class="fa fa-user"></i> Profile</a></li>
                                                    <li><a href="<?php echo base_url(); ?>Auth/Company_login/logout"><i class="fa fa-share-square"></i> Logout</a></li>
                                                </ul>
                                                    
                                                
                                            </div>
                                        </div>

                                    </div>                                
                               </div>
                            </li>

                        </ul>
                    </div>
                    <!-- Right Side Content End -->
        
                </div>
            </div>
            <!-- Header End -->
        
        </header>     

        <!-- Sidebar Holder -->
        <nav id="sidebar-admin-wraper">
            <div class="page-logo">
                <a href="index.html"><img src="<?php echo base_url(); ?>assets/images/logo-dark.png" alt=""></a>
            </div>
            
            <div class="admin-nav scrollbar-macosx">
                <ul>
                    <?php if($this->session->userdata('level') == "0"):?>
                    <li class="active">
                        <a href="<?php echo base_url(); ?>EMP/Dash"><i class="fa fa-home"></i><span class="admin-nav-text">Dashboard</span></a>
                    </li>

                    <li>
                    	<a href="<?php echo base_url(); ?>EMP/Dash/postjob"><i class="fa fa-suitcase"></i><span class="admin-nav-text">Post Jobs</span></a>
                               
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>EMP/Manage_job"><i class="fa fa-suitcase"></i><span class="admin-nav-text">Manage Jobs</span></a>
                               
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>EMP/Manage_job/draft_job"><i class="fa fa-suitcase"></i><span class="admin-nav-text">Draft Jobs</span></a>
                               
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>EMP/Manage_candidate"><i class="fa fa-user-friends"></i><span class="admin-nav-text">Candidates</span></a>
                    </li>
                    
                    <li>
                        <a href="<?php echo base_url(); ?>EMP/Dash/profile"><i class="fa fa-user-tie"></i><span class="admin-nav-text">Company Profile</span></a>
                    </li>

                    <li>
                        <a href="dash-change-password.html"><i class="fa fa-fingerprint"></i><span class="admin-nav-text">Change Password</span></a>
                    </li>
                    
                    <li>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#delete-dash-profile"><i class="fa fa-trash-alt"></i><span class="admin-nav-text">Delete Profile</span></a>
                    </li>  
                                       
                    <li>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#logout-dash-profile"><i class="fa fa-share-square"></i><span class="admin-nav-text">Logout</span></a>
                    </li> 
                    <?php endif; ?>                   
                    <?php if($this->session->userdata('level') == "1"): ?>
                   <li>
                        <a href="<?php echo base_url(); ?>EMP/User"><i class="fa fa-home"></i><span class="admin-nav-text">user</span></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>EMP/Company"><i class="fa fa-home"></i><span class="admin-nav-text">Company</span></a>
                    </li>
                <?php endif; ?>
                </ul>
            </div>   
        </nav>       