<!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                       <?php echo $MESSAGE; ?>
                        <small>Preview</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Forms</a></li>
                        <li class="active">General Elements</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Quick Example</h3>
                                </div><!-- /.box-header -->
                                <!-- form start <?php print_r($data->result()); ?> -->
                               
                                <form method="post" action="<?php echo site_url('Profile/Process'); ?>">  
                                	<input type="hidden" name="hidid" value="<?php echo $this->input->get("ID"); ?>">
                                    <div class="box-body">
                                        <div class="form-group col-md-6">
                                            <label >First Name</label>
                                            <input type="text" class="form-control"  name="fname" placeholder="First Name" value="<?php echo $data->row(0)->FirstName; ?>" >
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label >Last name</label>
                                            <input type="text" class="form-control"  name="lname" value="<?php echo $data->row(0)->LastName; ?>" placeholder="Last name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label  >User ID</label>
                                            <input type="text" class="form-control" readonly  name="UserID" value="<?php echo $data->row(0)->Email; ?>"  placeholder="First Name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label  >Password</label>
                                            <input type="text" class="form-control"  name="Password" value="<?php echo $data->row(0)->Password; ?>" placeholder="Last name" >
                                        </div>
                                        <div class="form-group col-md-6">
                                        <label  >City 1</label>
                                        <select id='sel_city' name="drpcity" class="form-control" >
                                            <option>-- Select city --</option>
                                            <?php
                                            foreach($cities as $city){
                    
                                                echo "<option  value='".$city['Id']."'>".$city['Name']."</option>";
                                            }
                       					    ?>
                    </select>
                    <script language="javascript">
                    	document.getElementById("sel_city").value = '<?php echo $data->row(0)->CityID ; ?>';
                    </script>
                                        </div>
                                        <div class="form-group col-md-6" style="margin-top: 15px;">
                           <label  >Gender</label><br>
               <input id="gender" name="gender" type="radio" class="form-group" value="0" <?php echo ($data->row(0)-> gender == 0)? "checked" :"";?>/>
                <label for="gender" class="">Male</label>
                
                
				<input id="gender" name="gender" type="radio" class="form-group"  value="1" <?php echo ($data->row(0)->gender == 1)? "checked" : ""; ?>/>
                
                <label for="gender" class="">Female</label>
				<input id="gender" name="gender" type="radio" class="form-group" value="2"  <?php echo ($data->row(0)->gender == 2)? "checked" : ""; ?>/>
                 
                <label for="gender" class="">Others</label>
                                        </div>
                                        <div class="form-group col-md-6" style="margin-top: 15px;">
                                        <label  >Gender1</label><br>
                                        <input id="gender" name="chgender1" type="checkbox" class="form-group"  value="0" />
                <label for="gender" class="">Admin</label>

                <input id="gender" name="chgender2" type="checkbox" class="form-group"  value="1"  />
                <label for="gender" class="">User</label>

                <input id="gender" name="chgender3" type="checkbox" class="form-group" 
                 value="2"  />
                <label for="gender" class="">Others</label>
                                        </div>
                                         <div class="form-group col-md-6">
                                            <label  >User ID</label>
                                            <input type="text" class="form-control" >
                                        </div>
                                    </div><!-- /.box-body -->

                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                      
                                        
                                    </div>
                                </form>
                            </div><!-- /.box -->

                            
                        </div><!--/.col (left) -->
                        <!-- right column -->
                       
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->