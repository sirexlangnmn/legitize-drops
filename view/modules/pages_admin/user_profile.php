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
                    <h3 class="text-themecolor">Personal Profile</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Personal Profile</li>
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
                            <button type="submit" data-toggle="modal" data-target="#modal_sg_update" class="btn btn-outline-success waves-effect waves-light">Update</button>
                        </div>
                        <div class="col-lg-9 col-xlg-9 col-md-9"></div>                                          
                    </div>
                    <hr>
                    <div class="row">
                    <!-- ============================================================== -->
                    <!-- User Profile -->
                    <!-- ============================================================== -->
                    <div class="col-lg-4 col-md-4 col-sm-12 m-b-30">
                        <img src="images/admin/rex.PNG" alt="image" class="img-circle" width="290">
                        <p class="m-t-15 m-b-0"></p>
                    </div>
                    
                    <div class="col-lg-4 col-md-4 col-sm-12 m-b-30">
                        <small class="text-muted p-t-30 db"> Fullname </small>
                        <h6 class="text-success"><i class="fa fa-user btn btn-circle btn-info"></i>&nbsp Federex A Potolin </h6> 

                        <small class="text-muted p-t-30 db"> Username </small>
                        <h6 class="text-success"><i class="fa fa-user btn btn-circle btn-info"></i>&nbsp sirexlangnmn </h6> 

                        <small class="text-muted p-t-30 db">  Email </small>
                        <h6 class="text-success"><i class="fa fa-user btn btn-circle btn-info"></i>&nbsp sirexlangnmn@gmail.com </h6>
                    </div>

                     <div class="col-lg-4 col-md-4 col-sm-12 m-b-30">
                        <small class="text-muted p-t-30 db"> Position </small>
                        <h6 class="text-success"><i class="fa fa-user btn btn-circle btn-info"></i>&nbsp Admin </h6>
                        
                        <small class="text-muted p-t-30 db"> Contact </small>
                        <h6 class="text-success"><i class="fa fa-user btn btn-circle btn-info"></i>&nbsp 0909 820 2040 </h6>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End User Profile                                               -->
                    <!-- ============================================================== --> 
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Page Content -->
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
      ?>