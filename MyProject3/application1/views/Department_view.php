
<div class="br-mainpanel">
      <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Add Department</h4>
          <p class="mg-b-0"></p>
        </div>
        <div style="width:80%">       
    <button class="btn btn-outline-primary btn-sm" style="float:right" data-toggle="modal" data-target="#modalLoginForm" onclick="addnewcompany()"><i class="fa fa-plus mg-r-10"></i> Add New Department</button>
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
                <th class="">Department Name</th>
                <th class="">Department Code</th>
             
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
              <td><?php echo $rw->Decategory_name; ?></td>
              <td><?php echo $rw->Decategory_code; ?></td>
              
               
              <input type="hidden" id="hiddepartmentName<?php echo $rw->id; ?>" value="<?php echo $rw->Decategory_name ?>">
              <input type="hidden" id="hiddepartment_code<?php echo $rw->id; ?>" value="<?php echo $rw->Decategory_code ?>">
              
              
              
              </td>
              <td><a class="btn btn-primary btn-rounded" data-toggle="modal" data-target="#modalLoginForm" href="javascript:void(0)"  onclick="editdepartment('<?php echo $rw->id ?>')">edit</a>
              <a class="btn btn-danger btn-rounded"  href='<?php echo base_url(); ?>Department/deleteDepartment?id="<?php echo $rw->id; ?>"'>Delete</a></td>
            
        </tr>
      <?php $i++;}
     ?>
            </tbody>
          </table>

          



<script type="text/javascript">

  function validation() {
    var Decategory_name = document.getElementById("department_name").value;
    var Decategory_code = document.getElementById("department_code").value;

    if(Decategory_name == "")
    {
      document.getElementById('Name').innerHTML = "Enter Department Name"
      return false;
    }
    if(Decategory_code == "")
    {
      document.getElementById('Code').innerHTML = "Enter Department Code"
      return false;
    }

  }
  function editdepartment(id)
  {
    document.getElementById("hidid").value = id;
    var Decategory_name = document.getElementById("hiddepartmentName"+id).value;
    document.getElementById("department_name").value = Decategory_name;
    var Decategory_code = document.getElementById("hiddepartment_code"+id).value;
    document.getElementById("department_code").value = Decategory_code;
    

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
        <h4 class="modal-title w-100 font-weight-bold">Add Department</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-6 h-10">
 
        <form id="frmAddCompany" action="<?php echo base_url(); ?>Department/addupdateDepartment" method="post" onsubmit="return validation()">
         <input type="hidden" name="hidid" id="hidid" value=""  class="form-control validate">
          <p><label data-error="wrong"  data-success="right" >Department Name</label>
          <input type="text" id="department_name" name="department_name"  class="form-control validate" ><span id="Name"></span></P>
      
          <p><label data-error="wrong"  data-success="right">Department Code</label>
          <input type="text" id="department_code" name="department_code"  class="form-control validate" ><span id="Code"></span></P>

      
      <div class="modal-footer d-flex justify-content-center">
   
        <input type="submit" class="btn btn-success" id="btnSubmit" name="btnSubmit" value="Submit">
      </div>
      </div>
    </div>
  </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>