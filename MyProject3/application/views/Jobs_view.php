  <!-- CONTENT START -->
        <div class="page-content">

            <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url(http://localhost/MyProject3/assets/images/banner/1.jpg);">
                <div class="overlay-main site-bg-white opacity-01"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                        <div class="banner-title-outer">
                            <div class="banner-title-name">
                                <h2 class="wt-title">The Most Exciting Jobs</h2>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW -->                            
                        
                            <div>
                                <ul class="wt-breadcrumb breadcrumb-style-2">
                                    <li><a href="<?php echo base_url(); ?>">Home</a></li>
                                    <li>Jobs List</li>
                                </ul>
                            </div>
                        
                        <!-- BREADCRUMB ROW END -->                        
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->


            <!-- OUR BLOG START -->
            <div class="section-full p-t120  p-b90 site-bg-white">
                

                <div class="container">
                    <div class="row">
                        
                        <div class="col-lg-4 col-md-12 rightSidebar">

                            <div class="side-bar">

                                <div class="sidebar-elements search-bx">
                                                                            
                                    <form method="post" action="<?php echo base_url() ?>Job">
                                         <div class="form-group mb-4">
                                            <h4 class="section-head-small mb-4" >From Date</h4>
                                            <input type="text" class="form-control" name="fromdate" id="datepicker" placeholder="yy-mm-dd" value="<?php echo $fromdate; ?>">
                                        </div>
                                        <div class="form-group mb-4">
                                            <h4 class="section-head-small mb-4">To Date</h4>
                                            <input type="text" class="form-control" id="datepicker1" placeholder="yy-mm-dd"  name="todate" value="<?php echo $todate; ?>">
                                        </div>
                                        <div class="form-group mb-4">
                                            <h4 class="section-head-small mb-4">Category</h4>
                                            <select class="wt-select-bar-large selectpicker" name="catname"  data-live-search="true" data-bv-field="size">
                                                <option value="">Select Category</option>
                                             <?php
                                                foreach($cat->result() as $row) 
                                                    {
                                                       echo '<option value="'.$row->Id.'">'.$row->cat_name.'</option>';
                                                    }

                                                ?>
                                            </select>
                                        </div>

                                        <div class="form-group mb-4">
                                            <h4 class="section-head-small mb-4">Keyword</h4>
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="Keyword" placeholder="Job Title or Keyword">
                                                <button class="btn" type="button"><i class="feather-search"></i></button>
                                            </div>
                                        </div>

                                        <div class="form-group mb-4">
                                            <h4 class="section-head-small mb-4">Location</h4>
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="location" placeholder="Search location">
                                                <button class="btn" type="button"><i class="feather-map-pin"></i></button>
                                            </div>
                                        </div>

                                        

                                       

                                        <div class="twm-sidebar-ele-filter">
                                            <h4 class="section-head-small mb-4">Type of employment</h4>
                                            <select class="wt-select-bar-large selectpicker" name="type"  data-live-search="true" data-bv-field="size">
                                                <option value="">Select Type</option>
                                                <option value="">Freelance</option>
                                                <option value="1">Full Time</option>
                                                <option value="Intership">Intership</option>
                                                <option value="2">Part Time</option>
                                            </select>
                                            
                                        </div>
                                          <div class="form-group mb-4">
                                            <div class="form-group col-xl-3 col-lg-6 col-md-6">
                                            <button type="submit" name="btnsubmit" class="site-button">Submit</button>
                                        </div>
                                        </div>
                                        
                                    </form>
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

<div class="col-lg-8 col-md-12">
                            <!--Filter Short By-->
                        
                                
                               
                               <div class="row">
                                
                       </div>

                         

                                     <?php 
                                       foreach($fetch->result() as $row)
                                       { 
                                       ?>
                                       <!----------hidden for job details----------->
                                       <div id="tbody">
                                        <tr>
                                       <input type="hidden" name="hidpostdate<?php echo $row->Id?>" value="<?php echo $row->create_at; ?>">
                                        <div class="twm-jobs-list-style1 mb-5">
                                            <div class="twm-media">
                                                <img src="<?php echo base_url(); ?>assets/images/jobs-company/pic1.jpg" alt="#">
                                            </div>
                                            <div class="twm-mid-content">
                                                <a href="job-detail.html" class="twm-job-title">
                                                    <h4><?php echo $row->job_title; ?><span class="twm-job-post-duration">/ 1 days ago</span></h4>
                                                </a>
                                                <p class="twm-job-address"></p><?php echo $row->location; ?></p>
                                                <a href="<?php echo $row->company_link; ?>" class="twm-job-websites site-text-primary"><?php echo $row->company_link; ?></a>
                                            </div>
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
                                                <div class="twm-jobs-amount"><?php echo $row->salary; ?><span>/ Month</span></div>
                                                <a href="<?php echo base_url(); ?>Job/jobdetail?Id=<?php  echo $row->Id ?> " class="twm-jobs-browse site-text-primary">Browse Job</a>
                                            </div>
                                        </div>
                                     
                                     </tr>
                                    </div>
                                        
                                        <?php } ?>
                                       
    
                                  
                                </div>
                                
                            </div>

                        </div>

                    </div>
                </div>
            </div>   
            <!-- OUR BLOG END -->
    
     
        </div>
 
        <!-- CONTENT END -->

      <script type="text/javascript">
            $(document).ready(function(){
  
                  alert('hii');
                 
                     $("#job_type1").removeClass();
                  
               
                  
                      $("#job_type1").addClass('twm-bg-purple');
                  
                });

 

          // INCLUDE JQUERY & JQUERY UI 1.12.1
          $(function () {
            $("#datepicker").datepicker({
              dateFormat: "yy-mm-dd"
              , duration: "fast"
            });
          });
       
          // INCLUDE JQUERY & JQUERY UI 1.12.1
          $(function () {
            $("#datepicker1").datepicker({
              dateFormat: "yy-mm-dd"
              , duration: "fast"
            });
          });
        </script>
                  
     
