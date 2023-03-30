
<div class="br-mainpanel">
      <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Goods Reciept Voucher</h4>
          <p class="mg-b-0"></p>
        </div>
        <div style="width:80%">
          <button class="btn btn-primary" data-target=".bd-example-modal-lg" style="float:right" data-toggle="modal" data-target="#modelGRN" onclick="addnewcompany()"><i class="fa fa-plus mg-r-10"></i>Add New Entry</button>
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
                <th class="wd-2p">Sr</th>
                <th class="wd-4p">In-No</th>
                <th class="wd-10p">Company Name</th>
                <th class="wd-8p">Vendor Name</th>
                <th class="wd-8p">Mobile</th>
                <th class="wd-10p">Address</th>
                <th class="wd-5p">Item Name</th>
                <th class="wd-5p">Remark</th>
                <th class="wd-5p">QTY</th>
                <th class="wd-5p">Unit Name</th>
                <th class="wd-5p">Rate</th>
                <th class="wd-5p">Discount</th>
                <th class="wd-8p">Amount</th>
                <th class="wd-6p">Date</th>

              </tr>
            </thead>
            <tbody>
      
      <?php
      $i=1;
      foreach($data as $rw)
      {?>
     
        <tr>
              <th scope="row"><?php echo $i; ?></th>
              <th scope="row"><?php echo $rw->invoice_no; ?></th>
              <th scope="row"><?php echo $rw->company_name; ?></th>
              <th scope="row"><?php echo $rw->vendor_name; ?></th>
              <th scope="row"><?php echo $rw->mobile_no; ?></th>
              <th scope="row"><?php echo $rw->address; ?></th>
              <th scope="row"><?php echo $rw->item_Name; ?></th>
              <th scope="row"><?php echo $rw->remark; ?></th>
              <th scope="row"><?php echo $rw->qty; ?></th>
              <th scope="row"><?php echo $rw->unit_name; ?></th>
              <th scope="row"><?php echo $rw->rate; ?></th>
              <th scope="row"><?php echo $rw->discount; ?></th>
              <th scope="row"><?php echo $rw->Amount; ?></th>
              <th scope="row"><?php echo $rw->invoice_date; ?></th>

              <td>
                
              

              </td>
              

        </tr>
    <?php $i++;}
     ?>
            </tbody>
          </table>

   



<script type="text/javascript">
  function validation()
  {
    var etCompanyName = document.getElementById("etCompanyName").value;

    if(etCompanyName == "")
    {
          document.getElementById('Name').innerHTML = "Please Enter Company Name"
          return false;
    }

  }
  function editcompnay(Id)
  {
    var company_name = document.getElementById("hidCompnayName"+Id).value;
    document.getElementById("etCompanyName").value = company_name;
    document.getElementById("hidid").value = Id;
    document.getElementById("btnsubmit").value = "Update";
    
  }
  
$(document).ready(function () {
  
  $("#qty").keydown(function (event) {
    


     if (event.shiftKey == true) {
            event.preventDefault();
        }

        if ((event.keyCode >= 48 && event.keyCode <= 57) || 
            (event.keyCode >= 96 && event.keyCode <= 105) || 
            event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 37 ||
            event.keyCode == 39 || event.keyCode == 46 || event.keyCode == 190|| event.keyCode == 110 ) {

        } else {
            event.preventDefault();
        }

        if($(this).val().indexOf('.') !== -1 && event.keyCode == 190)
            event.preventDefault(); 
    //  if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57 || e.which == 46 )) {
       
    //     $("#qty").html("Digits Only").show().fadeOut("slow");
    //            return false;    
    // }
    // else {
    //   return true;
    // }
   });
});

//rate decimal and number only
$(document).ready(function () {
  
  $("#rate").keydown(function (event) {
    


     if (event.shiftKey == true) {
            event.preventDefault();
        }

        if ((event.keyCode >= 48 && event.keyCode <= 57) || 
            (event.keyCode >= 96 && event.keyCode <= 105) || 
            event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 37 ||
            event.keyCode == 39 || event.keyCode == 46 || event.keyCode == 190|| event.keyCode == 110 ) {

        } else {
            event.preventDefault();
        }

        if($(this).val().indexOf('.') !== -1 && event.keyCode == 190)
            event.preventDefault(); 
    //  if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57 || e.which == 46 )) {
       
    //     $("#qty").html("Digits Only").show().fadeOut("slow");
    //            return false;    
    // }
    // else {
    //   return true;
    // }
   });
});

