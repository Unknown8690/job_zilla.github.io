
        <!-- Page Content Holder -->
        <div id="content">

            <div class="content-admin-main">

                <div class="wt-admin-right-page-header clearfix">
                    <h2>Hello,<?php echo  $company_name; ?></h2>
                    <div class="breadcrumbs"><a href="#">Home</a><span>Dasboard</span></div>
                </div>

                <div class="twm-dash-b-blocks mb-5">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-12 mb-3">
                            <div class="panel panel-default">
                                <div class="panel-body wt-panel-body gradi-1 dashboard-card ">
                                    <div class="wt-card-wrap">
                                        <div class="wt-card-icon"><i class="far fa-address-book"></i></div>

                                        <div class="wt-card-right wt-total-active-listing counter ">
                                            <?php echo $countJob['total']; ?>
                                            </div>
                                        <div class="wt-card-bottom ">
                                            <h4 class="m-b0">Posted Jobs</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-12 mb-3">
                            <div class="panel panel-default">
                                <div class="panel-body wt-panel-body gradi-2 dashboard-card ">
                                    <div class="wt-card-wrap">
                                        <div class="wt-card-icon"><i class="far fa-file-alt"></i></div>
                                        <div class="wt-card-right  wt-total-listing-view counter ">1</div>
                                        <div class="wt-card-bottom">
                                            <h4 class="m-b0">Total Applications</h4> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-12 mb-3">
                            <div class="panel panel-default">
                                <div class="panel-body wt-panel-body gradi-3 dashboard-card ">
                                    <div class="wt-card-wrap">
                                        <div class="wt-card-icon"><i class="far fa-envelope"></i></div>
                                        <div class="wt-card-right wt-total-listing-review counter ">1</div>
                                        <div class="wt-card-bottom">
                                            <h4 class="m-b0">Messages</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-12 mb-3">
                            <div class="panel panel-default">
                                <div class="panel-body wt-panel-body gradi-4 dashboard-card ">
                                    <div class="wt-card-wrap">
                                        <div class="wt-card-icon"><i class="far fa-bell"></i></div>
                                        <div class="wt-card-right wt-total-listing-bookmarked counter ">1</div>
                                        <div class="wt-card-bottom">
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
                       
                        

                     

                        <div class="col-lg-12 col-md-12 mb-4">
                            <div class="panel panel-default site-bg-white m-t30">
                                <div class="panel-heading wt-panel-heading p-a20">
                                    <h4 class="panel-tittle m-a0"><i class="far fa-list-alt"></i>Recent Activities</h4>
                                </div>
                                <div class="panel-body wt-panel-body">
                                    
                                    <div class="dashboard-list-box list-box-with-icon">
                                        <ul>
                                            <li>
                                                <i class="fa fa-envelope text-success list-box-icon"></i>Nikol Tesla has sent you <a href="#" class="text-success">private message!</a>
                                                <a href="#" class="close-list-item color-lebel clr-red">
                                                    <i class="far fa-trash-alt"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <i class="fa fa-suitcase text-primary list-box-icon"></i>Your job for  
                                                <a href="#" class="text-primary">Web Designer</a>
                                                has been approved!
                                                <a href="#" class="close-list-item color-lebel clr-red">
                                                    <i class="far fa-trash-alt"></i>
                                                </a>
                                            </li>
                                                
                                            <li>
                                                <i class="fa fa-bookmark text-warning list-box-icon"></i>
                                                Someone bookmarked your
                                                <a href="#" class="text-warning">SEO Expert</a> 
                                                Job listing! 
                                                <a href="#" class="close-list-item color-lebel clr-red">
                                                    <i class="far fa-trash-alt"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <i class="fa fa-tasks text-info list-box-icon"></i>
                                                Your job listing Core
                                                <a href="#" class="text-info">PHP Developer</a> for Site Maintenance is expiring! 
                                                <a href="#" class="close-list-item color-lebel clr-red">
                                                    <i class="far fa-trash-alt"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <i class="fa fa-paperclip text-success list-box-icon"></i>
                                                You have new application for
                                                <a href="#" class="text-success"> UI/UX Developer & Designer! </a>
                                                <a href="#" class="close-list-item color-lebel clr-red">
                                                    <i class="far fa-trash-alt"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <i class="fa fa-suitcase text-danger list-box-icon"></i>
                                                Your Magento Developer job expire  
                                                <a href="#" class="text-danger">Renew</a>  now it.
                                                <a href="#" class="close-list-item color-lebel clr-red">
                                                    <i class="far fa-trash-alt"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <i class="fa fa-star site-text-orange list-box-icon"></i> 
                                                David cope left a 
                                                <a href="#" class="site-text-orange"> review 4.5</a> for Real Estate Logo
                                                <a href="#" class="close-list-item color-lebel clr-red">
                                                    <i class="far fa-trash-alt"></i>
                                                </a>
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

        <!--Delete Profile Popup-->
        <div class="modal fade twm-model-popup" id="delete-dash-profile" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"  aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h4 class="modal-title">Do you want to delete your profile?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="site-button" data-bs-dismiss="modal">No</button>
                    <button type="button" class="site-button outline-primary">Yes</button>
                </div>
            </div>
            </div>
        </div>


        <!--Logout Profile Popup-->
        <div class="modal fade twm-model-popup" id="logout-dash-profile" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h4 class="modal-title">Do you want to Logout your profile?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="site-button" data-bs-dismiss="modal">No</button>
                    <button type="button"  class="site-button outline-primary"><a href="<?php echo base_url(); ?>Auth/Company_login/logout">Yes</button></a>
                </div>
            </div>
            </div>
        </div>
          

	</div>


