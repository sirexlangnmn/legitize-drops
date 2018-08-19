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
                    <h3 class="text-themecolor">My Campaign</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">My Campaign</li>
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
                            <h4 class="card-title">My Campaigns</h4>
                        </div>
                        <div class="comment-text w-100">
                            <p class="m-b-5 m-t-10">
                            Here you can find the campaigns you've entered. You can also check your entries, see when you've entered and check how many tokens you will get for each entry! 
                            <br /  >
                            <p class="text-warning"><b>Note: <br />
                            Value for each entry will appear after the campaign ends and your entry is verified.</b></p>
                            </p>
                        </div>
                    </div>   
                    <!-- ============================================================== -->
                    <!-- Announcement widgets -->
                    <!-- ============================================================== -->

                    <!-- ============================================================== -->
                    <!-- Filters -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <button class="btn btn-info" type="button">Go!</button>
                                </div>
                                <input type="text" class="form-control" placeholder="Search for...">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <select class="form-control custom-select">
                                    <option>-- Filter By --</option>
                                    <option>Name</option>
                                    <option>Value</option>
                                    <option>Newest</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <select class="form-control custom-select">
                                    <option>-- Order By --</option>
                                    <option>Ascending</option>
                                    <option>Descending</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Filters -->
                    <!-- ============================================================== -->


                    <!-- ============================================================== -->
                    <!-- My Campaigns -->
                    <!-- ============================================================== -->
                     <div class="row"><!-- Active Campaign Cards -->
                        <div class="col-lg-4 col-md-6">
                            <div class="card">
                                <img class="card-img-top img-responsive" src="../pages_admin/images/client/img1.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title text-success"><a href="campaign_detail.php">Enkronos</a></h4>
                                    <h6 class="card-subtitle text-justify">
                                    Ignite Learning Motivation with Micro-Learning Our purpose is to create equal opportunities for everyone on the planet, by igniting their motivation to learn and develop their skills and talents.
                                    </h6>
                           
                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                        <div class="card-body">
                                            <div class="collapse m-t-15" id="pgr2"> 
                                                <pre class="line-numbers language-javascript">
                                                    <code>&lt;div class="progress"&gt;<br/>&lt;div class="progress-bar bg-success" role="progressbar" style="width: 75%;height:15px;" role="progressbar""&gt; 75% &lt;/div&gt;<br/>&lt;/div&gt;</code>
                                                </pre> 
                                            </div>
                                            <div class="progress m-t-20">
                                                <div class="progress-bar bg-success" style="width: 75%; height:15px;" role="progressbar">75%</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <a href="#" class="btn btn-block btn-info ">
                                                <i class="fa fa-bitcoin">&nbsp 88</i>
                                            </a>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <a href="#" class="btn btn-block btn-warning ">
                                                <i class="fa fa-users">&nbsp 88 </i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card">
                                <img class="card-img-top img-responsive" src="../pages_admin/images/client/img2.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title text-success"><a href="campaign_detail.php">Enkronos</a></h4>
                                    <h6 class="card-subtitle text-justify">
                                    Ignite Learning Motivation with Micro-Learning Our purpose is to create equal opportunities for everyone on the planet, by igniting their motivation to learn and develop their skills and talents.
                                    </h6>
                           
                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                        <div class="card-body">
                                            <div class="collapse m-t-15" id="pgr2"> 
                                                <pre class="line-numbers language-javascript">
                                                    <code>&lt;div class="progress"&gt;<br/>&lt;div class="progress-bar bg-success" role="progressbar" style="width: 75%;height:15px;" role="progressbar""&gt; 75% &lt;/div&gt;<br/>&lt;/div&gt;</code>
                                                </pre> 
                                            </div>
                                            <div class="progress m-t-20">
                                                <div class="progress-bar bg-success" style="width: 75%; height:15px;" role="progressbar">75%</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <a href="#" class="btn btn-block btn-info ">
                                                <i class="fa fa-bitcoin">&nbsp 88</i>
                                            </a>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <a href="#" class="btn btn-block btn-warning ">
                                                <i class="fa fa-users">&nbsp 88 </i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card">
                                <img class="card-img-top img-responsive" src="../pages_admin/images/client/img3.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title text-success"><a href="campaign_detail.php">Enkronos</a></h4>
                                    <h6 class="card-subtitle text-justify">
                                    Ignite Learning Motivation with Micro-Learning Our purpose is to create equal opportunities for everyone on the planet, by igniting their motivation to learn and develop their skills and talents.
                                    </h6>
                           
                                    <div class="col-lg-12 col-md-12 col-xs-12">
                                        <div class="card-body">
                                            <div class="collapse m-t-15" id="pgr2"> 
                                                <pre class="line-numbers language-javascript">
                                                    <code>&lt;div class="progress"&gt;<br/>&lt;div class="progress-bar bg-success" role="progressbar" style="width: 75%;height:15px;" role="progressbar""&gt; 75% &lt;/div&gt;<br/>&lt;/div&gt;</code>
                                                </pre> 
                                            </div>
                                            <div class="progress m-t-20">
                                                <div class="progress-bar bg-success" style="width: 75%; height:15px;" role="progressbar">75%</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <a href="#" class="btn btn-block btn-info ">
                                                <i class="fa fa-bitcoin">&nbsp 88</i>
                                            </a>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <a href="#" class="btn btn-block btn-warning ">
                                                <i class="fa fa-users">&nbsp 88 </i>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div><!-- End Active Campaign Cards -->
                    <!-- ============================================================== -->
                    <!-- End My Campaigns -->
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