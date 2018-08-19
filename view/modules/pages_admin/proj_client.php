<?php include("../../include/include_admin/style.php"); ?>
<?php include("../../../app/classes/connection.php"); ?>
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
                    <h3 class="text-themecolor">Client</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Client</li>
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
                <div class="card-body">
                    <div class="row">
                    <div class="col-lg-3 col-xlg-3 col-md-3">
                    <a href="proj_client_insert.php" class="btn btn-outline-success waves-effect waves-light">Add Client</a>
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
                                    <th>Firstname</th>
                                    <th>Middlename</th>
                                    <th>Lastname</th>
                                    <th>Project Title</th>
                                    <th>Image</th>
                                    <th>Registration Date</th>
                                    <th>Updation Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                  $get_client = "SELECT * FROM client LEFT JOIN project ON client.project_id = project.project_id";
                              
                                  $run_client = mysqli_query($con, $get_client) or die (mysqli_error());
                                  while($client_data=mysqli_fetch_array($run_client)) :
                                  /*$id=$row['id'];*/
                              
                                 ?>
                                <tr>
                                    <td>
                                      <a href="proj_client_update.php?id=<?php echo $client_data['client_id'] ?>" onclick="return confirm('Update this data?')" class="btn btn-outline-success waves-effect waves-light">
                                      <i class="fa fa-pencil text-info" data-toggle="tooltip" data-placement="top" title="Update group"></i>
                                      </a>
                                   </td>
                                   <td>
                                      <form method="post" action="../../../app/classes/handler.php">
                                         <input type="hidden" name="client_action" value="delete_client">
                                         <input type="hidden" name="client_id" value="<?php echo $client_data['client_id'] ?>">
                                         <button type="submit" onclick="return confirm('Warning! Do you really want to Delete this Data?')" class="btn btn-outline-success waves-effect waves-light"><i class="fa fa-trash text-danger" data-toggle="tooltip" data-placement="top" title="Delete group"></i></button>
                                      </form>
                                   </td>
                                   <td><?php echo $client_data['client_id']; ?></td>
                                   <td><?php echo $client_data['project_title']; ?></td>
                                   <td><?php echo $client_data['client_firstname']; ?></td>
                                   <td><?php echo $client_data['client_middlename']; ?></td>
                                   <td><?php echo $client_data['client_surname']; ?></td>
                                   <td><?php echo $client_data['image']; ?></td>
                                   <td><?php echo $client_data['created_at']; ?></td>
                                   <td><?php echo $client_data['updated_at']; ?></td>
                                </tr>
                                <?php endwhile; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Update</th>
                                    <th>Delete</th>
                                    <th>#</th>
                                    <th>Firstname</th>
                                    <th>Middlename</th>
                                    <th>Lastname</th>
                                    <th>Project Title</th>
                                    <th>Image</th>
                                    <th>Registration Date</th>
                                    <th>Updation Date</th>
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