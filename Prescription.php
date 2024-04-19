<?php
include'Actions/connections.php';
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>Clinic Management System</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="assets/extra-libs/multicheck/multicheck.css">
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/libs/select2/dist/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="assets/libs/jquery-minicolors/jquery.minicolors.css">
    <link rel="stylesheet" type="text/css" href="assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" type="text/css" href="assets/libs/quill/dist/quill.snow.css">
    <link href="dist/css/style.min.css" rel="stylesheet">
</head>

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="index.php">
                       <h2> BNAS CRMS</h2> 
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                      
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="Actions/logout.php"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.php" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
                    
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Libraries </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="illnesses.php" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Illnesses </span></a></li>
                                <li class="sidebar-item"><a href="medicinecategory.php" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Medicine Category </span></a></li>
                                <li class="sidebar-item"><a href="medicine.php" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Medicines </span></a></li>
                                <li class="sidebar-item"><a href="patients.php" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Patients </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Transactions </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                  <li class="sidebar-item"><a href="walkin.php" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> WalkinList </span></a></li>
                                 <li class="sidebar-item"><a href="Prescription.php" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Prescription </span></a></li>
                                <li class="sidebar-item"><a href="Vaccine.php" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Vaccination </span></a></li>
                             </ul>
                        </li>
                      
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Settings </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="Accounts.php" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Accounts </span></a></li>
                                
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Reports </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="ReportPrescription.php" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Prescription </span></a></li>
                                
                            </ul>
                        </li>
                    </ul>
                    
                     
                     
                
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <div class="page-wrapper">
          
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title" <b><?php echo "<h2>Date Today</h2>".date("Y-m-d"); ?></b></h4>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-6">
                            <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Diagnosis</h5>
                                <div class="form-group row">
                                    <label class="col-md-3 m-t-15">Transcation Code</label>
                                    <div class="col-md-9">
                                       <input type="text" class="form-control" name="tC" id="tC" value="<?php echo "BNAS-".random_int(100, 999); ?>" readonly="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 m-t-15">Select Patient</label>
                                    <div class="col-md-9">
                                        <select class="select2 form-control custom-select" name="patient" id="patient" style="width: 100%; height:36px;">
                                                <option>Select</option>
                                                <?php 
                                                    $q=mysqli_query($con,"SELECT * FROM vwalkinlist WHERE Date='".date('Y-m-d')."'  order by Fullname ASC");
                                                    while($rows=mysqli_fetch_array($q)){
                                                ?>
                                                <option value="<?php echo $rows[1]; ?>"><?php echo $rows[1]; ?></option>
                                                <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            
                                 <div class="form-group row">
                                    <label class="col-md-3 m-t-15">Blood Pressure</label>
                                    <div class="col-md-9">
                                       <input type="text" class="form-control" name="bp" id="bp" readonly="">
                                    </div>
                                </div>

                                 <div class="form-group row">
                                    <label class="col-md-3 m-t-15">Height</label>
                                    <div class="col-md-9">
                                       <input type="text" class="form-control" name="height" id="height" readonly="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 m-t-15">Weight</label>
                                    <div class="col-md-9">
                                       <input type="text" class="form-control" name="weight" id="weight" readonly="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 m-t-15">Select Illnesses</label>
                                    <div class="col-md-9">
                                        <select class="select2 form-control m-t-15" multiple="multiple" name="illness" id="illness" style="height: 36px;width: 100%;">
                                               <?php 
                                                    $q=mysqli_query($con,"SELECT * FROM illnesses order by illnessdesc ASC");
                                                    while($rows=mysqli_fetch_array($q)){
                                                ?>
                                                <option value="<?php echo $rows[1]; ?>"><?php echo $rows[1]; ?></option>
                                                <?php } ?>
                                        </select>
                                    </div>
                                </div>


                            </div>
                         
                        </div>
                        <div class="col-12">
                        <button class="btn btn-success btn-block" id="save">SAVE TRANSACTION</button>
                        </div>
                    </div>


                     <div class="col-6">
                        <div class="card">
                            <form class="form-horizontal" id="frmPres">
                                <div class="card-body">
                                    <h4 class="card-title">Prescription</h4>
                                    
                                   <div class="form-group row">
                                    <label class="col-md-3 m-t-15">Medicine Category</label>
                                    <div class="col-md-9">
                                        <select class="select2 form-control" name="medcat" id="medcat" style="width: 100%; height:36px;">
                                                <option>Select</option>
                                                <?php 
                                                    $q=mysqli_query($con,"SELECT * FROM medicinecategory");
                                                    while($rows=mysqli_fetch_array($q)){
                                                ?>
                                                <option value="<?php echo $rows[1]; ?>"><?php echo $rows[1]; ?></option>
                                                <?php 
                                                } 
                                                ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 m-t-15">Select Medicine</label>
                                    <div class="col-md-9">
                                        <select class="select2 form-control custom-select" name="medDesc" id="medDesc" style="width: 100%; height:36px;">
                                             <option>Select</option>
                                               
                                        </select>
                                    </div>
                                </div>

                                  <div class="form-group row">
                                    <label class="col-md-3 m-t-15">Quantity</label>
                                     <div class="col-md-9">
                                          <input type="text" class="form-control" name="Quantity" id="Quantity">
                                     </div>
                                  
                                  </div>
                                  <div class="form-group row">
                                    <label class="col-md-3 m-t-15">Description</label>
                                     <div class="col-md-9">
                                          <textarea class="form-control" name="description" id="description"></textarea>
                                     </div>
                                  
                                  </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="button" class="btn btn-primary" id="Add" name="Add">Add</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                   
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr> 
                                                <th>Category</th>
                                                <th>Description</th>
                                                <th>QTY</th>
                                                <th>Prescription</th>
                                            </tr>
                                        </thead>
                                        <tbody id="presTable">
                                          
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>  
    


            <!-- Modal -->












<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form class="form-horizontal" id="frm">
                <div class="card-body">
                <div class="form-group row">
                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Description</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="illnesses" name="illnesses">
                </div>
                </div>
               </div>
      </div>
      <div class="modal-footer">
        <input type="hidden" name="p_id" id="p_id">     
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="save" >Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
            </div>
            <footer class="footer text-center">
              Clinic Management System version 1.0.0</a>
            </footer>
            
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!-- this page js -->
    <script src="assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="assets/extra-libs/DataTables/datatables.min.js"></script>
     <script src="assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
    <script src="dist/js/pages/mask/mask.init.js"></script>
    <script src="assets/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="assets/libs/select2/dist/js/select2.min.js"></script>
    <script src="assets/libs/jquery-asColor/dist/jquery-asColor.min.js"></script>
    <script src="assets/libs/jquery-asGradient/dist/jquery-asGradient.js"></script>
    <script src="assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js"></script>
    <script src="assets/libs/jquery-minicolors/jquery.minicolors.min.js"></script>
    <script src="assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/libs/quill/dist/quill.min.js"></script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
    </script>
<script>
        //***********************************//
        // For select 2
        //***********************************//
        $(".select2").select2();

        /*colorpicker*/
        $('.demo').each(function() {
        //
        // Dear reader, it's actually very easy to initialize MiniColors. For example:
        //
        //  $(selector).minicolors();
        //
        // The way I've done it below is just for the demo, so don't get confused
        // by it. Also, data- attributes aren't supported at this time...they're
        // only used for this demo.
        //
        $(this).minicolors({
                control: $(this).attr('data-control') || 'hue',
                position: $(this).attr('data-position') || 'bottom left',

                change: function(value, opacity) {
                    if (!value) return;
                    if (opacity) value += ', ' + opacity;
                    if (typeof console === 'object') {
                        console.log(value);
                    }
                },
                theme: 'bootstrap'
            });

        });
        /*datwpicker*/
        jQuery('.mydatepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });
        var quill = new Quill('#editor', {
            theme: 'snow'
        });

    </script>
</body>

</html>
<script>
    $(document).ready(function(){
     
        $("#save").click(function(e){

            var patient = $("#patient").val();
            var illnesses = $("#illness").val();
            var medicine = $("#medDesc").val();
            var quantity = $("#Quantity").val();
            var description = $("#description").val();

          

            if(patient=='Select' || illnesses=='' )
            {
                alert('Please Fill up the Neccessary Data');
               
            }
            else{
               if(confirm("Are you sure you want to proceed?"))
                {
                        $.ajax({
                            url:'Actions/Prescription/SaveTransaction.php',
                            type:'POST',
                            data:{patient:patient, ill:illnesses, medicine:medicine, quantity:quantity},
                            success:function(data){
                                 //alert(data);
                                    if(data=='A'){
                                        alert('Please Add Prescription on the Patient');
                                    }
                                    else{
                                        location.reload();
                                    }

                               }
                        });
                }
            }

        });
        
        
        $("#patient").change(function(e){
             e.preventDefault();
             var p = $("#patient").val();
             $.ajax({
                url:'Actions/Prescription/getPatientInfo.php',
                data: {id:p},
                dataType:'json',
                success:function(data){
                     // alert(data);
                     $("#bp").val(data.bp);
                     $("#height").val(data.height);
                     $("#weight").val(data.weight);
                         
                }
            });
        });

        deleteTempPrescription();

         function deleteTempPrescription(){
           $.ajax({
                url:'Actions/Prescription/deletePrescription.php',
                success:function(data){
                    // alert(data);
                }
            });
        }    


        $("#medcat").change(function(e){
            e.preventDefault();
            var selectedItem = $("#medcat").val();
    
            $.ajax({
                method: 'POST',
                url: "Actions/Prescription/get.php",
                data: {selectedItem:selectedItem},
                dataType: 'text',
                success:function(data) {
                    $("#medDesc").html(data);     
                }
            });
        });

        $("#Add").click(function(e){
                e.preventDefault();
                var quantity = $("#Quantity").val();
                var description = $("#description").val();
                var medCat = $("#medcat").val();
                var medDesc = $("#medDesc").val();


                if(quantity!='' && description!=''  && medCat!='Select' && medDesc!='Select'){
                var formData = $("#frmPres").serialize();
                $.ajax({
                method: 'POST',
                url: "Actions/Prescription/Add.php",
                data: formData,
                success:function(data) {
                    $("#Quantity").val("");
                    $("#description").val("");
                        $.ajax({
                            url:'Actions/Prescription/getTable.php',
                            success:function(table){
                            $("#presTable").html(table);
                            }
                        });
                    }
                });
                }
                else{
                    alert('Please Fill Up All Field on Prescription Form!');
                }
                
        });
  
});

</script>