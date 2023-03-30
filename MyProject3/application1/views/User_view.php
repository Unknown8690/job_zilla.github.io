
<div class="br-mainpanel">
      <div class="br-pagetitle">
        <i class="icon ion-ios-user"></i>
        <div>
          <h4>Add User</h4>
          <p class="mg-b-0"></p>
        </div>
        <div style="width:80%">
          <button class="btn btn-outline-primary btn-sm" style="float:right" data-toggle="modal" data-target="#modalUser" onclick="addnewUser()"><i class="fa fa-plus mg-r-10"></i> Add New User</button>
    <script type="text/javascript">
      function addnewUser()
      { 
        document.getElementById('user_name').value;
        $('#user_name').blank();
        document.getElementById("btnSubmit").value = "Submit";

      }
    </script>
        </div>
      </div>

      <div class="br-pagebody">
        <div class="row row-sm">
          <div class="col-sm-6 col-xl-12 col-12">
           <?php
           if($this->session->flashdata("message") != "")
           {?>

            <div class="alert alert-success" id="alertmessage" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
              </button>
                 <strong class="d-block d-sm-inline-block-force"><?php echo $this->session->flashdata("message"); ?></strong>
             </div>

             <?php }

            ?>
             <?php
           if($this->session->flashdata("messageerror") != "")
           {?>
            <div class="alert alert-danger" id="alertmessage" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
              </button>
                 <strong class="d-block d-sm-inline-block-force"><?php echo $this->session->flashdata("messageerror"); ?></strong>
             </div>

          
           <?php }

            ?>


    


<table class="table table-bordered table-colored table-primary">
            <thead>
              <tr>
                <th class="wd-5p text-center">ID</th>
                <th class="wd-10p text-center" >User Name</th>
                <th class="wd-15p text-center">Mobile</th>
                <th class="wd-15p text-center">Email</th>
                <th class=" wp-15p text-center">Type</th>
                <th class="wd-20p text-center">DateTime</th>
                <th class="wd-20p text-center"></th>
              </tr>
            </thead>
            <tbody>
             <?php
      $i=1;
      foreach($data->result() as $rw)
      {?>
        <tr>
              <th scope="row"><?php echo $i; ?></th>
              <td class="text-center"><?php echo $rw->Name; ?>
              <td class="text-center"><?php echo $rw->mobile_no; ?>
              <td class="text-center"><?php echo $rw->emailid; ?>
              <td class="text-center"><?php echo $rw->user_type; ?>
              <td class="text-center"><?php echo $rw->DateTime; ?>
                
              
             <input type="hidden" id="hidUserName<?php echo $rw->Id; ?>" value="<?php echo $rw->Name ?>">
             <input type="hidden" id="hidmobileno<?php echo $rw->Id; ?>" value="<?php echo $rw->mobile_no ?>">
             <input type="hidden" id="hidemail<?php echo $rw->Id; ?>" value="<?php echo $rw->emailid ?>">
             <input type="hidden" id="hidpassword<?php echo $rw->Id; ?>" value="<?php echo $rw->password ?>">
             <input type="hidden" id="hiduser_type<?php echo $rw->Id; ?>" value="<?php echo $rw->user_type ?>">

              </td>
              <td><a class="btn btn-primary btn-rounded " data-toggle="modal" data-target="#modalUser" href="javascript:void(0)"  onclick="editUser('<?php echo $rw->Id ?>')">edit</a>
              <a class="btn btn-danger btn-rounded"  href='<?php echo base_url(); ?>User/deleteUser?id="<?php echo $rw->Id; ?>"'>Delete</a></td>

            
        </tr>
      <?php $i++;}
     ?>
            </tbody>
          </table>

          

<script>
  
//validate mobile
$(document).ready(function () {
  //called when key is pressed in textbox
  $("#mobile").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#Mobile").html("Digits Only").show().fadeOut("slow");
               return false;    
    }
    else if(e.length < 3 || e.length > 10){
      $("#Mobile").html("Mobile Number Should be 10 Digit").show().fadeOut("slow");
               return false;   
    }
    else {
      return true;
    }
   });
});
</script>

<script type="text/javascript">
  function validation()
  { 
    var Name = document.getElementById("user_name").value;
if(Name == "")
{
      document.getElementById('name').innerHTML = "Please Enter User Name"
      return false;
  }
  var Email = document.getElementById("email").value;
  if(Email == "")
{
      document.getElementById('Email').innerHTML = "Please Enter Email Id"
      return false;
  }
  var mobile_no = document.getElementById("mobile").value;
if(mobile_no == "")
{
      document.getElementById('Mobile').innerHTML = "Please Enter Mobile Number"
      return false;
  }
  var Password = document.getElementById("password").value;
if(Password == "")
{
      document.getElementById('Pass').innerHTML = "Please Enter Password "
      return false;
  }
var user_type = document.getElementById("user_type");
        if (user_type.value == "") {
           document.getElementById('Type').innerHTML = "Please Select User Type "
            return false; 
}

}
  function editUser(Id)
  {
    var Name = document.getElementById("hidUserName"+Id).value;
    document.getElementById("user_name").value = Name;
    var mobile_no = document.getElementById("hidmobileno"+Id).value;
    document.getElementById("mobile").value = mobile_no;
     var emailid = document.getElementById("hidemail"+Id).value;
    document.getElementById("email").value = emailid;
     var password = document.getElementById("hidpassword"+Id).value;
    document.getElementById("password").value = password;
     var user_type = document.getElementById("hiduser_type"+Id).value;
    document.getElementById("user_type").value = user_type;
    document.getElementById("hidid").value = Id;
    document.getElementById("btnSubmit").value = "Update";

    
    
  }
</script>
          </div><!-- col-3 -->
          
        </div><!-- row -->

        

      </div><!-- br-pagebody -->
     
    </div><!-- br-mainpanel -->



    <div class="modal fade" id="modalUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Add User</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
        <form id="frmAddCompany" action="<?php echo base_url(); ?>User/addUser" method="post" onsubmit="return validation()">
         <input type="hidden" name="hidid" id="hidid" value=""  class="form-control validate">
         <p><label data-error="wrong"  data-success="right"  >Name</label>
          <input type="text" id="user_name" name="user_name" value="" class="form-control validate" autocomplete="off" ><span id="name"></span></p>
          <span><?php echo form_error(); ?></span>
          <p><label data-error="wrong"  data-success="right">Email Id</label>
          <input type="text" id="email" name="email" value="" class="form-control validate" autocomplete="off"><span id="Email"></span></p>
          <span>
          
          </span>
          <p><label data-error="wrong"  data-success="right">Mobile Number</label>
          <input type="text" id="mobile" name="mobile" value="" class="form-control validate"  maxlength="10" autocomplete="off"><span id="Mobile"></span></p>
          <span><?php echo form_error(); ?></span>
          <p><label data-error="wrong"  data-success="right" autocomplete="off">Password</label>
          <input type="text" id="password" name="password" value="" class="form-control validate"><span id="Pass"></span></p>
          <span><?php echo form_error(); ?></span>
           <p><label data-error="wrong"  data-success="right">User Type</label>
          <select name="user_type" id="user_type" class="form-control validate">
             <option value="">Select Type</option>
             <option value="Employee">Employee</option>
          </select><span id="Type"></span></p>
        </div>
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <input type="submit" class="btn btn-success" id="btnSubmit" name="btnSubmit" value="Submit">     
      </div>
      </div>
    </div>
  </div>
</div>



<script type="text/javascript">
  



</script>
  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>