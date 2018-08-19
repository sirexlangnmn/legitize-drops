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
                    <h3 class="text-themecolor">Campaign Spreadsheet</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Campaign Spreadsheet</li>
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
                <a href="spreadsheet_signature.php"><< Back</a> | Page 2 of 2 
                <div class="card">
                    <div class="card-body p-b-0">
                        <h4 class="card-title text-success">Enkronos Bounty Campaign</h4>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs customtab" role="tablist">
                         <li class="nav-item"> 
                            <a class="nav-link active" href="spreadsheet2_reddit.php" role="tab">
                            <span class="hidden-sm-up"><i class="fa fa-reddit"></i></span> 
                            <span class="hidden-xs-down"><i class="fa fa-reddit"></i>&nbsp Reddit</span></a> 
                        </li>
                        <li class="nav-item"> 
                            <a class="nav-link" href="spreadsheet2_media.php" role="tab">
                            <span class="hidden-sm-up"><i class="fa fa-youtube"></i></span> 
                            <span class="hidden-xs-down"><i class="fa fa-youtube"></i>&nbsp Media</span></a> 
                        </li>
                        <li class="nav-item"> 
                            <a class="nav-link" href="spreadsheet2_creation.php" role="tab">
                            <span class="hidden-sm-up"><i class="fa fa-users"></i></span> 
                            <span class="hidden-xs-down"><i class="fa fa-users"></i>&nbsp Content Creation Public</span></a> 
                        </li>
                        <li class="nav-item"> 
                            <a class="nav-link" href="spreadsheet2_bonus.php" role="tab">
                            <span class="hidden-sm-up"><i class="fa fa-plus-square"></i></span> 
                            <span class="hidden-xs-down"><i class="fa fa-plus-square"></i>&nbsp Bonus Public</span></a> 
                        </li>
                    </ul>
                       <!-- ============================================================== -->
                        <!-- Tab Panes  -->
                        <!-- ============================================================== -->
                        <div class="tab-content">
                            <div class="tab-pane active" role="tabpanel">
                                <div class="p-20">
                                    <div class="card">
                                        <div class="table-responsive m-t-40">
                                            <table id="example23" class="table table-bordered table-striped display nowrap table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th>Reddit Timestamp</th>
                                                        <th>Bitcointalk Username</th>
                                                        <th>Bitcointalk Profile URL</th>
                                                        <th>Post Count</th>
                                                        <th>Rank</th>
                                                        <th>Checkbox</th>
                                                        <th>Week 1</th>
                                                        <th>Week 2</th>
                                                        <th>Week 3</th>
                                                        <th>Week 4</th>
                                                        <th>Week 5</th>
                                                        <th>Week 6</th>
                                                        <th>Week 7</th>
                                                        <th>Week 8</th>
                                                        <th>Week 9</th>
                                                        <th>Week 10</th>
                                                        <th>Week 11</th>
                                                        <th>Week 12</th>
                                                        <th>Status</th>
                                                        <th>Remarks</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <a href="#" class="label label-success" data-toggle="modal" data-target="#modal_stakes_insert_reddit"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="Update Stakes"></i>
                                                            </a>
                                                        </td>
                                                        <td>4/10/2018 22:08:40</td>
                                                        <td>olegblinov86</td>
                                                        <td>https://bitcointalk.org/index.php?action=profile;u=1884007</td>
                                                        <td>78</td>
                                                        <td>1</td>
                                                        <td>1</td>
                                                        <td>1</td>
                                                        <td>1</td>
                                                        <td>0</td>
                                                        <td>1</td>
                                                        <td>1</td>
                                                        <td>1</td>
                                                        <td>Null</td>
                                                        <td>Null</td>
                                                        <td>Null</td>
                                                        <td>Null</td>
                                                        <td>Null</td>
                                                        <td>Null</td>
                                                        <td>Active</td>
                                                        <td>Please increase the quality of post. Mostly one liner post</td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th></th>
                                                        <th>Timestamp</th>
                                                        <th>Bitcointalk Username</th>
                                                        <th>Bitcointalk Profile URL</th>
                                                        <th>Post Count</th>
                                                        <th>Rank</th>
                                                        <th>Checkbox</th>
                                                        <th>Week 1</th>
                                                        <th>Week 2</th>
                                                        <th>Week 3</th>
                                                        <th>Week 4</th>
                                                        <th>Week 5</th>
                                                        <th>Week 6</th>
                                                        <th>Week 7</th>
                                                        <th>Week 8</th>
                                                        <th>Week 9</th>
                                                        <th>Week 10</th>
                                                        <th>Week 11</th>
                                                        <th>Week 12</th>
                                                        <th>Status</th>
                                                        <th>Remarks</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                        </div>
                        <!-- ============================================================== -->
                        <!-- End Tab Panes  -->
                        <!-- ============================================================== -->

                    </div>
                </div>                
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->

            <?php include("modal_stakes_insert.php"); ?>

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
      ?>