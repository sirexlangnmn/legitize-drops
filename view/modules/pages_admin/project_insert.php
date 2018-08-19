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
                   <?php 
                    $database = new Database;
                    
                       if(isset($_GET['project_id'])){
                          $get_project = $database->select('project', [ 'project_id' => $_GET['project_id'] ], false, false, false)->row();
                       }      
                    ?>
                   <form class="" novalidate action="../../../app/classes/handler.php" method="POST">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <h5>Project Title</h5>
                            <input type="hidden" name="project_action1" value="<?php echo isset( $get_project ) ? 'update_project1' : 'create_project1' ?>">
                            <input type="hidden" name="project_id" value="<?php echo isset( $get_project ) ? $get_project->project_id : '' ?>"> 
                            <div class="form-group">
                                <div class="controls">
                                    <input type="text" name="project_title" value="<?php echo isset( $get_project ) ? $get_project->project_title : '' ?>" placeholder="Project Title" class="form-control" required data-validation-required-message="This field is required"> 
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Email </h5>
                                <div class="controls">
                                    <input type="email" name="email" value="<?php echo isset( $get_project ) ? $get_project->email : '' ?>"placeholder="Email" class="form-control" required data-validation-required-message="This field is required"> 
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Telegram</h5>
                                <div class="controls">
                                    <input type="text" name="telegram" value="<?php echo isset( $get_project ) ? $get_project->telegram : '' ?>" placeholder="Telegram" class="form-control" required data-validation-required-message="This field is required"> 
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Website </h5>
                                <div class="controls">
                                    <input type="text" name="website" value="<?php echo isset( $get_project ) ? $get_project->website : '' ?>" class="form-control" placeholder="Add Website URL" data-validation-regex-regex="((http[s]?|ftp[s]?):\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*" data-validation-regex-message="Only Valid URL's" required data-validation-required-message="This field is required">
                                    <div class="form-control-feedback"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Note </h5>
                                <div class="controls">
                                    <input type="text" name="note" value="<?php echo isset( $get_project ) ? $get_project->note : '' ?>" placeholder="Note" class="form-control" required data-validation-required-message="This field is required">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2"></div>
                      </div>
                      <div class="modal-footer">
                          <button type="submit" class="btn btn-outline-success waves-effect waves-light" onclick="return confirm('Registration Submitted.')"><i class="fa fa-save"></i>&nbsp Save
                          </button>
                      </div>
                  </form>
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