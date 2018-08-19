<?php include("../../include/include_admin/style.php"); ?>
<body class="fix-header fix-sidebar card-no-border">
   <!-- ============================================================== -->
   <!-- Preloader - style you can find in spinners.css -->
   <!-- ============================================================== -->
   <?php include("../../include/include_general/preloader.php"); ?>
   <!-- ============================================================== -->
   <!-- Main wrapper - style you can find in pages.scss -->
   <!-- ============================================================== -->
   <div id="main-wrapper">
      <?php include("../../include/include_admin/header.php"); ?>
      <?php include("../../include/include_admin/left_sidebar.php"); ?>
      <!-- ============================================================== -->
      <!-- Page wrapper  -->
      <!-- ============================================================== -->
      <div class="page-wrapper">
         <!-- ============================================================== -->
         <!-- Bread crumb-->
         <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Project Detail</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Project Detail</li>
                    </ol>
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
            <div class="card">
                <div class="card-body">
                    <div class="row">
                    <div class="col-lg-3 col-xlg-3 col-md-3">
                    <a href="proj_detail_insert.php" alt="default" class="btn btn-outline-success waves-effect waves-light">Add Project Details</a>
                    </div>
                    
                    <div class="col-lg-9 col-xlg-9 col-md-9">  
                    </div>                                          
                </div>
                    <div class="table-responsive">
                        <table id="example23" class="table table-bordered table-striped display nowrap table table-hover">
                            <thead>
                                <tr>
                                    <th class="text-nowrap">Action</th>
                                    <th>#</th>
                                    <th>Project Title</th>
                                    <th>Client Fullname</th>
                                    <th>Project Subtitle</th>
                                    <th>Project Tagline</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-nowrap">
                                        <a href="proj_detail_update.php" class="label label-info"><i class="fa fa-eye" data-toggle="tooltip" data-placement="top" title="View Campaign Detail"></i></a>

                                        <a href="#" class="label label-danger" ><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="Delete Client Detail"></i></a>
                                    </td>
                                    <td>1</td>
                                    <td>Project Title</td>
                                    <td>Federex Potolin</td>
                                    <td>Project Subtitle</td>
                                    <td>Project Tagline</td>
                                    <td>Created At</td>
                                    <td>Updated At</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th class="text-nowrap">Action</th>
                                    <th>#</th>
                                    <th>Project Title</th>
                                    <th>Client Fullname</th>
                                    <th>Project Subtitle</th>
                                    <th>Project Tagline</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <?php include("../../include/include_admin/footer.php"); ?>
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
   <?php
      include("../../include/include_admin/script.php"); 
      include("../../include/include_general/datatables.php"); 
      include("../../include/include_general/validation.php"); 
      ?>