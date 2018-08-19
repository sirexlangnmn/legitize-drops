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
                    <h3 class="text-themecolor">Bounty Hunter</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Bounty Hunter</li>
                    </ol>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb  -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
            
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="card">
                <div class="card-body p-b-0">
                        <div class="table-responsive">
                            <table id="example23" class="table table-bordered table-striped display nowrap table table-hover">
                                <thead>
                                    <tr>
                                        <th>Update</th>
                                        <th>Delete</th>
                                        <th>#</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Date Registered</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php foreach( read_user() as $user_data ): ?>
                                  <tr>
                                    <td>
                                      <a href="#" onclick="return confirm('Under Development')" method="post" action="#" class="btn btn-outline-success waves-effect waves-light">
                                      <i class="fa fa-pencil text-info" data-toggle="tooltip" data-placement="top" title="Update User"></i>
                                      </a>
                                   </td>
                                   <td>
                                      <form method="post" action="#">
                                         <input type="hidden" name="User_action" value="delete_User">
                                         <input type="hidden" name="User_id" value="<?php echo $User_data['User_id'] ?>">
                                         <button type="submit" onclick="return confirm('Under Development')" class="btn btn-outline-success waves-effect waves-light"><i class="fa fa-trash text-danger" data-toggle="tooltip" data-placement="top" title="Delete User"></i></button>
                                      </form>
                                   </td>
                                    <td><?php echo $user_data['user_id']; ?></td>
                                    <td><?php echo $user_data['username']; ?></td>
                                    <td><?php echo $user_data['email']; ?></td>
                                    <td><?php echo $user_data['created_at']; ?></td>
                                </tr>
                                 <?php endforeach; ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Update</th>
                                        <th>Delete</th>
                                        <th>#</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Date Registered</th>
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
      ?>
