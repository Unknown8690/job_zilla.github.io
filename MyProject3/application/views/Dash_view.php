<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php if ($this->session->flashdata("type") != null) { ?>
  <script>
    swal("<?php echo $this->session->flashdata("type"); ?>", "<?php echo $this->session->flashdata("message1") ?>", "<?php echo $this->session->flashdata("type"); ?>");
  </script>
<?php } ?>
<?php if ($this->session->flashdata("type12") != null) { ?>
  <script>
    swal("<?php echo $this->session->flashdata("title"); ?>", "<?php echo $this->session->flashdata("error12") ?>", "<?php echo $this->session->flashdata("type12"); ?>");
  </script>
<?php } ?>
  
     <!-- INNER PAGE BANNER -->
           <div class="page-content">

            <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url(http://localhost/Myproject3/assets/images/banner/1.jpg);">
                <div class="overlay-main site-bg-white opacity-01"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                        <div class="banner-title-outer">
                            <div class="banner-title-name">
                                <h2 class="wt-title">Candidate Dashboard</h2>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW -->                            
                        
                            <div>
                                <ul class="wt-breadcrumb breadcrumb-style-2">
                                    <li><a href="<?php echo base_url(); ?>">Home</a></li>
                                    <li>Candidate Chat</li>
                                </ul>
                            </div>
                        
                        <!-- BREADCRUMB ROW END -->                        
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->
            <?php include('headerfiles/Nav_view.php'); ?>
         <?php
           if($this->session->flashdata("message") != "")
           {?>
            <div class="alert alert-success" id="alertmessage" role="alert">
              <button type="button" class="close" data-dismiss="alert" >
                 <span aria-hidden="true">&times;</span>
              </button>
                 <strong class="d-block d-sm-inline-block-force"><?php echo $this->session->flashdata("message"); ?></strong>
             </div>
          
           <?php }

            ?>


                        <div class="col-xl-9 col-lg-8 col-md-12 m-b30">
                            <!--Filter Short By-->
                            <div class="twm-right-section-panel site-bg-gray">
                                <div class="wt-admin-right-page-header">
                                    <h2><?php echo  $user_name; ?></h2>
                                    <p></p>
                                </div>
                
                                <div class="twm-dash-b-blocks mb-5">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-12 mb-3">
                                            <div class="panel panel-default">
                                                <div class="panel-body wt-panel-body dashboard-card-2 block-gradient">
                                                    <div class="wt-card-wrap-2">
                                                        <div class="wt-card-icon-2"><i class="flaticon-job"></i></div>
                                                        <div class="wt-card-right wt-total-active-listing counter "><?php echo $appliedjob['total']; ?></div>
                                                        <div class="wt-card-bottom-2 ">
                                                            <h4 class="m-b0">Applied Jobs</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-12 mb-3">
                                            <div class="panel panel-default">
                                                <div class="panel-body wt-panel-body dashboard-card-2 block-gradient-2">
                                                    <div class="wt-card-wrap-2">
                                                        <div class="wt-card-icon-2"><i class="flaticon-resume"></i></div>
                                                        <div class="wt-card-right  wt-total-listing-view counter "><?php echo $count_application['total']; ?></div>
                                                        <div class="wt-card-bottom-2">
                                                            <h4 class="m-b0">Total Applications</h4> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-12 mb-3">
                                            <div class="panel panel-default">
                                                <div class="panel-body wt-panel-body dashboard-card-2 block-gradient-3">
                                                    <div class="wt-card-wrap-2">
                                                        <div class="wt-card-icon-2"><i class="flaticon-envelope"></i></div>
                                                        <div class="wt-card-right wt-total-listing-review counter "><?php echo $message['total']; ?></div>
                                                        <div class="wt-card-bottom-2">
                                                            <h4 class="m-b0">Messages</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-12 mb-3">
                                            <div class="panel panel-default">
                                                <div class="panel-body wt-panel-body dashboard-card-2 block-gradient-4">
                                                    <div class="wt-card-wrap-2">
                                                        <div class="wt-card-icon-2"><i class="flaticon-bell"></i></div>
                                                        <div class="wt-card-right wt-total-listing-bookmarked counter ">1</div>
                                                        <div class="wt-card-bottom-2">
                                                            <h4 class="m-b0">Notifications</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                
                                <div class="twm-pro-view-chart-wrap">
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 mb-4">

                                            <div class="panel panel-default site-bg-white">
                                                <div class="panel-heading wt-panel-heading p-a20">
                                                    <h4 class="panel-tittle m-a0"><i class="far fa-chart-bar"></i>Messages</h4>
                                                </div>
                                               
                                            </div>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
    
        