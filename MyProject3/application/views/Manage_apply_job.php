<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php if ($this->session->flashdata("type") != null) { ?>
  <script>
    swal("<?php echo $this->session->flashdata("type"); ?>", "<?php echo $this->session->flashdata("message1") ?>", "<?php echo $this->session->flashdata("type"); ?>");
  </script>
<?php } ?>
 <!-- CONTENT START -->
        <div class="page-content">

            <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url(images/banner/1.jpg);">
                <div class="overlay-main site-bg-white opacity-01"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                        <div class="banner-title-outer">
                            <div class="banner-title-name">
                                <h2 class="wt-title">Manage jobs</h2>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW -->                            
                        
                            <div>
                                <ul class="wt-breadcrumb breadcrumb-style-2">
                                    <li><a href="<?php echo base_url(); ?>Dash">Home</a></li>
                                    <li>Manage jobs</li>
                                </ul>
                            </div>
                        
                        <!-- BREADCRUMB ROW END -->                        
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->


            <!-- OUR BLOG START -->
            <?php include('headerfiles/Nav_view.php'); ?>

                        <div class="col-xl-9 col-lg-8 col-md-12 m-b30">
                            <!--Filter Short By-->
                            <div class="twm-right-section-panel site-bg-gray">
                                <form>
                                    <!--Basic Information-->
                                  <?php
           if($this->session->flashdata("message") != "")
           {?>
            <div class="alert alert-success" id="alertmessage" role="alert">
                 <strong class="d-block d-sm-inline-block-force"><?php echo $this->session->flashdata("message"); ?></strong>
             </div>
          
           <?php }

            ?>
         
                                    <div class="panel panel-default">

                                        <div class="panel-heading wt-panel-heading p-a20">
                                            <h4 class="panel-tittle m-a0"><i class="fa fa-suitcase"></i>Manage jobs</h4>
                                        </div>
                                        <div class="panel-body wt-panel-body m-b30 ">
                                            <div class="twm-D_table p-a20 table-responsive">
                                                <table id="jobs_bookmark_table" class="table table-bordered twm-bookmark-list-wrap">
                                                    <thead>
                                                        <tr>
                                                            <th>Job Title</th>
                                                            <th>Category</th>
                                                            <th>Job Types</th>
                                                            <th>Date</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!--1-->
                                                        <?php
                                                        foreach($fetch as $row) 
                                                        {

                                                        ?>
                                                        <tr>
                                                            <td>
                                                                <div class="twm-bookmark-list">
                                                                    
                                                                    <div class="twm-mid-content">
                                                                        <a href="#" class="twm-job-title">
                                                                            <h4><?php echo $row->job_title; ?></h4>
                                                                            <p class="twm-bookmark-address">
                                                                                <i class="feather-map-pin"></i><?php echo $row->state_name; ?>,<?php echo $row->city_name; ?>
                                                                            </p>
                                                                        </a>
                                                                        
                                                                    </div>
                                                                    
                                                                </div>
                                                            </td>
                                                            <td><?php echo $row->cat_name; ?></td>
                                                            <td>                                 
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
                                                            </td>
                                                            <td><a href="javascript:;" class="site-text-"><?php echo $row->date; ?></a></td>
                                                            <td>
                                                                 <?php if($row->status == "Pending"):?>
                                                                <span class="text-clr-yellow"><?php echo $row->status; ?></span>
                                                                <?php endif; ?>
                                                                <?php if($row->status == "Rejected"):?>
                                                                <span class="text-clr-red"><?php echo $row->status; ?></span>
                                                                <?php endif; ?>
                                                                 <?php if($row->status == "Approved"):?>
                                                                <span class="text-clr-green"><?php echo $row->status; ?></span>
                                                                <?php endif; ?>

                                                            </td>
                                                            
                                                            <td>
                                                                <div class="twm-table-controls">
                                                                    <ul class="twm-DT-controls-icon list-unstyled">
                                                                        <li>
                                                                            <a href="<?php echo base_url(); ?>Job/jobdetail?Id=<?php echo $row->job_id; ?>">
                                                                            <button title="View Job" type="button" data-bs-toggle="tooltip" data-bs-placement="top">
                                                                                <span class="fa fa-eye"></span>
                                                                            </button></a>
                                                                        </li>
                                                                        
                                                                        <li><a href="<?php echo base_url(); ?>Job/deletejob?Id=<?php echo $row->user_id; ?>">
                                                                            <button title="Delete" type="button" data-bs-toggle="tooltip" data-bs-placement="top">
                                                                                <span class="far fa-trash-alt"></span>
                                                                            </button></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                        
                                                            <th>Job Title</th>
                                                            <th>Category</th>
                                                            <th>Job Types</th>
                                                            <th>Applications</th>
                                                            <th>Date</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>             
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>   
            <!-- OUR BLOG END -->
          
            
     
        </div>
        <!-- CONTENT END -->