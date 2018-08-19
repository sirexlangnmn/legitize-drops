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
                    <h3 class="text-themecolor">Messages</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Messages</li>
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
                    <div class="table-responsive">
                        <table id="example23" class="table table-bordered table-striped display nowrap table table-hover">
                            <thead>
                                <tr>
                                    <th>Update</th>
                                    <th>Delete</th>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Message</th>
                                    <th>Created At</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach( read_message() as $message_data ): ?>
                                <tr>
                                    <td>
                                      <a href="message_insert.php?message_id=<?php echo $message_data['message_id'] ?>" onclick="return confirm('Update this data?')" method="post" action="../../../app/classes/handler.php" class="btn btn-outline-success waves-effect waves-light">
                                      <i class="fa fa-pencil text-info" data-toggle="tooltip" data-placement="top" title="Update message"></i>
                                      </a>
                                   </td>
                                   <td>
                                      <form method="post" action="../../../app/classes/handler.php">
                                         <input type="hidden" name="message_action" value="delete_message">
                                         <input type="hidden" name="message_id" value="<?php echo $message_data['message_id'] ?>">
                                         <button type="submit" onclick="return confirm('Warning! Do you really want to Delete this Data?')" class="btn btn-outline-success waves-effect waves-light"><i class="fa fa-trash text-danger" data-toggle="tooltip" data-placement="top" title="Delete message"></i></button>
                                      </form>
                                   </td>
                                    <td><?php echo $message_data['message_id']; ?></td>
                                    <td><?php echo $message_data['name']; ?></td>
                                    <td><?php echo $message_data['email']; ?></td>
                                    <td><?php echo $message_data['message']; ?></td>
                                    <td><?php echo $message_data['created_at']; ?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Update</th>
                                    <th>Delete</th>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Message</th>
                                    <th>Created At</th>
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
            <!-- Modals  -->
            <!-- ============================================================== -->
            <?php include("modal_proj_insert.php"); ?>
            <!-- ============================================================== -->
            <!-- End Modals  -->
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