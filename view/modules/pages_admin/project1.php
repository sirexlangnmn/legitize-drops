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
            <h3 class="text-themecolor">Project Detail</h3>
         </div>
         <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
               <li class="breadcrumb-item active">Project Detail</li>
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
         <div class="card">
            <div class="row">
               <div class="col-md-12">
                  <div class="card card-body printableArea">
                     <h3><b>Enkronos</b> <span class="pull-right">#5669626 | Created At</span></h3>
                     <hr>
                     <div class="row">
                        <!-- ============================================================== -->
                        <!-- Client Profile -->
                        <!-- ============================================================== -->
                        <div class="col-lg-4 col-md-4 col-sm-12 m-b-30">
                           <h2 class="card-title text-success">Gianluca Busato</h2>
                           <img src="images/client/gianluca_busato.jpg" alt="image" class="img-circle" width="290">
                           <img src="images/client/enkronos.png" alt="image" width="290">
                        </div>
                        <!-- ============================================================== -->
                        <!-- End Client Profile -->
                        <!-- ============================================================== -->
                        <div class="col-lg-8 col-md-8 col-sm-12 m-b-30"></div>
                        <!-- ============================================================== -->
                        <!-- Logo and Description -->
                        <!-- ============================================================== -->
                        <div class="col-lg-12 col-md-12 col-sm-12">
                           <small class="text-muted">Tagline </small>
                           <h5 class="text-justify text-success">
                              Blockchain Credit System for Ethic Data-Driven Campaigns 
                           </h5>
                           <br />
                           <small class="text-muted">Description </small>
                           <h5 class="card-subtitle text-success text-justify">
                              Enkronos is a decentralized cryptocurrency, built with proof of stake algorithm, offering the entire cryptocurrency community a seamless and secure way of transacting within the EnkronosHUB ecosystem & other major exchanges. We're aimed at solving banking, trading and exchange challenges faced with the ever-growing cryptocurrency users globally. The token utility, coupled with low maximum supply, is expected to kick inflation from the ecosystem while at the same time, welcome a healthy growth and better valuation of the coin. Value for each entry will appear after the campaign ends and your entry is verified.
                           </h5>
                        </div>
                        <!-- ============================================================== -->
                        <!-- End Logo and Description -->
                        <!-- ============================================================== -->
                     </div>
                     <div class="col-md-12">
                        <div class="table-responsive" style="clear: both;">
                           <table class="table table-hover">
                              <thead>
                                 <tr>
                                    <th class="text-success">Field</th>
                                    <th class="text-success">Data</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <td>Email</td>
                                    <td>Milk Powder</td>
                                 </tr>
                                 <tr>
                                    <td>Telegram</td>
                                    <td>Air Conditioner</td>
                                 </tr>
                                 <tr>
                                    <td>Website</td>
                                    <td>RC Cars</td>
                                 </tr>
                                 <tr>
                                    <td>Project Subtitle</td>
                                    <td></td>
                                 </tr>
                                 <tr>
                                    <td>Token</td>
                                    <td></td>
                                 </tr>
                                 <tr>
                                    <td>ETH Value</td>
                                    <td></td>
                                 </tr>
                                 <tr>
                                    <td>Symbol</td>
                                    <td></td>
                                 </tr>
                                 <tr>
                                    <td>Whitepaper</td>
                                    <td></td>
                                 </tr>
                                 <tr>
                                    <td>Thread</td>
                                    <td></td>
                                 </tr>
                                 <tr>
                                    <td>Accepted Language</td>
                                    <td></td>
                                 </tr>
                                 <tr>
                                    <td>Launch Date</td>
                                    <td></td>
                                 </tr>
                                 <tr>
                                    <td>End Date</td>
                                    <td></td>
                                 </tr>
                              </tbody>
                              <tfoot>
                                 <tr>
                                    <th class="text-success">Field</th>
                                    <th class="text-success">Data</th>
                                 </tr>
                              </tfoot>
                           </table>
                           <div class="col-md-12">
                              <div class="text-right">
                                 <button id="print" class="btn btn-default btn-outline" type="button"> <span><i class="fa fa-print"></i> Print</span> </button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
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