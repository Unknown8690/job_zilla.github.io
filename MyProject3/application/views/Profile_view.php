<style type="text/css">
    .btn-danger
    {
        background: red!important;
    }
</style>

<?php include('headerfiles/Nav_view.php'); ?>

                 <div class="col-xl-9 col-lg-8 col-md-12 m-b30">
                            <!--Filter Short By-->

                            <div class="twm-right-section-panel site-bg-gray">
                                <form method="post" action="<?php echo base_url(); ?>Profile/saveprofile" id="frmprofile" name="frmprofile" enctype="multipart/form-data">
                                    
                                        
                                    <!--Basic Information-->
                                   
                                            <h4 class="panel-tittle m-a0">Basic Informations</h4>
                                              <div class="panel panel-default">
                                        <div class="panel-heading wt-panel-heading p-a20">
                                 <?php
                                      if($this->session->flashdata("message") != "")
                                      {?>
                                        <div class="alert alert-success alert-top-border alert-dismissible fade show" id="alertmessage" role="alert">
                                            <i class="mdi mdi-check-all me-3 align-middle text-success"></i><strong></strong><?php echo $this->session->flashdata("message"); ?><strong></strong></div>
                                          
                                        </div>
                                            
                                    <?php } ?>
                                        </div>
                                        <div class="panel-body wt-panel-body p-a20 m-b30 ">
                                    

                                            <div class="row">
                                                <div class="twm-candidate-profile-pic">
                                    
                                    <img src="<?php echo base_url(); ?>assets/images/user-avtar/pic4.jpg" alt="">
                                  
                                    <div class="upload-btn-wrapper">
                                        
                                        <div id="upload-image-grid"></div>
                                        <button class="site-button button-sm">Upload Photo</button>
                                        <input type="file" name="uploadfile" id="fileuploader" accept=".jpg, .jpeg, .png">
                                    </div>
                               
                                </div><p><
                                                          <input type="hidden" name="hid" value="<?php if(!empty($data)) echo $data['refer_id']; ?><?php if(empty($data)) echo 'hiii'; ?>">
                                                          <input type="hidden" id="statehid<?php if(!empty($data)) echo $data['refer_id']; ?>" value="<?php if(!empty($data)) echo $data['state_id'];  ?>">

                                                          <input type="hidden" id="hidgetcity" value="<?php echo base_url(); ?>Profile/getCities">
                                                          <input type="hidden" id="hid_city<?php if(!empty($data)) echo $data['refer_id']; ?>" value="<?php if(!empty($data)) echo $data['city']; ?>">      
                                                    <div class="col-xl-6 col-lg-6 col-md-12">
                                                        <div class="form-group">
                                                            <label>Your Name</label>
                                                            <div class="ls-inputicon-box"> 
                                                                <input class="form-control" value="<?php if(!empty($data)) echo $data['Name']; ?>" name="name" id="name" type="text" placeholder="Name" required >
                                                                <i class="fs-input-icon fa fa-user "></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-xl-6 col-lg-6 col-md-12">
                                                        <div class="form-group">
                                                            <label>Phone</label>
                                                            <div class="ls-inputicon-box"> 
                                                                <input class="form-control" value="<?php if(!empty($data)) echo $data['phone']; ?>" name="phone" id="phone" type="text" placeholder="Phone" required >
                                                                <i class="fs-input-icon fa fa-phone-alt"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                
                                                    <div class="col-xl-6 col-lg-6 col-md-12">
                                                        <div class="form-group">
                                                            <label>Email Address</label>
                                                            <div class="ls-inputicon-box"> 
                                                                <input class="form-control" value="<?php if(!empty($data)) echo $data['email']; ?>" name="email" id="email" type="email" placeholder="Email" required >
                                                                <i class="fs-input-icon fas fa-at"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                
                                                   
                
                                                    <div class="col-xl-6 col-lg-6 col-md-12">
                                                        <div class="form-group">
                                                            <label>Last Qualification</label>
                                                            <div class="ls-inputicon-box"> 
                                                                <input class="form-control" value="<?php if(!empty($data)) echo $data['qulification']; ?>" name="qulification" id="qulification" type="text" placeholder="Qualification" >
                                                                <i class="fs-input-icon fa fa-user-graduate"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                
                                                    <div class="col-xl-6 col-lg-6 col-md-12">
                                                        <div class="form-group">
                                                            <label>Language</label>
                                                            <div class="ls-inputicon-box"> 
                                                                <input class="form-control" value="<?php if(!empty($data)) echo $data['language']; ?>" name="language" id="language" type="text" placeholder="Language" >
                                                                <i class="fs-input-icon fa fa-language"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                
                                                    <div class="col-xl-6 col-lg-6 col-md-12">
                                                        <div class="form-group city-outer-bx has-feedback">
                                                            <label>Job Category</label>
                                                            <div class="ls-inputicon-box">  
                                                                <i class="fs-input-icon fa fa-border-all"></i>
                                                                <select class="form-control" value="<?php if(!empty($data)) echo $data['job_cat']; ?>" name="cat" id="cat" type="option" placeholder="Job Category" >
                                                                <option value="">Select Category</option>
                                                              <?php
                                                                 foreach($category->result() as $row)
                                                                   {
                                                                        echo '<option value = "'.$data['job_cat'].''.$row->Id.'" >'.$row->cat_name.'</option>';
                       
                                                                     }
                                                                    ?> 
                                                            </select>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                
                                                    <div class="col-xl-12 col-lg-6 col-md-12">
                                                        <div class="form-group city-outer-bx has-feedback">
                                                            <label>Experience</label>
                                                            <div class="ls-inputicon-box">  
                                                                <input class="form-control"  value="<?php if(!empty($data)) echo $data['experience']; ?>" name="experience" id="experience" type="text" placeholder="Total Years Of Experience" >
                                                                <i class="fs-input-icon fa fa-user-edit"></i>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                
                                                    <div class="col-xl-4 col-lg-6 col-md-12">
                                                        <div class="form-group city-outer-bx has-feedback">
                                                            <label>Current Salary</label>
                                                            <div class="ls-inputicon-box">  
                                                                <input class="form-control" value="<?php if(!empty($data)) echo $data['current_salary']; ?>" name="currentsalary" type="number" placeholder="Current Salary" >
                                                                <i class="fs-input-icon fa fa-rupee-sign"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                
                                                    <div class="col-xl-4 col-lg-6 col-md-12">
                                                        <div class="form-group city-outer-bx has-feedback">
                                                            <label>Expected Salary</label>
                                                            <div class="ls-inputicon-box">  
                                                                <input class="form-control" value="<?php if(!empty($data)) echo $data['expected_salary']; ?>" name="expsalary" id="expsalary" type="number" placeholder="Expected Salary" >
                                                                <i class="fs-input-icon fa fa-rupee-sign"></i>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                
                                                    <div class="col-xl-4 col-lg-12 col-md-12">
                                                        <div class="form-group city-outer-bx has-feedback">
                                                            <label>Age</label>
                                                            <div class="ls-inputicon-box">  
                                                                <input class="form-control" maxlength="2" value="<?php if(!empty($data)) echo $data['age']; ?>" name="age" id="age" type="text" placeholder="Age" >
                                                                <i class="fs-input-icon fa fa-child"></i>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                

                                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                                        <div class="form-group city-outer-bx has-feedback">
                                                            <label>Address</label>
                                                            <div class="ls-inputicon-box">  
                                                                <input class="form-control" value="<?php if(!empty($data)) echo $data['address']; ?>" name="address" id="address" type="text" placeholder="Address"  >
                                                                <i class="fs-input-icon fas fa-map-marker-alt"></i>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>

                                                        
                                                    <div class="col-xl-4 col-lg-6 col-md-12">
                                                        <div class="form-group city-outer-bx has-feedback">
                                                            <label>Country</label>
                                                            <div class="ls-inputicon-box">  
                                                                <input class="form-control" name="country" id="country" type="text" value="India"  placeholder="Country" disabled>
                                                                <i class="fs-input-icon fa fa-globe-americas"></i>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                              <div class="col-xl-4 col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label>State</label>
                                        <div class="ls-inputicon-box">
                                            <i class="fs-input-icon fa fa-map-pin"></i>  
                                                <select class="form-control" autocomplete="off"   name="state"  id="state" type="option">
                                                    <option value="<?php if(!empty($selectstate)) echo $selectstate['state_id']; ?>"><?php if(!empty($selectstate)) echo $selectstate['state_name']; ?><?php if(empty($selectstate)) echo 'Select State' ?></option>
                                                <?php foreach($states as $row)
                                                   {
                                                      echo '<option value="'.$row->state_id.'" >'.$row->state_name.'</option>';
                                                   }
                                                 ?>
                                            </select>
                                       </div>
                                        </div>
                                    </div>



                                                    <div class="col-xl-4 col-lg-12 col-md-12">
                                                        <div class="form-group city-outer-bx has-feedback">
                                                            <label>City</label>
                                                            <div class="ls-inputicon-box"> 
                                                            <i class="fs-input-icon fas fa-map-pin"></i> 
                                                      <select class="form-control" value="" name="citys" id="citys" type="option" placeholder="City" >
                                                                <option value="<?php if(!empty($city)) echo $city['city']; ?>"><?php if(!empty($city)) echo $city['city_name']; ?><?php if(empty($city)) echo 'Select City' ?></option>
                                                          </select>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>



                                               <div class="col-xl-4 col-lg-12 col-md-12">
                                                        <div class="form-group city-outer-bx has-feedback">
                                                            <label>Pincode</label>
                                                            <div class="ls-inputicon-box">  
                                                                <input class="form-control" maxlength="6" value="<?php if(!empty($data)) echo $data['pincode']; ?>" name="pincode" id="pincode" type="number" placeholder="Pincode" >
                                                                <i class="fs-input-icon fas fa-map-pin"></i>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>


                 
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Description</label>
                                                            <input class="form-control" rows="3" value="<?php if(!empty($data)) echo $data['description']; ?>" name="description" id="description" placeholder="-----"></textarea>
                                                        </div>
                                                    </div>
                                                    <hr>
                        <h4 class="panel-tittle m-a0">Education Informations</h4>
                        <br>
                        <br>
                                            <hr>
                                                    
