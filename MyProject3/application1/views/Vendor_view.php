
<div class="br-mainpanel">
      <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Add Vendor</h4>
          <p class="mg-b-0"></p>
        </div>
        <div style="width:80%"> <button class="btn btn-outline-primary btn-sm" style="float:right" data-toggle="modal" data-target="#modalLoginForm" onclick="addnewcompany()"><i class="fa fa-plus mg-r-10"></i> Add New Vendor</button>
    <br>
    <script type="text/javascript">
      function addnewcompany()
      {
        document.getElementById("btnsubmit").value = "Submit";
        
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


   

<table class="table table-bordered table-colored table-primary">
            <thead>
              <tr>
                <th class="">ID</th>
                <th class="">Vendor Name</th>
                <th class="">Vendor Code</th>
                <th class="">Mobile No</th>
                <th class="">Email Id</th>
                <th class="">Credit Period</th>
                <th class=""></th>
                
              </tr>
            </thead>
            <tbody>
             <?php
      $i=1;
      foreach($data->result() as $rw)
      {?>
        <tr>
              <th scope="row"><?php echo $i; ?></th>
              <td><?php echo $rw->vendor_name; ?></td>
              <td><?php echo $rw->vendor_code; ?></td>
              <td><?php echo $rw->mobile_no; ?></td>
              <td><?php echo $rw->email_id; ?></td>
              <td><?php echo $rw->credit_period; ?></td>
               
              <input type="hidden" id="hidvendor_name<?php echo $rw->id; ?>" value="<?php echo $rw->vendor_name ?>">
              <input type="hidden" id="hidvendor_code<?php echo $rw->id; ?>" value="<?php echo  $rw->vendor_code ?>">
              <input type="hidden" id="hidvendor_code<?php echo $rw->id; ?>" value="<?php  echo $rw->mobile_no ?>">
              <input type="hidden" id="hidemail_id<?php echo $rw->id; ?>" value="<?php echo $rw->email_id ?>">
              <input type="hidden" id="hidcredit_period<?php echo $rw->id; ?>" value="<?php echo $rw->credit_period ?>">
              <input type="hidden" id="hidaddress<?php echo $rw->id; ?>" value="<?php echo $rw->address ?>">
              <input type="hidden" id="hid_state<?php echo $rw->id; ?>" value="<?php echo $rw->state_id ?>">
              <input type="hidden" id="hid_city<?php echo $rw->id; ?>" value="<?php echo $rw->city_id ?>">
              <input type="hidden" id="hid_pincode<?php echo $rw->id; ?>" value="<?php echo $rw->pincode ?>">
              <input type="hidden" id="hid_gst<?php echo $rw->id; ?>" value="<?php echo $rw->Gst_no ?>">
              <input type="hidden" id="hid_panno<?php echo $rw->id; ?>" value="<?php echo $rw->pan_no ?>">
              <input type="hidden" id="hid_bankname<?php echo $rw->id; ?>" value="<?php echo $rw->Bank_name ?>">
              <input type="hidden" id="hid_bankacc<?php echo $rw->id; ?>" value="<?php echo $rw->Bank_account ?>">
              <input type="hidden" id="hid_ifsc<?php echo $rw->id; ?>" value="<?php echo $rw->IFSC ?>">
              </td>
              <td><a class="btn btn-primary btn-rounded" data-toggle="modal" data-target="#modalLoginForm" href="javascript:void(0)"  onclick="editVendor('<?php echo $rw->id ?>')">edit</a>
              <a class="btn btn-danger btn-rounded"  href='<?php echo base_url(); ?>Vendor/deletedVendor?id="<?php echo $rw->id; ?>"'>Delete</a></td>
        </tr>
      <?php $i++;}
     ?>
            </tbody>
          </table>

          


<input type="hidden" id="hidgetcity" value="<?php echo base_url(); ?>Vendor/getCities">
<script type="text/javascript">

  function validation()
  {
    
    var Vendor_Name = document.getElementById('vendor_name').value;
    var vendor_code = document.getElementById('vendor_code').value;
    var mobile = document.getElementById('mobile').value;
    var email = document.getElementById('email').value;
    var credit = document.getElementById('credit_period').value;
    var address = document.getElementById('address').value;
    var gst_no = document.getElementById('gst_no').value;
    var pan_no = document.getElementById('pan_no').value;
    var bankname = document.getElementById('bank_name').value;
    var bankaccount = document.getElementById('account_no').value;
    var ifsc = document.getElementById('ifsccode').value;


    
    

    if(Vendor_Name == "")
    {
      document.getElementById("name").innerHTML = "Enter Vendor Name"
      return false;
    }
    if(vendor_code == "")
    {
      document.getElementById("code").innerHTML = "Enter Vendor Code"
      return false;
    }
    if(mobile == "")
    {
       document.getElementById("Mobile").innerHTML = "Enter Mobile Number"
      return false;
    }
    if(email == "")
    {
       document.getElementById("Email").innerHTML = "Enter Email Id"
      return false;
    }
    if(credit == "")
    {
       document.getElementById("Credit").innerHTML = "Enter Credit period"
      return false;
    }
    if(address == "")
    {
      
      document.getElementById("Add").innerHTML = "Enter Address "
      return false;
    }
    if(gst_no == "")
    {
      
      document.getElementById("Gst").innerHTML = "Enter Gst No "
      return false;
    }
    if(pan_no == "")
    {
      document.getElementById("Pan").innerHTML = "Enter Pan Card Number "
      return false;
    }
    if(bankname == "")
    {
      document.getElementById("Bank").innerHTML = "Enter Bank Name "
      return false;
    }
    if(bankaccount == "")
    {
      document.getElementById("Acc").innerHTML = "Enter Bank Account Number "
      return false;
    }
    if(ifsc == "")
    {
      document.getElementById("Ifsc").innerHTML = "Enter Ifsc Code "
      return false;
    }
    

  }
  function getcity(state_id,id)
  {
    $.ajax({
      url:document.getElementById("hidgetcity").value,
      method:'POST',
      cache:false,
      data:{state_id:state_id},
      success:function(response)
      {
document.getElementById("city").innerHTML = response;
document.getElementById("city").value = document.getElementById("hid_city"+id).value
      }

    });
  }
  function editVendor(id)
  {
   
    document.getElementById("hidid").value = id;
    var vendor_name = document.getElementById("hidvendor_name"+id).value;
    document.getElementById("vendor_name").value = vendor_name;
    var vendor_code = document.getElementById("hidvendor_code"+id).value;
    document.getElementById("vendor_code").value = vendor_code;
    var mobile_no = document.getElementById("hidvendor_code"+id).value;
    document.getElementById("mobile").value = mobile_no;
    var email_id = document.getElementById("hidemail_id"+id).value;
    document.getElementById("email").value = email_id;
    var credit_period = document.getElementById("hidcredit_period"+id).value;
    document.getElementById("credit_period").value = credit_period;
    var address = document.getElementById("hidaddress"+id).value;
    document.getElementById("address").value = address;
    var state_id = document.getElementById('hid_state'+id).value;
    document.getElementById('state').value = state_id;

    getcity(state_id,id);
    var pincode = document.getElementById('hid_pincode'+id).value;
    document.getElementById('pincode').value = pincode;
    var city_id = document.getElementById('hid_city'+id).value;
    document.getElementById('city').value = city_id;
    var Gst_no = document.getElementById("hid_gst"+id).value;
    document.getElementById('gst_no').value = Gst_no;
    var pan_no = document.getElementById("hid_panno"+id).value;
    document.getElementById('pan_no').value = pan_no;
    var Bank_name = document.getElementById("hid_bankname"+id).value;
    document.getElementById('bank_name').value = Bank_name;
    var Bank_account = document.getElementById("hid_bankacc"+id).value;
    document.getElementById('account_no').value = Bank_account;
    var IFSC = document.getElementById("hid_ifsc"+id).value;
    document.getElementById('ifsccode').value = IFSC;
    document.getElementById("btnSubmit").value = "Update"; 
  }
</script>






          </div><!-- col-3 -->
          
        </div><!-- row -->

        

      </div><!-- br-pagebody -->
     
    </div><!-- br-mainpanel -->









    <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Add Vendor</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-6 h-10">
      <div class="row">
      <div class="col-md-6 mb-4">
      <div class="form-outline">
        <form id="frmAddCompany" action="<?php echo base_url(); ?>Vendor/addupdatevendor" method="post" onsubmit="return validation()" onkeyup="">
         <input type="hidden" name="hidid" id="hidid" value=""  class="form-control validate">
          <p><label data-error="wrong"  data-success="right"  >Vendor Name</label>
          <input type="text" id="vendor_name" name="vendor_name"  class="form-control validate" ><span id="name" autocomplete="off"></span></P>
</div>
</div>
          <div class="col-md-6 mb-4">
                    <div class="form-outline">
          <p><label data-error="wrong"  data-success="right">Vendor Code</label>
          <input type="text" id="vendor_code" name="vendor_code"  class="form-control validate" ><span id="code" autocomplete="off"></span></P>
</div>
</div>
</div>
      <div class="row">
      <div class="col-md-6 mb-4">
      <div class="form-outline">
          <p><label data-error="wrong"  data-success="right"  >Mobile No</label>
          <input type="text" id="mobile" name="mobile"  class="form-control validate" pattern=".{10}" title="Mobile Number Should be 10 Digit!" autocomplete="off"><span id="Mobile"></span></P>
</div>
</div>
      <div class="col-md-6 mb-4">
      <div class="form-outline">
          <p><label data-error="wrong"  data-success="right"   >Email Id</label>
          <input type="text" id="email" name="email"  class="form-control validate" ><span id="Email" autocomplete="off"></span></P>
</div>
</div>
</div>
          <p><label data-error="wrong"  data-success="right" >Credit Period</label>
          <input type="text" id="credit_period" name="credit_period"  class="form-control validate" autocomplete="off" ><span id="Credit" ></span></P>
          <label>Address</label>
          <p><tetxarea row="3" cols="30" data-error="wrong" data-success="right">
          <input type="textarea" id="address" name="address"  class="form-control validate" autocomplete="off"></textarea><span id="Add"></span></P>
          <div class="row">
          <div class="col-md-6 mb-4">
          <div class="form-outline">
           <p><label data-error="wrong" data-success="right" >State</label>
           <select type="option" name="state" id="state" class="form-control validate" autocomplete="off">
           <option value="">Select State</option>
            <?php 
               foreach($state_name as $row)
                       {
                      echo '<option value = "'.$row->state_id.'">'.$row->state_name.'</option>';

                       }
                      ?> 
</select><span id="State"></span></p>
</div>
</div>
          <div class="col-md-6 mb-4">
          <div class="form-outline">
           <p><label data-error="wrong" data-success="right" >City</label>
           <select type="option"  name="city" id="city" class="form-control validate" >
           <option value="">Select City</option>
          
</select><span id="City"></span></p>
</div>
</div>
</div>
           <p><label data-error="wrong"  data-success="right" >Pincode</label>
          <input type="text" name="pincode" id="pincode" class="form-control validate" ><span id="Pincode" ></span></P>

      <div class="row">
      <div class="col-md-6 mb-4">
      <div class="form-outline">
          <p><label data-error="wrong"  data-success="right"  >Gst No</label>
          <input type="text" id="gst_no" name="gst_no"  class="form-control validate" autocomplete="off"><span id="Gst"></span></P>
</div>
</div>
          <div class="col-md-6 mb-4">
                    <div class="form-outline">
          <p><label data-error="wrong"  data-success="right">Pan No</label>
          <input type="text" id="pan_no" name="pan_no"  class="form-control validate"autocomplete="off" ><span id="Pan"></span></P>
</div>
</div>
</div>
         <p><label data-error="wrong"  data-success="right"  >Bank Name</label>
          <input type="text" id="bank_name" name="bank_name"  class="form-control validate" autocomplete="off"><span id="Bank"></span></P>

          <div class="row">
      <div class="col-md-6 mb-4">
      <div class="form-outline">
          <p><label data-error="wrong"  data-success="right"  >Bank Account No</label>
          <input type="text" id="account_no" name="account_no"  class="form-control validate" autocomplete="off"><span id="Acc"></span></P>
</div>
</div>
          <div class="col-md-6 mb-4">
                    <div class="form-outline">
          <p><label data-error="wrong"  data-success="right">IFSC Code</label>
          <input type="text" id="ifsccode" name="ifsccode"  class="form-control validate" autocomplete="off"><span id="Ifsc"></span></P>
</div>
</div>
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


 $('#state').change(function(){
  var state_id = $('#state').val();
  if(state_id != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>Vendor/getCities",
    method:"POST",
    data:{state_id:state_id},
    success:function(data) 
    {
     $('#city').html(data);
    }
   });
  }
  else
  {
   $('#city').html('<option value="">Select City</option>');
  }
 });


</script>

 


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>