   

   <style type="text/css">
    .btn-danger
    {
        background: red!important;
    }
</style>  
      <!-- Page Content Holder -->
        <div id="content">

            <div class="content-admin-main">

                <div class="wt-admin-right-page-header clearfix">
                    <h2>Post a Job</h2>
                    <div class="breadcrumbs"><a href="#">Home</a><a href="#">Dasboard</a><span>Job Submission Form</span></div>
                </div>

                <!--Basic Information-->
                <div class="panel panel-default">
                    <div class="panel-heading wt-panel-heading p-a20">

      <?php
           if($this->session->flashdata("message") != "")
           {?>
            <div class="alert alert-success" id="alertmessage" role="alert"
  id="alert-success"
  role="alert"
  data-mdb-color="success"
  data-mdb-position="top-right"
  data-mdb-stacking="true"
  data-mdb-width="535px"
  data-mdb-width="535px"
  data-mdb-append-to-body="true"
  data-mdb-hidden="true"
  data-mdb-autohide="true"
  data-mdb-delay="2000">
                 
             
                 <strong class="d-block d-sm-inline-block-force"><?php echo $this->session->flashdata("message"); ?></strong>
             </div>
          
           <?php }

            ?>
                        <h4 class="panel-tittle m-a0"><i class="fa fa-suitcase"></i>Job Details</h4>
                    </div>
                    <div class="panel-body wt-panel-body p-a20 m-b30 ">
                        <form method="post" action="<?php echo base_url();?>EMP/Dash/postjob">




                                

                            <div class="row">
                                    <!--Job title-->            
                                    <div class="col-xl-4 col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label>Job Title</label>
                                            <div class="ls-inputicon-box"> 
                                                 <input type="hidden" id="hidgetcity" value="<?php echo base_url(); ?>Dash/getCities">
                                                 <input type="hidden" name="hiddenpostno" value="<?php if(!empty($job_id))echo $job_id; ?><?php if(empty($job_id))echo 'Hii'; ?>">
                                                <input class="form-control" value="<?php if(!empty($fetch)) echo $fetch['job_title']; ?>"  name="jobtitle" type="text" placeholder="Job Title">
                                                <i class="fs-input-icon fa fa-address-card"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Job Category--> 
                                    <div class="col-xl-4 col-lg-6 col-md-12">
                                        <div class="form-group city-outer-bx has-feedback">
                                            <label>Job Category</label>
                                            <div class="ls-inputicon-box">  
                                                <select type="option" class="wt-select-box selectpicker "  data-live-search="true" title="" id="j-jobcat" name="jobcat" data-bv-field="size">
                                                    <option value="<?php if(!empty($fetch)) echo $fetch['job_cat']; ?>"><?php if(!empty($fetch)) echo $fetch['cat_name']; ?><?php if(empty($fetch)) echo 'Select Category'; ?></option>
                                                     <?php foreach($category->result() as $row)
                                                     {
                                                        echo '<option value="'.$row->Id.'">'.$row->cat_name.'</option>';
                                                     }


                                                      ?>
                                                </select>
                                                <i class="fs-input-icon fa fa-border-all"></i>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                    <!--Job Type--> 
                                    <div class="col-xl-4 col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label>Job Type</label>
                                            <div class="ls-inputicon-box">  
                                                <select type="option" class="wt-select-box selectpicker"   data-live-search="true" title="" id="s-category" name="jobtype" data-bv-field="size">
                                                    <option class="bs-title-option" value="<?php if(!empty($fetch)) echo $fetch['job_type']; ?>"><?php if(!empty($fetch)) echo $fetch['job_type_Name']; ?><?php if(empty($fetch)) echo 'Select Option'; ?></option>
                                                    <?php 
                                                     foreach($cat_job->result() as $row)
                                                     {
                                                          echo '<option value="'.$row->Id.'">'.$row->job_type_Name.'</option>';
                                                     }
                                                    ?>
                                                </select>
                                                <i class="fs-input-icon fa fa-file-alt"></i>
                                            </div>
                                        </div>
                                    </div>


                                    <!--Offered Salary--> 
                                    <div class="col-xl-4 col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label>Offered Salary</label>
                                            <div class="ls-inputicon-box">  
                                                <select type="option"  name="salary" class="wt-select-box selectpicker"   data-live-search="true" title="" id="salary" data-bv-field="size">
                                                    <option class="bs-title-option" value="<?php if(!empty($fetch)) echo $fetch['salary']; ?>"><?php if(!empty($fetch)) echo $fetch['salary']; ?><?php if(empty($fetch)) echo 'Select Option'; ?></option>
                                                    <option value="₹5000-₹10,000">₹5000-₹10,000</option>
                                                    <option value="₹10,000-₹20,000">₹10,000-₹20,000</option>
                                                    <option value="₹20,000-₹30,00">₹20,000-₹30,000</option>
                                                    <option value="₹30,000-₹40,000">₹30,000-₹40,000</option>
                                                    <option value="₹40,000-₹50,000">₹40,000-₹50,000</option>
                                                     <option value="₹60,000-₹70,00">₹60,000-₹70,000</option>
                                                    <option value="₹70,000-₹80,000">₹70,000-₹80,000</option>
                                                    <option value="₹80,000-₹90,000">₹80,000-₹90,000</option>
                                                    <option value="₹100000-₹110000">₹100000-₹110000</option>
                                                     <option value="₹120000-₹130000">₹120000-₹130000</option>
                                                    <option value="₹130000-₹140000">₹130000-₹140000</option>
                                                    <option value="₹140000-₹150000">₹140000-₹150000</option>
                                                    <option value="₹160000-₹170000">₹160000-₹170000</option>
                                                    <option value="₹180000-₹190000">₹180000-₹190000</option>
                                                    <option value="₹200000-₹210000">₹200000-₹210000</option>
                                                    <option value="₹210000-₹220000">₹210000-₹220000</option>
                                                    <option value="₹220000-₹230000">₹220000-₹230000</option>
                                                    <option value="₹230000-₹240000">₹230000-₹240000</option>
                                                    <option value="₹240000-₹250000">₹240000-₹250000</option>
                                                    <option value="₹300000-more">₹300000-more</option>
                                                </select>
                                                <i class="fs-input-icon fa fa-dollar-sign"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Experience--> 
                                    <div class="col-xl-4 col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label>Experience</label>
                                            <div class="ls-inputicon-box"> 
                                                <input class="form-control" value="<?php if(!empty($fetch)) echo $fetch['experience']; ?>" name="Experience" type="text" placeholder="E.g. Minimum 3 years">
                                                <i class="fs-input-icon fa fa-user-edit"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Qualification--> 
                                    <div class="col-xl-4 col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label>Qualification</label>
                                            <div class="ls-inputicon-box"> 
                                                <input  class="form-control" value="<?php if(!empty($fetch)) echo $fetch['qulification']; ?>" name="Qualification" type="text" placeholder="Qualification Title">
                                                <i class="fs-input-icon fa fa-user-graduate"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Gender--> 
                                    <div class="col-xl-4 col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <div class="ls-inputicon-box">  
                                                <select  type="option" class="wt-select-box selectpicker"   data-live-search="true" title="" id="gender" name="Gender" data-bv-field="size">
                                                    <option class="bs-title-option" value="<?php if(!empty($fetch)) echo $fetch['gender']; ?>"><?php if(!empty($fetch)) echo $fetch['gender']; ?><?php if(empty($fetch)) echo 'Select Gender'; ?></option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                    <option value="Both">Both</option>
                                                </select>
                                                <i class="fs-input-icon fa fa-venus-mars"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Country--> 
                                    <div class="col-xl-4 col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <div class="ls-inputicon-box">  
                                                <input  type="text" value="<?php if(!empty($fetch)) echo $fetch['comapny_email']; ?>" class="form-control" name="email"  data-live-search="true" title="" id="country" data-bv-field="size" placeholder="Email">
                                                   
                                                <i class="fs-input-icon fa fa-mail"></i>
                                            </div>
                                        </div>
                                    </div>


                                    <!--City--> 
                                    <div class="col-xl-4 col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label>Mobile</label>
                                            <div class="ls-inputicon-box">  
                                                <input type="text" class="form-control" value="<?php if(!empty($fetch)) echo $fetch['company_phone']; ?>" name="mobile"  data-live-search="true" title="" id="Mobile" data-bv-field="size" placeholder="Mobile">
                                                   
                                                <i class="fs-input-icon fa fa-phone"></i>
                                            </div>
                                        </div>
                                    </div>
                                    

                                    <!--Location--> 
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Location</label>
                                            <div class="ls-inputicon-box"> 
                                                <input type="text" value="<?php if(!empty($fetch)) echo $fetch['location']; ?>" class="form-control" data-live-search="true" name="Location"  placeholder="Type Address">
                                                <i class="fs-input-icon fa fa-map-marker-alt"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Latitude--> 
                                    <div class="col-xl-4 col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label>Country</label>
                                            <div class="ls-inputicon-box"> 
                                                <input class="form-control" name="Country" type="text" placeholder="India" value="India" disabled>
                                                <i class="fs-input-icon fa fa-map-pin"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <!--longitude--> 
                              
                                    <div class="col-xl-4 col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label>State</label>
                                        <div class="ls-inputicon-box">
                                            <i class="fs-input-icon fa fa-map-pin"></i>  
                                                <select class="wt-select-box selectpicker " name="State" id="state" type="option"  data-bv-field="size"  data-live-search="true">
                                                 <option  class="bs-title-option" value="<?php if(!empty($fetch)) echo $fetch['state_id'];  ?>"><?php if(!empty($fetch)) echo $fetch['state_name'];  ?><?php if(empty($fetch)) echo 'Select State';  ?></option>
                                                <?php foreach($states->result() as $row)
                                                   {
                                                      echo '<option value="'.$row->state_id.'">'.$row->state_name.'</option>';
                                                   }
                                                 ?>
                                            </select>
                                       </div>
                                        </div>
                                    </div>
                                   
                                    <!--Email Address-->
                                    <div class="col-xl-4 col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label>City</label>
                                            <div class="ls-inputicon-box"> 
                                                <select  class="form-control" id="citys"  name="citys" type="option" >
                                                <i class="fs-input-icon fas fa-at"></i>
                                                <option value="<?php if(!empty($fetch)) echo $fetch['city']; ?>"><?php if(!empty($fetch)) echo $fetch['city_name']; ?><?php if(empty($fetch)) echo 'Select City' ?></option>
                                            </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-4 col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label>Pincode</label>
                                            <div class="ls-inputicon-box"> 
                                                <input class="form-control"  value="<?php if(!empty($fetch)) echo $fetch['pincode']; ?>" name="Pincode" type="text" placeholder="Pincode">
                                                <i class="fs-input-icon fas fa-at"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Website-->
                                    <div class="col-xl-4 col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label>Website</label>
                                            <div class="ls-inputicon-box"> 
                                                <input class="form-control" value="<?php if(!empty($fetch)) echo $fetch['company_link']; ?>" name="Website" type="text" placeholder="https://.../">
                                                <i class="fs-input-icon fa fa-globe-americas"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Est. Since-->
                                    <div class="col-xl-4 col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label>Est. Since</label>
                                            <div class="ls-inputicon-box"> 
                                                <input class="form-control" value="<?php if(!empty($fetch)) echo $fetch['since']; ?>" name="Since" type="text" placeholder="Since...">
                                                <i class="fs-input-icon fa fa-clock"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Complete Address-->
                                    <div class="col-xl-12 col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label>Company Address</label>
                                            <div class="ls-inputicon-box"> 
                                                <input class="form-control" value="<?php if(!empty($fetch)) echo $fetch['company_address']; ?>" name="Addresscompany" type="text" placeholder="1363-1385 Sunset Blvd Los Angeles, CA 90026, USA">
                                                <i class="fs-input-icon fa fa-home"></i>
                                            </div>
                                        </div>
                                    </div>

                                   <!--Description-->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Description</label>
                                            <input type="text" value="<?php if(!empty($fetch)) echo $fetch['discription']; ?>" class="form-control" rows="3" name="Description" placeholder="Description">
                                        </div>
                                    </div> 
                                    
                                   <!--Start Date-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Start Date</label>
                                            <div class="ls-inputicon-box"> 
                                                <input class="form-control datepicker" value="<?php if(!empty($fetch)) echo $fetch['start_date']; ?>" data-provide="datepicker" name="Startdate" type="text" placeholder="mm/dd/yyyy">
                                                <i class="fs-input-icon far fa-calendar"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <!--End Date-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>End Date</label>
                                            <div class="ls-inputicon-box"> 
                                                <input class="form-control datepicker" value="<?php if(!empty($fetch)) echo $fetch['end_date']; ?>" data-provide="datepicker" name="enddate" type="text" placeholder="mm/dd/yyyy">
                                                <i class="fs-input-icon far fa-calendar"></i>
                                            </div>
                                        </div>
                                    </div>
                                  
                   <div class="panel-heading wt-panel-heading p-a20">
                        <h4 class="panel-tittle m-a0"><i class="fa fa-social"></i>Social Network</h4>
                    </div>
                          <p>
                          </p>
                           

                              <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Linkdin</label>
                                            <div class="ls-inputicon-box"> 
                                                <input class="form-control " value="<?php if(!empty($fetch)) echo $fetch['Linkdin']; ?>"  name="Linkdin" type="text" placeholder="https://www.linkedin.com" >
                                                <i class="fs-input-icon fab fa-linkedin-in"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <!--End Date-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Twitter</label>
                                            <div class="ls-inputicon-box"> 
                                                <input class="form-control " value="<?php if(!empty($fetch)) echo $fetch['instagram']; ?>"  name="Twitter" type="text" placeholder="https://www.twitter.com">
                                                <i class="fs-input-icon fab fa-twitter"></i>
                                            </div>
                                        </div>
                                    </div>

                                     <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Instagram</label>
                                            <div class="ls-inputicon-box"> 
                                                <input class="form-control " value="<?php if(!empty($fetch)) echo $fetch['Linkdin']; ?>"  name="Instagram" type="text" placeholder="https://www.instagram.com">
                                                <i class="fs-input-icon fab fa-instagram"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <!--End Date-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Facebook</label>
                                            <div class="ls-inputicon-box"> 
                                                <input class="form-control" value="<?php if(!empty($fetch)) echo $fetch['facebook']; ?>" name="facebook" type="text" placeholder="https://www.facebook.com">
                                                <i class="fs-input-icon fab fa-facebook-f"></i>
                                            </div>
                                        </div>
                                    </div>

                                           <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Pinterest</label>
                                            <div class="ls-inputicon-box"> 
                                                <input class="form-control" value="<?php if(!empty($fetch)) echo $fetch['printser']; ?>" name="Pinterest" type="text" placeholder="https://www.pinterest.com">
                                                <i class="fs-input-icon fab fa-pinterest-p"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <!--End Date-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Whatsapp</label>
                                            <div class="ls-inputicon-box"> 
                                                <input class="form-control" value="<?php if(!empty($fetch)) echo $fetch['whatsapp']; ?>" name="Whatsapp" type="text" placeholder="https://www.whatsapp.com">
                                                <i class="fs-input-icon fab fa-whatsapp"></i>
                                            </div>
                                        </div>
                                    </div>
  <div class="panel-heading wt-panel-heading p-a20">
                        <h4 class="panel-tittle m-a0"><i class="fa fa-social"></i>Other</h4>
                    </div>
                     <p>
                          </p>



 <div class="col-xl-12 col-lg-6 col-md-12">
             <div class="form-group">
                <table class="table twm-table table-borderless">
                    <thead class="table-primary">
                      <tr>
                        <th scope="col" class="wd-5p" >Sr</th>
                        <th scope="col" class="wd-50p" style="width: 100%;">Requirment</th>
                        <th scope="col" style="float: right;" class="NoPrint">                         
                         <button type="button" class="btn btn-sm btn-primary" style="float: right;" onclick="BtnAdd()">+</button>
                        </th>
                      </tr>
                    </thead>
                    <tbody id="TBody">

                        <tr id="TRow">
                            <td></td>
                            <td><input type="text" value="" class="form-control" placeholder="Requirment"  name="Requirment[]" ></td>
                            <td><button type="button" class="btn btn-danger" style="float: right;" onclick="BtnDel(this)">X</button></td>
                         </tr>
                      <tr >
                          <?php
                         $i = 1;
                          foreach($main as $row)
                          {

                         ?>
                        <td><?php  echo $i; ?></td>
                        <td><input type="text" value="<?php  if(!empty($main)) echo $row->Requirments; ?>" class="form-control" placeholder="Requirment"  name="Requirment[]" ></td>
    
                        <td><button type="button" class="btn btn-danger" style="float: right;" onclick="BtnDel(this)">X</button></td>
                      </tr>
                     <?php $i++; } ?>
                    </tbody>
                  </table>


