
<div class="br-mainpanel">
      <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Add Company</h4>
          <p class="mg-b-0"></p>
        </div>
        <div style="width:80%">
          <button class="btn btn-outline-primary btn-sm" style="float:right" data-toggle="modal" data-target="#modalLoginForm" onclick="addnewcompany()"><i class="fa fa-plus mg-r-10"></i> Add New Company</button>
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
                <th class="wd-10p">ID</th>
                <th class="wd-35p">Company Name</th>
                <th class="wd-35p">DateTime</th>
                <th class="wd-20p"></th>
              </tr>
            </thead>
            <tbody>
             <?php
      $i=1;
      foreach($data->result() as $rw)
      {?>
        <tr>
              <th scope="row"><?php echo $i; ?></th>
              <td><?php echo $rw->company_name; ?></td>
              <td><?php echo $rw->DateTime; ?>
                
              <input type="hidden" id="hidCompnayName<?php echo $rw->Id; ?>" value="<?php echo $rw->company_name ?>">

              </td>
              <td><a class="btn btn-primary btn-rounded" data-toggle="modal" data-target="#modalLoginForm" href="javascript:void(0)"  onclick="editcompnay('<?php echo $rw->Id ?>')">edit</a>
              <a class="btn btn-danger btn-rounded"  href='<?php echo base_url(); ?>Company/deleteCompany?id="<?php echo $rw->Id; ?>"'>Delete</a></td>

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
        <h4 class="modal-title w-100 font-weight-bold">Add Company</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
        <form id="frmAddCompany" action="<?php echo base_url(); ?>Company/addupdatecompany" method="post" onsubmit="return validation()">
         <input type="hidden" name="hidid" id="hidid" value=""  class="form-control validate">
         <label data-error="wrong"  data-success="right"  for="defaultForm-email" >Company Name</label>
          <input type="text" id="etCompanyName" name="etCompanyName"  class="form-control validate" autocomplete="off">
          <span id="Name"></span>
          <?php echo form_error(); ?>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
      
     
        <input type="submit" class="btn btn-success" id="btnsubmit" name="btnsubmit" value="Submit">
        
        
      </div>
      </div>
    </div>
  </div>
</div>




  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>