//discount decimal and number only
$(document).ready(function () {
  
  $("#dis").keydown(function (event) {
    


     if (event.shiftKey == true) {
            event.preventDefault();
        }

        if ((event.keyCode >= 48 && event.keyCode <= 57) || 
            (event.keyCode >= 96 && event.keyCode <= 105) || 
            event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 37 ||
            event.keyCode == 39 || event.keyCode == 46 || event.keyCode == 190|| event.keyCode == 110 ) {

        } else {
            event.preventDefault();
        }

        if($(this).val().indexOf('.') !== -1 && event.keyCode == 190)
            event.preventDefault(); 
    //  if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57 || e.which == 46 )) {
       
    //     $("#qty").html("Digits Only").show().fadeOut("slow");
    //            return false;    
    // }
    // else {
    //   return true;
    // }
   });
});

//discount decimal and number only
$(document).ready(function () {
  
  $("#amount").keydown(function (event) {
    


     if (event.shiftKey == true) {
            event.preventDefault();
        }

        if ((event.keyCode >= 48 && event.keyCode <= 57) || 
            (event.keyCode >= 96 && event.keyCode <= 105) || 
            event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 37 ||
            event.keyCode == 39 || event.keyCode == 46 || event.keyCode == 190|| event.keyCode == 110 ) {

        } else {
            event.preventDefault();
        }

        if($(this).val().indexOf('.') !== -1 && event.keyCode == 190)
            event.preventDefault(); 
    //  if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57 || e.which == 46 )) {
       
    //     $("#qty").html("Digits Only").show().fadeOut("slow");
    //            return false;    
    // }
    // else {
    //   return true;
    // }
   });
});


</script>
<script type="text/javascript">
  
</script>






          </div><!-- col-3 -->
          
        </div><!-- row -->

        

      </div><!-- br-pagebody -->
     
    </div><!-- br-mainpanel -->









    <div class="modal fade bd-example-modal-lg" id="modelGRN" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" 
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Add Good Recipt Voucher</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-6 h-10">
      
   
        <form id="GRN" action="<?php echo base_url(); ?>EMP/GRN/addupdateGRN" method="post" onsubmit="return validation()" enctype="multipart/form-data" onsubmit="return validation()">
          <div class="row">
          <div class="col-md-3 mb-2">
          <div class="form-outline">
          <p><label data-error="wrong"  data-success="right">Date(System Date)</label>
          <input type="date" id="date" name="date"  class="form-control validate" ></P>

</div>
</div>
         <div class="col-md-3 mb-2">
          <div class="form-outline">
          <div class="float-end">
          <p><label data-error="wrong"  data-success="right">Company</label>
          <select type="option" id="company" name="company"  class="form-control validate float-end" >
          <option value="">Select Company</option>
          <?php
           foreach($company as $row)
                       {
                      echo '<option value = "'.$row->Id.'">'.$row->company_name.'</option>';

                       }
                      ?> 
        </select>
        </P>
         