</div>
</div>

   <div class="col-xl-12 col-lg-6 col-md-12">
             <div class="form-group">
                <table class="table twm-table table-borderless">
                    <thead class="table-primary">
                      <tr>
                        <th scope="col" class="wd-5p" >Sr</th>
                        <th scope="col" class="wd-50p" style="width: 100%;">Responsabilities</th>
                        <th scope="col" style="float: right;" class="NoPrint">                         
                         <button type="button" class="btn btn-sm btn-primary" style="float: right;" onclick="btnadd()">+</button>
                        </th>
                  
                    
                      </tr>
                    </thead>
                    <tbody id="tbody">
                        <tr  id='trow'>
                            <td></td>
                        <td><input type="text" class="form-control"  placeholder="Responsabilities"  name="Responsabilities[]" ></td>
                        
                        <td><button type="button" class="btn btn-danger" style="float: right;" onclick="btndel(this)">X</button></td>
                        </tr>
                      <tr>
                          <?php
                          foreach($mains as $row)
                          {

                         ?>
                         <td><?php  echo $i; ?></td>
                        <td><input type="text" class="form-control" value="<?php  if(!empty($mains)) echo $row->Responsabilities; ?>" placeholder="Responsabilities"  name="Responsabilities[]" ></td>
                        
                        <td><button type="button" class="btn btn-danger" style="float: right;" onclick="btndel(this)">X</button></td>
                    </tr>
                    <?php } ?>

                 
                    </tbody>
                  </table>


