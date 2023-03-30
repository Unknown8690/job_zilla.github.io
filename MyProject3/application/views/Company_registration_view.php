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
    <title>Jobzilla Template | Login</title>
    
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
     
      
        <!-- CONTENT START -->
        <div class="page-content">

           


            <!-- Login Section Start -->
            <div class="section-full site-bg-white">
                
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-8 col-lg-6 col-md-5 twm-log-reg-media-wrap">
                            <div class="twm-log-reg-media">
                                <div class="twm-l-media">
                                    <img src="<?php echo base_url(); ?>assets/images/login-bg.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-7">
                            <div class="twm-log-reg-form-wrap">
                                <div class="twm-log-reg-logo-head">
                                    <a href="index.html">
                                        <img src="<?php echo base_url(); ?>assets/images/logo-dark.png" alt="" class="logo">
                                    </a> 
                                </div>

                                <div class="twm-log-reg-inner">
                                    <div class="twm-log-reg-head">
                                        <div class="twm-log-reg-logo">
                                            <span class="log-reg-form-title">Sign Up</span>
                                        </div>
                                    </div>
                                    <?php
           if($this->session->flashdata("error") != "")
           {?>
            <div class="alert alert-danger" id="alertmessage" role="alert"
  id="alert-danger"
  role="alert"
  data-mdb-color="danger"
  data-mdb-position="top-right"
  data-mdb-stacking="true"
  data-mdb-width="535px"
  data-mdb-width="535px"
  data-mdb-append-to-body="true"
  data-mdb-hidden="true"
  data-mdb-autohide="true"
  data-mdb-delay="2000">
                 
             
                 <strong class="d-block d-sm-inline-block-force"><?php echo $this->session->flashdata("error"); ?></strong>
             </div>
          
           <?php }

            ?>
                                    
                                        <div class="tab-content" id="myTab2Content">
                                            <!--Login Candidate Content-->
                                            <form  method="post" action="<?php echo base_url(); ?>Auth/Company_registration/process" id="regform" name="regform" >  
                                            <div class="tab-pane fade show active" id="twm-login-candidate">
                                                <div class="row">

                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-3">
                                                            <input name="username" id="username" type="text" class="form-control" placeholder="Company Name*" required>
                                                            <span id="Name_user"></span>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-3">
                                                            <input name="email" type="text" class="form-control"  placeholder="Company Email" required>
                                                            <span id="Email*"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-3">
                                                            <input name="password" type="text" class="form-control"  placeholder="Password*" required>
                                                            <span id="Pass"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="twm-forgot-wrap">
                                                            <div class="form-group mb-3">
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input" id="Password4">
                                                                    <label class="form-check-label rem-forgot" for="Password4">Remember me <a href="javascript:;" class="site-text-primary"></a></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <button type="submit" name="btnsubmit" class="site-button">Sign Up</button>
                                                        </div>
                                                    </div>
                                                       <div class="col-lg-12">
                                                        <div class="twm-forgot-wrap">
                                                            <div class="form-group mb-3">
                                                                
                                                                    <label class="form-check-label rem-forgot" for="Password4">If you are already Register <a href="<?php echo base_url()?>Auth/Company_login" class="site-text-primary">click Here</a></label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    

                                                 
                                                    
                                                    
                                                </div>
                                            </div>
                                           </form>
                                         </div>
                                     </div>
                                 </div>
                             </div>
            
     
        </div>
        <!-- CONTENT END -->
<script type="text/javascript">

    function validation()
    {
           var username  = document.getElementById("username").value;

        if($username == "")
        {
            document.getElementById("Name_user").innerHTML = "Enter Username!"
            return false;
        }
    }
   
</script>
       
       

 <?php include('footerfiles/Home_footer.php'); ?>