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
    <link rel="icon" href="<?php echo base_url(); ?>assets/images/favicon.ico" type="<?php echo base_url(); ?>assets/image/x-icon" />
    <link rel="shortcut icon" type="<?php echo base_url(); ?>assets/image/x-icon" href="<?php echo base_url(); ?>assets/images/favicon.png" />
    
    <!-- PAGE TITLE HERE -->
    <title>Jobzilla Template | Home Page Style 1</title>
    
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

    <!-- LOADING AREA START ===== -->
    <div class="loading-area">
        <div class="loading-box"></div>
        <div class="loading-pic">
            <div class="wrapper">
                <div class="cssload-loader"></div>
            </div>
        </div>
    </div>
    <!-- LOADING AREA  END ====== -->

	<div class="page-wraper">


  
     
        <!-- HEADER START -->
        <header  class="site-header header-style-3 mobile-sider-drawer-menu">

            <div class="sticky-header main-bar-wraper  navbar-expand-lg">
                <div class="main-bar">  
                                    
                    <div class="container-fluid clearfix"> 
                
                        <div class="logo-header">
                            <div class="logo-header-inner logo-header-one">
                                <a href="index.html">
                                <img src="<?php echo base_url(); ?>assets/images/logo-dark.png" alt="">
                                </a>
                            </div>
                        </div>  
                        
                        <!-- NAV Toggle Button -->
                        <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggler collapsed">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar icon-bar-first"></span>
                            <span class="icon-bar icon-bar-two"></span>
                            <span class="icon-bar icon-bar-three"></span>
                        </button> 

                        <!-- MAIN Vav -->
                        <div class="nav-animation header-nav navbar-collapse collapse d-flex justify-content-center">
 
                            <ul class=" nav navbar-nav">
                                
                                <li><a href="<?php echo base_url(); ?>Job">Jobs</a>                                                              
                                </li>
                          
                               
                              
                                <?php if($this->session->userdata('user_type') == 'user'): ?>
                                <li class=""><a href="<?php echo base_url(); ?>Dash">Dash</a>
                                  
                                                                  
                                </li>
                                <?php endif; ?>
                                <?php if ($this->session->userdata('user_typecompany') == 'company'): ?>
                               <li class=""><a href="<?php echo base_url(); ?>EMP/Dash">Dash</a>
                                <?php endif; ?>
                            </ul>

                        </div>
                        
                        <!-- Header Right Section-->
                     <div class="extra-cell">
                                <div class="header-nav-btn-section">
                                    <div class="twm-nav-btn-left">
                                        <?php if($this->session->userdata('user_typecompany') == 'company'): ?>
                                        <a class="twm-nav-sign-up"  href="<?php echo base_url(); ?>Auth/Company_login/logout">
                                            <i class="feather-log-in"></i> Sign Out
                                        </a>
                                    <?php endif; ?>
                                    <?php if($this->session->userdata('user_type') == 'user'): ?>
                                        <a class="twm-nav-sign-up"  href="<?php echo base_url(); ?>Auth/Login/logout">
                                            <i class="feather-log-in"></i> Sign Out
                                        </a>
                                    <?php endif; ?>
                                    </div>
                                    
                                </div>
                            </div> 
                                               
                    
                                                    
                        
                    </div>    
                
                
                </div>

              
                
                      


            
             


            
        </header>
        <!-- HEADER END -->