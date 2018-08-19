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

                
                Page 1 of 2 | <a href="spreadsheet2_reddit.php">Next >></a>
                <div class="card">
                    <div class="card-body p-b-0">
                        <h4 class="card-title text-success">Enkronos Bounty Campaign</h4>
                        <!-- ============================================================== -->
                        <!-- Nav Tab -->
                        <!-- ============================================================== -->
                        <ul class="nav nav-tabs customtab" role="tablist">
                            <li class="nav-item"> 
                                <a class="nav-link" href="spreadsheet_signature.php" role="tab">
                                <span class="hidden-sm-up"><i class="fa fa-pencil"></i></span> 
                                <span class="hidden-xs-down"><i class="fa fa-pencil"></i>&nbsp Signature</span></a> 
                            </li>
                            <li class="nav-item"> 
                                <a class="nav-link active" href="spreadsheet_translation.php" role="tab">
                                <span class="hidden-sm-up"><i class="fa fa-files-o"></i></span> 
                                <span class="hidden-xs-down"><i class="fa fa-files-o"></i>&nbsp Translation</span></a> 
                            </li>
                            <li class="nav-item"> 
                                <a class="nav-link" href="spreadsheet_facebook.php" role="tab">
                                <span class="hidden-sm-up"><i class="fa fa-facebook"></i></span> 
                                <span class="hidden-xs-down"><i class="fa fa-facebook"></i>&nbsp Facebook</span></a> 
                            </li>
                            <li class="nav-item"> 
                                <a class="nav-link" href="spreadsheet_twitter.php" role="tab">
                                <span class="hidden-sm-up"><i class="fa fa-twitter"></i></span> 
                                <span class="hidden-xs-down"><i class="fa fa-twitter"></i>&nbsp Twitter</span></a> 
                            </li>
                            <li class="nav-item"> 
                                <a class="nav-link" href="spreadsheet_telegram.php" role="tab">
                                <span class="hidden-sm-up"><i class="fa fa-paper-plane"></i></span> 
                                <span class="hidden-xs-down"><i class="fa fa-paper-plane"></i>&nbsp Telegram</span></a> 
                            </li>
                           
                        </ul>
                        <!-- ============================================================== -->
                        <!-- End Nav Tab  -->
                        <!-- ============================================================== -->

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
                                                        <th>Language</th>
                                                        <th>Bitcointalk Username</th>
                                                        <th>Bitcointalk Profile URL</th>
                                                        <th>ANN/Bounty thread link</th>
                                                        <th>Telegram Link</th>
                                                        <th>Whitepaper link</th>
                                                        <th>Status</th>
                                                        <th>Remarks</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <a href="#" class="label label-success" data-toggle="modal" data-target="#modal_stakes_insert_translation"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="Update Stakes"></i>
                                                            </a>
                                                        </td>
                                                        <td>Filipino</td>
                                                        <td>olegblinov86</td>
                                                        <td>https://bitcointalk.org/index.php?action=profile;u=1884007</td>
                                                        <td>https://bitcointalk.org/index.php?action=profile;u=1884007</td>
                                                        <td>https://t.me/wemark_ptbr.</td>
                                                        <td>https://drive.google.com/file/d/1E2ieDq_isS5AlBOGzybT-AJ5lhzDBveY/view</td>
                                                        <td><span class="label label-info">Active</span></td>
                                                        <td>Please increase the quality of post. Mostly one liner post</td>
                                                    </tr>
                                                           <tr>
                                                        <td>
                                                            <a href="#" class="label label-success" data-toggle="modal" data-target="#modal_stakes_insert_translation"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="Update Stakes"></i>
                                                            </a>
                                                        </td>
                                                        <td>Filipino</td>
                                                        <td>olegblinov86</td>
                                                        <td>https://bitcointalk.org/index.php?action=profile;u=1884007</td>
                                                        <td>https://bitcointalk.org/index.php?action=profile;u=1884007</td>
                                                        <td>https://t.me/wemark_ptbr.</td>
                                                        <td>https://drive.google.com/file/d/1E2ieDq_isS5AlBOGzybT-AJ5lhzDBveY/view</td>
                                                        <td><span class="label label-danger">Banned</span></td>
                                                        <td>Please increase the quality of post. Mostly one liner post</td>
                                                    </tr>
                                                           <tr>
                                                        <td>
                                                            <a href="#" class="label label-success" data-toggle="modal" data-target="#modal_stakes_insert_translation"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="Update Stakes"></i>
                                                            </a>
                                                        </td>
                                                        <td>Filipino</td>
                                                        <td>olegblinov86</td>
                                                        <td>https://bitcointalk.org/index.php?action=profile;u=1884007</td>
                                                        <td>https://bitcointalk.org/index.php?action=profile;u=1884007</td>
                                                        <td>https://t.me/wemark_ptbr.</td>
                                                        <td>https://drive.google.com/file/d/1E2ieDq_isS5AlBOGzybT-AJ5lhzDBveY/view</td>
                                                        <td><span class="label label-warning">Warning</span></td>
                                                        <td>Please increase the quality of post. Mostly one liner post</td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th></th>
                                                        <th>Language</th>
                                                        <th>Bitcointalk Username</th>
                                                        <th>Bitcointalk Profile URL</th>
                                                        <th>ANN/Bounty thread link</th>
                                                        <th>Telegram Link</th>
                                                        <th>Whitepaper link</th>
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