<div class="col-xl-12 col-lg-6 col-md-12">
             <div class="form-group">
                <table class="table twm-table table-borderless">
                    <thead class="table-primary">
                      <tr>
                        <th scope="col" class="wd-50p" style="width: 100%;">Education Details</th>
                        <th scope="col" style="float: right;" class="NoPrint">                         
                         <button type="button" class="btn btn-sm btn-primary" style="float: right;" onclick="BtnAdd()">+</button>
                        </th>
                  
  
                      </tr>
                    </thead>
                    <tbody id="TBody">
                        
                          <?php
                              $i=1;
                              foreach($education as $rw)
     
                            {?>
                      <tr id="TRow" >

                        <td>
                            <input type="text" class="form-control" placeholder="" value="<?php  echo $i; ?>"disabled><br>
                            <label>title</label>
                            <input type="text" class="form-control" placeholder="Education Name" value="<?php if(!empty($education)) echo $rw->title; ?>"  name="educationname[]"><br>
                            <label>University/School Name</label>
                         <input type="text" class="form-control" value="<?php if(!empty($education)) echo $rw->university_name; ?>" placeholder="University/School Name"  name="universityname[]" ><br>
                         <label>Start Date</label>
                         <input type="date" class="form-control" value="<?php if(!empty($education)) echo $rw->start_date; ?>" name="startdatess[]"><br>
                         <label>End Date</label>
                         <input type="date" class="form-control" value="<?php if(!empty($education)) echo $rw->end_date; ?>" name="enddatess[]"><br>
                         <label>Percentage</label>
                         <input type="text" class="form-control" value="<?php if(!empty($education)) echo $rw->percentage; ?>" placeholder="Percentage/Grade"  name="percentage[]" >
                        </td>
                        <td><button type="button"  style="float: right;" class="btn btn-danger" onclick="BtnDel(this)">X</button></td>
                      </tr>
                      <?php $i++; } ?>
                      <tr id="TRow1" >

                        <td>
                            <input type="text" class="form-control" placeholder="" disabled><br>
                            <label>title</label>
                            <input type="text" class="form-control" placeholder="Education Name" name="educationname[]"><br>
                            <label>University/School Name</label>
                         <input type="text" class="form-control"  placeholder="University/School Name"  name="universityname[]" ><br>
                         <label>Start Date</label>
                         <input type="date" class="form-control" 
                         name="startdatess[]"><br>
                         <label>End date</label>
                         <input type="date" class="form-control"  name="enddatess[]"><br>
                         <label>Percentage</label>
                         <input type="text" class="form-control"  placeholder="Percentage/Grade"  name="percentage[]" >
                        </td>
                        <td><button type="button"  style="float: right;" class="btn btn-danger" onclick="BtnDel(this)">X</button></td>
                      </tr>
                    </tbody>
                  </table>


