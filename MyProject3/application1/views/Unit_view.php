
<div class="br-mainpanel">
      <div class="br-pagetitle">
        <i class="icon ion-ios-user"></i>
        <div>
          <h4>Add Unit</h4>
          <p class="mg-b-0"></p>
        </div>
        <div style="width:80%">
            <p><button class="btn btn-outline-primary btn-sm" style="float:right" data-toggle="modal" data-target="#modalUnit" onclick="addnewUser()"><i class="fa fa-plus mg-r-10"></i> Add New Unit</button>
    <script type="text/javascript">
      function addnewUser()
      {
        document.getElementById("btnSubmit").value = "Submit";

      }
    </script></p>
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


  

<br>
<table class="table table-bordered table-colored table-primary">
            <thead>
              <tr>
                <th class="wd-5p text-center">ID</th>
                <th class="wd-10p text-center">Unit Name</th>
                <th class="wd-15p text-center">Unit symbol</th>
                <th class="wd-15p text-center">Decimal</th>
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
              <td class="text-center"><?php echo $rw->unit_name; ?>
              <td class="text-center"><?php echo $rw->unit_symbol; ?>
              <td class="text-center"><?php echo $rw->decimal1; ?>
              <td class="text-center"><?php echo $rw->DateTime; ?>

                 <input type="hidden" id="hidunit_name<?php echo $rw->id; ?>" value="<?php echo $rw->unit_name ?>">
             <input type="hidden" id="hidunit_symbol<?php echo $rw->id; ?>" value="<?php echo $rw->unit_symbol ?>">
             <input type="hidden" id="hidecimal1<?php echo $rw->id; ?>" value="<?php echo $rw->decimal1 ?>">
            
             

              </td>
              <td><a class="btn btn-primary btn-rounded " data-toggle="modal" data-target="#modalUnit" href="javascript:void(0)"  onclick="editUnit('<?php echo $rw->id ?>')">edit</a>
              <a class="btn btn-danger btn-rounded"  href='<?php echo base_url(); ?>Unit/deleteUnit?id="<?php echo $rw->id; ?>"'>Delete</a></td>
        </tr>
      <?php $i++;}
     ?>
            </tbody>
          </table>

          



<script type="text/javascript">
  function validate()
  {
    var Unit_name = document.getElementById('unit_name').value;
    var Unit_sybmbol = document.getElementById('unit_symbol').value;
    var Decimal = document.getElementById('decimal1').value;
    if(Unit_name == "")
    {
      document.getElementById("name").innerHTML = "Please Enter Unit Name"
      return false;
    }
    if(Unit_sybmbol == "")
    {
      document.getElementById("symbol").innerHTML = "Please Enter Unit Symbol"
      return false;
    }
    if(Decimal == "")
    {
      document.getElementById('decimal').innerHTML = "Please Enter Decimal"
      return false;
    }

  }
  function editUnit(id)
  {
   var Name = document.getElementById("hidunit_name"+id).value;
    document.getElementById("unit_name").value = Name;
    var mobile_no = document.getElementById("hidunit_symbol"+id).value;
    document.getElementById("unit_symbol").value = mobile_no;
     var decimal1 = document.getElementById("hidecimal1"+id).value;
     
    document.getElementById("decimal1").value = decimal1;
     
    document.getElementById("hidid").value = id;
    document.getElementById("btnSubmit").value = "Update";
 
  }
</script>
          </div><!-- col-3 -->
          
        </div><!-- row -->

        

      </div><!-- br-pagebody -->
     
    </div><!-- br-mainpanel -->



    <div class="modal fade" id="modalUnit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
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
        <form id="frmAddCompany" action="<?php echo base_url(); ?>Unit/addupdateUnit" method="post" onsubmit="return validate()">
         <input type="hidden" name="hidid" id="hidid" value=""  class="form-control validate">
         <p><label data-error="wrong"  data-success="right" > Unit Name</label>
          <input type="text" id="unit_name" name="unit_name" value="" class="form-control validate" autocomplete="off" ><span id="name"></span></p>
          <span><?php echo form_error(); ?></span>
          <p><label data-error="wrong"  data-success="right">Unit Symbol</label>
          <input type="text" id="unit_symbol" name="unit_symbol" value="" class="form-control validate" autocomplete="off"><span id="symbol"></span></p>
          <span><?php echo form_error(); ?></span>
          <p><label data-error="wrong"  data-success="right">Decimal</label>
          <input type="text" id="decimal1" name="decimal1" value="" class="form-control validate" autocomplete="off"><span id="decimal"></span></p>
          <span><?php echo form_error(); ?></span>
           
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