</div>
</div>

                                    <div class="col-lg-12 col-md-12">                                   
                                        <div class="text-left">
                                            
                                            <button type="submit" class="site-button m-r5" name="btnpublish">Publish Job</button>
                                            <?php if(empty($job_id)){ ?>
                                            <button type="submit" name="btndraft" value="Yes" class="site-button outline-primary">Save Draft</button>
                                       <?php  } ?>
                                        </div>
                                    </div> 

                      
                                                                                                         
                            </div>
                       </form>

                    </div>
                </div>

            </div>

                 </div>
  
                       




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
<script type="text/javascript">
      $('#state').change(function(){
       var state = $('#state').val();
      
       if(state != "")
       {
        $.ajax({
            url:"<?php echo base_url(); ?>EMP/Dash/getCities",
            method:"POST",
            data:{state:state},
            success:function(data)
            {
               $('#citys').html(data);
            }
        });
       }
      });

  </script>
<script type="text/javascript">
function BtnAdd()
{
    
    var v = $("#TRow").clone().appendTo("#TBody") ;
    $(v).find("input").val('');

    
}

function BtnDel(v)
{
    /*Delete Button*/
       $(v).parent().parent().remove(); 
       GetTotal();
}
function btnadd()
{
    /*Add Button*/
    var v = $("#trow").clone().appendTo("#tbody") ;
    $(v).find("input").val('');
    
}

function btndel(v)
{
    /*Delete Button*/
       $(v).parent().parent().remove(); 
       GetTotal();
}


</script>