</div>
</div>             



<hr>



             <h4 class="panel-tittle m-a0">Experience Informations</h4>
                        <br>
                        <br>
                                            <hr>
                                                    
<div class="col-xl-12 col-lg-6 col-md-12">
             <div class="form-group">
                <table class="table twm-table table-borderless">
                    <thead class="table-primary">
                      <tr>
                        <th scope="col" class="wd-50p" style="width: 100%;">Experience Details</th>
                        <th scope="col" style="float: right;" class="NoPrint">                         
                         <button type="button" class="btn btn-sm btn-primary" style="float: right;" onclick="btnadd()">+</button>
                        </th>
                  
  
                      </tr>
                    </thead>
                    <tbody id="tbody">
                        
                            <?php
                              $i=1;
                              foreach($experience as $rw)
     
                            {?>
                      <tr id="trow" >
                        <td>
                             <input type="text" class="form-control" placeholder="" value="<?php  echo $i; ?>"disabled><br>
                             <label>Company Name</label>
                         <input type="text" class="form-control" placeholder="Company Name" value="<?php if(!empty($experience)) echo $rw->company_name; ?>"  name="companyname[]" ><br>
                         <label>Designation</label>
                         <input type="text" class="form-control" placeholder="Designation" value="<?php if(!empty($experience)) echo $rw->Position; ?>" name="designation[]" ><br>
                         <label>Location</label>
                         <input type="text" class="form-control" placeholder="Company Location" value="<?php if(!empty($experience)) echo $rw->location; ?>" name="locationscompany[]" ><br>
                         <label>Start Date</label>
                         <input type="date" class="form-control" value="<?php if(!empty($experience)) echo $rw->start_date; ?>" name="startdatecompany[]"><br>
                         <label>End Date</label>
                         <input type="date" class="form-control" value="<?php if(!empty($experience)) echo $rw->end_date; ?>" name="enddatecompany[]"><br>
                         <label>Description</label>
                         <input type="text" class="form-control" value="<?php if(!empty($experience)) echo $rw->description; ?>" name="discriptions[]" placeholder="About"><br>

                        </td>
                        <td><button type="button"  style="float: right;" class="btn btn-danger" onclick="btndel(this)">X</button></td>
                      </tr>
                      <?php $i++; } ?>
                      <tr id="trow1" >
                        <td>
                             <input type="text" class="form-control" placeholder="" disabled><br>
                             <label>Company Name</label>
                         <input type="text" class="form-control" placeholder="Company Name"   name="companyname[]" ><br>
                         <label>Designation</label>
                         <input type="text" class="form-control" placeholder="Designation"  name="designation[]" ><br>
                         <label>Location</label>
                         <input type="text" class="form-control" placeholder="Company Location"  name="locationscompany[]" ><br>
                         <label>Start Date</label>
                         <input type="date" class="form-control"  name="startdatecompany[]"><br>
                         <label>End Date</label>
                         <input type="date" class="form-control"  name="enddatecompany[]"><br>
                         <label>Description</label>
                         <input type="text" class="form-control" name="discriptions[]" placeholder="About"><br>

                        </td>
                        <td><button type="button"  style="float: right;" class="btn btn-danger" onclick="btndel(this)">X</button></td>
                      </tr>
                    </tbody>
                  </table>