</div>          
</div>
</div>
</div>
      
            <div class="row">
           <div class="col-md-6 mb-2">
            <div class="form-outline">
          <p><label data-error="wrong"  data-success="right"  >Invoice No.</label>
          <input type="text" id="invoice_no" name="invoice_no"  class="form-control validate " autocomplete="off"></P>
        </div>
      </div>
   
         <div class="col-md-6 mb-2">
            <div class="form-outline">
          <p><label data-error="wrong"  data-success="right"  >Vendor Name</label>
          <select type="option" id="venor_id" name="venor_id"  class="form-control validate" autocomplete="off" >
            <option value="">Select Vendor</option>
          <?php
           foreach($vendor as $row)
                       {
                      echo '<option value = "'.$row->id.'" mobile_no = "'.$row->mobile_no.'" address = "'.$row->address.'" >'.$row->vendor_name.'</option>';
                       
                       }
                      ?> 
          </select></P>

          <script type="text/javascript">

 

            $(function() { 
            $("#venor_id").change(function(){ 
                var vendor_id = $(this).val();
                 if(vendor_id > 0){
                var element = $(this).find('option:selected'); 
                var mobile_no = element.attr("mobile_no"); 
                var address = element.attr("address"); 
                document.getElementById('address').value = address;
                document.getElementById('mobile').value = mobile_no;
             }
             else
             {
                document.getElementById('address').value = "";
                document.getElementById('mobile').value =  "";

             }

                
                
            }); 
        }); 
           
          </script>
        </div>
      </div>
    </div>

         <div class="row">
           <div class="col-md-6 mb-2">
            <div class="form-outline">
          <p><label data-error="wrong"  data-success="right" >Mobile</label>
          <input type="text" id="mobile" name="" value="<?php echo "" ?>"  class="form-control validate" autocomplete="off"></P>
        </div>
      </div>


           <div class="col-md-6 mb-2">
            <div class="form-outline">
          <label data-error="wrong"  data-success="right"  >Address</label>
          <p><tetxarea row="3" cols="30" data-error="wrong" data-success="right">
          <input type="textarea" id="address" name="address" value="<?php echo "" ?>" class="form-control validate" autocomplete="off"></textarea></P>
       

           </div>
      </div>
    </div>
    <hr>
          <div class="row">
          <div class="col-md-3 mb-3">
          <div class="form-outline">
           <p><label data-error="wrong" data-success="right" >Item Name</label>
           <select type="option" name="item_id" id="item_id" class="form-control validate" autocomplete="off">
           <option value="">Select Item</option>
             <?php
           foreach($item as $row)
                       {
                      echo '<option value = "'.$row->id.'">'.$row->item_name.'</option>';

                       }
                      ?> 
           
</select></p>
</div>
</div>
          <div class="col-md-4 mb-3">
          <div class="form-outline">
           <p><label data-error="wrong" data-success="right" >Remark</label>
           <input type="text"  name="remark" id="remark" class="form-control validate" ></p>
</div>
</div>
          <div class="col-md-2 mb-3">
          <div class="form-outline">
           <p><label data-error="wrong" data-success="right" >QTY</label>
           <input type="number" name="qty" id="qty" class="form-control validate qty" autocomplete="off"></p>
</div>
</div>
           <div class="col-md-3 mb-3">
           <div class="form-outline">
           <p><label data-error="wrong" data-success="right" >Unit</label>
           <select type="option" name="unit" id="unit" class="form-control validate" autocomplete="off">
           <option value="">Select Item</option>
            <?php
           foreach($unit as $row)
                       {
                      echo '<option value = "'.$row->id.'">'.$row->unit_name.'</option>';

                       }
                      ?> 
           
</select></p>
</div>
</div>
</div>
           <div class="row">
          <div class="col-md-3 mb-3">
          <div class="form-outline">
           <p><label data-error="wrong"  data-success="right" >Rate</label>
          <input type="text" name="rate" id="rate" class="form-control validate" ><span id="Pincode" ></span></P>
</div>
</div>
      
           <div class="col-md-3 mb-3">
           <div class="form-outline">

          <p><label data-error="wrong"  data-success="right"  >Discount%</label>
          <input type="text" id="dis" name="dis"  class="form-control validate" autocomplete="off"><span id="Gst">
           
          </span></P>
</div>
</div>
         <div class="col-md-4 mb-3">
          <div class="form-outline">
          <p><label data-error="wrong"  data-success="right"  >Amount</label>
          <input type="text" id="amount" name="amount"  class="form-control validate" autocomplete="off"></P>
</div>
</div>
</div>
        
          <div class="row">
          <div class="col-md-4 mb-2">
          <div class="form-outline">
          <p><label data-error="wrong"  data-success="right">Upload Doc</label>
          <input type="file" id="uploadfile" name="uploadfile"  class="form-control validate" autocomplete="off"><span id="Ifsc"></span></P>
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




  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>