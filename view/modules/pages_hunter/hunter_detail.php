<?php include("../../include/include_hunter/style.php"); ?>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <?php include("../../include/include_hunter/header.php"); ?>
        <?php include("../../include/include_hunter/left_sidebar.php"); ?>
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Account</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Account</li>
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

            <!-- ============================================================== -->
            <!-- Profile Content -->
            <!-- ============================================================== -->    
            <div class="row">
                <div class="col-lg-3 col-xlg-3 col-md-3">
                    <button alt="default" data-toggle="modal" data-target="#modal_user_update" class="btn btn-block btn-outline-success waves-effect waves-light">Personal Info</button>
                </div>
                
                <div class="col-lg-3 col-xlg-3 col-md-3">
                    <button type="submit" data-toggle="modal" data-target="#modal_wallet_update" class="btn btn-block btn-outline-success waves-effect waves-light">Wallet</button>
                </div>
                
                <div class="col-lg-3 col-xlg-3 col-md-3">  
                    <button type="submit" data-toggle="modal" data-target="#modal_sm_update" class="btn btn-block btn-outline-success waves-effect waves-light">Social Media</button>
                </div>   
                
                <div class="col-lg-3 col-xlg-3 col-md-3">  
                    <button type="submit" data-toggle="modal" data-target="#modal_sg_update" class="btn btn-block btn-outline-success waves-effect waves-light">Social Group</button>
                </div>                                         
            </div>
            <hr>


            <div class="card">
                <div class="card-body">
                    <div class="card">
                        <h4 class="text-success">Personal Info</h4>
                        <div class="row">
                            <div class="col-lg-3 col-xlg-3 col-md-3">
                                <small class="text-muted p-t-30 db"> &nbsp Username </small>
                                <h6 class="text-success"><i class="fa fa-user btn btn-circle btn-info"></i> Federex A Potolin </h6> 
                            </div>
                            <div class="col-lg-3 col-xlg-3 col-md-3">
                                <small class="text-muted p-t-30 db"> &nbsp Email </small>
                                <h6 class="text-success"><i class="fa fa-user btn btn-circle btn-info"></i> Federex A Potolin </h6> 
                            </div>
                            <div class="col-lg-3 col-xlg-3 col-md-3">  
                                <small class="text-muted p-t-30 db"> &nbsp Password </small>
                                <h6 class="text-success"><i class="fa fa-user btn btn-circle btn-info"></i> Federex A Potolin </h6> 
                            </div>  
                        </div> 
                    </div>
                </div>
                <div class="card-body">
                    <div class="card">
                        <h4 class="text-success">Wallet Info</h4>
                        <div class="row">
                            <div class="col-lg-3 col-xlg-3 col-md-3">
                                <small class="text-muted p-t-30 db"> &nbsp ERC-20 Wallet </small>
                                <h6 class="text-success"><i class="fa fa-bitcoin btn btn-circle btn-info"></i> Federex A Potolin </h6>
                            </div>
                            <div class="col-lg-3 col-xlg-3 col-md-3">
                                <small class="text-muted p-t-30 db"> &nbsp Komodo Wallet </small>
                                <h6 class="text-success"><i class="fa fa-bitcoin btn btn-circle btn-info"></i> Federex A Potolin </h6>
                            </div>
                            <div class="col-lg-3 col-xlg-3 col-md-3">  
                                <small class="text-muted p-t-30 db"> &nbsp Omni Wallet </small>
                                <h6 class="text-success"><i class="fa fa-bitcoin btn btn-circle btn-info"></i> Federex A Potolin </h6>
                            </div>   
                            <div class="col-lg-3 col-xlg-3 col-md-3">  
                                <small class="text-muted p-t-30 db"> &nbsp Neo Wallet </small>
                                <h6 class="text-success"><i class="fa fa-bitcoin btn btn-circle btn-info"></i> Federex A Potolin </h6>
                            </div> 
                             <div class="col-lg-3 col-xlg-3 col-md-3">
                                <small class="text-muted p-t-30 db"> &nbsp Ardor Wallet </small>
                                <h6 class="text-success"><i class="fa fa-bitcoin btn btn-circle btn-info"></i> Federex A Potolin </h6>
                            </div>
                            <div class="col-lg-3 col-xlg-3 col-md-3">
                                <small class="text-muted p-t-30 db"> &nbsp Stellar Wallet </small>
                                <h6 class="text-success"><i class="fa fa-bitcoin btn btn-circle btn-info"></i> Federex A Potolin </h6>
                            </div>
                            <div class="col-lg-3 col-xlg-3 col-md-3">  
                                <small class="text-muted p-t-30 db"> &nbsp Waves Wallet </small>
                                <h6 class="text-success"><i class="fa fa-bitcoin btn btn-circle btn-info"></i> Federex A Potolin </h6>
                            </div>   
                            <div class="col-lg-3 col-xlg-3 col-md-3">  
                                <small class="text-muted p-t-30 db"> &nbsp Agama Wallet </small>
                                <h6 class="text-success"><i class="fa fa-bitcoin btn btn-circle btn-info"></i> Federex A Potolin </h6>
                            </div>                                        
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card">
                        <h4 class="text-success">Social Media Info</h4>
                        <div class="row">
                            <div class="col-lg-3 col-xlg-3 col-md-3">
                                <small class="text-muted p-t-30 db"> &nbsp Telegram ID </small>
                                <h6 class="text-success"><i class="fa fa-telegram btn btn-circle btn-info"></i> Federex A Potolin </h6>
                            </div>
                            <div class="col-lg-3 col-xlg-3 col-md-3">
                                <small class="text-muted p-t-30 db"> &nbsp Faceook Account </small>
                                <h6 class="text-success"><i class="fa fa-facebook btn btn-circle btn-info"></i> Federex A Potolin </h6>
                            </div>
                            <div class="col-lg-3 col-xlg-3 col-md-3">  
                                <small class="text-muted p-t-30 db"> &nbsp Twitter Account </small>
                                <h6 class="text-success"><i class="fa fa-twitter btn btn-circle btn-info"></i> Federex A Potolin </h6>
                            </div>   
                            <div class="col-lg-3 col-xlg-3 col-md-3">  
                                <small class="text-muted p-t-30 db"> &nbsp Linkedin </small>
                                <h6 class="text-success"><i class="fa fa-linkedin btn btn-circle btn-info"></i> Federex A Potolin </h6>
                            </div> 
                             <div class="col-lg-3 col-xlg-3 col-md-3">
                                <small class="text-muted p-t-30 db"> &nbsp Reddit Account </small>
                                <h6 class="text-success"><i class="fa fa-reddit btn btn-circle btn-info"></i> Federex A Potolin </h6>
                            </div>
                            <div class="col-lg-3 col-xlg-3 col-md-3">
                                <small class="text-muted p-t-30 db"> &nbsp Medium Account </small>
                                <h6 class="text-success"><i class="fa fa-medium btn-circle btn-info"></i> Federex A Potolin </h6>
                            </div>
                            <div class="col-lg-3 col-xlg-3 col-md-3">  
                                <small class="text-muted p-t-30 db"> &nbsp Bitcointalk Profile ID </small>
                                <h6 class="text-success"><i class="fa fa-bitcoin btn btn-circle btn-info"></i> Federex A Potolin </h6>
                            </div>   
                            <div class="col-lg-3 col-xlg-3 col-md-3">  
                                <small class="text-muted p-t-30 db"> &nbsp Altcoinstalks </small>
                                <h6 class="text-success"><i class="fa fa-bitcoin btn btn-circle btn-info"></i> Federex A Potolin </h6>
                            </div>                                        
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Profile Content -->
            <!-- ============================================================== -->    
 
    
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- included Modal for update button -->
            <!-- ============================================================== -->
            <?php
             include("modal_user_update.php"); 
             include("modal_wallet_update.php"); 
             include("modal_sm_update.php");
             include("modal_sg_update.php");  
            ?>
            <!-- ============================================================== -->
            <!-- Ends included modal for update button  -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->    
            <?php include("../../include/include_hunter/footer.php"); ?>
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
    include("../../include/include_hunter/script.php"); 
    include("../../include/include_general/validation.php");
    ?>