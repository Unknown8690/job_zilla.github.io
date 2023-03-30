
        <!-- CONTENT START -->
        <div class="page-content">

            <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url(http://localhost/Myproject3/assets/images/banner/1.jpg);">
                <div class="overlay-main site-bg-white opacity-01"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                        <div class="banner-title-outer">
                            <div class="banner-title-name">
                                <h2 class="wt-title">Apply For This Job</h2>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW -->                            
                        
                            <div>
                                <ul class="wt-breadcrumb breadcrumb-style-2">
                                    <li><a href="index.html">Home</a></li>
                                    <li>Apply For This Job</li>
                                </ul>
                            </div>
                        
                        <!-- BREADCRUMB ROW END -->                        
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->

            <!-- Employer Account START -->
            <div class="section-full p-t120  site-bg-white bg-cover twm-ac-fresher-wrap" style="background-image:url(images/background/pattern.jpg)">
                

                <div class="container">
                    <div class="row d-flex justify-content-center">
                        
                        <div class="col-lg-8 col-md-12">
                            <div class="twm-right-section-panel-wrap2">
                                <!--Filter Short By-->
                                <div class="twm-right-section-panel site-bg-primary">
                                    
                                    <!--Basic Information-->
                                    <div class="panel panel-default">
                                        <div class="panel-heading wt-panel-heading p-a20">
                                            <h4 class="panel-tittle m-a0">Apply For This Job</h4>
                                        </div>
                                        <div class="panel-body wt-panel-body p-a20 ">

                                            

                                            <div class="twm-tabs-style-1">
                                                    
                                                <div class="row">
                                                        <div class="col-xl-12 col-lg-12 col-md-12">
                                                            <div class="form-group">
                                                                <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>job/apply">
                                                                    <input type="hidden" name="job_id" value="<?php echo $Ids; ?>">
                                                                    <input type="hidden" name="company_id" value="<?php echo $Id; ?>">
                                                                <label>Your Name</label>
                                                                <div class="ls-inputicon-box"> 
                                                                    <input class="form-control" value="<?php if(!empty($fetch)) echo $fetch['Name']; ?>" name="Name" type="text" placeholder="Name">
                                                                    <i class="fs-input-icon fa fa-user "></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12 col-lg-12 col-md-12">
                                                            <div class="form-group">
                                                                <label>Email Address</label>
                                                                <div class="ls-inputicon-box"> 
                                                                    <input class="form-control" value="<?php if(!empty($fetch)) echo $fetch['email']; ?>" name="Email" type="email" placeholder="Devid@example.com">
                                                                    <i class="fs-input-icon fas fa-at"></i>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label>Message</label>
                                                                <textarea class="form-control" name="Message" rows="3" placeholder="Message sent to the employer"></textarea>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-lg-12 col-md-12">
                                                            <div class="form-group">
                                                                <label>Upload Resume</label><small style="color: red;">&nbsp;*Inster Only Pdf and Word File</small><br>
                                                                <input type="file" name="uploadfile" placeholder="Upload Resume">
                                                               
                                                            </div>                                    
                                                        </div>

                                                    
                                                                        
                                                        <div class="col-xl-12 col-lg-12 col-md-12"> 
                                                            <div class="text-left">
                                                                <button type="submit" name="btnapply" class="site-button">Send Application</button>
                                                                

                                                            </div>
                                                        </div> 
                                                        
                                                      </form>
                                                        
                                                </div>
                                                
                                            </div>  

                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
               <center> <small>If you do not have a Account than first made Account<a class="site-text-primary" href="<?php echo base_url(); ?>Auth/Registration">&nbsp;Click here</a></small></center>
                <span class="twm-section-bg-img2">
                    <img src="images/apply-job-bg.png" alt="">
                </span>

            </div>   
             <!-- Employer Account START END -->
          
            
     
        </div>
        <!-- CONTENT END -->