</div>
</div>        <hr>                                   
                                                    <div class="col-lg-12 col-md-12">                                   
                                                        <div class="text-left">
                                                            <button type="submit" name="btnsubmit" class="site-button" value="Submit">Submit</button>
                                                        </div>
                                                    </div> 
                                                                                        
                                                
                                            </div>
                                                    
                                        </div>
                                    </div>
                
                            
                                                                          
                                                
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

<script type="text/javascript">
     function profilename(Id)
     {
     
        var state_id = document.getElementById('statehid'+Id).value;
           document.getElementById('state').value = state;
   
     
        getcity(state_id,Id);
    

     }
     function getcity(state_id,Id)
     {
       
    $.ajax({
      url:document.getElementById("hidgetcity").value,
      method:'POST',
      cache:false,
      data:{state_id:state_id},
      success:function(response)
      {
document.getElementById("citys").innerHTML = response;
document.getElementById("citys").value = document.getElementById("hid_city"+Id).value;
      }

    });
  }
</script>
<script type="text/javascript">
function BtnAdd()
{
    /*Add Button*/
    var v = $("#TRow1").clone().appendTo("#TBody") ;
    $(v).find("input").val('');

    $(v).removeClass("d-none");
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
    
    var v = $("#trow1").clone().appendTo("#tbody") ;
     
    $(v).find("input").val('');
    $(v).removeClass("d-none");
}

function btndel(v)
{
    /*Delete Button*/
       
       $(v).parent().parent().remove(); 
       GetTotal();
}


</script>



