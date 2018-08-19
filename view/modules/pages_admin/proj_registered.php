<?php include("../../include/include_admin/style.php"); ?>
<?php include("../../../app/functions.php"); ?>
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
                    <h3 class="text-themecolor">Registered Project</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Registered Project</li>
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
                     <a href="project_insert.php" class="btn btn-outline-success waves-effect waves-light">Add Project</a>
                    </div>
                    
                    <div class="col-lg-9 col-xlg-9 col-md-9">  
                    </div>                                          
                </div>
                    <div class="table-responsive">
                        <table id="example23" class="table table-bordered table-striped display nowrap table table-hover">
                            <thead>
                                <tr>
                                    <th>Update</th>
                                    <th>Delete</th>
                                    <th>#</th>
                                    <th>Project Title</th>
                                    <th>Email</th>
                                    <th>Telegram</th>
                                    <th>Website</th>
                                    <th>Note</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach( read_project() as $project_data ): ?>
                                <tr>
                                    <td>
                                      <a href="project_insert.php?project_id=<?php echo $project_data['project_id'] ?>" onclick="return confirm('Update this data?')" method="post" action="../../../app/classes/handler.php" class="btn btn-outline-success waves-effect waves-light">
                                      <i class="fa fa-pencil text-info" data-toggle="tooltip" data-placement="top" title="Update Project"></i>
                                      </a>
                                   </td>
                                   <td>
                                       <form method="post" action="#">
                                         <input type="hidden" name="User_action" value="delete_User">
                                         <input type="hidden" name="User_id" value="<?php echo $User_data['User_id'] ?>">
                                         <button type="submit" onclick="return confirm('Under Development')" class="btn btn-outline-success waves-effect waves-light"><i class="fa fa-trash text-danger" data-toggle="tooltip" data-placement="top" title="Delete Project"></i></button>
                                      </form>
                                   </td>
                                    <td><?php echo $project_data['project_id']; ?></td>
                                    <td><?php echo $project_data['project_title']; ?></td>
                                    <td><?php echo $project_data['email']; ?></td>
                                    <td><?php echo $project_data['telegram']; ?></td>
                                    <td><?php echo $project_data['website']; ?></td>
                                    <td><?php echo $project_data['note']; ?></td>
                                    <td><?php echo $project_data['created_at']; ?></td>
                                    <td><?php echo $project_data['updated_at']; ?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Update</th>
                                    <th>Delete</th>
                                    <th>#</th>
                                    <th>Project Title</th>
                                    <th>Email</th>
                                    <th>Telegram</th>
                                    <th>Website</th>
                                    <th>Note</th>
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