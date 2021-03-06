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
          <h3 class="text-themecolor">Included Data</h3>
        </div>
        <div class="col-md-7 align-self-center">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">Included Data</li>
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
        <div class="col-md-12">
          <div class="card">
            <!-- ============================================================== -->
            <!-- Nav Tab -->
            <!-- ============================================================== -->
            <ul class="nav nav-tabs customtab" role="tablist">
              <li class="nav-item"> 
                <a class="nav-link" href="inc_contact.php" role="tab">
                <span class="hidden-sm-up"><i class="ti-home"></i></span> 
                <span class="hidden-xs-down">Contacts</span>
                </a>
              </li>
              <li class="nav-item"> 
                <a class="nav-link active" href="inc_wallet.php" role="tab">
                <span class="hidden-sm-up"><i class="ti-user"></i></span> 
                <span class="hidden-xs-down">Wallet</span>
                </a>
              </li>
              <li class="nav-item"> 
                <a class="nav-link" href="inc_social_media.php" role="tab">
                <span class="hidden-sm-up"><i class="ti-email"></i></span> 
                <span class="hidden-xs-down">Social Media</span>
                </a>
              </li>
              <li class="nav-item"> 
                <a class="nav-link" href="inc_social_group.php" role="tab">
                <span class="hidden-sm-up"><i class="ti-email"></i></span> 
                <span class="hidden-xs-down">Social Group</span>
                </a>
              </li>
            </ul>
            <!-- ============================================================== -->
            <!-- Nav Tab -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!--  Tab Panes  -->
            <!-- ============================================================== -->
            <div class="tab-content">
              <div class="tab-pane active" role="tabpanel">
                <div class="p-20" style="margin-top: -15px">
                  <div class="row">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-lg-3 col-xlg-3 col-md-3">
                          <?php 
                            $database = new Database;
                            
                               if(isset($_GET['wallet_id'])){
                                  $get_wallet = $database->select('wallet', [ 'wallet_id' => $_GET['wallet_id'] ], false, false, false)->row();
                               }
                                  
                            ?>
                          <form class="" novalidate action="../../../app/classes/handler.php" method="POST">
                            <input type="hidden" name="wallet_action" value="<?php echo isset( $get_wallet ) ? 'update_wallet' : 'create_wallet' ?>">
                            <input type="hidden" name="wallet_id" value="<?php echo isset( $get_wallet ) ? $get_wallet->wallet_id : '' ?>"> 
                            <div class="form-group">
                              <div class="controls">
                                <input type="text" class="form-control" required data-validation-required-message="This field is required" name="wallet_title" value="<?php echo isset( $get_wallet ) ? $get_wallet->wallet_title : '' ?>" placeholder="Wallet Title"> 
                              </div>
                            </div>
                            <button type="submit" class="btn btn-outline-success waves-effect waves-light"><i class="fa fa-plus"></i>&nbsp Save
                            </button>
                          </form>
                        </div>
                        <div class="col-lg-9 col-xlg-9 col-md-9"></div>
                      </div>
                      <div class="table-responsive">
                        <table id="example23" class="table table-bordered table-striped display nowrap table table-hover">
                          <thead style="background-color: #1E88E5; color: white;">
                            <tr>
                              <th>Add</th>
                              <th>Delete</th>
                              <th>ID</th>
                              <th>wallet</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php foreach( read_wallet() as $wallet_data ): ?>
                            <tr>
                              <td>
                                <a href="inc_wallet.php?wallet_id=<?php echo $wallet_data['wallet_id'] ?>" onclick="return confirm('Update this data?')" method="post" action="../../../app/classes/handler.php" class="btn btn-outline-success waves-effect waves-light">
                                  <form></form>
                                  <i class="fa fa-pencil text-info" data-toggle="tooltip" data-placement="top" title="Update wallet"></i>
                                </a>
                              </td>
                              <td>
                                <form method="post" action="../../../app/classes/handler.php">
                                  <input type="hidden" name="wallet_action" value="delete_wallet">
                                  <input type="hidden" name="wallet_id" value="<?php echo $wallet_data['wallet_id'] ?>">
                                  <button type="submit" onclick="return confirm('Warning! Do you really want to Delete this Data?')" class="btn btn-outline-success waves-effect waves-light"><i class="fa fa-trash text-danger" data-toggle="tooltip" data-placement="top" title="Delete wallet"></i></button>
                                </form>
                              </td>
                              <td><?php echo $wallet_data['wallet_id']; ?></td>
                              <td><?php echo $wallet_data['wallet_title']; ?></td>
                            </tr>
                            <?php endforeach; ?>
                          </tbody>
                          <tfoot style="background-color: #1E88E5; color: white;">
                            <tr>
                              <th>Add</th>
                              <th>Delete</th>
                              <th>ID</th>
                              <th>wallet</th>
                            </tr>
                          </tfoot>
                        </table>
                      </div>
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
        <!-- End Campaigns -->
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