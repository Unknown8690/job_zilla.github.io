<style>
    .inst-clr{
  background-color: #fb3958 !important;
  background-color: rgb(251, 57, 88)!important;
}
</style>
        <!-- CONTENT START -->
        <div class="page-content">

            <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url(http://localhost/Myproject3/assets/images/banner/1.jpg);">
                <div class="overlay-main site-bg-white opacity-01"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                        <div class="banner-title-outer">
                            <div class="banner-title-name">
                                <h2 class="wt-title">Job Details</h2>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW -->                            
                        
                            <div>
                                <ul class="wt-breadcrumb breadcrumb-style-2">
                                    <li><a href="<?php echo base_url(); ?>Dash"></a></li>
                                    <li>Job Detail</li>
                                </ul>
                            </div>
                        
                        <!-- BREADCRUMB ROW END -->                        
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->
                                   <?php 
                                       foreach($fetch->result() as $row)
                                       { 
                                       ?>


            <!-- OUR BLOG START -->
            <div class="section-full  p-t120 p-b90 bg-white">
                <div class="container">
                
                    <!-- BLOG SECTION START -->
                    <div class="section-content">
                        <div class="row d-flex justify-content-center">
                        
                            <div class="col-lg-8 col-md-12">
                                <!-- Candidate detail START -->
                                <div class="cabdidate-de-info">
                                    <div class="twm-job-self-wrap">
                                        <div class="twm-job-self-info">
                                            <div class="twm-job-self-top">
                                                <div class="twm-media-bg">
                                                    <img src="<?php echo base_url(); ?>assets/images/job-detail-bg.jpg" alt="#">
                                                  
                                                     <div class="twm-right-content">
                                                <?php if($row->job_type == 1):?>
                                                <div class="twm-jobs-category " ><span class="twm-bg-green"  id="job_type<?php echo $row->job_type; ?>"><?php echo $row->job_type_Name; ?></span></div>
                                            <?php endif; ?>
                                              <?php if($row->job_type == 2):?>
                                                <div class="twm-jobs-category " ><span class="twm-bg-purple"  id="job_type<?php echo $row->job_type; ?>"><?php echo $row->job_type_Name; ?></span></div>
                                            <?php endif; ?>
                                              <?php if($row->job_type == 3):?>
                                                <div class="twm-jobs-category " ><span class="twm-bg-sky"  id="job_type<?php echo $row->job_type; ?>"><?php echo $row->job_type_Name; ?></span></div>
                                            <?php endif; ?>
                                             <?php if($row->job_type == 4):?>
                                                <div class="twm-jobs-category " ><span class="twm-bg-golden"  id="job_type<?php echo $row->job_type; ?>"><?php echo $row->job_type_Name; ?></span></div>
                                            <?php endif; ?>
                                            <?php if($row->job_type == 5):?>
                                                <div class="twm-jobs-category " ><span class="twm-bg-brown"  id="job_type<?php echo $row->job_type; ?>"><?php echo $row->job_type_Name; ?></span></div>
                                            <?php endif; ?>
                                                
                                               
                                            </div>
                                                </div>
                                                
                                                
                                                <div class="twm-mid-content">

                                                    <div class="twm-media">
                                                        <img src="<?php echo base_url(); ?>assets/images/jobs-company/pic1.jpg" alt="#">
                                                    </div>

                                                    <h4 class="twm-job-title"><?php echo $row->job_title; ?><span class="twm-job-post-duration">/ 1 days ago</span></h4>
                                                    <p class="twm-job-address"><i class="feather-map-pin"></i><?php echo $row->location; ?>,<?php echo $row->state_name; ?>,<?php echo $row->city_name; ?>,<?php echo $row->pincode ?></p>
                                                    <div class="twm-job-self-mid">
                                                        <div class="twm-job-self-mid-left">
                                                            <a href="<?php echo $row->company_link; ?>" class="twm-job-websites site-text-primary"><?php echo $row->company_link; ?></a>
                                                            <div class="twm-jobs-amount"><?php echo $row->salary; ?> <span>/ Month</span></div>
                                                        </div>
                                                        <div class="twm-job-apllication-area">Application ends:
                                                            <span class="twm-job-apllication-date"><?php echo $row->end_date; ?></span>
                                                        </div>
                                                    </div>

                                                    <div class="twm-job-self-bottom">
                                                        <?php if($this->session->userdata('user_type') == 'user'): ?>
                                                        <a class="site-button"  href="<?php echo base_url(); ?>Job/apply?Ids=<?php echo $row->Id; ?>&Id=<?php echo $row->refer_id; ?>" role="button">
                                                            Apply Now
                                                        </a>
                                                    <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>

                                    <h4 class="twm-s-title">Job Description:</h4>

                                    <p><?php echo $row->discription; ?>                                    </p>
                                     <h4 class="twm-s-title">Requirments:</h4>
                                    <?php } ?>
                                    <?php foreach($fetchre->result() as $rw) 
                                    { 
                                        ?>
                                    
                                    
                                    <ul class="description-list-2">
                                        <li>
                                            <i class="feather-check"></i>
                                            <?php echo $rw->Requirments; ?>
                                        </li>
                                       

                                    </ul>
                                 <?php } ?>
                                 
                                    <h4 class="twm-s-title">Responsabilities:</h4>
                                    <?php foreach($fetchrer->result() as $rw) 
                                    { 
                                        ?>
                                    <ul class="description-list-2">
                                        <li>
                                            <i class="feather-check"></i>
                                            <?php echo $rw->Responsabilities; ?>
                                        </li>
                                        

                                    </ul>
                                <?php } ?>
                                  <?php
                                  foreach($fetchlink->result() as $rw)
                                  {
                                    ?>
                                    <h4 class="twm-s-title">Share Profile</h4>
                                    <div class="twm-social-tags">
                                        <a href="<?php echo $rw->instagram; ?>" target="_blank" class="inst-clr" >Instagram</a>
                                        <a href="<?php echo $rw->facebook; ?>" target="_blank" class="fb-clr">Facebook</a>
                                        <a href="<?php echo $rw->twitter; ?>" target="_blank" class="tw-clr">Twitter</a>
                                        <a href="<?php echo $rw->Linkdin; ?>" target="_blank" class="link-clr">Linkedin</a>                                            
                                        <a href="<?php echo $rw->whatsapp; ?>" target="_blank" class="whats-clr">Whatsapp</a>
                                        <a href="<?php echo $rw->printser; ?>" target="_blank" class="pinte-clr">Pinterest</a>
                                        
                                    </div>

                                   
                                    <?php } ?>
                                    <div class="twm-two-part-section">
                                        <div class="row">

                                           
                                        </div>
                                    </div>

                                    
                                </div>
                            </div>
                            
                            <div class="col-lg-4 col-md-12 rightSidebar">

                                <div class="side-bar mb-4">
                                    <div class="twm-s-info2-wrap mb-5">
                                        <div class="twm-s-info2">
                                            <h4 class="section-head-small mb-4">Job Information</h4>
                                            <ul class="twm-job-hilites">
                                         
                                            <ul class="twm-job-hilites2">
    
                                                <li>
                                                    <div class="twm-s-info-inner">
                                                        <i class="fas fa-calendar-alt"></i>
                                                        <span class="twm-title">Date Posted</span>
                                                        <div class="twm-s-info-discription" id="postdate"><?php echo $row->create_at; ?></div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="twm-s-info-inner">
                                                        <i class="fas fa-map-marker-alt"></i>
                                                        <span class="twm-title">Location</span>
                                                        <div class="twm-s-info-discription"><?php echo $row->state_name; ?>,<?php echo $row->city_name; ?>  </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="twm-s-info-inner">
                                                        <i class="fas fa-user-tie"></i>
                                                        <span class="twm-title">Job Title</span>
                                                        <div class="twm-s-info-discription"><?php echo $row->job_title; ?></div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="twm-s-info-inner">
                                                        <i class="fas fa-clock"></i>
                                                        <span class="twm-title">Experience</span>
                                                        <div class="twm-s-info-discription"><?php echo $row->job_title; ?></div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="twm-s-info-inner">
                                                        <i class="fas fa-suitcase"></i>
                                                        <span class="twm-title">Qualification</span>
                                                        <div class="twm-s-info-discription"><?php echo $row->qulification; ?> </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="twm-s-info-inner">
                                                        <i class="fas fa-venus-mars"></i>
                                                        <span class="twm-title">Gender</span>
                                                        <div class="twm-s-info-discription"><?php echo $row->gender; ?></div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="twm-s-info-inner">
                                                        
                                                        <i class="fas fa-money-bill-wave"></i>
                                                        <span class="twm-title">Offered Salary</span>
                                                        <div class="twm-s-info-discription"><?php echo $row->salary; ?> / Month</div>
                                                    </div>
                                                </li>
    
                                            </ul>
                                            
                                        </div>
                                    </div>
    
                             

                                <div class="twm-s-info3-wrap mb-5">
                                    <div class="twm-s-info3">
                                        <div class="twm-s-info-logo-section">
                                            <div class="twm-media">
                                                <img src="<?php echo base_url(); ?>assets/images/jobs-company/pic1.jpg" alt="#">
                                            </div>
                                            <h4 class="twm-title"><?php echo $row->job_title; ?></h4>
                                        </div>
                                        <ul>

                                            <li>
                                                <div class="twm-s-info-inner">
                                                    <i class="fas fa-building"></i>
                                                    <span class="twm-title">Company</span>
                                                    <div class="twm-s-info-discription"><?php echo $row->company_name; ?></div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="twm-s-info-inner">
                                                    <i class="fas fa-mobile-alt"></i>
                                                    <span class="twm-title">Phone</span>
                                                    <div class="twm-s-info-discription"><?php  echo $row->company_phone; ?></div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="twm-s-info-inner">
                                                    <i class="fas fa-at"></i>
                                                    <span class="twm-title">Email</span>
                                                    <div class="twm-s-info-discription"><?php  echo $row->comapny_email; ?></div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="twm-s-info-inner">
                                                    <i class="fas fa-desktop"></i>
                                                    <span class="twm-title">Website</span>
                                                    <div class="twm-s-info-discription"><a href="<?php echo $row->company_link; ?>"><?php echo $row->company_link; ?></a></div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="twm-s-info-inner">
                                                    <i class="fas fa-map-marker-alt"></i>
                                                    <span class="twm-title">Address</span>
                                                    <div class="twm-s-info-discription"><?php echo $row->company_address; ?></div>
                                                </div>
                                            </li>

                                        </ul>
                                        <?php if($this->session->userdata('user_type') == 'user'): ?>
                                        <?php 
                                       foreach($fetch->result() as $row)
                                       { 
                                       ?>
                                        <a href="<?php echo base_url(); ?>Job/apply?Ids=<?php echo $row->Id; ?>&Id=<?php echo $row->refer_id; ?>" onsubmit="" class=" site-button">Apply</a>
                                         <?php } ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                       <div class="twm-advertisment" style="background-image:url(http://localhost/MyProject3/assets/images/add-bg.jpg);">
                               <div class="overlay"></div>
                               <h4 class="twm-title">Recruiting?</h4>
                               <p>Get Best Matched Jobs On your <br>
                                Email. Add Resume NOW!</p>
                                <a href="about-1.html" class="site-button white">Read More</a> 
                            </div>

                                
    
                            </div>
                        
                        </div>
                                                
                    </div>
                    
                </div>
                
            </div>   
            <!-- OUR BLOG END -->          
            
     
        </div>
        <!-- CONTENT END -->
    