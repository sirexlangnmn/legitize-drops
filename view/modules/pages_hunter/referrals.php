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
                    <h3 class="text-themecolor">Referrals</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Referrals</li>
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
                <!-- Announcement widgets -->
                <!-- ============================================================== -->
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Referrals</h4>
                        </div>
                        <div class="comment-widgets m-b-20">
                            <!-- Comment Row -->
                            <div class="d-flex flex-row comment-row">
                                <div class="p-2"><span class="round"><img src="../pages_admin/images/admin/rex.PNG" alt="user" width="50"></span></div>
                                <div class="comment-text w-100">
                                    <h5>Admin's Note</h5>
                                    <p class="text-warning">For each one of your referrals, you receive 0.0075 ETH/per referral each time any of your referrals successfully finishes 3 consecutive campaigns. For a referral to have a successful campaign, he/she only needs to have at least 1 accepted entry to that campaign.</p>
                                     <p class="text-warning">
                                    If your referral has 2 consecutive successful campaigns but doesn't manage to finish his 3rd one, you get rewarded as well (0.00375 ETH). Rewards are sent directly in Ethereum and abusing the Referral System results in a permanent ban.</p>
                                     <p class="text-warning">
                                    You can also get a percentage of tokens for each ICO you refer to Bountyhive. Keep in mind that the ICO must pass our due diligence tests and finalize the listing for you to get rewarded.</p>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>   
                    <!-- ============================================================== -->
                    <!-- Announcement widgets -->
                    <!-- ============================================================== -->        
                        
                    <!-- ============================================================== -->
                    <!-- Filters -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Referral Link</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex flex-row">
                                        <div class="round align-self-center round-success"><i class="ti-wallet"></i></div>
                                        <div class="m-l-10 align-self-center">
                                            <h3 class="m-b-0">18090</h3>
                                            <h5 class="text-muted m-b-0">Unclaimed Value</h5></div>
                                    </div>
                                </div>
                            </div>   
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex flex-row">
                                        <div class="round align-self-center round-success"><i class="ti-wallet"></i></div>
                                        <div class="m-l-10 align-self-center">
                                            <h3 class="m-b-0">18090</h3>
                                            <h5 class="text-muted m-b-0">Total Value</h5></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex flex-row">
                                        <div class="round align-self-center round-success"><i class="ti-wallet"></i></div>
                                        <div class="m-l-10 align-self-center">
                                            <h3 class="m-b-0">18090</h3>
                                            <h5 class="text-muted m-b-0">Claimed Value</h5></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Filters -->
                    <!-- ============================================================== -->

               
    
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
    <?php include("../../include/include_hunter/script.php"); ?>