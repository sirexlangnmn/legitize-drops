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
                    <h3 class="text-themecolor">Dashboard</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
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
            
            <!-- ============================================================== -->
            <!-- Intro widgets -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="card-title text-info">Enkronos</h1>
                            <span class="">Your Smart Coin</span>
                        </div>
                        <div class="alert text-justify">
                            <p>
                            Enkronos is a decentralized cryptocurrency, built with proof of stake algorithm, offering the entire cryptocurrency community a seamless and secure way of transacting within the EnkronosHUB ecosystem & other major exchanges. We're aimed at solving banking, trading and exchange challenges faced with the ever-growing cryptocurrency users globally. The token utility, coupled with low maximum supply, is expected to kick inflation from the ecosystem while at the same time, welcome a healthy growth and better valuation of the coin. Value for each entry will appear after the campaign ends and your entry is verified.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4">
                    <div class="card">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-body">
                                    <div class="d-flex flex-row">
                                        <div class="round align-self-center round-success"><i class="ti-wallet"></i></div>
                                        <div class="m-l-10 align-self-center">
                                            <h3 class="m-b-0 text-success">383,090</h3>
                                            <h5 class="text-muted m-b-0">Token</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex flex-row">
                                        <div class="round align-self-center round-success"><i class="ti-wallet"></i></div>
                                        <div class="m-l-10 align-self-center">
                                            <h3 class="m-b-0 text-success">380</h3>
                                            <h5 class="text-muted m-b-0">ETH Value</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex flex-row">
                                        <div class="round align-self-center round-success"><i class="ti-wallet"></i></div>
                                        <div class="m-l-10 align-self-center">
                                            <h3 class="m-b-0 text-success"> ENK</h3>
                                            <h5 class="text-muted m-b-0">Symbol</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex flex-row">
                                        <div class="round align-self-center round-success"><i class="ti-wallet"></i></div>
                                        <div class="m-l-10 align-self-center">
                                            <h3 class="m-b-0 text-success">Friday. 22 June 2018</h3>
                                            <h5 class="text-muted m-b-0">End Date</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>               
            <!-- ============================================================== -->
            <!-- End Intro widgets -->
            <!-- ============================================================== -->
           

            <!-- ============================================================== -->
            <!-- White Paper -->
            <!-- ============================================================== -->
             <div class="row">
                <div class="col-md-12">
                        <div class="card">
                            <div class="alert text-justify" style="margin-bottom: -10px">
                            <p class="text-warning">Reminder</p>
                            <h6 class="text-warning">Join our <a href="#">telegram group</a> for any Bounty Discussions! Spamming the <b class="text-success">Enkronos</b> group is not allowed!</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div id="accordion2" role="tablist" class="minimal-faq" aria-multiselectable="true">
                               <?php
                                include("campaign_detail_translation.php");
                                include("campaign_detail_facebook.php"); 
                                include("campaign_detail_twitter.php"); 
                                include("campaign_detail_reddit.php");
                                include("campaign_detail_telegram.php");
                                include("campaign_detail_signature.php");
                                include("campaign_detail_media.php");
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End White Paper -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- Road Map -->
                <!-- ============================================================== -->
                <div class="col-md-9 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="card-body">
                            <ul class="timeline">
                                <li>
                                    <div class="timeline-badge success"><i class="fa fa-eye"></i> </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Start</h4>
                                            <p><small class="text-muted"><i class="fa fa-clock-o"></i>MONDAY, JUNE 11TH, 2018</small> </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-badge info"><i class="fa fa-eye"></i> </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Bounty Campaign Starts</h4>
                                            <p><small class="text-muted"><i class="fa fa-clock-o"></i>TUESDAY, JUNE 12TH</small> </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-badge warning"><i class="fa fa-eye"></i> </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Ending</h4>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-badge info"><i class="fa fa-eye"></i> </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Bounty Campaign Ends</h4>
                                            <p><small class="text-muted"><i class="fa fa-clock-o"></i>MONDAY, JUNE 14TH, 2018</small> </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-badge info"><i class="fa fa-bomb"></i> </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">
                                            Verification Period Ends</h4>
                                            <p><small class="text-muted"><i class="fa fa-clock-o"></i>TUESDAY, AUGUST 28TH, 2018</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-badge warning"><i class="fa fa-bomb"></i> </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">After</h4>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-badge info"><i class="fa fa-save"></i> </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Results Displayed & Preparing Distribution</h4>
                                             <p><small class="text-muted"><i class="fa fa-clock-o"></i>WEDNESDAY, AUGUST 29TH, 2018</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-badge success"><i class="fa fa-graduation-cap"></i> </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Finish</h4>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>  
                </div>

                <!-- ============================================================== -->
                <!-- Supports Banner  -->
                <!-- ============================================================== -->
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="card">
                        <img class="card-img-top img-responsive" src="../pages_admin/images/client/img3.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h4 >Legitize Drop Supports</h4>
                            <h1 class="card-title text-success"> Enkronos </h1>
                        </div>
                        <img class="card-img-top img-responsive" src="../pages_admin/images/client/img3.jpg" alt="Card image cap">
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Support Banner  -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- End Road Map  -->
                <!-- ============================================================== -->
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