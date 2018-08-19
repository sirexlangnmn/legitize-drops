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
                    <h3 class="text-themecolor">Update Client Detail</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Update Client Detail</li>
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
                <?php
                   $id = ($_GET['id']);
                   
                   $run_client = mysqli_query($con, "SELECT * FROM client LEFT JOIN project ON client.project_id = project.project_id WHERE client.client_id = '$id'") or die(mysqli_error());
                   while($row = mysqli_fetch_array($run_client)) :
                   $project_id = $row['project_id']; 
                ?>
                <form class="" novalidate method="POST" enctype="multipart/form-data" action="../../../app/queries/client_update.php">
                  <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-4">
                      <input type="hidden" name="client_id" value="<?php echo $row['client_id']; ?>" required>
                      <div class="form-group">
                        <h5>Brand Name </h5>
                        <select class="form-control custom-select" name="project_id" required>
                        <option value="<?php echo $project_id; ?>"><?php echo $row['project_title']; ?></option>
                           <?php
                              $project_query = mysqli_query($con, "SELECT * FROM project WHERE project_id != $project_id; ")
                              or die(mysqli_error());
                              while ($project_row = mysqli_fetch_array($project_query)) : ?>
                              
                           <option value="<?php echo $project_row['project_id']; ?>"><?php echo $project_row['project_title']; ?></option>
                              
                           <?php endwhile; ?>
                        </select>
                      </div>
                      <div class="form-group">
                          <h5>Firstname</h5>
                          <div class="controls">
                              <input type="text" value="<?php echo $row['client_firstname']; ?>" name="client_firstname" placeholder="Firstname" class="form-control" required data-validation-required-message="This field is required"> 
                          </div>
                      </div>
                      <div class="form-group">
                          <h5>Middlename</h5>
                          <div class="controls">
                              <input type="text" value="<?php echo $row['client_middlename']; ?>" name="client_middlename" placeholder="Middlename" class="form-control" required data-validation-required-message="This field is required"> 
                          </div>
                      </div>
                      <div class="form-group">
                          <h5>Surname</h5>
                          <div class="controls">
                              <input type="text" value="<?php echo $row['client_surname']; ?>" name="client_surname" placeholder="Surname" class="form-control" required data-validation-required-message="This field is required"> 
                          </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                     <img src="images/client/<?php echo $row['image']; ?>" width="320" height="320" >
                     <div class="form-group">
                        <a class="btn btn-outline-success" href="update_image.php?id=<?php echo $row['client_id']; ?>"><i class="fa fa-pencil m-r-10 text-info" data-toggle="tooltip" data-placement="top" title="Update Image"></i>Edit Image</a>
                     </div>
                    </div>
                    <div class="col-md-2"></div>
                  </div>
                      <div class="modal-footer">
                          <button type="submit" name="update" value="Update Client" class="btn btn-outline-success waves-effect waves-light"><i class="fa fa-plus"></i>&nbsp Save
                          </button>
                      </div>
                    </form>
                  <?php endwhile; ?>
                  </div>
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