
<div class="br-mainpanel">
      <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Add Sub Department</h4>
          <p class="mg-b-0"></p>
        </div>
        <div style="width:70%">
          
    <button class="btn btn-outline-primary btn-sm" style="float:right" data-toggle="modal" data-target="#modalLoginForm" onclick="addnewcompany()"><i class="fa fa-plus mg-r-10"></i> Add New Sub-Department</button>
    <br>
    <script type="text/javascript">

     tion addnewcompany()
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
                <th class="">Sub Department Name</th>
                <th class="">Sub Department Category</th>
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
              <td><?php echo $rw->sub_Dep_cost_Name; ?></td>
              <td><?php echo $rw->Dep_cost_category; ?></td>
             
              
             
              <input type="hidden" id="hiddsub_Dep_cost_Name<?php echo $rw->id ?>" value="<?php echo $rw->sub_Dep_cost_Name ?>">
              <input type="hidden" id="hiddDep_cost_category<?php echo $rw->id ?>" value="<?php echo $rw->Dep_cost_category ?>">
              </td>
              <td><a class="btn btn-primary btn-rounded" data-toggle="modal" data-target="#modalLoginForm" href="javascript:void(0)"  onclick="editVendor('<?php echo $rw->id ?>')">edit</a>
              <a class="btn btn-danger btn-rounded"  href='<?php echo base_url(); ?>Sub_department/deleteSub_department?id="<?php echo $rw->id; ?>"'>Delete</a></td>

            
        </tr>
      <?php $i++;}
     ?>
            </tbody>
          </table>

          



<script type="text/javascript">
  function  validation() {
     var sub_Dep_cost_Name = document.getElementById("sub_department_name").value;
      

      if(sub_Dep_cost_Name == "")
      {
        document.getElementById("Name").innerHTML = "Enter Sub Department Name"
        return false;
      }
     
  }
  function editVendor(id)
  {
    document.getElementById("hidid").value = id;
    var sub_Dep_cost_Name = document.getElementById("hiddsub_Dep_cost_Name"+id).value;
    document.getElementById("sub_department_name").value = sub_Dep_cost_Name;
    var Dep_cost_category = document.getElementById("hiddDep_cost_category"+id).value;
    document.getElementById("department_cat").value = Dep_cost_category;
 
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
        <h4 class="modal-title w-100 font-weight-bold">Add Sub-Department</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-6 h-10">
   
        <form id="frmAddCompany" action="<?php echo base_url(); ?>Sub_department/addupdatesubdep" method="post" onsubmit="return validation()">
         <input type="hidden" name="hidid" id="hidid" value=""  class="form-control validate">
          <p><label data-error="wrong"  data-success="right" >Sub Departmetn Name</label>
          <input type="text" id="sub_department_name" name="sub_department_name"  class="form-control validate" ><span id="Name"></span></P>

          <p><label data-error="wrong" data-success="right" >Department Category</label>
           <select type="option" name="department_cat" id="department_cat" class="form-control validate">
           <option value="">Select Category</option>
            <?php 
               foreach($Decategory_name as $row)
                       {
                      echo '<option value = "'.$row->id.'">'.$row->Decategory_name.'</option>';

                       }
                      ?> 
                      </select>
      <div class="modal-footer d-flex justify-content-center">
   
        <input type="submit" class="btn btn-success" id="btnSubmit" name="btnSubmit" value="Submit">
      </div>
      </div>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>