<!-- JAVASCRIPT  FILES ========================================= --> 
<script  src="<?php echo base_url(); ?>assets/js/jquery-3.6.0.min.js"></script><!-- JQUERY.MIN JS -->
<script  src="<?php echo base_url(); ?>assets/js/popper.min.js"></script><!-- POPPER.MIN JS -->
<script  src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script  src="<?php echo base_url(); ?>assets/js/magnific-popup.min.js"></script><!-- MAGNIFIC-POPUP JS -->
<script  src="<?php echo base_url(); ?>assets/js/waypoints.min.js"></script><!-- WAYPOINTS JS -->
<script  src="<?php echo base_url(); ?>assets/js/counterup.min.js"></script><!-- COUNTERUP JS -->
<script  src="<?php echo base_url(); ?>assets/js/waypoints-sticky.min.js"></script><!-- STICKY HEADER -->
<script  src="<?php echo base_url(); ?>assets/js/isotope.pkgd.min.js"></script><!-- MASONRY  -->
<script  src="<?php echo base_url(); ?>assets/js/imagesloaded.pkgd.min.js"></script><!-- MASONRY  -->
<script  src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script><!-- OWL  SLIDER  -->
<script  src="<?php echo base_url(); ?>assets/js/theia-sticky-sidebar.js"></script><!-- STICKY SIDEBAR  -->
<script  src="<?php echo base_url(); ?>assets/js/lc_lightbox.lite.js" ></script><!-- IMAGE POPUP -->
<script  src="<?php echo base_url(); ?>assets/js/bootstrap-select.min.js"></script><!-- Form js -->
<script  src="<?php echo base_url(); ?>assets/js/dropzone.js"></script><!-- IMAGE UPLOAD  -->
<script  src="<?php echo base_url(); ?>assets/js/jquery.scrollbar.js"></script><!-- scroller -->
<script  src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script><!-- scroller -->
<script  src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script><!-- Datatable -->
<script  src="<?php echo base_url(); ?>assets/js/dataTables.bootstrap5.min.js"></script><!-- Datatable -->
<script  src="<?php echo base_url(); ?>assets/js/chart.js"></script><!-- Chart -->
<script  src="<?php echo base_url(); ?>assets/js/bootstrap-slider.min"></script><!-- Price range slider -->
<script  src="<?php echo base_url(); ?>assets/js/swiper-bundle.min"></script><!-- Swiper JS -->
<script  src="<?php echo base_url(); ?>assets/js/custom.js"></script><!-- CUSTOM FUCTIONS  -->




</script>

</body>

</html>
