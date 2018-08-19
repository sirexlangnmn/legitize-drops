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
         <!-- End Bread crumb -->
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
                        <a class="nav-link" href="inc_wallet.php" role="tab">
                        <span class="hidden-sm-up"><i class="ti-user"></i></span> 
                        <span class="hidden-xs-down">Wallet</span>
                        </a>
                     </li>
                     <li class="nav-item"> 
                        <a class="nav-link active" href="inc_social_media.php" role="tab">
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
                                          
                                             if(isset($_GET['social_media_id'])){
                                                $get_media = $database->select('social_media', [ 'social_media_id' => $_GET['social_media_id'] ], false, false, false)->row();
                                             }
                                                
                                          ?>
                                       <form class="" novalidate action="../../../app/classes/handler.php" method="POST">
                                          <input type="hidden" name="media_action" value="<?php echo isset( $get_media ) ? 'update_media' : 'create_media' ?>">
                                          <input type="hidden" name="social_media_id" value="<?php echo isset( $get_media ) ? $get_media->social_media_id : '' ?>"> 
                                          <div class="form-group">
                                             <div class="controls">
                                                <input type="text" class="form-control" required data-validation-required-message="This field is required" name="social_media_title" value="<?php echo isset( $get_media ) ? $get_media->social_media_title : '' ?>" placeholder="Media Title"> 
                                             </div>
                                          </div>
                                          <button type="submit" class="btn btn-outline-success waves-effect waves-light" alt="alert" id="sa-success"><i class="fa fa-plus"></i>&nbsp Save
                                          </button>
                                          <div class="card">
                                             <div class="card-body">
                                                <h4 class="card-title">Success Message <small>(Click on image)</small></h4>
                                                <button type="submit" alt="alert" class="img-responsive model_img" id="sa-success">enter</button>
                                             </div>
                                          </div>
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
                                             <th>Media</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <?php foreach( read_media() as $media_data ): ?>
                                          <tr>
                                             <td>
                                                <a href="inc_social_media.php?social_media_id=<?php echo $media_data['social_media_id'] ?>" onclick="return confirm('Update this data?')" method="post" action="../../../app/classes/handler.php" class="btn btn-outline-success waves-effect waves-light">
                                                <i class="fa fa-pencil text-info" data-toggle="tooltip" data-placement="top" title="Update media"></i>
                                                </a>
                                             </td>
                                             <td>
                                                <form method="post" action="../../../app/classes/handler.php">
                                                   <input type="hidden" name="media_action" value="delete_media">
                                                   <input type="hidden" name="social_media_id" value="<?php echo $media_data['social_media_id'] ?>">
                                                   <button type="submit" onclick="return confirm('Warning! Do you really want to Delete this Data?')" class="btn btn-outline-success waves-effect waves-light"><i class="fa fa-trash text-danger" data-toggle="tooltip" data-placement="top" title="Delete media"></i></button>
                                                </form>
                                             </td>
                                             <td><?php echo $media_data['social_media_id']; ?></td>
                                             <td><?php echo $media_data['social_media_title']; ?></td>
                                          </tr>
                                          <?php endforeach; ?>
                                       </tbody>
                                       <tfoot style="background-color: #1E88E5; color: white;">
                                          <tr>
                                             <th>Add</th>
                                             <th>Delete</th>
                                             <th>ID</th>
                                             <th>Media</th>
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