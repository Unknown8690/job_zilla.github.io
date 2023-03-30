<!-- CONTENT START -->
        <div class="page-content">


            <!-- Candidate Detail V2 START -->
            <div class="section-full p-b90 bg-white">
                <div class="twm-candi-self-wrap-2 overlay-wraper" style="background-image:url(images/candidates/candidate-bg2.jpg);">
                    <div class="overlay-main site-bg-primary opacity-01"></div>
                    <div class="container">
                        <div class="twm-candi-self-info-2">
                            <div class="twm-candi-self-top">
                                <div class="twm-candi-fee"><?php if(!empty($fetch)) echo $fetch['current_salary']; ?>/ Month</div>
                                <div class="twm-media">
                                    <img src="<?php echo base_url(); ?>assets/images/candidates/pic-l1.jpg" alt="#">
                                </div>
                                <div class="twm-mid-content">
                                    
                                    <h4 class="twm-job-title"><?php if(!empty($fetch)) echo $fetch['Name']; ?></h4>
                                    
                                    <p></p>
                                    <p class="twm-candidate-address"><i class="feather-map-pin"></i><?php if(!empty($fetch)) echo $fetch['state_name']; ?></p>
                                    
                                </div>
                            </div>
                            <div class="twm-ep-detail-tags">
                               <?php if($fetch['status'] != "Approved"):?>
                                <button class="de-info twm-bg-sky"><i class="fa fa-save"></i> Save</button>
                                <?php endif; ?>
                                <?php if($fetch['status'] != "Approved"):?>
                                 <form method="post" action="<?php echo base_url(); ?>EMP/Manage_candidate/shortlist?Id=<?php if(!empty($fetch)) echo ($fetch['user_id']) ; ?>">
                                    <input type="hidden" name="ok" value="Approved" >
                                <button type="submit" name="shortlist" class="de-info twm-bg-brown"><i class="fa fa-file-signature"></i> Shortlist</button>
                            <?php endif; ?>
                                </form>
                            </div>
                            <div class="twm-candi-self-bottom">
                                <a href="contact.html" class="site-button">Contact Us</a>
                                <a href="<?php if(!empty($fetch)) echo base_url($fetch['document']) ; ?>"target='_blank' class="site-button secondry">Download CV</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                
                   
                    <div class="section-content">
                        
                        <div class="row d-flex justify-content-center">
                      
                            <div class="col-lg-9 col-md-12">
                                <!-- Candidate detail START -->
                                <div class="cabdidate-de-info">

                                    <div class="twm-s-info-wrap mb-5">
                                        <h4 class="section-head-small mb-4">Profile Info</h4> 
                                        <div class="twm-s-info-4">
                                            <div class="row">

                                                <div class="col-md-6">
                                                    <div class="twm-s-info-inner">
                                                        <i class="fas fa-money-bill-wave"></i>
                                                        <span class="twm-title">Offered Salary</span>
                                                        <div class="twm-s-info-discription"><?php if(!empty($fetch)) echo $fetch['expected_salary']; ?></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="twm-s-info-inner">
                                                        <i class="fas fa-clock"></i>
                                                        <span class="twm-title">Experience</span>
                                                        <div class="twm-s-info-discription"><?php if(!empty($fetch)) echo $fetch['experience']; ?></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="twm-s-info-inner">
                                                        <i class="fas fa-venus-mars"></i>
                                                        <span class="twm-title">Gender</span>
                                                        <div class="twm-s-info-discription">Male</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="twm-s-info-inner">
                                                        <i class="fas fa-mobile-alt"></i>
                                                        <span class="twm-title">Phone</span>
                                                        <div class="twm-s-info-discription"><?php if(!empty($fetch)) echo $fetch['phone']; ?></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="twm-s-info-inner">
                                                        <i class="fas fa-at"></i>
                                                        <span class="twm-title">Email</span>
                                                        <div class="twm-s-info-discription"><?php if(!empty($fetch)) echo $fetch['email']; ?></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="twm-s-info-inner">
                                                        <i class="fas fa-book-reader"></i>
                                                        <span class="twm-title">Qualification</span>
                                                        <div class="twm-s-info-discription"><?php if(!empty($fetch)) echo $fetch['qulification']; ?></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="twm-s-info-inner">
                                                        
                                                        <i class="fas fa-map-marker-alt"></i>
                                                        <span class="twm-title">Address</span>
                                                        <div class="twm-s-info-discription"><?php if(!empty($fetch)) echo $fetch['address']; ?></div>
                                                    </div>
                                                </div>

                                            </div>
                                            
                                        </div>
                                    </div>
                                   
                                    <h4 class="twm-s-title m-t0">About Me</h4>

                                    <p></p>

                                    <p><?php if(!empty($fetch)) echo $fetch['description']; ?></p>

                            

                                

                                    <h4 class="twm-s-title">Work Experience</h4>
                                    <div class="twm-timing-list-wrap">
                                      <?php 
                                      foreach($experience->result() as $row)
                                      {
                                      ?>
                                        <div class="twm-timing-list">
                                            <div class="twm-time-list-title"><?php echo $row->company_name; ?></div>
                                            <div class="twm-time-list-date"><?php echo $row->start_date; ?> to <?php echo $row->end_date; ?></div>
                                            
                                            <div class="twm-time-list-position"><?php echo $row->Position; ?></div>
                                            <div class="twm-time-list-discription">
                                                <p><?php echo $row->description; ?></p>
                                            </div>
                                        </div>

                                   
<?php } ?>
                                     

                                    </div>

                                    <h4 class="twm-s-title">Education & Training</h4>
                                    <div class="twm-timing-list-wrap">
                                        <?php
                                         foreach($education->result() as $row)
                                         {
                                        ?>

                                        <div class="twm-timing-list">
                                            
                                            <div class="twm-time-list-title"><?php echo $row->title; ?></div>
                                            <div class="twm-time-list-date"><?php echo $row->start_date; ?> to <?php echo $row->end_date; ?></div>
                                            <div class="twm-time-list-position"><?php echo $row->university_name; ?></div>
                                            <div class="twm-time-list-discription">
                                                <p>Percentage:<?php echo $row->percentage; ?>
                                                </p>
                                            </div>
                                            <div class="twm-time-list-discription">
                                                <p>Class:<?php echo $row->class; ?>
                                                </p>
                                            </div>
                                            
                                        </div>

                                        

                                        <?php } ?>

                                    </div>

                                   

                                </div>
                               

                                    
    
                                   


                                    
    
                                    <div class="twm-s-contact-wrap mb-5">
                                        <h4 class="section-head-small mb-4">Contact us</h4> 
                                        <div class="twm-s-contact twm-s-contact-2">
                                            <div class="row">

                                                <div class="col-lg-12">
                                                    <div class="form-group mb-3">
                                                        <input name="username" type="text" required class="form-control" placeholder="Name">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-12">
                                                    <div class="form-group mb-3">
                                                        <input name="email" type="text" class="form-control" required placeholder="Email">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-12">
                                                    <div class="form-group mb-3">
                                                        <input name="phone" type="text" class="form-control" required placeholder="Phone">
                                                    </div>
                                                </div>
                                                
                                                
                                                <div class="col-lg-12">
                                                    <div class="form-group mb-3">
                                                        <textarea name="message" class="form-control" rows="3" placeholder="Message"></textarea>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-12">
                                                    <button type="submit" class="site-button">Submit Now</button>
                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
    
                               
                                                           
                            </div>
                            
                            
                        
                        </div>
                                                
                    </div>
                    
                </div>
                
            </div>   
            <!-- Candidate Detail V2 END -->          
            
     
        </div>
        <!-- CONTENT END -->