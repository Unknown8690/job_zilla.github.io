<div class="br-mainpanel">
  <div class="br-pagetitle">
    <i class="icon ion-ios-user"></i>
    <div>
      <h4>Add Site</h4>
      <p class="mg-b-0"></p>
    </div>
  </div>

  <div class="br-pagebody">
    <div class="row row-sm">
      <div class="col-sm-6 col-xl-12 col-12">
        <?php
        if ($this->session->flashdata("message") != "") { ?>
          <div class="alert alert-success" id="alertmessage" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong class="d-block d-sm-inline-block-force">
              <?php echo $this->session->flashdata("message"); ?>
            </strong>
          </div>

        <?php }

        ?>
        <?php
        if ($this->session->flashdata("messageerror") != "") { ?>
          <div class="alert alert-danger" id="alertmessage" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong class="d-block d-sm-inline-block-force">
              <?php echo $this->session->flashdata("messageerror"); ?>
            </strong>
          </div>


        <?php }

        ?>


        <p><button class="btn btn-outline-primary btn-sm" style="float:right" data-toggle="modal"
            data-target="#modalSite" onclick="addnewUser()"><i class="fa fa-plus mg-r-10"></i> Add New Site</button>
          <script type="text/javascript">
            function addnewUser() {
              document.getElementById("btnSubmit").value = "Submit";

            }
          </script>
        </p>

        <br>
        <table class="table table-bordered table-colored table-primary">
          <thead>
            <tr>
              <th class="wd-5p text-center">ID</th>
              <th class="wd-10p text-center">Site Name</th>
              <th class="wd-15p text-center">Company</th>
              <th class="wd-15p text-center">Address</th>
              <th class="wd-20p text-center">DateTime</th>
              <th class="wd-20p text-center"></th>
            </tr>
          </thead>
          <tbody>
            <?php
            $i = 1;
            foreach ($data->result() as $rw) { ?>
              <tr>
                <th scope="row">
                  <?php echo $i; ?>
                </th>
                <td class="text-center">
                  <?php echo $rw->site_name; ?>
                <td class="text-center">
                  <?php echo $rw->company_name; ?>
                <td class="text-center">
                  <?php echo $rw->address; ?>
                <td class="text-center">
                  <?php echo $rw->DateTime; ?>

                  <input type="hidden" id="hidsite_name<?php echo $rw->id; ?>" value="<?php echo $rw->site_name ?>">
                  <input type="hidden" id="hidcompany_name<?php echo $rw->id; ?>" value="<?php echo $rw->company_name ?>">
                  <input type="hidden" id="hiaddress<?php echo $rw->id; ?>" value="<?php echo $rw->address ?>">
                  <input type="hidden" id="hicompany_id<?php echo $rw->id; ?>" value="<?php echo $rw->company_id ?>">



                </td>
                <td><a class="btn btn-primary btn-rounded " data-toggle="modal" data-target="#modalSite"
                    href="javascript:void(0)" onclick="editSite('<?php echo $rw->id ?>')">edit</a></td>
                    

              </tr>
              <?php $i++;
            }
            ?>
          </tbody>
        </table>





        <script type="text/javascript">
          function editSite(id) {
            var Name = document.getElementById("hidsite_name" + id).value;
            document.getElementById("site_name").value = Name;
            var company_name = document.getElementById("hidcompany_name" + id).value;
            //document.getElementById("company_name").value = company_name;
            //alert(company_name);
            var address = document.getElementById("hiaddress" + id).value;

            document.getElementById("address").value = address;
            document.getElementById("ddlcompany").value = document.getElementById("hicompany_id" + id).value;;
            
            document.getElementById("hidid").value = id;
            document.getElementById("btnSubmit").value = "Update";







          }
        </script>
      </div><!-- col-3 -->

    </div><!-- row -->



  </div><!-- br-pagebody -->

</div><!-- br-mainpanel -->



<div class="modal fade" id="modalSite" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Add Site</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <form id="frmAddCompany" action="<?php echo base_url(); ?>Site/addSite" method="post">
            <input type="hidden" name="hidid" id="hidid" value="" class="form-control validate">
            <p><label data-error="wrong" data-success="right"> Site Name</label>
              <input type="text" id="site_name" name="site_name" value="" class="form-control validate"
                autocomplete="off">
            </p>
            <span>
              <?php echo form_error(); ?>
            </span>
            <p><label data-error="wrong" data-success="right">Company</label>
              <select data-error="wrong" name="ddlcompany" id="ddlcompany" class="form-control validate"
                data-success="right" >
                <?php
                foreach ($companys as $row) {
                  echo '<option value = "'.$row->Id.'">'.$row->company_name.'</option>';

                }
                ?>
              </select>
              <span>
                <?php echo form_error(); ?>
              </span>
              <!-- <input type="text" id="company_name" name="company_name" value="" class="form-control validate"
                autocomplete="off"> -->
            </p>
            <span>
              <?php echo form_error(); ?>
            </span>
            <p><label data-error="wrong" data-success="right">Address</label>
              <input type="text" id="address" name="address" value="" class="form-control validate" autocomplete="off">
            </p>
            <span>
              <?php echo form_error(); ?>
            </span>

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


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>