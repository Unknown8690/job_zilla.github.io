 
 <div id="content">

            <div class="content-admin-main">

            	<div class="wt-admin-right-page-header clearfix">
                    <h2>Company Profile!</h2>
                    <div class="breadcrumbs"><a href="#">Home</a><a href="#">Dasboard</a><span>Company Profile!</span></div>
                </div>

                <!--Logo and Cover image-->
                <div class="panel panel-default">
                    <div class="panel-heading wt-panel-heading p-a20">
                        <h4 class="panel-tittle m-a0">Logo image</h4>
                    </div>
                    <div class="panel-body wt-panel-body p-a20 p-b0 m-b30 ">
                        
                        <div class="row">
                                
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                <form action="<?php echo base_url();  ?>EMP/Dash/profile" method="post" enctype="multipart/form-data">
                                    <div class="dashboard-profile-pic">
                                        <div class="dashboard-profile-photo">
                                            <img src="<?php if(!empty($viewjob)) echo base_url($viewjob['image']); ?><?php if(empty($viewjob['image'])) echo base_url('assets/images/jobs-company/pic1.jpg'); ?>" alt="">
                                            <div class="upload-btn-wrapper">
                                                <div id="upload-image-grid"></div>
                                                <button class="site-button button-sm">Upload Photo</button>
                                                <input type="file" name="uploadfile" id="fileuploader" accept=".jpg, .jpeg, .png">
                                            </div>
                                        </div>
                                        <input type="hidden" name="hidcom" value="<?php if(!empty($viewjob)) echo base_url($viewjob['company_id']); ?><?php if(empty($viewjob)) echo "hii"; ?>">
                                        <p><b>Company Logo :- </b> Max file size is 1MB, Minimum  : 136 x 136 And Suitable files are .jpg & .png</p>
                                    </div>

                                </div> 
                            </div>

                           

                        </div>
                                    
                    </div>
                </div> 

                <!--Basic Information-->
                <div class="panel panel-default">
                    <div class="panel-heading wt-panel-heading p-a20">
                        <h4 class="panel-tittle m-a0">Basic Informations</h4>
                    </div>
                    <div class="panel-body wt-panel-body p-a20 m-b30 ">

                            <div class="row">
                                                
                                    <div class="col-xl-4 col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label>Company Name</label>
                                            <div class="ls-inputicon-box"> 
                                                <input class="form-control" value="<?php if(!empty($viewjob)) echo $viewjob['company_name']; ?>" name="company_name" type="text" placeholder="Devid Smith">
                                                <i class="fs-input-icon fa fa-user "></i>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-xl-4 col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <div class="ls-inputicon-box"> 
                                                <input class="form-control" value="<?php if(!empty($viewjob)) echo $viewjob['company_phone']; ?>" name="company_phone" type="text" placeholder="(251) 1234-456-7890">
                                                <i class="fs-input-icon fa fa-phone-alt"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-4 col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label>Email Address</label>
                                            <div class="ls-inputicon-box"> 
                                                <input class="form-control" value="<?php if(!empty($viewjob)) echo $viewjob['company_email']; ?>" name="company_Email" type="email" placeholder="Devid@example.com">
                                                <i class="fs-input-icon fa fa-envelope"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-4 col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label>Website</label>
                                            <div class="ls-inputicon-box"> 
                                                <input class="form-control" value="<?php if(!empty($viewjob)) echo $viewjob['company_website']; ?>" name="company_website" type="text" placeholder="https://.../">
                                                <i class="fs-input-icon fa fa-globe-americas"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-4 col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label>Est. Since</label>
                                            <div class="ls-inputicon-box"> 
                                                <input class="form-control" value="<?php if(!empty($viewjob)) echo $viewjob['est']; ?>" name="company_since" type="text" placeholder="Since...">
                                                <i class="fs-input-icon fa fa-globe-americas"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-4 col-lg-12 col-md-12">
                                        <div class="form-group city-outer-bx has-feedback">
                                            <label>Team Size</label>
                                            <div class="ls-inputicon-box">  
                                                <select class="wt-select-box selectpicker" name="teamsize" data-live-search="true" title="teamsize" id="city" data-bv-field="size">
                                                    <option class="bs-title-option" value="">5-10</option>
                                                    <option class="" value="">10+</option>
                                                    <option class="" value="">20+</option>
                                                    <option class="" value="">50+</option>
                                                </select>
                                                <i class="fs-input-icon fa fa-sort-numeric-up"></i>
                                            </div>
                                            
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" value="<?php if(!empty($viewjob)) echo $viewjob['description']; ?>" name="Description" rows="3" placeholder="Greetings! We are Galaxy Software Development Company."></textarea>
                                        </div>
                                    </div>
                                   
                                                                                                
                                    <div class="col-lg-12 col-md-12">                                   
                                        <div class="text-left">
                                            <button type="submit" name="submit" class="site-button">Save Changes</button>
                                        </div>
                                    </div> 
                                                                        
                                
                            </div>
                       </form>             
                    </div>
                </div>

                <!--Photo gallery-->
                

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
<script  src="<?php echo base_url(); ?>assets/js/main.js"></script>         
                                                                                    
                                                  
                                
             

       

    