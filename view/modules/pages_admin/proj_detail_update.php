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
                    <h3 class="text-themecolor">Update Project Detail</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Update Project Detail</li>
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
                    <form class="" novalidate>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <h5>Project Title</h5>
                                <select class="form-control custom-select">
                                    <option>-- Project Title --</option>
                                    <option>One</option>
                                    <option>Two</option>
                                    <option>Three</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <h5>Project Subtitle </h5>
                                <div class="controls">
                                    <input type="text" name="ico_subtitle" placeholder="Project Subtitle" class="form-control" required data-validation-required-message="This field is required"> 
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Tagline </h5>
                                <div class="controls">
                                    <input type="text" name="tagline" placeholder="Tagline" class="form-control" required data-validation-required-message="This field is required"> 
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Description </h5>
                                <div class="controls">
                                    <input type="text" name="description" placeholder="Description" class="form-control" required data-validation-required-message="This field is required"> 
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>White Paper </h5>
                                <div class="controls">
                                    <input type="text" class="form-control" placeholder="White Paper" data-validation-regex-regex="((http[s]?|ftp[s]?):\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*" data-validation-regex-message="Only Valid URL's" required data-validation-required-message="This field is required">
                                    <div class="form-control-feedback"></div>
                                </div>
                            </div>
                            <div class="form-group">
                              <h5>WhitePaper Upload</h5>
                              <input type="file" class="form-control" id="exampleInputFile" name="img1" aria-describedby="fileHelp">
                           </div>
                        </div>

                        <div class="col-md-4">    
                            <div class="form-group">
                                <h5>Thread </h5>
                                <div class="controls">
                                    <input type="text" class="form-control" placeholder="Thread" data-validation-regex-regex="((http[s]?|ftp[s]?):\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*" data-validation-regex-message="Only Valid URL's" required data-validation-required-message="This field is required">
                                    <div class="form-control-feedback"></div>
                                </div>
                            </div>
                             <div class="form-group">
                                <h5>Token </h5>
                                <div class="controls">
                                    <input type="text" name="token" placeholder="Token" class="form-control" required data-validation-required-message="This field is required"> 
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>ETH Value </h5>
                                <div class="controls">
                                    <input type="text" name="eth_value" placeholder="ETH Value" class="form-control" required data-validation-required-message="This field is required"> 
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Symbol</h5>
                                <div class="controls">
                                    <input type="text" name="symbol" placeholder="Symbol" class="form-control" required data-validation-required-message="This field is required"> 
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Accepted Language </h5>
                                <div class="controls">
                                    <input type="text" name="accepted_language" placeholder="Accepted Language" class="form-control" required data-validation-required-message="This field is required"> 
                                </div>
                            </div>
                            <img src="img/vehicleimages/<?php echo $row['Vimage3']; ?>" width="320" height="160" >
                           <div class="form-group">
                              <a class="btn btn-outline-success" href="image_update_logo.php"><i class="fa fa-pencil m-r-10 text-info" data-toggle="tooltip" data-placement="top" title="Update Image"></i>Edit Image </a>
                           </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <h5>Launch Date</h5>
                                    <input class="form-control" name="launch_date" type="date" value="date" id="example-date-input" required data-validation-required-message="This field is required">
                            </div>
                            <div class="form-group">
                                <h5>Bounty Campaign Start</h5>
                                    <input class="form-control" name="end_date" type="date" value="date" id="example-date-input" required data-validation-required-message="This field is required">
                            </div>
                            <div class="form-group">
                                <h5>Bounty Campaign End</h5>
                                    <input class="form-control" name="launch_date" type="date" value="date" id="example-date-input" required data-validation-required-message="This field is required">
                            </div>
                            <div class="form-group">
                                <h5>Verification Period End</h5>
                                    <input class="form-control" name="end_date" type="date" value="date" id="example-date-input" required data-validation-required-message="This field is required">
                            </div>
                            <div class="form-group">
                                <h5>Result Displayed</h5>
                                    <input class="form-control" name="launch_date" type="date" value="date" id="example-date-input" required data-validation-required-message="This field is required">
                            </div>
                            <div class="form-group">
                                <h5>Distribution Date</h5>
                                    <input class="form-control" name="end_date" type="date" value="date" id="example-date-input" required data-validation-required-message="This field is required">
                            </div>
                            <div class="form-group">
                                <h5>End Date</h5>
                                    <input class="form-control" name="end_date" type="date" value="date" id="example-date-input" required data-validation-required-message="This field is required">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-outline-success waves-effect waves-light"><i class="fa fa-plus"></i>&nbsp Add
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