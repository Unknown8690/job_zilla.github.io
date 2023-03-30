 <!-- CONTENT START -->
        <div class="page-content">
            <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url(images/banner/1.jpg);">
                <div class="overlay-main site-bg-white opacity-01"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                        <div class="banner-title-outer">
                            <div class="banner-title-name">
                                <h2 class="wt-title">Saved jobs</h2>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW -->                            
                        
                            <div>
                                <ul class="wt-breadcrumb breadcrumb-style-2">
                                    <li><a href="<?php echo base_url(); ?>Dash">Home</a></li>
                                    <li>Saved jobs</li>
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
                                                            <td><div class="twm-jobs-category"><span class="twm-bg-green"><?php echo $row->job_type; ?></span></div></td>
                                                            <td><a href="javascript:;" class="site-text-primary"><?php echo $row->date; ?></a></td>
                                                            <td>
                                                                <span class="text-clr-green"><?php echo $row->status; ?></span>
                                                            </td>
                                                            
                                                            <td>
                                                                <div class="twm-table-controls">
                                                                    <ul class="twm-DT-controls-icon list-unstyled">
                                                                        <li>
                                                                            <a href="<?php echo base_url(); ?>Job/jobdetail?Id=<?php echo $row->Id; ?>">
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
                                                        
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                        <?php } ?>
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