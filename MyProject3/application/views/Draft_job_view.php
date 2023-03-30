<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php if ($this->session->flashdata("type13") != null) { ?>
  <script>
    swal("<?php echo $this->session->flashdata("type"); ?>", "<?php echo $this->session->flashdata("message1") ?>", "<?php echo $this->session->flashdata("type"); ?>");
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
                        <h4 class="panel-tittle m-a0"><i class="fa fa-suitcase"></i> Job Details</h4>
                    </div>
                    <div class="panel-body wt-panel-body p-a20 m-b30 ">
                        <div class="twm-D_table p-a20 table-responsive">
                            <table id="jobs_bookmark_table" class="table table-bordered twm-bookmark-list-wrap">
                                <thead>
                                    <tr>
                                        <th>Job Title</th>
                                        <th>Category</th>
                                        <th>Job Types</th>
                                       
                                        <th>Created & Expired</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                         
                                 <?php 
                                   foreach($fetch->result() as $row)
                                   {
                                 


                                   $data = '<tr>
                                       
                                        <td>
                                            <div class="twm-bookmark-list">
                                                <div class="twm-media">
                                                    <div class="twm-media-pic">
                                                       <img src="'. base_url('assets/images/jobs-company/pic1.jpg').'" alt="#">
                                                    </div>
                                                </div>
                                                <div class="twm-mid-content">
                                                    <a href="#" class="twm-job-title">
                                                        <h4>'.$row->job_title.'</h4>
                                                        <p class="twm-bookmark-address">
                                                            <i class="feather-map-pin"></i>
                                                            '.$row->location.','.$row->state_name.','.$row->city_name.','.$row->pincode.'
                                                        </p>
                                                    </a>
                                                    
                                                </div>
                                                
                                            </div>
                                        </td>
                                        <td>'.$row->cat_name.'</td>
                                        <td>';

                                       if($row->job_type == 1)
                                        {
                                              $data .=  '<div class="twm-jobs-category " ><span class="twm-bg-green"  id="job_type<?php echo $row->job_type; ?>">'.$row->job_type_Name.'</span></div>';
                                          }
                                              if($row->job_type == 2)
                                              {
                                                 $data .= '<div class="twm-jobs-category " ><span class="twm-bg-purple"  id="job_type<?php echo $row->job_type; ?>">'.$row->job_type_Name.'</span></div>';
                                            }
                                             if($row->job_type == 3)
                                             {
                                                 $data .= '<div class="twm-jobs-category " ><span class="twm-bg-sky"  id="job_type<?php echo $row->job_type; ?>">'.$row->job_type_Name.'</span></div>';
                                             }
                                             if($row->job_type == 4)
                                             {
                                             $data .= '<div class="twm-jobs-category " ><span class="twm-bg-golden"  id="job_type<?php echo $row->job_type; ?>">'.$row->job_type_Name.'</span></div>';  
                                             }
                                                
                                            if($row->job_type == 5)

                                            {
                                                $data .= '<div class="twm-jobs-category " ><span class="twm-bg-brown"  id="job_type<?php echo $row->job_type; ?>">'.$row->job_type_Name.'</span></div>';
                                            }
                                      $data .=  '
                                        <td>
                                            <div>'.$row->start_date.'</div>
                                            <div>'.$row->end_date.'</div>
                                        </td>
                                        
                                        <td>
                                            <div class="twm-table-controls">
                                                <ul class="twm-DT-controls-icon list-unstyled">
                                                    <li>
                                                       <a href="'.base_url().'Company_job_view/jobdetail?Id='.$row->Id.'"><button title="View Job" data-bs-toggle="tooltip" data-bs-placement="top">
                                                            <span class="fa fa-eye"></span>
                                                        </button></a>
                                                    </li>
                                                    <li>
                                                        <a href="'.base_url().'EMP/Dash/postjob?Id='.$row->Id.'" onclick="jobedit('.$row->Id.')" ><button  title="Edit" data-bs-toggle="tooltip" data-bs-placement="top">
                                                            <span class="far fa-edit"></span>
                                                        </button></a>
                                                    </li>
                                                    <li>
                                                        <button title="Delete" data-bs-toggle="tooltip" data-bs-placement="top">
                                                            <span class="far fa-trash-alt"></span>
                                                        </button>
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
                                
                                        <th>Created & Expired</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>             
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
<script  src="<?php echo base_url(); ?>assets/js/main.js"></script><!-- Pagination FUCTIONS  -->