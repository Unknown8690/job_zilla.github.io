  
            <!-- INNER PAGE BANNER END -->


            <!-- OUR BLOG START -->
            <div class="section-full p-t120  p-b90 site-bg-white">
                

                <div class="container">
                    <div class="row">
                        
                        <div class="col-xl-3 col-lg-4 col-md-12 rightSidebar m-b30">

                            <div class="side-bar-st-1">
                                
                                <div class="twm-candidate-profile-pic">
                                    
                                    <img src="<?php echo base_url(); ?>assets/images/user-avtar/pic4.jpg" alt="">
                                    <div class="upload-btn-wrapper">
                                        
                                        <div id="upload-image-grid"></div>
                                        
                                        <input type="file" name="myfile" id="file-uploader" accept=".jpg, .jpeg, .png">
                                    </div>
                               
                                </div>
                                <div class="twm-mid-content text-center">
                                    <a href="candidate-detail.html" class="twm-job-title">
                                        <h4><?php echo $this->session->userdata('user_name'); ?></h4>
                                    </a>
                                    <p></p>
                                </div>
                             
                                <div class="twm-nav-list-1">
                                    <ul>
                                        <li><a href="<?php echo base_url(); ?>Dash"><i class="fa fa-tachometer-alt"></i> Dashboard</a></li>
                                        <li><a href="<?php echo base_url(); ?>Profile" onClick="profilename(<?php echo $this->session->userdata('Id'); ?>)"><i class="fa fa-user"></i> My Pfofile</a></li>
                                        <li><a href="<?php echo base_url(); ?>Job/managejob"><i class="fa fa-suitcase"></i>Applied Jobs</a></li>
                                       
                                        
                                        
                                   
               
                                        <li><a href="<?php echo base_url(); ?>Auth/Login/logout"><i class="fa fa-share-square"></i>Logout</a></li>
                                    </ul>
                                </div>
                                
                            </div>

                        </div>
