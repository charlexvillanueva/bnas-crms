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
                        <!-- Logo icon -->
                       <!-- <b class="logo-icon p-l-10">
                            You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                           <!--<img src="assets/images/logo-icon.png" alt="homepage" class="light-logo" />
                           
                        </b>
                        <-- End Logo icon -->
                         <!-- Logo text -->
                         <!-- <span class="logo-text"> -->
                        <center>
                       <h2> BNAS CRMS </h2>
                        </center>
                             <!-- dark Logo text -->
                            <!-- <img src="assets/images/logo-text.png" alt="homepage" class="light-logo" />
                            
                        </span>
                        Logo icon -->
                        <!-- <b class="logo-icon"> -->
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <!-- <img src="assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->
                            
                        <!-- </b> -->
                        <!--End Logo icon -->
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
                        <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             <span class="d-none d-md-block">ACTIONS    <i class="fa fa-angle-down"></i></span>
                             <span class="d-block d-md-none"><i class="fa fa-plus"></i></span>   
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <button class="dropdown-item" id="add" data-toggle="modal" data-target="#exampleModal">Create New Data</button>
                                <button class="dropdown-item" id="edit" >Edit Data</button>
                                <button class="dropdown-item" id="delete" >Delete Data</button>
                            </div>
                        </li>
                       
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
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Walkin Records</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Clinic</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr> 
                                                <th width="10">  <input type="checkbox" id="checkall"></th>
                                                <th>Fullname</th>
                                                <th>Age</th>
                                                <th>Blood Type</th>
                                                <th>Blood Pressure</th>
                                                <th>Height</th>
                                                <th>Weight</th>
                                                <th>Temperature</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $q=mysqli_query($con,"SELECT * FROM vwalkinlist WHERE Date='".date('Y-m-d')."");
                                                while ($rows=mysqli_fetch_array($q)) {
                                            ?>
                                            <tr>
                                               <td><input type="checkbox" name="item[]" value="<?php echo $rows[0]; ?>"></td>
                                                <td><?php echo $rows[1]?></td>
                                                <td><?php echo $rows[2]?></td>
                                                <td><?php echo $rows[3]?></td>
                                                <td><?php echo $rows[4]?></td>
                                                <td><?php echo $rows[5]?></td>
                                                <td><?php echo $rows[6]?></td>
                                                <td><?php echo $rows[7]?></td>
                                            </tr>
                                            <?php
                                                 }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
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
                                     <label for="fname" class="col-sm-3 text-right control-label col-form-label">Patient</label>
                                    <div class="col-md-9">
                                        <select name="Fullname" id="Fullname" class="select2 form-control custom-select" style="width: 100%; height:36px;">
                                            <option>Select</option>
                                            <?php 
                                               $q=mysqli_query($con,"SELECT * FROM patients");
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
                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Blood Pressure</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="Blood" name="Blood">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Height</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="Height" name="Height">
                    </div>
                </div>
                  <div class="form-group row">
                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Weight</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="Weight" name="Weight">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Temperature</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="Temperature" name="Temperature">
                    </div>
                </div>
                 <div class="form-group row">
                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Date</label>
                    <div class="col-sm-9">
                        <input type="date" class="form-control" id="Date" name="Date">
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
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                    Clinic Management System version 1.0.0</a>
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
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
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
    </script>

</body>

</html>
<script>
    $(document).ready(function(){
  
            var process_id;
           
            $("#add").click(function(){
                $("#frm")[0].reset();
            }); 

            $("#save").click(function(e){
                e.preventDefault();
                var form = $('#frm').serialize();
                $.ajax({
                    type: 'POST',
                    data: form,
                    url:'Actions/Walkin/Add.php',
                    success:function(data){
                       //alert(data);
                       location.reload();
                    }
                });
            }); 

             $('#delete').click(function(){
                var selectedItems = [];
                $('input[type="checkbox"]:checked').each(function(){
                    selectedItems.push($(this).val());
                });
                if(selectedItems.length > 0){
                    $.ajax({
                        url: 'Actions/Walkin/delete.php',
                        type: 'POST',
                        data: {items: selectedItems},
                        success: function(response){
                            alert(response);
                            if(response=='Items deleted successfully.'){
                                location.reload();
                            }
                        }
                    });
                } else {
                    alert('Please select at least one item to delete.');
                }
            });

             $("#checkall").click(function(){
                   $('input[type="checkbox"]').prop('checked', $(this).prop('checked'));
                     
             });

            $('input[type="checkbox"]').click(function() {
                if (!$(this).prop('checked')) {
                 $('#checkall').prop('checked', false);
                }
            });


            $("#edit").click(function(e){
                e.preventDefault();
                var checkedCount = $('input[type="checkbox"]:checked').length;
                if (checkedCount >= 2) {
                    alert("Two or more checkboxes are checked.");
                    return;
                }
                if (checkedCount == 0) {
                    alert("Please Select One Data.");
                    return;
                }
                if (checkedCount == 1) { 

                    var selectedItem = [];
                    $('input[type="checkbox"]:checked').each(function(){
                    selectedItem.push($(this).val());
                    });
                    //alert(selectedItem);

                    $.ajax({
                        method: 'GET',
                        url: "Actions/Walkin/get.php?selectedItem=" + selectedItem,
                        dataType: 'json',
                        success: function(response){
                            $("#Fullname").val(response.Fullname);
                            $("#Blood").val(response.bp);
                            $("#Height").val(response.height);
                            $("#Weight").val(response.weight);
                            $("#p_id").val(response.wid);
                            $("#exampleModal").modal("show");
                        }
                    });
                }
            });
    });
</script>