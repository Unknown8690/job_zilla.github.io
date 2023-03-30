<!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        General Form Elements
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
                                <!-- form start -->
                                 <div id="loader">
         <img id="loading-image" src="Loading.gif" style="display:none;"/>
        </div>
                                <form role="form" id="MyInsertForm">
                                    <div class="box-body">
                                     <div class="form-group col-md-6">
                                            <label >First Name</label>
                                            <input type="text" class="form-control" id="exampleInputEmail11" placeholder="First Name" name="fname">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label >Last Name</label>
                                            <input type="text" class="form-control" id="exampleInputPassword12" placeholder="Last Name" name="lname">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="Email">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="Password">
                                        </div>
                                       
                                    </div><!-- /.box-body -->

                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary" onClick="InsetRec()">Submit</button>
                                    </div>
                                </form>
                            </div><!-- /.box -->

                           

                        </div><!--/.col (left) -->
                       <script type="text/javascript">
           
           
function InsetRec()
            {
                var saveData = $.ajax({
                  type: 'POST',
                  url: "http://localhost/MyProject2/Form/Process?action=saveData",
                  data : $('#MyInsertForm').serialize() ,
                  dataType: "text",
                  cache:false,
                  beforeSend: function() {
                      
                      $("#MyInsertForm").hide();
                         $("#loading-image").show();
                    },
                  success: function(resultData) 
                  { 
                    
                     location.reload();
                  },
                  error: function (err) {
                      alert("Some Error Occured");
                  },
                  complete: function() {
                    $("#MyInsertForm").show();
                         $("#loading-image").hide();
                }
            });
saveData.error(function() { alert("Something went wrong"); });
            }
            
        </script>
                       
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->