<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php if ($this->session->flashdata("type13") != null) { ?>
  <script>
    swal("<?php echo $this->session->flashdata("type"); ?>", "<?php echo $this->session->flashdata("message1") ?>", "<?php echo $this->session->flashdata("type"); ?>");
  </script>
<?php } ?>
<?php if ($this->session->flashdata("type1") != null) { ?>
  <script>
    swal("<?php echo $this->session->flashdata("type1"); ?>", "<?php echo $this->session->flashdata("message1") ?>", "<?php echo $this->session->flashdata("type1"); ?>");
  </script>
<?php } ?>
 <!-- Page Content Holder -->
  
        <div id="content">

            <div class="content-admin-main">

                <div class="wt-admin-right-page-header clearfix">
                    <h2>Manage Jobs</h2>

                    <div class="breadcrumbs"><a href="#">Home</a><a href="#">Dasboard</a><span>My Job Listing</span></div>
                </div>

                <!--Basic Information-->
                <div class="panel panel-default">
                    <div class="panel-heading wt-panel-heading p-a20">
                        <h4 class="panel-tittle m-a0"><i class="fa fa-suitcase"></i>Job Details</h4>
                        <div class="twm-nav-btn-left">
                                        <button  data-bs-toggle="modal" class="site-button" href="#sign_up_popup" role="button" onclick="user()" style="float: right;">Add User</button>
                                            
                                        </a>
                                    </div>
                    </div>
                    <div class="panel-body wt-panel-body p-a20 m-b30 ">
                        <div class="twm-D_table p-a20 table-responsive">
                            <table id="jobs_bookmark_table" class="table table-bordered twm-bookmark-list-wrap">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Date</th>
                                      
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                         
                               
                                   <?php 
                                   foreach($fetch as $row)
                                   {
                                 


                                   $data = '<tr>
                                       
                                        <td>
                                            <div class="twm-bookmark-list">
                                                
                                                <div class="twm-mid-content">
                                                    <a href="#" class="twm-job-title">
                                                        <h4>'.$row->user_name.'</h4>
                                                    </a>
                                                    
                                                </div>
                                                
                                            </div>
                                        </td>
                                        <td>'.$row->email.'</td>
                                        <td>';
                                       
                                      $data .=  '
                                            <div>'.$row->mobile_number.'</div>
                                    
                                        </td>
                                       </td><td><a href="javascript:;" class="site-text-primary">&nbsp;'.$row->createat.'</a></td>
                                        
                                        
                                        <td>
                                            <div class="twm-table-controls">
                                                <ul class="twm-DT-controls-icon list-unstyled">
                                                    <li>

                                        <a class="twm-nav-sign-up" data-bs-toggle="modal" href="#sign_up_popup" role="button" onclick="adduser('.$row->Id.')">
                                            <i class="fa fa-pen"></i>
                                        </a>
                                  
                                                       
                                                    </li>
                                                   <input type ="hidden" id="hiddenname'.$row->Id.'" value="'.$row->user_name.'">
                                                   <input type ="hidden" id="hiddenpassword'.$row->Id.'" value="'.$row->password.'">
                                                   <input type ="hidden" id="hiddenemail'.$row->Id.'" value="'.$row->email.'">
                                                   <input type ="hidden" id="hiddenmobile'.$row->Id.'" value="'.$row->mobile_number.'">
                                                    <li>
                                                        <a href="'.base_url().'EMP/User/deleteuser?Id='.$row->Id.'"> <span class="far fa-trash-alt"></span></a>
                                                           
                                                        
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>

                                    </tr>';
                                    echo $data;
                                   } ?>
                                </tbody>
                            
                                <tfoot>
                                    <tr>
                                        <th>Job Title</th>
                                        <th>Category</th>
                                        <th>Job Types</th>
                                        <th>Applications</th>
                                        <th>Created & Expired</th>
                                        
                                    </tr>
                                </tfoot>
                            </table>
                        </div>             
                    </div>
                </div>

            </div>

        </div>


        <div class="modal fade twm-sign-up" id="sign_up_popup" aria-hidden="true" aria-labelledby="sign_up_popupLabel" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <form method="post" action="<?php echo base_url(); ?>EMP/User/adduser">

                            <div class="modal-header">
                                <h2 class="modal-title" id="sign_up_popupLabel">user</h2>
                                <p></p>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <div class="modal-body">
                                <div class="twm-tabs-style-2">
                                
                                    <div class="tab-content" id="myTabContent">
                                    <!--Signup Candidate Content-->  
                                    <div class="tab-pane fade show active" id="sign-candidate">
                                        <div class="row">

                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="username" id="username" type="text" required="" class="form-control" placeholder="Usearname*">
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="password" id="password" type="text" class="form-control" required="" placeholder="Password*">
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="email" id="email" type="text" class="form-control" required="" placeholder="Email*">
                                                </div>
                                            </div>
            
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="phone" id="phone" type="text" class="form-control" required="" placeholder="Phone*">
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <div class=" form-check">
                                                        
                                                        
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <input type="hidden" name="hiddenid" id="hiddenid" value="hii">
                                                <button type="submit" name="submit" id="submit" class="site-button" >Submit</button>
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
<script  src="<?php echo base_url(); ?>assets/js/main.js"></script><!-- Pagination FUCTIONS  -->
<script type="text/javascript">
    function adduser(Id)
    {
        var name = document.getElementById('hiddenname'+Id).value;
          document.getElementById('username').value = name;
        var pass = document.getElementById('hiddenpassword'+Id).value;
          document.getElementById('password').value = pass;
        var mobile = document.getElementById('hiddenmobile'+Id).value;
          document.getElementById('phone').value = mobile;
        var email = document.getElementById('hiddenemail'+Id).value;
          document.getElementById('email').value = email;
          document.getElementById('hiddenid').value = Id;
        document.getElementById('submit').innerHTML = "Update";
       
    }
    function user()
    {

          document.getElementById('username').value = "";
        
          document.getElementById('password').value = "";
       
          document.getElementById('phone').value = "";
        
          document.getElementById('email').value = "";
          document.getElementById('hiddenid').value = "hii";
        document.getElementById('submit').innerHTML = "Submit";   
    }
</script>