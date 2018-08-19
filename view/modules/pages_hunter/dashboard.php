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
                <!-- Summary Box -->
                <!-- ============================================================== -->
                <div class="row">
                     <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div class="round align-self-center round-success"><i class="ti-wallet"></i></div>
                                    <div class="m-l-10 align-self-center">
                                        <h3 class="m-b-0">18090</h3>
                                        <h5 class="text-muted m-b-0">New Client</h5></div>
                                </div>
                            </div>
                            <footer class="text-center">
                                <a href="campaign_detail.php">
                                <small class="text-success">Check for more detail &nbsp
                                    <i class="fa fa-arrow-right"></i>
                                </small>
                                </a>
                            </footer>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div class="round align-self-center round-info"><i class="ti-user"></i></div>
                                    <div class="m-l-10 align-self-center">
                                        <h3 class="m-b-0">2690</h3>
                                        <h5 class="text-muted m-b-0">New Established Campaign</h5></div>
                                </div>
                            </div>
                            <footer class="text-center">
                                <a href="campaign_detail.php">
                                <small class="text-success">Check for more detail &nbsp
                                    <i class="fa fa-arrow-right"></i>
                                </small>
                                </a>
                            </footer>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div class="round align-self-center round-danger"><i class="ti-calendar"></i></div>
                                    <div class="m-l-10 align-self-center">
                                        <h3 class="m-b-0">21</h3>
                                        <h5 class="text-muted m-b-0">Active Campaign</h5></div>
                                </div>
                            </div>
                            <footer class="text-center">
                                <a href="campaign_detail.php">
                                <small class="text-success">Check for more detail &nbsp
                                    <i class="fa fa-arrow-right"></i>
                                </small>
                                </a>
                            </footer>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div class="round align-self-center round-success"><i class="ti-settings"></i></div>
                                    <div class="m-l-10 align-self-center">
                                        <h3 class="m-b-0">6540</h3>
                                        <h5 class="text-muted m-b-0">Closed Participants</h5></div>
                                </div>
                            </div>
                            <footer class="text-center">
                                <a href="campaign_detail.php">
                                <small class="text-success">Check for more detail &nbsp
                                    <i class="fa fa-arrow-right"></i>
                                </small>
                                </a>
                            </footer>
                        </div>
                    </div>
                      <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div class="round align-self-center round-success"><i class="ti-settings"></i></div>
                                    <div class="m-l-10 align-self-center">
                                        <h3 class="m-b-0">6540</h3>
                                        <h5 class="text-muted m-b-0">Ending Campaigns</h5></div>
                                </div>
                            </div>
                            <footer class="text-center">
                                <a href="campaign_detail.php">
                                <small class="text-success">Check for more detail &nbsp
                                    <i class="fa fa-arrow-right"></i>
                                </small>
                                </a>
                            </footer>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div class="round align-self-center round-success"><i class="ti-settings"></i></div>
                                    <div class="m-l-10 align-self-center">
                                        <h3 class="m-b-0">6540</h3>
                                        <h5 class="text-muted m-b-0">Successful Campaigns</h5>
                                    </div>
                                </div>
                            </div>
                            <footer class="text-center">
                                <a href="campaign_detail.php">
                                <small class="text-success">Check for more detail &nbsp
                                    <i class="fa fa-arrow-right"></i>
                                </small>
                                </a>
                            </footer>
                        </div>
                    </div>
                <!-- ============================================================== -->
                <!-- End Summary Box -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- Social Media -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-4 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <table class="table browser m-t-30 no-border">
                                    <tbody>
                                    <tr>
                                        <td>
                                            <a href="https://legitizedrops.com/" target="_blank" class="btn btn-facebook waves-effect waves-light btn-block btn-info"><i class="fa fa-facebook"></i> Join us on Facebook </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="https://legitizedrops.com/" target="_blank" class="btn btn-twitter waves-effect waves-light btn-block btn-info"><i class="fa fa-twitter"></i> Follow us on Twitter </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="https://legitizedrops.com/" target="_blank" class="btn btn-telegram waves-effect waves-light btn-block btn-info"><i class="fa fa-telegram"></i> Join our Telegram </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="https://legitizedrops.com/" target="_blank" class="btn btn-telegram waves-effect waves-light btn-block btn-info"><i class="fa fa-telegram"></i> Join our News Channel </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="https://legitizedrops.com/" target="_blank" class="btn btn-linkedin waves-effect waves-light btn-block btn-info"><i class="fa fa-linkedin"></i> Join us on Linkedin </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="https://legitizedrops.com/" target="_blank" class="btn btn-reddit waves-effect waves-light btn-block btn-warning" style="background-color: #FF4500;"><i class="fa fa-reddit"></i> Join us on Reddit </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="https://legitizedrops.com/" target="_blank" class="btn btn-medium waves-effect waves-light btn-block btn-success" style="background-color: green;"><i class="fa fa-medium"></i> Follow our Medium </a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Social Media -->
                    <!-- ============================================================== -->

                    <!-- ============================================================== -->
                    <!-- Announcement widgets -->
                    <!-- ============================================================== -->
                    <div class="col-md-8 col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title text-success">Admin Announcement</h4>
                            </div>
                            <div class="comment-widgets m-b-20">
                                 <div class="alert text-justify"> 
                                    <h5>Federex A Potolin</h5>
                                    <div class="comment-footer">
                                        <span class="date">April 14, 2018</span>
                                    </div>
                                    <img src="../pages_admin/images/admin/rex.PNG" width="30" class="round" alt="img">
                                     <p class="m-b-5 m-t-10">
                                    Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has beenorem Ipsum is simply dummy text of the printing and type setting industry..
                                    Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has beenorem Ipsum is simply dummy text of the printing and type setting industry..
                                    Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has beenorem Ipsum is simply dummy text of the printing and type setting industry..
                                    </p>
                                </div>

                                <div class="alert text-justify"> 
                                    <h5>Federex A Potolin</h5>
                                    <div class="comment-footer">
                                        <span class="date">April 14, 2018</span>
                                    </div>
                                    <img src="../pages_admin/images/admin/rex.PNG" width="30" class="round" alt="img">
                                     <p class="m-b-5 m-t-10">
                                    Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has beenorem Ipsum is simply dummy text of the printing and type setting industry..
                                    Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has beenorem Ipsum is simply dummy text of the printing and type setting industry..
                                    Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has beenorem Ipsum is simply dummy text of the printing and type setting industry..
                                    </p>
                                </div>
                            </div>
                        </div>       
                    </div>
                    <!-- ============================================================== -->
                    <!-- Announcement widgets -->
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